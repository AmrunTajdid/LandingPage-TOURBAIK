@extends('layouts.app')

@section('title', 'Kebijakan Privasi | TOURBAIK Travel Haji & Umrah')
@section('meta_description', 'Kebijakan Privasi perlindungan data pribadi jamaah haji dan umrah PT Khaira Berkah Mandiri (TOURBAIK) sesuai UU No. 27 Tahun 2022 tentang Perlindungan Data Pribadi (UU PDP).')

@section('content')
<!-- PRIVACY POLICY HERO HEADER -->
<section class="text-white py-16 relative overflow-hidden bg-tourbaik-hero" style="background-color: #05191d !important; background: linear-gradient(180deg, #05191d 0%, #092c33 50%, #0c3941 100%) !important;">
    <div class="pattern-overlay-dots"></div>
    <div class="absolute -top-24 right-0 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 left-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <!-- Breadcrumb -->
        <nav class="inline-flex items-center gap-2 text-xs text-teal-300 mb-6 bg-teal-950/60 px-4 py-1.5 rounded-full border border-teal-800/60">
            <a href="{{ route('home') }}" class="hover:underline flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span>Beranda</span>
            </a>
            <span>/</span>
            <span class="text-white font-medium">Kebijakan Privasi</span>
        </nav>

        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 text-white">
            Kebijakan Privasi & Perlindungan Data Jamaah
        </h1>
        <p class="text-sm sm:text-base text-teal-100 max-w-2xl mx-auto leading-relaxed">
            Komitmen PT Khaira Berkah Mandiri (TOURBAIK) dalam melindungi kerahasiaan, integritas, dan keamanan data pribadi calon jamaah Haji dan Umrah sesuai regulasi perundang-undangan Republik Indonesia.
        </p>

        <!-- Compliance Badges -->
        <div class="mt-8 flex flex-wrap items-center justify-center gap-3 text-xs">
            <span class="inline-flex items-center gap-1.5 bg-teal-900/50 border border-teal-500/30 text-teal-200 px-3 py-1 rounded-full">
                <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                UU PDP No. 27 Tahun 2022
            </span>
            <span class="inline-flex items-center gap-1.5 bg-teal-900/50 border border-teal-500/30 text-teal-200 px-3 py-1 rounded-full">
                <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Standar Kemenag RI (SISKOPATUH)
            </span>
            <span class="inline-flex items-center gap-1.5 bg-teal-900/50 border border-teal-500/30 text-teal-200 px-3 py-1 rounded-full">
                <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                Integrasi e-Hajj & Nusuk Masar KSA
            </span>
        </div>
    </div>
</section>

<!-- MAIN POLICY CONTENT -->
<section class="py-14 sm:py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Document Meta Card -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 mb-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs uppercase tracking-wider font-bold text-teal-700">Pemberitahuan Resmi Privasi</span>
                <p class="text-xs text-slate-500 mt-1">Terakhir Diperbarui: <strong>01 Januari 2026</strong> &bull; Versi Dokumen: 2.4-ID</p>
            </div>
            <a href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin bertanya terkait kebijakan privasi dan keamanan dokumen TOURBAIK.') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-xs font-bold text-teal-700 bg-teal-50 hover:bg-teal-100 border border-teal-200 px-3.5 py-2 rounded-xl transition-colors">
                <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                <span>Kontak Tim Petugas Privasi</span>
            </a>
        </div>

        <!-- Policy Body Articles -->
        <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-sm border border-slate-200/80 space-y-10 text-slate-700 leading-relaxed text-sm">

            <!-- 1. Pendahuluan -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">1</span>
                    <h2 class="text-lg font-bold text-slate-900">Pendahuluan & Komitmen Privasi</h2>
                </div>
                <p>
                    PT Khaira Berkah Mandiri (selanjutnya disebut <strong>"TOURBAIK"</strong>, <strong>"Kami"</strong>) menyadari bahwa perjalanan ibadah Haji Khusus dan Umrah merupakan amanah mulia yang melibatkan penyerahan berbagai dokumen pribadi yang bersifat sensitif.
                </p>
                <p>
                    Kebijakan Privasi ini dirancang sebagai bentuk kepatuhan kami terhadap <strong>Undang-Undang Republik Indonesia Nomor 27 Tahun 2022 tentang Perlindungan Data Pribadi (UU PDP)</strong>, Peraturan Menteri Agama RI mengenai Penyelenggaraan Ibadah Umrah dan Haji Khusus, serta regulasi otoritas imigrasi Kerajaan Arab Saudi. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menyimpan, menggunakan, mengamankan, dan menghapus Data Pribadi Anda.
                </p>
            </section>

            <hr class="border-slate-100">

            <!-- 2. Data yang Dikumpulkan -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">2</span>
                    <h2 class="text-lg font-bold text-slate-900">Jenis Data Pribadi yang Kami Kumpulkan</h2>
                </div>
                <p>
                    Untuk memenuhi persyaratan penerbitan visa ibadah, pemesanan tiket maskapai penerbangan internasional, registrasi kamar hotel, dan asuransi jiwa/kesehatan syariah, kami mengumpulkan:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 pt-2">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1.5">
                        <h4 class="font-bold text-teal-800 text-xs flex items-center gap-2">
                            <span>📄 Identitas Kependudukan & Paspor</span>
                        </h4>
                        <ul class="text-xs space-y-1 text-slate-600 list-disc list-inside">
                            <li>Nama lengkap sesuai Akta Lahir & Paspor</li>
                            <li>Nomor Induk Kependudukan (NIK) & Kartu Keluarga</li>
                            <li>Nomor Paspor, tanggal terbit & masa berlaku</li>
                            <li>Tempat & tanggal lahir, jenis kelamin</li>
                            <li>Foto biometrik berlatar belakang putih</li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1.5">
                        <h4 class="font-bold text-teal-800 text-xs flex items-center gap-2">
                            <span>🏥 Data Medis & Kesehatan Khusus</span>
                        </h4>
                        <ul class="text-xs space-y-1 text-slate-600 list-disc list-inside">
                            <li>Buku Kuning / Sertifikat Vaksinasi Meningitis</li>
                            <li>Surat keterangan kelayakan terbang (istitha'ah)</li>
                            <li>Riwayat alergi, obat rutin, atau kondisi kronis</li>
                            <li>Kebutuhan khusus (kursi roda, pendamping lansia)</li>
                            <li>Kontak darurat keluarga di Indonesia</li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1.5">
                        <h4 class="font-bold text-teal-800 text-xs flex items-center gap-2">
                            <span>💳 Data Transaksi & Pembayaran</span>
                        </h4>
                        <ul class="text-xs space-y-1 text-slate-600 list-disc list-inside">
                            <li>Bukti transfer uang muka (DP) & pelunasan</li>
                            <li>Nomor rekening bank asal pengirim</li>
                            <li>Rekapitulasi tanda terima kuitansi resmi</li>
                            <li>Program tabungan umrah syariah mitra bank</li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200/80 space-y-1.5">
                        <h4 class="font-bold text-teal-800 text-xs flex items-center gap-2">
                            <span>🌐 Data Interaksi Digital & Website</span>
                        </h4>
                        <ul class="text-xs space-y-1 text-slate-600 list-disc list-inside">
                            <li>Nomor kontak WhatsApp & alamat email</li>
                            <li>Log formulir konsultasi online</li>
                            <li>Alamat IP, cookie analitik & preferensi browser</li>
                        </ul>
                    </div>
                </div>
            </section>

            <hr class="border-slate-100">

            <!-- 3. Tujuan Pemrosesan Data -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">3</span>
                    <h2 class="text-lg font-bold text-slate-900">Tujuan Penggunaan & Pemrosesan Data</h2>
                </div>
                <p>Data pribadi yang dikumpulkan semata-mata digunakan untuk kepentingan penyelenggaraan ibadah jamaah secara sah, meliputi:</p>
                <ol class="list-decimal list-inside space-y-2 pl-1">
                    <li><strong>Penerbitan Visa Resmi Umrah & Haji:</strong> Pengunggahan data ke sistem portal e-Visa Kerajaan Arab Saudi (Nusuk Masar / MoFA / e-Hajj KSA).</li>
                    <li><strong>Pelaporan Resmi ke SISKOPATUH Kemenag RI:</strong> Memenuhi kewajiban hukum pengawasan izin keberangkatan jamaah Indonesia.</li>
                    <li><strong>Reservasi Tiket Pesawat & Akomodasi:</strong> Pemesanan tiket penerbangan langsung (Garuda Indonesia, Saudia Airlines, dll.) dan reservasi hotel bintang 5 di Makkah & Madinah.</li>
                    <li><strong>Penyediaan Layanan Medis & Pendampingan:</strong> Memastikan dokter rombongan dan muthawwif mengetahui kebutuhan khusus fisik jamaah selama pelaksanaan ibadah.</li>
                    <li><strong>Komunikasi Jadwal & Manasik:</strong> Mengirimkan undangan manasik, pembagian koper, dan panduan keberangkatan melalui WhatsApp resmi.</li>
                </ol>
            </section>

            <hr class="border-slate-100">

            <!-- 4. Pembagian Data Pihak Ketiga -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">4</span>
                    <h2 class="text-lg font-bold text-slate-900">Pembagian Data Kepada Pihak Ketiga</h2>
                </div>
                <p>
                    TOURBAIK <strong>TIDAK PERNAH dan TIDAK AKAN PERNAH</strong> menjual, menyewakan, atau memperdagangkan data pribadi calon jamaah kepada pihak manapun untuk keperluan komersial di luar paket ibadah. Data hanya dibagikan kepada mitra berwenang yang terlibat langsung dalam proses keberangkatan:
                </p>
                <ul class="list-disc list-inside space-y-1.5 pl-1 text-slate-600">
                    <li>Kementerian Agama Republik Indonesia (Direktorat Bina Umrah dan Haji Khusus).</li>
                    <li>Kementerian Haji dan Umrah Arab Saudi (Wazarat al-Hajj wa al-Umrah) beserta Muassasah / Syarikah resmi di Saudi.</li>
                    <li>Maskapai penerbangan internasional terkait (e.g. Saudia, Garuda Indonesia, Turkish Airlines).</li>
                    <li>Grup perhotelan resmi rekanan di Arab Saudi (e.g. Swissôtel, Pullman, Fairmont, Frontel).</li>
                    <li>Perusahaan Asuransi Perjalanan Syariah resmi yang ditunjuk Kemenag RI & Otoritas Saudi.</li>
                    <li>Pihak berwajib apabila diwajibkan oleh ketentuan hukum positif yang berlaku.</li>
                </ul>
            </section>

            <hr class="border-slate-100">

            <!-- 5. Keamanan Data -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">5</span>
                    <h2 class="text-lg font-bold text-slate-900">Keamanan & Enkripsi Data Pribadi</h2>
                </div>
                <p>
                    Kami menerapkan standar keamanan teknis dan organisasi yang ketat untuk mencegah kebocoran, modifikasi tanpa izin, maupun akses tidak sah terhadap berkas paspor dan data jamaah:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div class="p-3.5 bg-teal-50/70 border border-teal-100 rounded-xl text-center space-y-1">
                        <div class="font-bold text-teal-900 text-xs">Enkripsi Berstandar SSL/TLS</div>
                        <p class="text-[11px] text-teal-800">Transmisi data di website terlindungi enkripsi 256-bit modern.</p>
                    </div>
                    <div class="p-3.5 bg-teal-50/70 border border-teal-100 rounded-xl text-center space-y-1">
                        <div class="font-bold text-teal-900 text-xs">Akses Terbatas Bertingkat</div>
                        <p class="text-[11px] text-teal-800">Hanya staf ticketing & visa resmi yang memiliki wewenang akses berkas.</p>
                    </div>
                    <div class="p-3.5 bg-teal-50/70 border border-teal-100 rounded-xl text-center space-y-1">
                        <div class="font-bold text-teal-900 text-xs">Brankas Fisik Aman</div>
                        <p class="text-[11px] text-teal-800">Paspor fisik disimpan di safe deposit berkeamanan tinggi kantor pusat.</p>
                    </div>
                </div>
            </section>

            <hr class="border-slate-100">

            <!-- 6. Hak-Hak Jamaah -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">6</span>
                    <h2 class="text-lg font-bold text-slate-900">Hak-Hak Jamaah Berdasarkan UU PDP</h2>
                </div>
                <p>Sesuai dengan ketentuan UU No. 27 Tahun 2022, setiap jamaah memiliki hak:</p>
                <ul class="list-disc list-inside space-y-1 pl-1 text-slate-600">
                    <li>Mendapatkan kejelasan mengenai tujuan pemrosesan data paspor & data pribadi.</li>
                    <li>Mengoreksi atau memperbarui data pribadi yang tidak akurat (misal perubahan gelar atau pembaharuan nomor paspor).</li>
                    <li>Meminta penarikan kembali berkas paspor fisik setelah proses visa dan kepulangan ibadah selesai.</li>
                    <li>Mengajukan permohonan penghapusan rekam data non-regulasi setelah masa retensi wajib Kemenag berakhir.</li>
                </ul>
            </section>

            <hr class="border-slate-100">

            <!-- 7. Kontak Petugas Perlindungan Data -->
            <section class="space-y-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-lg bg-teal-100 text-teal-800 font-bold flex items-center justify-center text-xs">7</span>
                    <h2 class="text-lg font-bold text-slate-900">Kontak Petugas Perlindungan Data (DPO)</h2>
                </div>
                <p>
                    Apabila Anda memiliki pertanyaan, keberatan, atau ingin menggunakan hak-hak privasi Anda sehubungan dengan data yang kami kelola, silakan hubungi tim kepatuhan data kami:
                </p>
                <div class="bg-slate-900 text-white rounded-2xl p-5 mt-3 space-y-2 text-xs">
                    <p class="font-bold text-teal-400 uppercase tracking-wide">Data Protection Officer - PT Khaira Berkah Mandiri</p>
                    <p class="text-slate-300">Jl. Rose Garden 1 No.86, Jaka Setia, Kec. Bekasi Selatan, Kota Bekasi Jawa Barat 17147</p>
                    <div class="pt-2 flex flex-wrap gap-4 text-slate-300">
                        <span>Email: <strong class="text-teal-300"><a href="mailto:tourbaik.id@gmail.com" class="hover:underline">tourbaik.id@gmail.com</a></strong></span>
                        <span>Hotline WhatsApp: <strong class="text-teal-300"><a href="https://wa.me/6281299997703" target="_blank" rel="noopener" class="hover:underline">0812-9999-7703</a></strong></span>
                        <span>Telepon: <strong class="text-teal-300"><a href="tel:02182784415" class="hover:underline">021-82784415</a></strong></span>
                    </div>
                </div>
            </section>

        </div>

        <!-- Back to Home CTA -->
        <div class="mt-10 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-xs font-bold text-teal-800 bg-white hover:bg-teal-50 border border-teal-200 shadow-sm transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span>Kembali ke Beranda TOURBAIK</span>
            </a>
        </div>

    </div>
</section>
@endsection
