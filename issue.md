# Issue & Project Documentation - Landing Page TOURBAIK

Dokumentasi pelacakan kebutuhan, implementasi teknis, serta rencana pengembangan lanjutan (*backlog*) untuk Landing Page **TOURBAIK - Travel Haji Khusus & Umrah Bintang 5**.

---

## 📌 Informasi Proyek

* **Nama Proyek**: Landing Page TOURBAIK Travel Haji & Umrah
* **Klien / Organisasi**: PT Tourbaik Amanah Mandiri
* **Framework**: Laravel 12.x (PHP 8.2+)
* **Frontend Stack**: Blade Templating, Tailwind CSS v4, Vite 7
* **Lokasi Server**: `c:\xampp\htdocs\LandingPage-TOURBAIK`
* **Status**: ✅ **Phase 1 (MVP Landing Page) - Selesai & Terverifikasi**

---

## 📋 Ringkasan Kebutuhan Awal (User Requirements)

Berdasarkan instruksi dari atasan/klien, proyek ini memiliki kebutuhan utama:
1. Pembuatan Landing Page travel haji dan umrah modern berbasis framework **Laravel**.
2. Penggunaan dua aset logo yang diunggah:
   * Foto kiri: Digunakan pada **Header (Navbar) dan Footer** website.
   * Foto kanan: Digunakan sebagai **Favicon browser** dan *apple touch icon*.
3. Pembuatan halaman khusus **Kebijakan Privasi (Privacy Policy)** yang mematuhi standar hukum perlindungan data pribadi jamaah.
4. Penyesuaian tema dan warna website dengan identitas visual logo (gradasi warna *Cyan*, *Emerald Teal*, dan *Deep Islamic Oceanic Teal* dengan aksen emas).
5. Desain website wajib **kekinian, menarik, elegan**, serta memiliki karakteristik otentik industri ibadah (tidak terkesan seperti template buatan AI generik).

---

## 🛠️ Status Issue & Fitur yang Telah Diselesaikan (Resolved Issues)

| ID Issue | Kategori | Deskripsi Fitur / Perbaikan | Status |
| :--- | :--- | :--- | :--- |
| **ISSUE-01** | *Setup & Env* | Inisialisasi Laravel 12, konfigurasi `.env`, SQLite DB, dan setup Tailwind CSS v4 via `@tailwindcss/vite`. | ✅ Selesai |
| **ISSUE-02** | *Branding* | Ekstraksi dan penempatan aset logo header (`logo-tourbaik-header.jpg`) dan favicon (`logo-tourbaik-favicon.jpg`) ke direktori `public/images/`. | ✅ Selesai |
| **ISSUE-03** | *Styling* | Konfigurasi custom theme di `resources/css/app.css` dengan gradasi warna asli logo (`#22d3ee`, `#14b8a6`, `#0f4c5c`, `#05191d`) dan ornamen pola Islami. | ✅ Selesai |
| **ISSUE-04** | *Navigation* | Pembuatan layout master (`layouts/app.blade.php`), top announcement bar izin Kemenag RI, dan sticky glassmorphism navbar responsif (Desktop & Mobile). | ✅ Selesai |
| **ISSUE-05** | *Hero Section* | Headline elegan, kaligrafi bismillah, metrik sosial (10.000+ jamaah, 100% kepastian visa), serta widget *Quick Search Filter* paket. | ✅ Selesai |
| **ISSUE-06** | *Trust & Credibility* | Section komitmen **5 Pasti Umrah Kemenag** dan 6 Pilar Keunggulan TOURBAIK (Hotel 0m, Bimbingan Sunnah, Kereta Cepat Haramain, Direct Flight, All-in). | ✅ Selesai |
| **ISSUE-07** | *Catalog & Detail* | Katalog paket dinamis dengan filter tab (VIP, Reguler, Plus Turki, Haji Furoda) serta popup modal interaktif berisi detail rincian *day-by-day itinerary*. | ✅ Selesai |
| **ISSUE-08** | *Schedule Tracker* | Tabel jadwal keberangkatan 2026/2027 dilengkapi status ketersediaan kursi real-time (*Pasti Berangkat*, *Sisa Seat*, *Fast Closing*). | ✅ Selesai |
| **ISSUE-09** | *Interactive Tools* | Kalkulator Simulasi Tabungan Umrah Syariah berbasis slider (pilihan waktu 3–36 bulan dan jumlah jamaah) tanpa riba bekerjasama dengan BSI. | ✅ Selesai |
| **ISSUE-10** | *Social Proof* | Testimoni jamaah nyata terverifikasi asal kota Jakarta, Surabaya, Bandung, Semarang dan accordion interaktif FAQ seputar dokumen paspor & manasik. | ✅ Selesai |
| **ISSUE-11** | *Lead Generation* | Widget mengambang (*floating*) WhatsApp dengan template pertanyaan otomatis dan form konsultasi langsung terhubung ke WhatsApp Hotline. | ✅ Selesai |
| **ISSUE-12** | *Legal Compliance* | Halaman Kebijakan Privasi (`/kebijakan-privasi`) komprehensif mengacu pada UU No. 27 Tahun 2022 (UU PDP), SISKOPATUH Kemenag RI, dan sistem e-Hajj Arab Saudi. | ✅ Selesai |
| **ISSUE-13** | *Testing* | Pembuatan pengujian otomatis feature test (`tests/Feature/LandingPageTest.php`) dengan 100% tingkat kelulusan (5/5 tests passed). | ✅ Selesai |
| **ISSUE-14** | *UI/UX & Contrast* | Audit & perbaikan kontras teks dropdown form pencarian & input agar 100% terbaca di semua browser, serta penambahan visual foto cover nyata di setiap kartu paket (Ka'bah, Nabawi, Cappadocia, Mina) & lencana jarak hotel. | ✅ Selesai |
| **ISSUE-15** | *Bugfix Hero Background* | Memperbaiki masalah latar belakang Hero yang sebelumnya menjadi putih akibat class pattern menimpa `background-image`. Kini dikunci dengan inline style gradient midnight teal `#05191d` dan layer pattern terpisah, sehingga teks putih terbaca 100% tajam dan kontras. | ✅ Selesai |
| **ISSUE-16** | *User Revisions & Content Refinement* | 1) Mengganti form pencarian cepat di Hero dengan photo slider/carousel otomatis Tanah Suci (Makkah, Madinah, Raudhah) beresolusi tinggi; 2) Menghapus section Jadwal Keberangkatan & Simulasi Tabungan Umrah Syariah (beserta navbar/footer link-nya); 3) Memperbarui alamat menjadi satu kantor operasional di Bekasi Selatan; 4) No. Telepon resmi: `021-82784415`; 5) No. WhatsApp resmi: `+62 811-191-860`; 6) Izin Kemenag RI resmi: `NO.25072200719360001`. | ✅ Selesai |
| **ISSUE-17** | *Top Bar Refinement* | Menghapus teks "Garansi 5 Pasti Umrah" pada bagian *Top Bar announcement* paling atas agar header lebih bersih, ringkas, dan fokus pada legalitas Kemenag RI & Akreditasi A. | ✅ Selesai |
| **ISSUE-18** | *Bank Accounts & Email Update* | 1) Memperbarui rekening pembayaran resmi ke Bank Mandiri (`1670004926746`) dan Bank BCA (`5771470972`) atas nama PT Khaira Berkah Mandiri; 2) Memperbarui email resmi menjadi `tourbaik.id@gmail.com` di seluruh footer, dokumen kebijakan privasi, serta FAQ & controller; 3) Memperbarui entitas hukum perusahaan menjadi PT Khaira Berkah Mandiri. | ✅ Selesai |
| **ISSUE-19** | *WhatsApp Hotline Update* | Memperbarui seluruh nomor WhatsApp hotline resmi menjadi `081299997703` (`+62 812-9999-7703` / URL `https://wa.me/6281299997703`) pada Top Bar, Hero CTA, Booking Paket, Mobile Navbar, Footer, Floating WhatsApp Widget, Formulir Konsultasi, dan Kebijakan Privasi. | ✅ Selesai |
| **ISSUE-20** | *Transparent Favicon* | Menghapus background putih pada gambar logo favicon browser menjadi transparan (format PNG 32-bit ARGB anti-aliased), mengenerate berbagai ukuran standar favicon (`favicon-32x32.png`, `favicon-16x16.png`, `apple-touch-icon.png`, `favicon.ico`), dan memperbarui tag link favicon di layout master. | ✅ Selesai |
| **ISSUE-21** | *GitHub Push & Vercel Deployment Setup* | Inisialisasi Git, menghubungkan remote ke `https://github.com/AmrunTajdid/LandingPage-TOURBAIK.git`, dan berhasil push branch `main`. Menyediakan konfigurasi serverless Vercel (`vercel.json`, `api/index.php`, `.vercelignore`, `bootstrap/app.php` dynamic storage path, dan panduan lengkap `DEPLOY_VERCEL.md`). | ✅ Selesai |

---

## 💻 Catatan Lingkungan & Petunjuk Eksekusi (Technical Notes)

### 1. Struktur File Utama
* **Controller**: `app/Http/Controllers/HomeController.php`
* **Routing**: `routes/web.php`
* **Layout Master**: `resources/views/layouts/app.blade.php`
* **Halaman Landing**: `resources/views/landing.blade.php`
* **Halaman Privasi**: `resources/views/privacy.blade.php`
* **Stylesheet & Theme**: `resources/css/app.css`
* **File Aset Publik**: `public/images/logo-tourbaik-header.jpg`, `public/images/logo-tourbaik-favicon.jpg`
* **Automated Tests**: `tests/Feature/LandingPageTest.php`

### 2. Perintah Kompilasi Aset
Karena kebijakan PowerShell di Windows mencegah eksekusi file `.ps1`, gunakan `npm.cmd` saat menjalankan kompilasi:
```bash
# Menjalankan build aset produksi Vite
npm.cmd run build

# Menjalankan Vite live dev watcher
npm.cmd run dev
```

### 3. Menjalankan Pengujian Otomatis
```bash
php artisan test
```
*Hasil: 5 passed (33 assertions).*

### 4. Akses URL Lokal
* **URL XAMPP Apache**: `http://localhost/LandingPage-TOURBAIK/public/`
* **URL Kebijakan Privasi**: `http://localhost/LandingPage-TOURBAIK/public/kebijakan-privasi`
* **Artisan Server (Opsional)**: `php artisan serve` -> `http://127.0.0.1:8000`

---

## 🚀 Rencana Pengembangan Selanjutnya (Future Backlog / Phase 2)

Daftar tiket pengembangan yang dapat diajukan kepada atasan untuk pengembangan tahap berikutnya:

* [ ] **ISSUE-14: Admin CMS Dashboard (Filament PHP)**
  * *Tujuan*: Memungkinkan staf operasional mengedit paket, mengubah harga kamar (Quad/Triple/Double), dan menambah jadwal keberangkatan tanpa harus mengubah kode Blade.
* [ ] **ISSUE-15: Integrasi Payment Gateway Syariah (Virtual Account & QRIS)**
  * *Tujuan*: Fasilitas pembayaran booking fee (DP Rp 5.000.000) otomatis dengan invoice digital yang langsung terverifikasi.
* [ ] **ISSUE-16: Integrasi WhatsApp Gateway API (Fonnte / Wablas)**
  * *Tujuan*: Mengirimkan otomatis e-Katalog brosur PDF dan konfirmasi pendaftaran manasik langsung ke nomor WhatsApp jamaah setelah submit form.
* [ ] **ISSUE-17: Tracking & Pelacakan Iklan (Meta Pixel & Google Tag Manager)**
  * *Tujuan*: Memudahkan tim marketing memantau konversi iklan Meta Ads / Google Ads untuk calon jamaah yang mengklik tombol WhatsApp.
* [ ] **ISSUE-18: Multi-Bahasa (English & Arabic Language Switcher)**
  * *Tujuan*: Memfasilitasi mitra rekanan hotel dan maskapai internasional dari Kerajaan Arab Saudi.

---

*Dokumen ini dibuat secara otomatis dan diperbarui pada 19 November 2026 oleh Tim Pengembangan Web TOURBAIK.*
