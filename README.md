# Landing Page TOURBAIK - Travel Haji Khusus & Umrah Bintang 5

Landing Page resmi untuk **TOURBAIK (PT Khaira Berkah Mandiri)**, biro perjalanan ibadah Haji Khusus dan Umrah Bintang 5 berizin resmi Kementerian Agama RI **NO.25072200719360001** dengan Akreditasi "A".

---

## 🕌 Fitur Utama
- **Desain Mewah & Islami**: Identitas visual selaras dengan logo (Cyan, Teal, Deep Oceanic Midnight Teal) dengan kontras tinggi dan tipografi profesional (*Plus Jakarta Sans* & *Amiri*).
- **Galeri Foto Interaktif Hero**: Slider otomatis resolusi tinggi menampilkan kemegahan Ka'bah Al-Musyarrafah, Masjid Nabawi & Kubah Hijau, Raudhah Syarifah, dan Masjidil Haram.
- **Katalog Paket Dinamis**:
  - Umrah Signature VIP Bintang 5 (0m Pelataran & Kereta Cepat Haramain)
  - Umrah Reguler Berkah 9 Hari
  - Umrah Plus Wisata Sejarah Turki 12 Hari
  - Haji Khusus Furoda 1448 H (Tanpa Antre)
- **Modal Interaktif Detail Itinerary**: Penjelasan perjalanan hari demi hari (*day-by-day*) beserta rincian fasilitas termasuk & tidak termasuk (*all-in*).
- **Komitmen 5 Pasti Umrah Kemenag**: Edukasi kepastian travel, jadwal, terbang, hotel, dan visa.
- **Formulir Konsultasi Terintegrasi**: Form pendaftaran langsung terhubung ke Hotline WhatsApp Resmi **081299997703** dengan format data calon jamaah otomatis.
- **Floating WhatsApp Widget**: Widget interaktif pesan instan dengan pilihan konsultasi cepat.
- **Halaman Kebijakan Privasi Komprehensif**: Kepatuhan penuh terhadap UU Perlindungan Data Pribadi No. 27 Tahun 2022 (UU PDP).
- **Rekening Resmi Perusahaan**:
  - Bank Mandiri: `1670004926746` (a.n. PT Khaira Berkah Mandiri)
  - Bank BCA: `5771470972` (a.n. PT Khaira Berkah Mandiri)
- **Kontak Resmi**:
  - Alamat: Jl. Rose Garden 1 No.86, Jaka Setia, Kec. Bekasi Selatan, Kota Bekasi Jawa Barat 17147
  - Telepon: 021-82784415
  - WhatsApp: 081299997703
  - Email: tourbaik.id@gmail.com

---

## 🛠️ Tech Stack
- **Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Styling**: Tailwind CSS v4 via `@tailwindcss/vite`
- **Bundler**: Vite 7
- **Deployment Platform**: Vercel Serverless Function (`vercel-php@0.7.4`)

---

## 🚀 Panduan Instalasi Lokal
1. Clone repository:
   ```bash
   git clone https://github.com/AmrunTajdid/LandingPage-TOURBAIK.git
   cd LandingPage-TOURBAIK
   ```
2. Salin environment dan pasang dependensi:
   ```bash
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   ```
3. Kompilasi aset frontend:
   ```bash
   npm run build
   ```
4. Jalankan server lokal:
   ```bash
   php artisan serve
   ```
   Akses di `http://127.0.0.1:8000`

---

## ☁️ Deployment ke Vercel
Project ini telah dikonfigurasi penuh untuk di-hosting di Vercel:
- `vercel.json` (Konfigurasi serverless routing dan environment variables)
- `api/index.php` (Handler Laravel serverless runtime dengan temporary storage `/tmp/storage`)
- `bootstrap/app.php` (Auto-detect environment Vercel dan reverse proxy trust)

Cukup hubungkan repository GitHub `AmrunTajdid/LandingPage-TOURBAIK` di dashboard Vercel dan klik **Deploy**.
