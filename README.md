# Proyek Sistem Parkir Cerdas dengan Logika Fuzzy

Proyek ini adalah sistem backend yang dirancang untuk memonitor dan menentukan status slot parkir ("Kosong" atau "Terisi") secara cerdas dan *real-time*. 

Berbeda dengan sistem konvensional yang hanya mengandalkan kondisi *if-else* sederhana, sistem ini mengimplementasikan **Metode Logika Fuzzy (Fuzzy Logic)**. Pendekatan ini memungkinkan sistem mengolah ketidakpastian data sensor untuk menghasilkan keputusan yang jauh lebih akurat dan andal, terutama dalam kondisi sensor yang fluktuatif.

---

## 🛠️ Tumpukan Teknologi (Tech Stack)

Sistem ini dibangun di atas arsitektur modern yang solid dan skalabel:

### Backend & Framework
* **PHP 8.2+**: Bahasa pemrograman utama.
* **Laravel 12**: Framework backend modern. Menggunakan komponen inti seperti:
    * `illuminate/database` (ORM & Query Builder)
    * `illuminate/queue` (Antrean proses background)
    * `illuminate/cache` (Manajemen caching performa tinggi)

### Database
* **Firebase Realtime Database**: Sumber data utama untuk pembacaan sensor (IoT) secara *real-time*.

### Manajemen Dependensi & Tools
* **Composer**: Manajemen paket PHP.
* **NPM/Yarn**: Manajemen paket Node.js (untuk aset frontend/build scripts).
* **PHP CS Fixer**: Menjaga standar kualitas dan gaya penulisan kode (Code Style).

---

## 🧠 Implementasi Logika Fuzzy

Inti kecerdasan sistem terletak pada service `App\Services\ParkingLogicService.php`. Logika ini meniru cara berpikir manusia dalam mengambil keputusan berdasarkan input yang bervariasi.

Proses inferensi dibagi menjadi 3 tahap utama:

### 1. Fuzzifikasi (Fuzzification)
Mengubah input numerik tegas (*crisp value*) dari sensor menjadi derajat keanggotaan fuzzy (0.0 s/d 1.0).

* **Input Jarak (Ultrasonik)**
    * **SangatDekat**: Bernilai `1.0` jika jarak ≤ 5 cm, turun linear hingga `0.0` di 10 cm.
    * **Jauh**: Bernilai `0.0` jika jarak ≤ 5 cm, naik linear hingga `1.0` di 10 cm.

* **Input Sensor (Inframerah & Ultrasonik)**
    * **Aktif**: Bernilai `1.0` jika status sensor = 1.
    * **Mati**: Bernilai `1.0` jika status sensor = 0.

### 2. Mesin Inferensi (Inference Engine)
Menerapkan aturan logika (Rules) pada nilai fuzzy. Operator `AND` menggunakan fungsi `min()`.

> **Aturan 1: Deteksi Slot Terisi**
> JIKA (`status_ultrasonik` Aktif) **AND** (`status_inframerah` Aktif)
> MAKA status = **Terisi**
>
> `kekuatan_Terisi = min(ultra_is_Aktif, infra_is_Aktif)`

> **Aturan 2: Deteksi Slot Kosong**
> JIKA (`jarak` Jauh) **AND** (`status_ultrasonik` Mati) **AND** (`status_inframerah` Mati)
> MAKA status = **Kosong**
>
> `kekuatan_Kosong = min(jarak_is_Jauh, ultra_is_Mati, infra_is_Mati)`

### 3. Defuzzifikasi (Defuzzification)
Mengubah skor fuzzy kembali menjadi satu nilai tegas (*crisp*) untuk keputusan akhir menggunakan metode **Weighted Average** (Rata-rata Tertimbang).

**Bobot Output:**
* `Kosong` = 0.0
* `Terisi` = 1.0

**Rumus Perhitungan:**
```math
pembilang   = (skor_Fuzzy_Kosong * 0.0) + (skor_Fuzzy_Terisi * 1.0)
penyebut    = skor_Fuzzy_Kosong + skor_Fuzzy_Terisi

Skor_Akhir  = pembilang / penyebut
```

## ✅ Keputusan Akhir
Sistem menggunakan ambang batas (threshold) 0.5:
- Jika Skor_Akhir > 0.5 → Status: TERISI
- Jika Skor_Akhir ≤ 0.5 → Status: KOSONG

Lebih Detail pada File Berikut :
https://github.com/evftrya/HanProject/blob/main/documentation/readme-logic-fuzzy.md

## 🚀 Instalasi (Opsional)
1. Clone repositori ini.
2. Jalankan composer install.
3. Salin file .env.example menjadi .env dan konfigurasi koneksi database (termasuk kredensial Firebase).
4. Jalankan php artisan migrate.
5. Jalankan server dengan php artisan serve.

