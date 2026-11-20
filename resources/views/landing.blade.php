@extends('layouts.app')

@section('title', 'TOURBAIK | Travel Haji Khusus & Umrah Bintang 5 Resmi Kemenag RI')
@section('meta_description', 'Biro perjalanan resmi Haji Khusus & Umrah Bintang 5 berizin Kemenag RI. Bimbingan sesuai Sunnah, hotel 0m pelataran Masjidil Haram & Nabawi, serta kepastian berangkat.')

@section('content')

<!-- =========================================================================
     1. HERO SECTION (Atmospheric, Elegant, High-Trust)
========================================================================= -->
<section class="relative bg-tourbaik-hero text-white pt-12 pb-24 lg:pt-16 lg:pb-32 overflow-hidden" style="background-color: #05191d !important; background: linear-gradient(175deg, #05191d 0%, #092c33 45%, #0c3b44 100%) !important;">
    <!-- Geometric Dot Pattern as an absolute overlay layer -->
    <div class="pattern-overlay-dots"></div>

    <!-- Ambient Light Spheres matching Logo Cyan & Teal -->
    <div class="absolute top-10 right-10 w-[500px] h-[500px] bg-cyan-400/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-10 w-[450px] h-[450px] bg-teal-500/15 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Text (7 Cols) -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Arabic Bismillah Calligraphy Greeting -->
                <div class="inline-block">
                    <span class="font-serif text-teal-300/95 text-lg sm:text-xl tracking-wide select-none" style="font-family: var(--font-arabic);">
                        بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                    </span>
                </div>

                <!-- Trust Pill Badge -->
                <div>
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-teal-950/80 border border-teal-400/40 text-teal-200 text-xs font-semibold backdrop-blur-md shadow-inner">
                        <span class="flex h-2 w-2 relative">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-teal-400"></span>
                        </span>
                        <span>Izin Resmi Kemenag RI NO.25072200719360001</span>
                    </div>
                </div>

                <!-- Main Hero Headline -->
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-[1.15]">
                    Menjawab Panggilan <br class="hidden sm:inline">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-300 via-cyan-300 to-teal-100">Baitullah</span>
                    dengan Hati Tenang & Khusyuk
                </h1>

                <!-- Subtitle / Value Proposition -->
                <p class="text-base sm:text-lg text-slate-200 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Biro perjalanan resmi Haji Khusus & Umrah Bintang 5. Bimbingan ibadah intensif sesuai Sunnah, hotel 0 meter di pelataran Masjidil Haram & Nabawi, serta garansi kepastian tiket & visa sejak awal.
                </p>

                <!-- CTA Action Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a 
                        href="#paket" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full font-bold text-sm text-slate-950 bg-gradient-to-r from-teal-300 via-cyan-300 to-teal-200 hover:from-teal-200 hover:to-cyan-200 shadow-lg shadow-teal-500/25 hover:shadow-cyan-400/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200"
                    >
                        <span>Eksplorasi Paket Pilihan</span>
                        <svg class="w-4 h-4 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                    </a>

                    <a 
                        href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin konsultasi langsung dengan Pembimbing Ibadah TOURBAIK.') }}" 
                        target="_blank" 
                        rel="noopener"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-full font-bold text-sm text-white bg-white/10 hover:bg-white/20 border border-white/25 backdrop-blur-md hover:-translate-y-0.5 transition-all duration-200"
                    >
                        <svg class="w-4 h-4 text-emerald-400 fill-current" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                        <span>Konsultasi WhatsApp</span>
                    </a>
                </div>

                <!-- Trust Metrics Strip -->
                <div class="pt-8 border-t border-teal-800/80 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center lg:text-left">
                    <div>
                        <span class="block text-2xl sm:text-3xl font-extrabold text-white">10.000+</span>
                        <span class="text-xs text-teal-200 font-medium">Jamaah Diberangkatkan</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-extrabold text-cyan-300">100%</span>
                        <span class="text-xs text-teal-200 font-medium">Garansi Visa & Tiket</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-extrabold text-amber-300">⭐️ 4.9/5</span>
                        <span class="text-xs text-teal-200 font-medium">Tingkat Kepuasan</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-extrabold text-white">0 Meter</span>
                        <span class="text-xs text-teal-200 font-medium">Hotel ke Pelataran</span>
                    </div>
                </div>

            </div>

            <!-- Right Hero Photo Slider (5 Cols) : Mekkah, Madinah & Raudhah Interactive Carousel -->
            <div class="lg:col-span-5">
                <div class="relative bg-slate-900/60 backdrop-blur-xl rounded-3xl p-3 sm:p-4 border border-teal-500/40 shadow-2xl overflow-hidden ring-1 ring-cyan-400/20">
                    
                    <!-- Decorative Top Header Badge -->
                    <div class="flex items-center justify-between px-3 py-2 border-b border-teal-800/40 text-xs mb-3">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span class="text-teal-200 font-bold uppercase tracking-wider text-[11px]">Galeri Tanah Suci</span>
                        </div>
                        <span id="heroSlideCounter" class="bg-teal-950/80 border border-teal-600/50 text-cyan-300 font-mono font-bold text-[11px] px-2.5 py-0.5 rounded-full">
                            01 / {{ sprintf('%02d', count($heroSlides)) }}
                        </span>
                    </div>

                    <!-- Slide Container -->
                    <div id="heroSlider" class="relative h-[360px] sm:h-[400px] lg:h-[420px] rounded-2xl overflow-hidden shadow-inner group">
                        @foreach($heroSlides as $idx => $slide)
                        <div 
                            class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out {{ $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 pointer-events-none z-0' }}"
                            data-index="{{ $idx }}"
                        >
                            <img 
                                src="{{ $slide['image'] }}" 
                                alt="{{ $slide['title'] }} - {{ $slide['city'] }}" 
                                class="w-full h-full object-cover object-center transform transition-transform duration-1000 ease-out group-hover:scale-105"
                                loading="{{ $idx === 0 ? 'eager' : 'lazy' }}"
                            >
                            
                            <!-- Top overlay gradient -->
                            <div class="absolute inset-x-0 top-0 h-24 bg-gradient-to-b from-slate-950/70 to-transparent pointer-events-none"></div>

                            <!-- City Badge Top Left -->
                            <div class="absolute top-4 left-4 z-20">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-slate-950/80 text-amber-300 border border-amber-400/40 backdrop-blur-md shadow-md">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                                    <span>{{ $slide['city'] }}</span>
                                </span>
                            </div>

                            <!-- Bottom overlay gradient & Caption content -->
                            <div class="absolute inset-x-0 bottom-0 pt-20 pb-5 px-5 bg-gradient-to-t from-slate-950 via-slate-950/85 to-transparent z-20">
                                <h3 class="text-xl sm:text-2xl font-black text-white tracking-wide drop-shadow-md">
                                    {{ $slide['title'] }}
                                </h3>
                                <p class="text-xs sm:text-sm text-slate-200 mt-1 leading-snug drop-shadow-sm font-medium">
                                    {{ $slide['caption'] }}
                                </p>
                            </div>
                        </div>
                        @endforeach

                        <!-- Previous / Next Navigation Arrows -->
                        <button 
                            type="button" 
                            id="heroPrevBtn" 
                            class="absolute left-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-slate-950/70 hover:bg-teal-600 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all z-30 shadow-lg opacity-80 hover:opacity-100 hover:scale-105 active:scale-95"
                            aria-label="Foto Sebelumnya"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button 
                            type="button" 
                            id="heroNextBtn" 
                            class="absolute right-3 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full bg-slate-950/70 hover:bg-teal-600 text-white backdrop-blur-md border border-white/20 flex items-center justify-center transition-all z-30 shadow-lg opacity-80 hover:opacity-100 hover:scale-105 active:scale-95"
                            aria-label="Foto Berikutnya"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </button>

                        <!-- Dot Pagination Indicators -->
                        <div class="absolute bottom-2.5 right-4 z-30 flex items-center gap-1.5" id="heroDotContainer">
                            @foreach($heroSlides as $idx => $slide)
                            <button 
                                type="button" 
                                class="hero-dot h-2 rounded-full transition-all duration-300 {{ $idx === 0 ? 'w-6 bg-cyan-400' : 'w-2 bg-white/50 hover:bg-white/80' }}"
                                data-index="{{ $idx }}"
                                aria-label="Lihat slide {{ $idx + 1 }}"
                            ></button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Slide Footer Quick Info -->
                    <div class="pt-3 px-2 flex items-center justify-between text-xs text-teal-200">
                        <span class="flex items-center gap-1.5 text-[11px] text-slate-300">
                            <svg class="w-4 h-4 text-teal-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Hotel Bintang 5 Dekat Pelataran</span>
                        </span>
                        <a href="#paket" class="text-cyan-300 hover:text-white font-bold transition-colors flex items-center gap-1 text-[11px]">
                            <span>Pilih Paket Ibadah</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- =========================================================================
     2. 5 PASTI UMRAH KEMENAG BANNER (Authority & Security)
========================================================================= -->
<section class="bg-white border-y border-slate-200/80 py-8 relative shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-6">
            <span class="text-xs font-bold uppercase tracking-widest text-teal-800">Komitmen Layanan Kemenag RI</span>
            <h3 class="text-lg font-extrabold text-slate-900">Garansi Program 5 Pasti Umrah TOURBAIK</h3>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3.5">
            <!-- 1 -->
            <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 hover:border-teal-400 hover:bg-teal-50/40 transition-all text-center group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-teal-100 text-teal-900 flex items-center justify-center font-bold text-sm mb-2 group-hover:scale-110 transition-transform">
                    1
                </div>
                <h4 class="text-xs font-bold text-slate-900">Pasti Travelnya</h4>
                <p class="text-[11px] text-slate-700 mt-0.5">Izin Kemenag RI NO.25072200719360001</p>
            </div>

            <!-- 2 -->
            <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 hover:border-teal-400 hover:bg-teal-50/40 transition-all text-center group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-teal-100 text-teal-900 flex items-center justify-center font-bold text-sm mb-2 group-hover:scale-110 transition-transform">
                    2
                </div>
                <h4 class="text-xs font-bold text-slate-900">Pasti Jadwalnya</h4>
                <p class="text-[11px] text-slate-700 mt-0.5">Tanggal Pasti & Terjadwal Rapih</p>
            </div>

            <!-- 3 -->
            <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 hover:border-teal-400 hover:bg-teal-50/40 transition-all text-center group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-teal-100 text-teal-900 flex items-center justify-center font-bold text-sm mb-2 group-hover:scale-110 transition-transform">
                    3
                </div>
                <h4 class="text-xs font-bold text-slate-900">Pasti Terbangnya</h4>
                <p class="text-[11px] text-slate-700 mt-0.5">Tiket PP Terbit (Saudia / Garuda)</p>
            </div>

            <!-- 4 -->
            <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 hover:border-teal-400 hover:bg-teal-50/40 transition-all text-center group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-teal-100 text-teal-900 flex items-center justify-center font-bold text-sm mb-2 group-hover:scale-110 transition-transform">
                    4
                </div>
                <h4 class="text-xs font-bold text-slate-900">Pasti Hotelnya</h4>
                <p class="text-[11px] text-slate-700 mt-0.5">Bintang 5 & 0m dari Pelataran</p>
            </div>

            <!-- 5 -->
            <div class="col-span-2 sm:col-span-1 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 hover:border-teal-400 hover:bg-teal-50/40 transition-all text-center group">
                <div class="w-10 h-10 mx-auto rounded-xl bg-teal-100 text-teal-900 flex items-center justify-center font-bold text-sm mb-2 group-hover:scale-110 transition-transform">
                    5
                </div>
                <h4 class="text-xs font-bold text-slate-900">Pasti Visanya</h4>
                <p class="text-[11px] text-slate-700 mt-0.5">e-Visa Nusuk Resmi Terverifikasi</p>
            </div>
        </div>
    </div>
</section>


<!-- =========================================================================
     3. PILAR KEUNGGULAN TOURBAIK (Why Choose Us)
========================================================================= -->
<section id="keunggulan" class="py-20 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-800 bg-teal-100 px-3.5 py-1 rounded-full border border-teal-200">
                Standar Pelayanan Prima
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                Mengapa Mempercayakan Ibadah Anda kepada TOURBAIK?
            </h2>
            <p class="text-sm sm:text-base text-slate-700">
                Kami memahami bahwa perjalanan ke Tanah Suci adalah momen sakral sekali seumur hidup. Oleh karena itu, setiap rincian dirancang untuk kenyamanan lahir dan ketenangan batin Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Pillar 1 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-600 to-cyan-600 text-white flex items-center justify-center mb-6 shadow-md shadow-teal-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Hotel 0 Meter Pelataran</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Akomodasi di Swissôtel Al Maqam / Pullman Zamzam Clock Tower Makkah dan Frontel Al Harithia Madinah. Jamaah cukup melangkah 1-2 menit menuju shaf shalat, sangat ramah bagi orang tua dan lansia.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Lihat Rincian Hotel Bintang 5</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-700 to-emerald-700 text-white flex items-center justify-center mb-6 shadow-md shadow-teal-600/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Bimbingan Sesuai Sunnah</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Didampingi langsung oleh Ustadz & Muthawwif alumni Universitas Islam Madinah dan Al-Azhar yang bersertifikasi resmi Kemenag. Bimbingan doa, tata cara manasik, hingga tausiyah mendalam di Tanah Suci.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Manasik Teori & Praktik Replika Ka'bah</span>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-600 to-teal-800 text-white flex items-center justify-center mb-6 shadow-md shadow-cyan-600/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Kereta Cepat Haramain Train</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Perjalanan Madinah - Makkah ditempuh hanya dalam waktu 2 jam menggunakan Kereta Cepat Haramain (High Speed Railway), memangkas 6 jam perjalanan bus darat yang melelahkan sehingga fisik tetap bugar.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Hemat Waktu & Tenaga untuk Ibadah</span>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-800 to-slate-900 text-white flex items-center justify-center mb-6 shadow-md shadow-slate-700/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Penerbangan Direct Flight</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Menggunakan maskapai resmi terkemuka: Saudia Airlines & Garuda Indonesia langsung tanpa transit di negara ketiga. Bagasi aman, pendaratan langsung di Madinah atau Jeddah International Airport.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Saudia SV & Garuda Indonesia GA</span>
                </div>
            </div>

            <!-- Pillar 5 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-700 text-white flex items-center justify-center mb-6 shadow-md shadow-amber-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Legalitas Transparan & Tanpa Biaya Tersembunyi</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Seluruh biaya all-in sudah termasuk tiket pesawat PP, visa, asuransi perjalanan, perlengkapan eksklusif koper fiber hardcase, manasik, city tour Thaif, dan handling bandara. Tidak ada pungutan siluman.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Kuitansi Resmi & Kontrak Ibadah Baku</span>
                </div>
            </div>

            <!-- Pillar 6 -->
            <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative group overflow-hidden">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-600 to-teal-700 text-white flex items-center justify-center mb-6 shadow-md shadow-emerald-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Ramah Lansia & Layanan Medis</h3>
                <p class="text-sm text-slate-700 leading-relaxed">
                    Fasilitas khusus jamaah lanjut usia: pendorong kursi roda resmi berlisensi saat tawaf & sa'i, tim dokter pendamping, pendampingan keluarga, dan menu buffet makanan khas Nusantara yang higienis.
                </p>
                <div class="mt-4 pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-bold text-teal-800">
                    <span>Pendampingan Hangat Penuh Kasih</span>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================================
     4. KATALOG PAKET UNGGULAN (Enriched with Authentic Photography)
========================================================================= -->
<section id="paket" class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-bold uppercase tracking-widest text-teal-800 bg-teal-50 px-3.5 py-1 rounded-full border border-teal-200">
                    Pilihan Paket Keberangkatan
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                    Paket Umrah & Haji Khusus TOURBAIK
                </h2>
                <p class="text-sm text-slate-700">
                    Pilih program yang paling sesuai dengan kebutuhan ibadah Anda dan keluarga. Seluruh paket bergaransi kepastian jadwal, tiket, dan akomodasi.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="flex items-center gap-1.5 p-1 bg-slate-100 rounded-2xl overflow-x-auto max-w-full" id="packageTabs">
                <button type="button" data-tab="all" class="tab-btn px-4 py-2 rounded-xl text-xs font-bold bg-white text-teal-900 shadow-sm transition-all whitespace-nowrap">Semua Paket</button>
                <button type="button" data-tab="vip" class="tab-btn px-4 py-2 rounded-xl text-xs font-bold text-slate-700 hover:text-teal-900 transition-all whitespace-nowrap">Umrah VIP ⭐️5</button>
                <button type="button" data-tab="reguler" class="tab-btn px-4 py-2 rounded-xl text-xs font-bold text-slate-700 hover:text-teal-900 transition-all whitespace-nowrap">Umrah Reguler</button>
                <button type="button" data-tab="plus" class="tab-btn px-4 py-2 rounded-xl text-xs font-bold text-slate-700 hover:text-teal-900 transition-all whitespace-nowrap">Umrah Plus Turki</button>
                <button type="button" data-tab="haji" class="tab-btn px-4 py-2 rounded-xl text-xs font-bold text-slate-700 hover:text-teal-900 transition-all whitespace-nowrap">Haji Furoda / Khusus</button>
            </div>
        </div>

        <!-- Package Grid with Cover Photos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="packageContainer">
            @foreach($packages as $pkg)
            <div 
                class="package-card bg-white rounded-3xl border border-slate-200/90 shadow-sm hover:shadow-2xl hover:border-teal-400 transition-all duration-300 flex flex-col overflow-hidden group" 
                data-category="{{ $pkg['category'] }}"
            >
                <!-- Cover Image Header with Badges -->
                <div class="relative h-56 w-full overflow-hidden bg-slate-900">
                    <img 
                        src="{{ $pkg['cover_image'] }}" 
                        alt="{{ $pkg['title'] }}" 
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>

                    <!-- Top Floating Badges -->
                    <div class="absolute top-4 left-4 right-4 flex items-center justify-between gap-2">
                        <span class="inline-block text-[11px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-md
                            @if($pkg['badge_type'] === 'popular') bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 font-black
                            @elseif($pkg['badge_type'] === 'vip-gold') bg-gradient-to-r from-yellow-300 to-amber-400 text-slate-950 font-black
                            @elseif($pkg['badge_type'] === 'special') bg-cyan-400 text-slate-950 font-bold
                            @elseif($pkg['badge_type'] === 'ramadhan') bg-emerald-400 text-slate-950 font-bold
                            @elseif($pkg['badge_type'] === 'early-bird') bg-teal-300 text-slate-950 font-bold
                            @else bg-teal-600 text-white font-bold
                            @endif">
                            {{ $pkg['badge'] }}
                        </span>

                        <span class="bg-slate-950/80 backdrop-blur-md text-amber-300 border border-white/20 px-2.5 py-1 rounded-full text-[11px] font-bold shadow-md flex items-center gap-1">
                            <span>⭐️ {{ $pkg['hotel_stars'] }}</span>
                            <span class="text-white/60">&bull;</span>
                            <span class="text-cyan-200 text-[10px]">{{ $pkg['distance_makkah'] }}</span>
                        </span>
                    </div>

                    <!-- Bottom Overlay Text in Header -->
                    <div class="absolute bottom-3 left-4 right-4 text-white">
                        <span class="text-[11px] font-semibold text-emerald-300 flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            {{ $pkg['seats_left'] }} Seat Tersisa &bull; {{ $pkg['duration'] }}
                        </span>
                        <h3 class="text-lg sm:text-xl font-extrabold text-white leading-tight group-hover:text-cyan-200 transition-colors">
                            {{ $pkg['title'] }}
                        </h3>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="p-6 flex-grow flex flex-col justify-between space-y-5">
                    
                    <!-- Departure & Airline Highlight -->
                    <div class="bg-teal-50/70 p-3 rounded-2xl border border-teal-100 flex items-center justify-between text-xs text-teal-950">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span class="font-bold">{{ $pkg['departure_date'] }}</span>
                        </div>
                        <span class="bg-white px-2 py-0.5 rounded-md font-semibold text-teal-900 border border-teal-200 text-[11px]">
                            {{ $pkg['airline'] }}
                        </span>
                    </div>

                    <!-- Hotel Details -->
                    <div class="space-y-2 text-xs text-slate-700">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-teal-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            <div>
                                <span class="font-bold text-slate-900">Makkah:</span>
                                <span>{{ $pkg['hotel_makkah'] }}</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-teal-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            <div>
                                <span class="font-bold text-slate-900">Madinah:</span>
                                <span>{{ $pkg['hotel_madinah'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Highlight Features -->
                    <div class="border-t border-slate-100 pt-3 space-y-1.5">
                        <span class="text-[11px] font-bold text-teal-900 uppercase tracking-wider block">Keunggulan Paket:</span>
                        <ul class="text-xs text-slate-700 space-y-1">
                            @foreach(array_slice($pkg['features'], 0, 3) as $ft)
                            <li class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                <span>{{ $ft }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Pricing & CTA -->
                    <div class="pt-4 border-t border-slate-100">
                        <div class="mb-4">
                            <span class="text-xs text-slate-600 font-semibold block">Mulai dari (Quad Room):</span>
                            <div class="flex items-baseline gap-1">
                                <span class="text-2xl sm:text-3xl font-black text-slate-950">
                                    Rp {{ number_format($pkg['price_quad'], 0, ',', '.') }}
                                </span>
                                <span class="text-xs text-slate-600 font-medium">/ pax</span>
                            </div>
                            <span class="text-[11px] text-teal-800 font-bold block mt-0.5">All-In Termasuk Visa & Perlengkapan Eksklusif</span>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <button 
                                type="button" 
                                onclick="openPackageModal({{ json_encode($pkg) }})"
                                class="py-2.5 px-3 rounded-xl border border-slate-300 hover:border-teal-600 hover:bg-teal-50 text-slate-800 hover:text-teal-900 text-xs font-bold text-center transition-all shadow-2xs"
                            >
                                Detail Itinerary
                            </button>

                            <a 
                                href="https://wa.me/6281299997703?text={{ urlencode('Assalamu\'alaikum, saya ingin reservasi/tanya seat untuk paket: ' . $pkg['title'] . ' (Keberangkatan: ' . $pkg['departure_date'] . '). Mohon info seat yang masih tersedia.') }}" 
                                target="_blank" 
                                rel="noopener"
                                class="py-2.5 px-3 rounded-xl bg-gradient-to-r from-teal-700 via-teal-600 to-cyan-600 hover:from-teal-800 hover:to-cyan-700 text-white text-xs font-bold text-center shadow-md transition-all flex items-center justify-center gap-1.5"
                            >
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/></svg>
                                <span>Booking Seat</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- =========================================================================
     4. VISUAL JOURNEY ITINERARY (Hari Demi Hari yang Menenteramkan)
========================================================================= -->
<section id="itinerary" class="py-20 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-800 bg-teal-100 px-3.5 py-1 rounded-full border border-teal-200">
                Rangkaian Perjalanan Ibadah
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                Langkah Demi Langkah Menuju Ibadah yang Mabrur
            </h2>
            <p class="text-sm sm:text-base text-slate-700">
                Alur perjalanan yang tersusun rapi, menyeimbangkan waktu ibadah di masjid, pemulihan fisik yang cukup, dan eksplorasi napak tilas sejarah kenabian.
            </p>
        </div>

        <div class="relative">
            <!-- Timeline Vertical Line for Desktop -->
            <div class="hidden md:block absolute left-1/2 top-4 bottom-4 -translate-x-1/2 w-1 bg-gradient-to-b from-teal-500 via-teal-400 to-cyan-500 rounded-full"></div>

            <div class="space-y-10 relative">
                
                <!-- Step 1: CGK to Madinah -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="md:text-right space-y-2">
                        <span class="inline-block text-xs font-bold text-teal-900 bg-teal-100 px-3 py-0.5 rounded-full border border-teal-200">Hari 1 - 2</span>
                        <h3 class="text-xl font-bold text-slate-900">Pelepasan di Jakarta & Tiba di Kota Cahaya Madinah</h3>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Berkumpul di Lounge Eksekutif Bandara Soekarno-Hatta, pengarahan manasik akhir, dan penerbangan langsung menuju Bandara Madinah. Check-in hotel Bintang 5 selangkah dari pintu gerbang utama Masjid Nabawi.
                        </p>
                    </div>
                    <div class="relative md:pl-8">
                        <div class="hidden md:block absolute -left-3.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border-4 border-teal-600 shadow-md"></div>
                        <div class="p-5 bg-white rounded-2xl border border-slate-200/90 shadow-sm space-y-2">
                            <span class="text-xs font-bold text-teal-900 flex items-center gap-1.5">
                                <span>📍 Fokus Spiritual:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                Mengucapkan salam kepada Baginda Rasulullah SAW di Makam Nabi, shalat berjamaah 5 waktu di Masjid Nabawi, dan berdoa di taman surga Raudhah Syarifah yang mulia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Ziarah Madinah -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1 relative md:pr-8 md:text-right">
                        <div class="p-5 bg-white rounded-2xl border border-slate-200/90 shadow-sm space-y-2">
                            <span class="text-xs font-bold text-teal-900 flex items-center md:justify-end gap-1.5">
                                <span>📍 Ziarah Bersejarah:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                Mengambil ibrah dari Bukit Uhud para syuhada, shalat sunnah 2 rakaat di Masjid Quba yang bernilai pahala satu kali umrah, dan melihat kebun kurma asli Madinah.
                            </p>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 space-y-2 md:pl-8">
                        <div class="hidden md:block absolute -left-3.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border-4 border-teal-600 shadow-md"></div>
                        <span class="inline-block text-xs font-bold text-teal-900 bg-teal-100 px-3 py-0.5 rounded-full border border-teal-200">Hari 3</span>
                        <h3 class="text-xl font-bold text-slate-900">Napak Tilas Perjuangan Islam di Madinah</h3>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            City tour ziarah bersejarah dipandu oleh Ustadz pembimbing yang mengupas sejarah dakwah Rasulullah SAW bersama para sahabat Anshar dan Muhajirin.
                        </p>
                    </div>
                </div>

                <!-- Step 3: Miqat & Haramain Train to Makkah -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="md:text-right space-y-2">
                        <span class="inline-block text-xs font-bold text-teal-900 bg-teal-100 px-3 py-0.5 rounded-full border border-teal-200">Hari 4</span>
                        <h3 class="text-xl font-bold text-slate-900">Ihram di Bir Ali & Meluncur Cepat Menuju Makkah</h3>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Mandi sunnah ihram di hotel, mengambil Miqat di Masjid Dzulhulaifah (Bir Ali), berniat Umrah dan bertalbiyah. Menaiki Kereta Cepat Haramain (2 jam) menuju Makkah Al-Mukarramah.
                        </p>
                    </div>
                    <div class="relative md:pl-8">
                        <div class="hidden md:block absolute -left-3.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border-4 border-cyan-500 shadow-md"></div>
                        <div class="p-5 bg-white rounded-2xl border border-slate-200/90 shadow-sm space-y-2">
                            <span class="text-xs font-bold text-teal-900 flex items-center gap-1.5">
                                <span>🕋 Pelaksanaan Umrah Pertama:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                Check-in Swissôtel Makkah, istirahat sejenak, lalu bersama-sama melaksanakan Tawaf mengitari Ka'bah, Sa'i antara Shafa & Marwah, dan bertahallul dipandu Muthawwif secara khusyuk.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 4: City Tour Thaif & Cable Car -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1 relative md:pr-8 md:text-right">
                        <div class="p-5 bg-white rounded-2xl border border-slate-200/90 shadow-sm space-y-2">
                            <span class="text-xs font-bold text-teal-900 flex items-center md:justify-end gap-1.5">
                                <span>🌹 Kesegaran Kota Pegunungan:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                Ziarah ke Masjid Abdullah bin Abbas, Masjid Addas, kebun buah dan mawar Thaif, serta menikmati panorama pegunungan dengan Kereta Gantung (Teleferik).
                            </p>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 space-y-2 md:pl-8">
                        <div class="hidden md:block absolute -left-3.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border-4 border-teal-600 shadow-md"></div>
                        <span class="inline-block text-xs font-bold text-teal-900 bg-teal-100 px-3 py-0.5 rounded-full border border-teal-200">Hari 5 - 6</span>
                        <h3 class="text-xl font-bold text-slate-900">Wisata Spiritual Kota Sejuk Thaif & Ziarah Makkah</h3>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Mengunjungi kota Thaif yang dingin dan bersejarah, mengenang kesabaran dakwah Nabi Muhammad SAW, sekaligus mengambil Miqat di Qarnul Manazil bagi yang ingin umrah sunnah.
                        </p>
                    </div>
                </div>

                <!-- Step 5: Tawaf Wada & Returning -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="md:text-right space-y-2">
                        <span class="inline-block text-xs font-bold text-teal-900 bg-teal-100 px-3 py-0.5 rounded-full border border-teal-200">Hari 8 - 9</span>
                        <h3 class="text-xl font-bold text-slate-900">Tawaf Perpisahan (Wada') & Kembali ke Tanah Air</h3>
                        <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                            Menunaikan Tawaf Wada' dengan linangan air mata haru, menuju Bandara Internasional King Abdulaziz Jeddah, dan terbang kembali ke Jakarta membawa sejuta keberkahan.
                        </p>
                    </div>
                    <div class="relative md:pl-8">
                        <div class="hidden md:block absolute -left-3.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border-4 border-emerald-500 shadow-md"></div>
                        <div class="p-5 bg-white rounded-2xl border border-slate-200/90 shadow-sm space-y-2">
                            <span class="text-xs font-bold text-teal-900 flex items-center gap-1.5">
                                <span>🤲 Doa Mabrur:</span>
                            </span>
                            <p class="text-xs text-slate-700 leading-relaxed">
                                Tiba di tanah air disambut oleh tim TOURBAIK. Semoga Allah SWT menerima setiap doa, sujud, dan tetesan keringat ibadah Anda menjadi Umrah yang Mabrurah.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- =========================================================================
     5. TESTIMONI JAMAAH NYATA (Authentic Social Proof)
========================================================================= -->
<section id="testimoni" class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-800 bg-teal-50 px-3.5 py-1 rounded-full border border-teal-200">
                Pengalaman Para Jamaah
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                Cerita Keberkahan Dari Mereka yang Telah Berangkat
            </h2>
            <p class="text-sm text-slate-700">
                Kepercayaan dan kepuasan para tamu Allah SWT adalah prioritas tertinggi dalam setiap pelayanan yang kami berikan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($testimonials as $t)
            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/90 hover:border-teal-400 hover:shadow-xl transition-all duration-300 flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <!-- Stars -->
                    <div class="flex items-center gap-1 text-amber-500 text-sm">
                        @for($i=0; $i<$t['rating']; $i++)
                        <span>★</span>
                        @endfor
                        <span class="text-xs font-bold text-slate-700 ml-1">5.0</span>
                    </div>

                    <h4 class="text-base sm:text-lg font-bold text-slate-900">
                        "{{ $t['title'] }}"
                    </h4>

                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed italic">
                        "{!! nl2br(e($t['quote'])) !!}"
                    </p>
                </div>

                <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
                    <div>
                        <h5 class="text-sm font-bold text-slate-900">{{ $t['name'] }}</h5>
                        <p class="text-xs text-teal-800 font-semibold">{{ $t['city'] }} &bull; <span class="text-slate-600 font-normal">{{ $t['package'] }}</span></p>
                    </div>
                    <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-800 bg-emerald-100 px-2.5 py-1 rounded-full border border-emerald-200">
                        <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Jamaah Terverifikasi
                    </span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


<!-- =========================================================================
     9. FAQ (Pertanyaan yang Sering Diajukan)
========================================================================= -->
<section id="faq" class="py-20 bg-slate-50 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-800 bg-teal-100 px-3.5 py-1 rounded-full border border-teal-200">
                Pusat Informasi & Bantuan
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                Pertanyaan yang Sering Diajukan (FAQ)
            </h2>
            <p class="text-sm text-slate-700">
                Temukan jawaban lengkap terkait persyaratan, kepastian visa, aturan pembayaran, dan fasilitas ibadah di Tanah Suci.
            </p>
        </div>

        <div class="space-y-4" id="faqAccordion">
            @foreach($faqs as $idx => $f)
            <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs overflow-hidden transition-all">
                <button 
                    type="button" 
                    class="faq-trigger w-full text-left p-5 sm:p-6 flex items-center justify-between gap-4 font-bold text-slate-900 text-sm sm:text-base hover:text-teal-800 focus:outline-none"
                    aria-expanded="{{ $idx === 0 ? 'true' : 'false' }}"
                >
                    <span>{{ $f['q'] }}</span>
                    <svg class="w-5 h-5 text-teal-700 shrink-0 transform transition-transform duration-200 {{ $idx === 0 ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-content px-5 pb-6 sm:px-6 text-xs sm:text-sm text-slate-700 leading-relaxed {{ $idx === 0 ? '' : 'hidden' }}">
                    <div class="pt-2 border-t border-slate-100">
                        {{ $f['a'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Privacy Policy Reminder in FAQ -->
        <div class="mt-10 p-5 rounded-2xl bg-teal-50 border border-teal-200/90 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-teal-700 text-white flex items-center justify-center shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="text-slate-800">
                    <span class="font-bold text-teal-950 block">Bagaimana perlindungan berkas paspor & data pribadi saya?</span>
                    Seluruh dokumen jamaah dilindungi sesuai UU No. 27 Tahun 2022 (UU PDP).
                </div>
            </div>
            <a href="{{ route('privacy') }}" class="font-bold text-teal-800 hover:text-teal-950 underline underline-offset-4 whitespace-nowrap">
                Baca Kebijakan Privasi Lengkap &rarr;
            </a>
        </div>

    </div>
</section>


<!-- =========================================================================
     10. FORM KONSULTASI & RESERVASI CEPAT (High-Contrast Clean Inputs)
========================================================================= -->
<section class="py-20 bg-gradient-to-b from-white to-slate-100 relative">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-teal-400/40 relative overflow-hidden bg-tourbaik-dark" style="background-color: #05191d !important; background: linear-gradient(135deg, #05191d 0%, #092c33 50%, #0f4c5c 100%) !important;">
            <div class="pattern-overlay-dots"></div>
            <div class="absolute -top-24 right-0 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="max-w-2xl mx-auto text-center space-y-3 mb-10">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-teal-300 bg-teal-950 px-3.5 py-1 rounded-full border border-teal-700">
                    Langkah Awal Menuju Baitullah
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                    Siap Merencanakan Ibadah Anda?
                </h2>
                <p class="text-xs sm:text-sm text-slate-200">
                    Isi formulir singkat di bawah ini. Konsultan ibadah TOURBAIK akan menghubungi Anda dengan rincian jadwal, ketersediaan seat, dan brosur lengkap melalui WhatsApp.
                </p>
            </div>

            <!-- Form with High-Contrast White Inputs -->
            <form action="{{ route('consultation') }}" method="POST" class="space-y-4 max-w-xl mx-auto text-xs text-slate-900">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="leadNama" class="block font-bold text-teal-100 mb-1">Nama Lengkap Sesuai KTP *</label>
                        <input type="text" name="nama" id="leadNama" required placeholder="Contoh: H. Ahmad Fauzi" class="w-full bg-white text-slate-900 border border-teal-200 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-400 text-xs placeholder:text-slate-500 font-medium shadow-xs">
                    </div>

                    <div>
                        <label for="leadTelepon" class="block font-bold text-teal-100 mb-1">Nomor WhatsApp Aktif *</label>
                        <input type="tel" name="telepon" id="leadTelepon" required placeholder="Contoh: 081234567890" class="w-full bg-white text-slate-900 border border-teal-200 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-400 text-xs placeholder:text-slate-500 font-medium shadow-xs">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="leadPaket" class="block font-bold text-teal-100 mb-1">Paket Yang Diminati *</label>
                        <select name="paket_minat" id="leadPaket" required class="w-full bg-white text-slate-900 border border-teal-200 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-400 text-xs font-medium shadow-xs">
                            <option value="Umrah Signature VIP Bintang 5" class="bg-white text-slate-900 py-1">Umrah Signature VIP Bintang 5</option>
                            <option value="Umrah Reguler Berkah 9 Hari" class="bg-white text-slate-900 py-1">Umrah Reguler Berkah 9 Hari</option>
                            <option value="Umrah Plus Wisata Turki 12 Hari" class="bg-white text-slate-900 py-1">Umrah Plus Wisata Turki 12 Hari</option>
                            <option value="Haji Khusus Furoda 1448 H" class="bg-white text-slate-900 py-1">Haji Khusus Furoda 1448 H (Tanpa Antre)</option>
                            <option value="Umrah Ramadhan Lailatul Qadar" class="bg-white text-slate-900 py-1">Umrah Ramadhan Lailatul Qadar</option>
                        </select>
                    </div>

                    <div>
                        <label for="leadKota" class="block font-bold text-teal-100 mb-1">Kota Domisili</label>
                        <input type="text" name="kota" id="leadKota" placeholder="Contoh: Jakarta / Surabaya / Medan" class="w-full bg-white text-slate-900 border border-teal-200 rounded-xl px-4 py-3 focus:outline-none focus:border-cyan-400 text-xs placeholder:text-slate-500 font-medium shadow-xs">
                    </div>
                </div>

                <div>
                    <label for="leadPesan" class="block font-bold text-teal-100 mb-1">Catatan Tambahan / Pertanyaan (Opsional)</label>
                    <textarea name="pesan" id="leadPesan" rows="2" placeholder="Contoh: Rencana berangkat berempat bersama orang tua butuh fasilitas kursi roda..." class="w-full bg-white text-slate-900 border border-teal-200 rounded-xl px-4 py-2.5 focus:outline-none focus:border-cyan-400 text-xs placeholder:text-slate-500 font-medium shadow-xs"></textarea>
                </div>

                <p class="text-[11px] text-teal-200">
                    Dengan mengirimkan data ini, Anda menyetujui <a href="{{ route('privacy') }}" class="underline hover:text-white font-bold">Kebijakan Privasi</a> TOURBAIK. Data paspor & kontak Anda dijamin keamanannya.
                </p>

                <button 
                    type="submit" 
                    class="w-full py-4 rounded-xl font-black text-slate-950 bg-gradient-to-r from-teal-300 via-cyan-300 to-teal-200 hover:from-teal-200 hover:to-cyan-200 shadow-xl text-sm transition-all uppercase tracking-wider text-center"
                >
                    Kirim & Konsultasi Langsung via WhatsApp &rarr;
                </button>
            </form>

        </div>

    </div>
</section>


<!-- =========================================================================
     MODAL DETAIL PAKET & ITINERARY (Interactive Popup)
========================================================================= -->
<div id="packageModal" class="fixed inset-0 z-50 hidden bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-slate-200 transform transition-all">
        
        <!-- Modal Header -->
        <div class="sticky top-0 bg-gradient-to-r from-teal-900 to-[#0a2f35] text-white p-6 flex items-center justify-between border-b border-teal-800 z-10">
            <div>
                <span id="modalBadge" class="inline-block text-[10px] font-bold px-2.5 py-0.5 rounded-full bg-amber-400 text-slate-950 uppercase tracking-wider mb-1">
                    Paket Pilihan
                </span>
                <h3 id="modalTitle" class="text-xl font-extrabold text-white">Nama Paket</h3>
                <p id="modalSubtitle" class="text-xs text-teal-200 mt-0.5">Subjudul</p>
            </div>
            <button type="button" onclick="closePackageModal()" class="text-teal-200 hover:text-white p-2 rounded-xl hover:bg-white/10 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-6 space-y-6 text-xs text-slate-800">
            
            <!-- Quick Info Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 p-3.5 bg-slate-50 rounded-2xl border border-slate-200">
                <div>
                    <span class="block text-[10px] text-slate-600 uppercase font-bold">Durasi:</span>
                    <strong id="modalDuration" class="text-slate-950 text-xs font-bold">9 Hari</strong>
                </div>
                <div>
                    <span class="block text-[10px] text-slate-600 uppercase font-bold">Keberangkatan:</span>
                    <strong id="modalDate" class="text-slate-950 text-xs font-bold">24 Okt 2026</strong>
                </div>
                <div>
                    <span class="block text-[10px] text-slate-600 uppercase font-bold">Maskapai:</span>
                    <strong id="modalAirline" class="text-slate-950 text-xs font-bold">Saudia Airlines</strong>
                </div>
                <div>
                    <span class="block text-[10px] text-slate-600 uppercase font-bold">Harga Quad:</span>
                    <strong id="modalPrice" class="text-teal-900 text-xs font-black">Rp 36.500.000</strong>
                </div>
            </div>

            <!-- Hotels -->
            <div class="space-y-2">
                <h4 class="font-extrabold text-slate-950 text-xs uppercase tracking-wider text-teal-900">Akomodasi Hotel Bintang 5:</h4>
                <div class="p-3 bg-teal-50/80 rounded-xl border border-teal-100 space-y-1 text-slate-800">
                    <p><strong>Makkah:</strong> <span id="modalHotelMakkah">-</span></p>
                    <p><strong>Madinah:</strong> <span id="modalHotelMadinah">-</span></p>
                </div>
            </div>

            <!-- Inclusions & Exclusions -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <h4 class="font-extrabold text-emerald-900 text-xs uppercase tracking-wider mb-2">Harga Sudah Termasuk (All In):</h4>
                    <ul id="modalInclusions" class="space-y-1 list-disc list-inside text-slate-700">
                    </ul>
                </div>
                <div>
                    <h4 class="font-extrabold text-rose-900 text-xs uppercase tracking-wider mb-2">Tidak Termasuk:</h4>
                    <ul id="modalExclusions" class="space-y-1 list-disc list-inside text-slate-700">
                    </ul>
                </div>
            </div>

            <!-- Day by Day Itinerary -->
            <div>
                <h4 class="font-extrabold text-slate-950 text-xs uppercase tracking-wider text-teal-900 mb-3">Rencana Perjalanan (Day by Day Itinerary):</h4>
                <div id="modalItineraryList" class="space-y-3 max-h-60 overflow-y-auto pr-1">
                </div>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="sticky bottom-0 bg-slate-50 p-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span class="text-xs text-slate-600 font-semibold">Hubungi konsultan untuk ketersediaan kamar Double / Triple</span>
            <a 
                id="modalWaBtn"
                href="#" 
                target="_blank" 
                rel="noopener"
                class="w-full sm:w-auto px-6 py-2.5 bg-gradient-to-r from-teal-700 to-cyan-600 hover:from-teal-800 hover:to-cyan-700 text-white text-xs font-bold rounded-xl shadow-md transition-all text-center"
            >
                Konsultasi & Lock Seat via WhatsApp &rarr;
            </a>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    // Tab switching for packages
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const packageCards = document.querySelectorAll('.package-card');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetTab = this.getAttribute('data-tab');

                // Active style
                tabButtons.forEach(b => {
                    b.classList.remove('bg-white', 'text-teal-900', 'shadow-sm');
                    b.classList.add('text-slate-700');
                });
                this.classList.add('bg-white', 'text-teal-900', 'shadow-sm');
                this.classList.remove('text-slate-700');

                // Filter cards
                packageCards.forEach(card => {
                    const cat = card.getAttribute('data-category');
                    if (targetTab === 'all' || cat === targetTab) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Quick Search Hero Form handler
        const quickForm = document.getElementById('quickFilterForm');
        if (quickForm) {
            quickForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const selCat = document.getElementById('filterCategory').value;
                const tabToTrigger = document.querySelector(`.tab-btn[data-tab="${selCat}"]`) || document.querySelector('.tab-btn[data-tab="all"]');
                if (tabToTrigger) {
                    tabToTrigger.click();
                }
                const targetEl = document.getElementById('paket');
                if (targetEl) {
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }

        // FAQ Accordion
        const faqTriggers = document.querySelectorAll('.faq-trigger');
        faqTriggers.forEach(trigger => {
            trigger.addEventListener('click', function () {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Close all others
                document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                document.querySelectorAll('.faq-trigger svg').forEach(svg => svg.classList.remove('rotate-180'));
                document.querySelectorAll('.faq-trigger').forEach(t => t.setAttribute('aria-expanded', 'false'));

                if (!isExpanded) {
                    content.classList.remove('hidden');
                    icon.classList.add('rotate-180');
                    this.setAttribute('aria-expanded', 'true');
                }
            });
        });

        // Hero Photo Slider Carousel Logic
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        const counter = document.getElementById('heroSlideCounter');
        const prevBtn = document.getElementById('heroPrevBtn');
        const nextBtn = document.getElementById('heroNextBtn');
        const sliderContainer = document.getElementById('heroSlider');

        if (slides.length > 0) {
            let currentIndex = 0;
            let slideInterval = null;
            const totalSlides = slides.length;

            function goToSlide(index) {
                currentIndex = (index + totalSlides) % totalSlides;

                slides.forEach((slide, i) => {
                    if (i === currentIndex) {
                        slide.classList.remove('opacity-0', 'pointer-events-none', 'z-0');
                        slide.classList.add('opacity-100', 'z-10');
                    } else {
                        slide.classList.remove('opacity-100', 'z-10');
                        slide.classList.add('opacity-0', 'pointer-events-none', 'z-0');
                    }
                });

                dots.forEach((dot, i) => {
                    if (i === currentIndex) {
                        dot.className = 'hero-dot h-2 rounded-full transition-all duration-300 w-6 bg-cyan-400';
                    } else {
                        dot.className = 'hero-dot h-2 rounded-full transition-all duration-300 w-2 bg-white/50 hover:bg-white/80';
                    }
                });

                if (counter) {
                    const currentFormatted = String(currentIndex + 1).padStart(2, '0');
                    const totalFormatted = String(totalSlides).padStart(2, '0');
                    counter.textContent = `${currentFormatted} / ${totalFormatted}`;
                }
            }

            function nextSlide() {
                goToSlide(currentIndex + 1);
            }

            function prevSlide() {
                goToSlide(currentIndex - 1);
            }

            function startAutoPlay() {
                stopAutoPlay();
                slideInterval = setInterval(nextSlide, 4500);
            }

            function stopAutoPlay() {
                if (slideInterval) {
                    clearInterval(slideInterval);
                    slideInterval = null;
                }
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function () {
                    nextSlide();
                    startAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function () {
                    prevSlide();
                    startAutoPlay();
                });
            }

            dots.forEach(dot => {
                dot.addEventListener('click', function () {
                    const idx = parseInt(this.getAttribute('data-index'));
                    goToSlide(idx);
                    startAutoPlay();
                });
            });

            if (sliderContainer) {
                sliderContainer.addEventListener('mouseenter', stopAutoPlay);
                sliderContainer.addEventListener('mouseleave', startAutoPlay);
            }

            // Start auto play
            startAutoPlay();
        }
    });

    // Package Modal functions
    function openPackageModal(pkg) {
        const modal = document.getElementById('packageModal');
        if (!modal) return;

        document.getElementById('modalBadge').textContent = pkg.badge;
        document.getElementById('modalTitle').textContent = pkg.title;
        document.getElementById('modalSubtitle').textContent = pkg.subtitle;
        document.getElementById('modalDuration').textContent = pkg.duration;
        document.getElementById('modalDate').textContent = pkg.departure_date;
        document.getElementById('modalAirline').textContent = pkg.airline;
        document.getElementById('modalPrice').textContent = 'Rp ' + pkg.price_quad.toLocaleString('id-ID');
        document.getElementById('modalHotelMakkah').textContent = pkg.hotel_makkah;
        document.getElementById('modalHotelMadinah').textContent = pkg.hotel_madinah;

        // Inclusions
        const incList = document.getElementById('modalInclusions');
        incList.innerHTML = '';
        pkg.inclusions.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;
            incList.appendChild(li);
        });

        // Exclusions
        const excList = document.getElementById('modalExclusions');
        excList.innerHTML = '';
        pkg.exclusions.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;
            excList.appendChild(li);
        });

        // Itinerary
        const itinList = document.getElementById('modalItineraryList');
        itinList.innerHTML = '';
        pkg.itinerary.forEach(day => {
            const dayDiv = document.createElement('div');
            dayDiv.className = 'p-3 bg-slate-50 rounded-xl border border-slate-100';
            dayDiv.innerHTML = `
                <span class="font-bold text-teal-900 text-[11px] block">Hari ${day.day}: ${day.title}</span>
                <p class="text-slate-700 text-[11px] mt-0.5">${day.desc}</p>
            `;
            itinList.appendChild(dayDiv);
        });

        // WhatsApp CTA
        const waMsg = `Assalamu'alaikum, saya ingin lock seat / booking untuk paket ${pkg.title} (${pkg.departure_date}). Mohon dikirimkan brosur PDF dan ketersediaan kamar.`;
        document.getElementById('modalWaBtn').href = 'https://wa.me/6281299997703?text=' + encodeURIComponent(waMsg);

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closePackageModal() {
        const modal = document.getElementById('packageModal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }

    // Close on click backdrop
    window.addEventListener('click', function (e) {
        const modal = document.getElementById('packageModal');
        if (modal && e.target === modal) {
            closePackageModal();
        }
    });
</script>
@endpush
