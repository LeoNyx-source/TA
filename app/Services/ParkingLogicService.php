<?php

namespace App\Services;

class ParkingLogicService
{
    // --- TAHAP 1: FUZZIFIKASI (Input Membership Functions) ---

    /**
     * Fuzzifikasi input 'jarak'.
     * Mengembalikan derajat keanggotaan untuk "SangatDekat".
     * Rentang: [0, 10] = 1.0; [10, 15] = Linear turun; >= 15 = 0.0
     */
    private function fuzzifyJarak_SangatDekat(float $jarak): float
    {
        // Tuning 0 - 10 cm = 1.0 (Sangat Dekat), 10 - 15 cm = Linear turun, >= 15 cm = 0.0
        if ($jarak <= 10) {
            return 1.0;
        }
        if ($jarak >= 15) { // Batas maksimal untuk dianggap "Sangat Dekat"
            return 0.0;
        }
        // Fungsi linear turun antara 10 dan 15
        return (15 - $jarak) / 5; // (x2 - x) / (x2 - x1) -> (15 - jarak) / (15 - 10)
    }

    /**
     * Fuzzifikasi input 'jarak'.
     * Mengembalikan derajat keanggotaan untuk "Jauh".
     * Rentang: [0, 10] = 0.0; [10, 15] = Linear naik; >= 15 = 1.0
     */
    private function fuzzifyJarak_Jauh(float $jarak): float
    {
        // Tuning 0 - 10 cm = 0.0, 10 - 15 cm = Linear naik, >= 15 cm = 1.0
        if ($jarak <= 10) {
            return 0.0;
        }
        if ($jarak >= 15) { // Batas minimal untuk dianggap "Jauh"
            return 1.0;
        }
        // Fungsi linear naik antara 10 dan 15
        return ($jarak - 10) / 5; // (x - x1) / (x2 - x1) -> (jarak - 10) / (15 - 10)
    }

    /**
     * Fuzzifikasi input sensor (yang nilainya 0 atau 1).
     * Mengembalikan derajat keanggotaan "Aktif".
     */
    private function fuzzifySensor_Aktif(int $status): float
    {
        return ($status == 1) ? 1.0 : 0.0;
    }

    /**
     * Fuzzifikasi input sensor (yang nilainya 0 atau 1).
     * Mengembalikan derajat keanggotaan "Mati".
     */
    private function fuzzifySensor_Mati(int $status): float
    {
        return ($status == 0) ? 1.0 : 0.0;
    }

    // --- TAHAP 2: INFERENSI (Fuzzy Rules) ---

    /**
     * Menentukan status slot berdasarkan data sensor menggunakan Fuzzy Logic.
     *
     * @param array $sensorData Data dari Firebase ('jarak', 'status_inframerah', 'status_ultrasonik')
     * @return string "Kosong" atau "Terisi"
     */
    public function calculateSlotStatus(array $sensorData): string
    {
        // Ambil nilai sensor (crisp values)
        $jarak = (float) ($sensorData['jarak'] ?? 20); // Default ke 20 (Jauh)
        $inframerah = (int) ($sensorData['status_inframerah'] ?? 0);
        $ultrasonik = (int) ($sensorData['status_ultrasonik'] ?? 0);

        // --- TAHAP 1: FUZZIFIKASI ---
        // Dapatkan derajat keanggotaan untuk setiap input
        $jarak_is_SangatDekat = $this->fuzzifyJarak_SangatDekat($jarak);
        $jarak_is_Jauh = $this->fuzzifyJarak_Jauh($jarak);

        $infra_is_Aktif = $this->fuzzifySensor_Aktif($inframerah);
        $infra_is_Mati = $this->fuzzifySensor_Mati($inframerah);

        $ultra_is_Aktif = $this->fuzzifySensor_Aktif($ultrasonik);
        $ultra_is_Mati = $this->fuzzifySensor_Mati($ultrasonik);


        // --- TAHAP 2: INFERENSI (Menerapkan Aturan - VERSI REVISI) ---
        // Fuzzy Operator: AND = min(), OR = max()

        // Aturan 1 (REVISI): IF (ultrasonik is Aktif) AND (inframerah is Aktif) THEN status is Terisi
        // 'jarak' DIHAPUS dari aturan ini agar S2 bisa terdeteksi "Terisi".
        $kekuatan_R1_Terisi = min($ultra_is_Aktif, $infra_is_Aktif);

        // Aturan 2 (REVISI): IF (jarak is Jauh) AND (ultrasonik is Mati) AND (inframerah is Mati) THEN status is Kosong
        // Aturan ini diperketat untuk menangani S1 secara akurat.
        // Aturan R3 yang lama (OR) dihapus karena sudah dicakup oleh R2 baru ini.
        $kekuatan_R2_Kosong = min($jarak_is_Jauh, $ultra_is_Mati, $infra_is_Mati);


        // Agregasi: Gabungkan semua kekuatan untuk output yang sama
        $skor_Fuzzy_Terisi = $kekuatan_R1_Terisi;
        $skor_Fuzzy_Kosong = $kekuatan_R2_Kosong; // Hanya R2 yang baru


        // --- TAHAP 3: DEFUZZIFIKASI ---
        // Kita ubah kembali 2 skor fuzzy (Terisi, Kosong) menjadi satu angka "crisp".
        // Kita gunakan metode Centroid/Weighted Average.
        // Asumsi: "Kosong" = 0.0, "Terisi" = 1.0

        $pembilang = ($skor_Fuzzy_Kosong * 0.0) + ($skor_Fuzzy_Terisi * 1.0);
        $penyebut = $skor_Fuzzy_Kosong + $skor_Fuzzy_Terisi;

        // Hindari pembagian dengan nol jika semua skor 0
        if ($penyebut == 0) {
            $skor_Akhir = 0; // Default ke Kosong
        } else {
            $skor_Akhir = $pembilang / $penyebut; // Hasilnya akan antara 0.0 s/d 1.0
        }

        // --- KEPUTUSAN AKHIR ---
        // Tentukan batas (threshold). Kita pakai 0.5
        if ($skor_Akhir > 0.5) {
            return "Terisi";
        } else {
            return "Kosong";
        }
    }
}
