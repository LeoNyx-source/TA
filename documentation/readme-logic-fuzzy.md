# Dokumentasi Logika Fuzzy - ParkingLogicService

Dokumen ini menjelaskan alur kerja dari `ParkingLogicService.php`. Service ini tidak menggunakan logika `if-else` sederhana, melainkan **Sistem Inferensi Fuzzy (Fuzzy Inference System)** model Mamdani untuk menentukan apakah sebuah slot parkir "Kosong" atau "Terisi".

Proses ini dibagi menjadi 3 tahap utama:
1.  **Fuzzifikasi**: Mengubah input angka yang "tegas" (crisp) menjadi nilai-nilai "samar" (fuzzy) dalam bentuk derajat keanggotaan.
2.  **Inferensi Aturan**: Menerapkan serangkaian aturan "IF ... THEN ..." pada nilai-nilai fuzzy tersebut.
3.  **Defuzzifikasi**: Mengubah hasil fuzzy kembali menjadi satu angka tegas (crisp) untuk diambil sebagai keputusan akhir.

---

## Tahap 1: Fuzzifikasi (Variabel Input)

Kita mengambil 3 input mentah dari sensor: `jarak` (cm), `status_inframerah` (0 atau 1), dan `status_ultrasonik` (0 atau 1).

### 1. Input `jarak` (cm)

Input ini memiliki 2 fungsi keanggotaan (Membership Functions): `SangatDekat` dan `Jauh`.

* **`SangatDekat`**: Dihitung oleh `fuzzifyJarak_SangatDekat()`
    * Jika `jarak` <= 5 cm, skornya **1.0** (100% Sangat Dekat).
    * Jika `jarak` >= 10 cm, skornya **0.0** (0% Sangat Dekat).
    * Jika `jarak` di antara 5 dan 10 cm, nilainya **turun secara linear** (Contoh: jarak 7.5 cm = skor 0.5).

* **`Jauh`**: Dihitung oleh `fuzzifyJarak_Jauh()`
    * Jika `jarak` <= 5 cm, skornya **0.0** (0% Jauh).
    * Jika `jarak` >= 10 cm, skornya **1.0** (100% Jauh).
    * Jika `jarak` di antara 5 dan 10 cm, nilainya **naik secara linear** (Contoh: jarak 7.5 cm = skor 0.5).

### 2. Input Sensor (`status_inframerah` & `status_ultrasonik`)

Input ini adalah "crisp" (tegas) karena nilainya hanya 0 atau 1.

* **`Aktif`**: Skor **1.0** jika status sensor `1`. Dihitung oleh `fuzzifySensor_Aktif()`.
* **`Mati`**: Skor **1.0** jika status sensor `0`. Dihitung oleh `fuzzifySensor_Mati()`.

---

## Tahap 2: Inferensi (Sistem Aturan - Versi Revisi)

Setelah semua input di-fuzzifikasi, kita menerapkan 2 aturan (Rules) yang telah direvisi untuk menentukan 2 output fuzzy: `skor_Fuzzy_Terisi` dan `skor_Fuzzy_Kosong`.

Operator Fuzzy yang digunakan:
* `AND` = `min()` (Ambil nilai terkecil)

### Aturan untuk Output "Terisi"

* **R1 (Revisi)**: `IF (ultrasonik is Aktif) AND (inframerah is Aktif) THEN status is Terisi`
    * `$kekuatan_R1_Terisi = min($ultra_is_Aktif, $infra_is_Aktif)`
    * **Catatan Penting**: Sesuai komentar di kode, aturan ini sengaja *tidak* menggunakan input `jarak` untuk memastikan slot tetap terdeteksi "Terisi" meskipun jaraknya jauh (misalnya untuk mendeteksi motor).

### Aturan untuk Output "Kosong"

* **R2 (Revisi)**: `IF (jarak is Jauh) AND (ultrasonik is Mati) AND (inframerah is Mati) THEN status is Kosong`
    * `$kekuatan_R2_Kosong = min($jarak_is_Jauh, $ultra_is_Mati, $infra_is_Mati)`
    * **Catatan Penting**: Aturan ini diperketat (menggunakan `AND` untuk semua kondisi) untuk memastikan slot hanya dinyatakan "Kosong" jika *semua* sensor mengindikasikan kosong. Aturan R3 (OR) yang lama telah dihapus.

### Agregasi (Penggabungan Aturan)

Hasil dari aturan langsung digunakan sebagai skor akhir (tidak ada `max()` antar aturan yang sama karena aturannya sudah spesifik):

* `$skor_Fuzzy_Terisi` = `$kekuatan_R1_Terisi`
* `$skor_Fuzzy_Kosong` = `$kekuatan_R2_Kosong`

---

## Tahap 3: Defuzzifikasi & Keputusan Akhir

Kita sekarang memiliki dua skor: `$skor_Fuzzy_Terisi` dan `$skor_Fuzzy_Kosong`. Kita perlu mengubahnya kembali menjadi satu kesimpulan.

* **Metode**: Rata-rata Tertimbang (Weighted Average) / Centroid.
* **Asumsi Output**: "Kosong" direpresentasikan oleh nilai `0.0`, dan "Terisi" oleh `1.0`.

Rumus yang digunakan:
`$skor_Akhir = ( ($skor_Fuzzy_Kosong * 0.0) + ($skor_Fuzzy_Terisi * 1.0) ) / ($skor_Fuzzy_Kosong + $skor_Fuzzy_Terisi)`

*Catatan: Jika `$penyebut` (`$skor_Fuzzy_Kosong + $skor_Fuzzy_Terisi`) bernilai 0, maka skor akhir otomatis di-set ke `0` (default "Kosong") untuk menghindari pembagian dengan nol.*

### Keputusan Akhir

Selanjutnya, `$skor_Akhir` (yang bernilai antara 0.0 dan 1.0) dibandingkan dengan batas (threshold) `0.5`:

* `IF $skor_Akhir > 0.5` maka fungsi mengembalikan **"Terisi"**.
* `ELSE` (jika skor 0.5 atau kurang) maka fungsi mengembalikan **"Kosong"**.

---

## Contoh Kasus (Walkthrough dengan Aturan Revisi)

Mari kita uji dengan data yang sama dari contoh sebelumnya untuk membuktikan logika baru ini bekerja.

### Kasus 1: Slot S1 ("Kosong")

* **Input**: `jarak: 14`, `inframerah: 0`, `ultrasonik: 0`
* **Fuzzifikasi**:
    * `jarak_is_Jauh` = **1.0** (karena 14 >= 10)
    * `infra_is_Aktif` = **0.0**
    * `infra_is_Mati` = **1.0**
    * `ultra_is_Aktif` = **0.0**
    * `ultra_is_Mati` = **1.0**
* **Inferensi (Revisi)**:
    * R1 (Terisi): `min($ultra_is_Aktif: 0.0, $infra_is_Aktif: 0.0)` = **0.0**
    * R2 (Kosong): `min($jarak_is_Jauh: 1.0, $ultra_is_Mati: 1.0, $infra_is_Mati: 1.0)` = **1.0**
* **Agregasi**:
    * `$skor_Fuzzy_Terisi` = **0.0**
    * `$skor_Fuzzy_Kosong` = **1.0**
* **Defuzzifikasi**:
    * `$pembilang = (1.0 * 0.0) + (0.0 * 1.0)` = 0.0
    * `$penyebut = 1.0 + 0.0` = 1.0
    * `$skor_Akhir = 0.0 / 1.0` = **0.0**
* **Hasil**: `0.0 > 0.5` adalah SALAH. Fungsi mengembalikan **"Kosong"**. (Benar)

### Kasus 2: Slot S2 ("Terisi") - Kasus Gagal di Aturan Lama

* **Input**: `jarak: 11`, `inframerah: 1`, `ultrasonik: 1`
* **Fuzzifikasi**:
    * `jarak_is_Jauh` = **1.0** (karena 11 >= 10)
    * `jarak_is_SangatDekat` = **0.0** (karena 11 >= 10)
    * `infra_is_Aktif` = **1.0**
    * `infra_is_Mati` = **0.0**
    * `ultra_is_Aktif` = **1.0**
    * `ultra_is_Mati` = **0.0**
* **Inferensi (Revisi)**:
    * R1 (Terisi): `min($ultra_is_Aktif: 1.0, $infra_is_Aktif: 1.0)` = **1.0**
    * R2 (Kosong): `min($jarak_is_Jauh: 1.0, $ultra_is_Mati: 0.0, $infra_is_Mati: 0.0)` = **0.0**
* **Agregasi**:
    * `$skor_Fuzzy_Terisi` = **1.0**
    * `$skor_Fuzzy_Kosong` = **0.0**
* **Defuzzifikasi**:
    * `$pembilang = (0.0 * 0.0) + (1.0 * 1.0)` = 1.0
    * `$penyebut = 0.0 + 1.0` = 1.0
    * `$skor_Akhir = 1.0 / 1.0` = **1.0**
* **Hasil**: `1.0 > 0.5` adalah BENAR. Fungsi mengembalikan **"Terisi"**. (Berhasil)
