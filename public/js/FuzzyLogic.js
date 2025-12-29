/**
 * FuzzyLogic.js
 * UPDATE: Voting 3 Sensor (Infra, Proxi, Ultra)
 */

// --- Fungsi Bantuan (TETAP SAMA) ---
function fuzzifyJarak_SangatDekat(jarak) {
    if (jarak <= 10) return 1.0;
    if (jarak >= 15) return 0.0;
    return (15 - jarak) / 5;
}

function fuzzifyJarak_Jauh(jarak) {
    if (jarak <= 10) return 0.0;
    if (jarak >= 15) return 1.0;
    return (jarak - 10) / 5;
}

function fuzzifySensor(status, target) {
    return (parseInt(status) === target) ? 1.0 : 0.0;
}

// --- Fungsi Utama ---
export function hitungFuzzyStatus(jarak, proxi, ultra, infra) {

    // 1. Fuzzifikasi
    const j_SangatDekat = fuzzifyJarak_SangatDekat(jarak);
    const j_Jauh        = fuzzifyJarak_Jauh(jarak);

    const p_Aktif = fuzzifySensor(proxi, 1);
    const p_Mati  = fuzzifySensor(proxi, 0);

    const u_Aktif = fuzzifySensor(ultra, 1);
    const u_Mati  = fuzzifySensor(ultra, 0);

    const I_Aktif = fuzzifySensor(infra, 1);
    const I_Mati  = fuzzifySensor(infra, 0);

    // 2. Inferensi (LOGIKA BARU: VOTING)

    // Kita buat 3 "Pendapat" Sensor:
    // Pendapat 1: Ultrasonik (Gabungan data status + jarak cm)
    // Jika sensor ultra bilang '1' ATAU jarak < 10cm, kita anggap Ultra mendeteksi.
    const evidence_Ultra = Math.max(u_Aktif, j_SangatDekat);

    // Pendapat 2: Proximity
    const evidence_Proxi = p_Aktif;

    // Pendapat 3: Infrared
    const evidence_Infra = I_Aktif;

    // RULE 1: KONDISI TERISI (Voting 2 dari 3)
    // Kombinasi pasangan (Pairing)
    const pair_UltraProxi = Math.min(evidence_Ultra, evidence_Proxi);
    const pair_UltraInfra = Math.min(evidence_Ultra, evidence_Infra);
    const pair_ProxiInfra = Math.min(evidence_Proxi, evidence_Infra);

    // Ambil nilai tertinggi dari pasangan-pasangan tersebut
    const r1_Terisi = Math.max(pair_UltraProxi, pair_UltraInfra, pair_ProxiInfra);


    // RULE 2: KONDISI KOSONG
    // Kosong jika mayoritas bilang kosong (kebalikan dari Terisi)
    // ATAU bisa pakai cara manual: Jarak Jauh DAN (Proxi Mati ATAU Infra Mati)
    // Tapi cara paling aman di fuzzy adalah invers dari Terisi:
    // const r2_Kosong = 1.0 - r1_Terisi;

    // Kalau mau tetap pakai gaya kodemu (eksplisit):
    // Kita anggap kosong jika: Jarak Jauh DAN (Proxi Mati ATAU Infra Mati)
    // Math.min mencari nilai terkecil (AND logic)
    const r2_Kosong = Math.min(j_Jauh, p_Mati, I_Mati);


    // 3. Defuzzifikasi (Weighted Average)
    const pembilang = (r2_Kosong * 0.0) + (r1_Terisi * 1.0);
    const penyebut  = r2_Kosong + r1_Terisi;

    // Safety: Jika penyebut 0 (semua sensor bingung/mati), default ke 0 (Kosong)
    const score = (penyebut === 0) ? 0 : (pembilang / penyebut);

    // 4. Keputusan
    console.log(`Score: ${score.toFixed(2)} (U:${evidence_Ultra.toFixed(1)} P:${p_Aktif} I:${I_Aktif})`);

    return score > 0.5 ? 'Terisi' : 'Kosong';
}
