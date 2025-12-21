/**
 * FuzzyLogic.js
 * Berisi logika perhitungan Fuzzy Mamdani untuk status parkir.
 * Input: Jarak (cm), Status Inframerah (0/1), Status Ultrasonik (0/1)
 * Output: String 'Terisi' atau 'Kosong'
 */

// --- Fungsi Bantuan (Helper Functions) ---

function fuzzifyJarak_SangatDekat(jarak) {
    // 0-10: 1.0
    // 10-15: Linear Turun
    // >15: 0.0
    if (jarak <= 10) return 1.0;
    if (jarak >= 15) return 0.0;
    return (15 - jarak) / 5;
}

function fuzzifyJarak_Jauh(jarak) {
    // 0-10: 0.0
    // 10-15: Linear Naik
    // >15: 1.0
    if (jarak <= 10) return 0.0;
    if (jarak >= 15) return 1.0;
    return (jarak - 10) / 5;
}

function fuzzifySensor(status, target) {
    // target: 1 = Aktif, 0 = Mati
    // Input sensor biasanya string "1"/"0" atau int 1/0, kita paksa samakan tipe datanya
    return (parseInt(status) === target) ? 1.0 : 0.0;
}

// --- Fungsi Utama yang di-Export ---

export function hitungFuzzyStatus(jarak, infra, ultra) {
    // 1. Fuzzifikasi
    const j_SangatDekat = fuzzifyJarak_SangatDekat(jarak);
    const j_Jauh = fuzzifyJarak_Jauh(jarak);

    const i_Aktif = fuzzifySensor(infra, 1);
    const i_Mati  = fuzzifySensor(infra, 0);

    const u_Aktif = fuzzifySensor(ultra, 1);
    const u_Mati  = fuzzifySensor(ultra, 0);

    // 2. Inferensi (Rules Revisi)
    // Rule 1: Ultra Aktif AND Infra Aktif -> Terisi
    const r1_Terisi = Math.min(u_Aktif, i_Aktif);

    // Rule 2: Jarak Jauh AND Ultra Mati AND Infra Mati -> Kosong
    const r2_Kosong = Math.min(j_Jauh, u_Mati, i_Mati);

    // 3. Defuzzifikasi (Weighted Average)
    // Bobot: Terisi = 1.0, Kosong = 0.0
    const pembilang = (r2_Kosong * 0.0) + (r1_Terisi * 1.0);
    const penyebut = r2_Kosong + r1_Terisi;

    // Hindari pembagian dengan nol
    const score = (penyebut === 0) ? 0 : (pembilang / penyebut);

    // 4. Keputusan (Threshold 0.5)
    return score > 0.5 ? 'Terisi' : 'Kosong';
}
