<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Title & SEO Meta -->
    <title>@yield('title', 'TOURBAIK | Travel Haji Khusus & Umrah Bintang 5 Resmi Kemenag')</title>
    <meta name="description" content="@yield('meta_description', 'TOURBAIK adalah biro perjalanan resmi Haji Khusus & Umrah Bintang 5 berizin Kemenag RI. Bimbingan sesuai Sunnah, hotel 0m pelataran Masjidil Haram & Nabawi, serta kepastian berangkat.')">
    <meta name="keywords" content="travel umrah, haji plus, haji furoda, paket umrah 2026, tourbaik, umrah bintang 5, izin kemenag ppui, paket umrah ramadhan, travel haji terbaik jakarta surabaya">
    <meta name="author" content="TOURBAIK">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'TOURBAIK | Travel Haji Khusus & Umrah Bintang 5 Resmi')">
    <meta property="og:description" content="Ibadah Tenang, Fasilitas Nyaman, Melangkah Khusyuk Menuju Baitullah bersama TOURBAIK. Izin Resmi Kemenag RI NO.25072200719360001.">
    <meta property="og:image" content="{{ asset('images/logo-tourbaik-header.jpg') }}">

    <!-- Favicon: Transparent Logo (no white background) -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-tourbaik-favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Preconnect Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-teal-500 selection:text-white flex flex-col min-h-screen">

    <!-- TOP ANNOUNCEMENT BAR (Official Trust, Accreditation & Hotline) -->
    <div class="text-xs text-teal-100 border-b border-teal-900/40 relative z-50 bg-[#05191d]" style="background-color: #05191d !important;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2.5 flex flex-wrap items-center justify-between gap-y-2">
            <!-- Left Info -->
            <div class="flex items-center gap-3 flex-wrap">
                <span class="inline-flex items-center gap-1.5 bg-teal-950 text-teal-300 font-bold px-2.5 py-0.5 rounded-full border border-teal-400/50 text-[11px]">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    Izin Resmi Kemenag RI NO.25072200719360001
                </span>
                <span class="hidden sm:inline text-slate-200 text-[11px]">
                    Akreditasi <strong class="text-teal-300 font-bold">A</strong> &bull; Biro Perjalanan Haji Khusus & Umrah Bintang 5
                </span>
            </div>

            <!-- Right Contacts -->
            <div class="flex items-center gap-4 text-[11px] text-slate-200">
                <a href="tel:02182784415" class="hover:text-teal-300 transition-colors hidden sm:flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>021-82784415</span>
                </a>
                <span class="text-teal-600/70 hidden sm:inline">|</span>
                <a href="https://wa.me/6281299997703" target="_blank" rel="noopener" class="hover:text-teal-300 transition-colors flex items-center gap-1.5 font-semibold">
                    <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                    <span>WA: 0812-9999-7703</span>
                </a>
                <span class="text-teal-600/70 hidden lg:inline">|</span>
                <span class="hidden lg:inline text-slate-200">Bekasi Selatan</span>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR (Sticky with Glassmorphism) -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-xs transition-all duration-300" id="mainHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo Left: User's header logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                    <div class="relative flex items-center justify-center p-1 bg-white rounded-xl shadow-xs border border-slate-100 group-hover:border-teal-300 transition-all">
                        <img 
                            src="{{ asset('images/logo-tourbaik-header.jpg') }}" 
                            alt="TOURBAIK Logo" 
                            class="h-12 w-auto max-w-[150px] object-contain transition-transform group-hover:scale-105"
                        >
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] tracking-[0.2em] uppercase font-bold text-teal-800">Biro Haji & Umrah</span>
                        <span class="text-xs text-slate-700 font-medium hidden sm:block">Amanah &bull; Khusyuk &bull; Bintang 5</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        Beranda
                    </a>
                    <a href="{{ route('home') }}#paket" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        Paket Pilihan
                    </a>
                    <a href="{{ route('home') }}#keunggulan" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        Keunggulan
                    </a>
                    <a href="{{ route('home') }}#itinerary" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        Itinerary Perjalanan
                    </a>
                    <a href="{{ route('home') }}#testimoni" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        Testimoni
                    </a>
                    <a href="{{ route('home') }}#faq" class="text-sm font-semibold text-slate-700 hover:text-teal-700 transition-colors py-2 border-b-2 border-transparent hover:border-teal-600">
                        FAQ
                    </a>
                </nav>

                <!-- Right Action CTA -->
                <div class="hidden sm:flex items-center gap-3">
                    <a 
                        href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi paket Umrah/Haji TOURBAIK.') }}" 
                        target="_blank" 
                        rel="noopener"
                        class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full text-xs font-bold tracking-wide text-white bg-gradient-to-r from-teal-700 via-teal-600 to-cyan-600 hover:from-teal-800 hover:to-cyan-700 shadow-md shadow-teal-700/20 hover:shadow-teal-700/35 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200"
                    >
                        <span class="w-2 h-2 rounded-full bg-emerald-300 animate-ping"></span>
                        <span>Konsultasi WhatsApp</span>
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>

                <!-- Mobile Menu Hamburger Button -->
                <button 
                    type="button" 
                    id="mobileMenuToggle"
                    class="lg:hidden p-2 rounded-lg text-slate-600 hover:text-teal-700 hover:bg-slate-100 focus:outline-none"
                    aria-label="Toggle navigation menu"
                >
                    <svg class="w-6 h-6" id="menuOpenIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg class="w-6 h-6 hidden" id="menuCloseIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 shadow-xl space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Beranda</a>
            <a href="{{ route('home') }}#paket" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Paket Pilihan</a>
            <a href="{{ route('home') }}#keunggulan" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Keunggulan Layanan</a>
            <a href="{{ route('home') }}#itinerary" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Itinerary Perjalanan</a>
            <a href="{{ route('home') }}#testimoni" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Testimoni Jamaah</a>
            <a href="{{ route('home') }}#faq" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">FAQ & Bantuan</a>
            <a href="{{ route('privacy') }}" class="block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-teal-50 hover:text-teal-700">Kebijakan Privasi</a>
            
            <div class="pt-4 border-t border-slate-100 flex flex-col gap-2">
                <a 
                    href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi paket Umrah/Haji TOURBAIK.') }}" 
                    target="_blank" 
                    rel="noopener"
                    class="w-full text-center py-3 rounded-xl font-bold text-white bg-gradient-to-r from-teal-700 to-cyan-600 shadow-md"
                >
                    Chat Konsultan WhatsApp (0812-9999-7703)
                </a>
            </div>
        </div>
    </header>

    <!-- MAIN BODY CONTENT -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-slate-200 border-t border-teal-900/50 pt-16 pb-12 relative overflow-hidden bg-[#05191d]" style="background-color: #05191d !important;">
        <!-- Subtle Glow Background -->
        <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-teal-500/10 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-cyan-500/5 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-teal-900/60">
                
                <!-- Col 1: Brand & Credibility (4 cols) -->
                <div class="lg:col-span-4 space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-1 rounded-xl shadow-xs inline-block">
                            <img src="{{ asset('images/logo-tourbaik-header.jpg') }}" alt="TOURBAIK Logo" class="h-12 w-auto object-contain">
                        </div>
                        <div>
                            <span class="block text-white font-extrabold text-lg tracking-wider">TOURBAIK</span>
                            <span class="block text-teal-400 text-xs font-medium">Biro Perjalanan Haji & Umrah Bintang 5</span>
                        </div>
                    </div>

                    <p class="text-sm text-slate-200 leading-relaxed">
                        Penyelenggara resmi perjalanan ibadah Umrah dan Haji Khusus di Indonesia. Berkomitmen menghadirkan pengalaman spiritual yang khusyuk, bimbingan sesuai Sunnah, kenyamanan hotel dekat pelataran, dan kepastian izin 100%.
                    </p>

                    <!-- Official Accreditation Box -->
                    <div class="bg-teal-950/80 border border-teal-700/70 rounded-xl p-3.5 space-y-1.5 text-xs text-teal-200 shadow-md">
                        <div class="flex items-center gap-2 font-bold text-white">
                            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Legalitas Kemenag RI Resmi</span>
                        </div>
                        <p class="text-slate-200 text-[11px] leading-relaxed">
                            Izin Kemenag RI NO.25072200719360001 &bull; Anggota Asosiasi Resmi Penyelenggara Umrah & Haji
                        </p>
                    </div>

                    <!-- 5 Pasti Umrah Badges -->
                    <div class="flex flex-wrap gap-1.5 text-[10px] font-bold text-teal-200">
                        <span class="px-2 py-1 rounded bg-teal-900/80 border border-teal-700">1. Pasti Travelnya</span>
                        <span class="px-2 py-1 rounded bg-teal-900/80 border border-teal-700">2. Pasti Jadwalnya</span>
                        <span class="px-2 py-1 rounded bg-teal-900/80 border border-teal-700">3. Pasti Terbangnya</span>
                        <span class="px-2 py-1 rounded bg-teal-900/80 border border-teal-700">4. Pasti Hotelnya</span>
                        <span class="px-2 py-1 rounded bg-teal-900/80 border border-teal-700">5. Pasti Visanya</span>
                    </div>
                </div>

                <!-- Col 2: Program & Paket (2 cols) -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white border-l-2 border-teal-400 pl-2.5">Program Paket</h4>
                    <ul class="space-y-2.5 text-xs text-slate-200">
                        <li><a href="{{ route('home') }}#paket" class="hover:text-cyan-300 transition-colors">Umrah Signature VIP 9H</a></li>
                        <li><a href="{{ route('home') }}#paket" class="hover:text-cyan-300 transition-colors">Umrah Reguler Berkah 9H</a></li>
                        <li><a href="{{ route('home') }}#paket" class="hover:text-cyan-300 transition-colors">Umrah Plus Turki 12H</a></li>
                        <li><a href="{{ route('home') }}#paket" class="hover:text-cyan-300 transition-colors">Umrah Ramadhan & I'tikaf</a></li>
                        <li><a href="{{ route('home') }}#paket" class="hover:text-cyan-300 transition-colors">Haji Khusus Furoda 1448 H</a></li>
                    </ul>
                </div>

                <!-- Col 3: Layanan & Informasi Legal (3 cols) -->
                <div class="lg:col-span-3 space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white border-l-2 border-teal-400 pl-2.5">Bantuan & Legal</h4>
                    <ul class="space-y-2.5 text-xs text-slate-200">
                        <li>
                            <a href="{{ route('privacy') }}" class="text-teal-300 font-bold hover:text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                <span>Kebijakan Privasi (Data Jamaah)</span>
                            </a>
                        </li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-cyan-300 transition-colors">Syarat Pembuatan Paspor Umrah</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-cyan-300 transition-colors">Aturan Vaksinasi Meningitis</a></li>
                        <li><a href="{{ route('home') }}#keunggulan" class="hover:text-cyan-300 transition-colors">Fasilitas Jamaah Lansia & Roda</a></li>
                        <li><a href="{{ route('home') }}#itinerary" class="hover:text-cyan-300 transition-colors">Panduan Manasik & Doa</a></li>
                        <li><a href="{{ route('home') }}#faq" class="hover:text-cyan-300 transition-colors">Ketentuan Pendaftaran & Konsultasi</a></li>
                    </ul>

                    <!-- Bank Accounts -->
                    <div class="pt-2">
                        <span class="block text-[11px] text-teal-200 font-bold uppercase tracking-wider mb-2">Rekening Resmi Pembayaran:</span>
                        <div class="bg-teal-950/70 p-3 rounded-xl border border-teal-800 text-[11px] text-slate-200 space-y-2.5">
                            <div>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-white">Bank Mandiri</span>
                                    <span class="text-[9px] px-1.5 py-0.5 rounded bg-teal-900/90 text-teal-200 font-bold uppercase">Mandiri</span>
                                </div>
                                <p class="text-cyan-300 font-mono font-bold tracking-wider text-xs mt-0.5">1670004926746</p>
                            </div>
                            <div class="pt-2 border-t border-teal-800/60">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-white">Bank BCA</span>
                                    <span class="text-[9px] px-1.5 py-0.5 rounded bg-teal-900/90 text-teal-200 font-bold uppercase">BCA</span>
                                </div>
                                <p class="text-cyan-300 font-mono font-bold tracking-wider text-xs mt-0.5">5771470972</p>
                            </div>
                            <p class="text-[10px] text-slate-300 pt-1.5 border-t border-teal-800/60">
                                a.n. <strong class="text-white">PT Khaira Berkah Mandiri</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Col 4: Alamat & Kontak (3 cols) -->
                <div class="lg:col-span-3 space-y-4">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-white border-l-2 border-teal-400 pl-2.5">Kantor Operasional</h4>
                    
                    <div class="space-y-3 text-xs text-slate-200">
                        <div>
                            <span class="block font-bold text-teal-300 text-[11px] uppercase tracking-wide">Alamat Resmi:</span>
                            <p class="leading-relaxed">Jl. Rose Garden 1 No.86, Jaka Setia, Kec. Bekasi Selatan, Kota Bekasi Jawa Barat 17147</p>
                        </div>

                        <div class="pt-1 space-y-2">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-teal-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>Telepon: <a href="tel:02182784415" class="hover:text-cyan-300 transition-colors font-medium">021-82784415</a></span>
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                                <span>WhatsApp: <a href="https://wa.me/6281299997703" target="_blank" rel="noopener" class="text-emerald-400 font-bold hover:underline">0812-9999-7703</a></span>
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-teal-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span><a href="mailto:tourbaik.id@gmail.com" class="hover:text-cyan-300 transition-colors">tourbaik.id@gmail.com</a></span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Compliance Notes -->
            <div class="pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-300 gap-4">
                <p>&copy; {{ date('Y') }} PT Khaira Berkah Mandiri. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('privacy') }}" class="hover:text-teal-300 transition-colors underline underline-offset-4">Kebijakan Privasi</a>
                    <span>&bull;</span>
                    <a href="{{ route('home') }}#faq" class="hover:text-teal-300 transition-colors">Syarat & Ketentuan</a>
                    <span>&bull;</span>
                    <span class="text-teal-400 font-medium">Biro Haji & Umrah Amanah Indonesia</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- FLOATING WHATSAPP INTERACTIVE WIDGET -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end">
        <!-- Chat Popup Box (Hidden by default) -->
        <div id="waChatPopup" class="hidden mb-3 w-80 bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden transition-all duration-300 transform origin-bottom-right">
            <!-- Header -->
            <div class="bg-gradient-to-r from-teal-800 to-cyan-700 p-4 text-white flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <img src="{{ asset('images/logo-tourbaik-favicon.png') }}" alt="TOURBAIK Staff" class="w-10 h-10 rounded-full border-2 border-white bg-white p-1 object-contain">
                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-400 border-2 border-teal-800 rounded-full"></span>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold">Konsultan Ibadah TOURBAIK</h4>
                        <p class="text-[11px] text-teal-100 flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            Online &bull; Siap Membantu
                        </p>
                    </div>
                </div>
                <button type="button" id="closeWaPopup" class="text-teal-200 hover:text-white p-1 rounded-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Body Message -->
            <div class="p-4 bg-slate-50 space-y-3 text-xs">
                <div class="bg-white p-3 rounded-xl rounded-tl-none shadow-xs border border-slate-100 text-slate-700 leading-relaxed">
                    Assalamu'alaikum Bapak/Ibu! ✨<br>
                    Ada yang bisa kami bantu mengenai jadwal keberangkatan, rincian biaya, atau konsultasi paket Umrah & Haji Khusus TOURBAIK?
                </div>

                <!-- Quick Prompt Buttons -->
                <div class="space-y-1.5 pt-1">
                    <a 
                        href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi paket Umrah Bintang 5 TOURBAIK.') }}" 
                        target="_blank" 
                        rel="noopener"
                        class="block text-left w-full px-3 py-2 bg-white hover:bg-teal-50 border border-slate-200 hover:border-teal-300 rounded-lg text-slate-700 font-medium transition-all"
                    >
                        ✨ Tanya Paket Umrah Bintang 5
                    </a>
                    <a 
                        href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, mohon kirimkan brosur lengkap Haji Furoda & Haji Khusus 1448 H.') }}" 
                        target="_blank" 
                        rel="noopener"
                        class="block text-left w-full px-3 py-2 bg-white hover:bg-teal-50 border border-slate-200 hover:border-teal-300 rounded-lg text-slate-700 font-medium transition-all"
                    >
                        🕋 Brosur Haji Furoda & Khusus
                    </a>
                    <a 
                        href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin info pendaftaran dan persyaratan ibadah.') }}" 
                        target="_blank" 
                        rel="noopener"
                        class="block text-left w-full px-3 py-2 bg-white hover:bg-teal-50 border border-slate-200 hover:border-teal-300 rounded-lg text-slate-700 font-medium transition-all"
                    >
                        📋 Syarat & Cara Pendaftaran
                    </a>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="p-3 bg-white border-t border-slate-100">
                <a 
                    href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum Konsultan TOURBAIK, saya ingin konsultasi ibadah.') }}" 
                    target="_blank" 
                    rel="noopener"
                    class="w-full flex items-center justify-center gap-2 py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs transition-colors shadow-sm"
                >
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                    <span>Mulai Chat WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- Floating Trigger Button -->
        <button 
            type="button" 
            id="toggleWaPopup"
            class="group relative flex items-center gap-3 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white px-4 py-3 rounded-full shadow-xl hover:shadow-2xl hover:scale-105 active:scale-95 transition-all duration-300 focus:outline-none"
            aria-label="Tanya Kami di WhatsApp"
        >
            <span class="absolute -top-1 -right-1 flex h-4 w-4">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-4 w-4 bg-emerald-500 border-2 border-white"></span>
            </span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
            <span class="font-bold text-xs tracking-wide hidden sm:inline">Konsultasi Umrah</span>
        </button>
    </div>

    <!-- Interactive Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuOpenIcon = document.getElementById('menuOpenIcon');
            const menuCloseIcon = document.getElementById('menuCloseIcon');

            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                    menuOpenIcon.classList.toggle('hidden');
                    menuCloseIcon.classList.toggle('hidden');
                });
            }

            // Floating WA Popup Toggle
            const toggleWaBtn = document.getElementById('toggleWaPopup');
            const waPopup = document.getElementById('waChatPopup');
            const closeWaBtn = document.getElementById('closeWaPopup');

            if (toggleWaBtn && waPopup) {
                toggleWaBtn.addEventListener('click', function () {
                    waPopup.classList.toggle('hidden');
                });
            }

            if (closeWaBtn && waPopup) {
                closeWaBtn.addEventListener('click', function () {
                    waPopup.classList.add('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
