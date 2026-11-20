# Panduan Hosting Landing Page TOURBAIK di Vercel

Seluruh berkas arsitektur serverless untuk hosting di Vercel telah disiapkan dan dikonfigurasi secara lengkap:
1. `vercel.json` (Serverless runtime `vercel-php@0.7.4`, static routing `/build`, `/images`, `/favicon*`, dan environment variables)
2. `api/index.php` (Serverless bridge handler dengan writable path `/tmp/storage` dan `/tmp/bootstrap/cache`)
3. `bootstrap/app.php` (Deteksi otomatis environment Vercel, storage dynamic mapping, serta `trustProxies(at: '*')` untuk HTTPS)
4. `.vercelignore` (Mencegah upload berkas dev/unnecessary)

---

## 🚀 Cara Menghubungkan Repository ke Vercel (CI/CD Otomatis)

1. Buka [https://vercel.com](https://vercel.com) dan login menggunakan akun **GitHub** Anda (`AmrunTajdid`).
2. Di halaman Dashboard Vercel, klik tombol **"Add New..."** lalu pilih **"Project"**.
3. Cari repository **`LandingPage-TOURBAIK`** pada daftar repositori GitHub Anda, lalu klik **"Import"**.
4. Di bagian pengaturan proyek:
   - **Framework Preset**: biarkan **Other** (karena dikendalikan oleh `vercel.json`).
   - **Root Directory**: `./`
   - **Environment Variables**: Vercel akan otomatis membaca variabel dari `vercel.json`. Jika ingin menambahkan manual di dashboard, Anda dapat memasukkan:
     - `APP_KEY` : `base64:8mUeYOZ8hX+wK5hEgQc9ZwDn1T5USibwHEYoknQ8KdQ=`
     - `APP_ENV` : `production`
     - `APP_DEBUG` : `false`
     - `SESSION_DRIVER` : `cookie`
     - `CACHE_STORE` : `array`
     - `LOG_CHANNEL` : `stderr`
5. Klik **"Deploy"**.
6. Tunggu 1–2 menit. Website Anda akan langsung online dengan domain resmi gratis Vercel ber-SSL (HTTPS) otomatis (contoh: `https://landing-page-tourbaik.vercel.app`).
