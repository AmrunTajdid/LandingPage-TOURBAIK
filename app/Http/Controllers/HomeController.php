<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get all structured package data
     */
    private function getPackages()
    {
        return [
            [
                'slug' => 'umrah-signature-vip-9-hari',
                'title' => 'Umrah Signature VIP Bintang 5',
                'subtitle' => 'Hotel 0 Meter Pelataran & Kereta Cepat Haramain',
                'badge' => 'Paling Populer',
                'badge_type' => 'popular',
                'category' => 'vip',
                'duration' => '9 Hari',
                'departure_date' => '24 Oktober 2026',
                'departure_city' => 'Jakarta (CGK)',
                'cover_image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 5,
                'distance_makkah' => '0m Jalan Kaki',
                'distance_madinah' => '50m Pelataran',
                'hotel_makkah' => 'Swissôtel Al Maqam / Clock Tower (⭐️5 - 0m)',
                'hotel_madinah' => 'Dar Al Taqwa / Frontel Al Harithia (⭐️5 - 50m)',
                'airline' => 'Saudia Airlines (Direct SV-819)',
                'price_quad' => 36500000,
                'price_triple' => 38900000,
                'price_double' => 42500000,
                'currency' => 'IDR',
                'seats_left' => 6,
                'total_seats' => 45,
                'features' => [
                    'Hotel Pelataran Masjid (0m Jalan Kaki)',
                    'Kereta Cepat Haramain Bullet Train',
                    'Direct Flight Tanpa Transit (Saudia Airlines)',
                    'Muthawwif Berpengalaman Sesuai Sunnah',
                    'Makan 3x Fullboard Menu Nusantara Bintang 5',
                    'Handling VIP & Lounge Bandara Soekarno-Hatta'
                ],
                'inclusions' => [
                    'Tiket Pesawat PP Internasional Kelas Ekonomi',
                    'Akomodasi Hotel Bintang 5 (Makkah & Madinah)',
                    'Visa Umrah Resmi + Asuransi Syariah Arab Saudi',
                    'Transportasi Bus AC VIP 2024 & Kereta Cepat Haramain',
                    'Makan 3x Sehari Fullboard Indonesian Buffet',
                    'Ziarah Kota Makkah, Madinah & City Tour Thaif + Cable Car',
                    'Air Zamzam (Sesuai Regulasi Otoritas GACA Arab Saudi)',
                    'Perlengkapan Eksklusif (Koper Fiber Hardcase, Kain Ihram/Mukena, Batik, Tas Paspor, Buku Doa)'
                ],
                'exclusions' => [
                    'Pembuatan Paspor & Vaksin Meningitis',
                    'Kebutuhan Pribadi (Laundry, Roaming, Belanja)',
                    'Kelebihan Bagasi Di Luar Ketentuan Maskapai'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Keberangkatan Jakarta - Madinah', 'desc' => 'Berkumpul di Bandara Soetta Lounge VIP, briefing manasik singkat, take off menuju Bandara Prince Mohammad bin Abdulaziz Madinah. Tiba & check-in hotel.'],
                    ['day' => 2, 'title' => 'Ziarah Raudhah & Masjid Nabawi', 'desc' => 'Shalat berjamaah di Masjid Nabawi, ziarah ke Makam Baginda Rasulullah SAW, Abu Bakar Ash-Shiddiq, & Umar bin Khattab serta shalat di Raudhah Syarifah.'],
                    ['day' => 3, 'title' => 'Ziarah Kota Madinah', 'desc' => 'Mengunjungi Masjid Quba, Jabal Uhud & Makam Syuhada, Kebun Kurma, dan Masjid Qiblatain.'],
                    ['day' => 4, 'title' => 'Miqat Bir Ali - Makkah (Kereta Cepat)', 'desc' => 'Persiapan ihram di hotel, mengambil Miqat di Bir Ali, menaiki Kereta Cepat Haramain (2 jam). Tiba di Makkah, check-in Swissotel, lalu pelaksanaan Umrah Wajib (Tawaf, Sa\'i, Tahallul).'],
                    ['day' => 5, 'title' => 'Memperbanyak Ibadah di Masjidil Haram', 'desc' => 'I\'tikaf, tawaf sunnah, tadarus Al-Qur\'an, dan tausiyah pemaknaan ibadah umrah bersama Ustadz pembimbing.'],
                    ['day' => 6, 'title' => 'Ziarah Kota Makkah & City Tour Thaif', 'desc' => 'Menuju kota sejuk Thaif: ziarah Masjid Abdullah bin Abbas, Masjid Kuk, Pabrik Parfum Mawar, mencicipi buah segar, dan naik Kereta Gantung Teleferik.'],
                    ['day' => 7, 'title' => 'Ziarah Jabal Tsur & Jabal Rahmah', 'desc' => 'Ziarah ke Jabal Tsur, Padang Arafah, Jabal Rahmah, Muzdalifah, Mina, dan Jabal Nur.'],
                    ['day' => 8, 'title' => 'Tawaf Wada\' & Menuju Jeddah', 'desc' => 'Pelaksanaan Tawaf Perpisahan (Wada\'), bersiap check-out, perjalanan ke Corniche Balad Jeddah, lalu menuju King Abdulaziz International Airport.'],
                    ['day' => 9, 'title' => 'Tiba di Tanah Air (Jakarta)', 'desc' => 'Insya Allah tiba di Jakarta dengan selamat dan membawa predikat Umrah yang Mabrur. Aamiin.']
                ]
            ],
            [
                'slug' => 'umrah-reguler-berkah-9-hari',
                'title' => 'Umrah Reguler Berkah 9 Hari',
                'subtitle' => 'Paket Favorit Keluarga dengan Fasilitas Bintang 4 Nyaman',
                'badge' => 'Hemat Berkualitas',
                'badge_type' => 'best-value',
                'category' => 'reguler',
                'duration' => '9 Hari',
                'departure_date' => '12 November 2026',
                'departure_city' => 'Jakarta (CGK) / Surabaya (SUB)',
                'cover_image' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 4,
                'distance_makkah' => '150m Dekat Pelataran',
                'distance_madinah' => '100m dari Pintu Utama',
                'hotel_makkah' => 'Anjum Hotel / Le Meridien Towers (⭐️4 - 150m)',
                'hotel_madinah' => 'Rove Madinah / Mirage Al Salam (⭐️4 - 100m)',
                'airline' => 'Garuda Indonesia (GA-980 Direct)',
                'price_quad' => 28900000,
                'price_triple' => 30900000,
                'price_double' => 33500000,
                'currency' => 'IDR',
                'seats_left' => 9,
                'total_seats' => 45,
                'features' => [
                    'Penerbangan Langsung Garuda Indonesia',
                    'Hotel Berjarak Dekat (Shuttle 24 Jam & Dekat Pelataran)',
                    'Bimbingan Ibadah 2x Manasik Teori & Praktik',
                    'Muthawwif Berpengalaman Standar Kemenag',
                    'Menu Makanan Indonesia 3x Sehari',
                    'Perlengkapan Lengkap Koper Bagasi'
                ],
                'inclusions' => [
                    'Tiket Pesawat PP Internasional Garuda Indonesia',
                    'Akomodasi Hotel Bintang 4 di Makkah & Madinah',
                    'Visa Umrah Resmi + Asuransi Perjalanan',
                    'Transportasi Bus Full AC Executive',
                    'Makan 3x Sehari Masakan Khas Indonesia',
                    'Ziarah Kota Makkah dan Madinah',
                    'Free Perlengkapan Umrah Eksklusif TOURBAIK'
                ],
                'exclusions' => [
                    'Paspor & Vaksinasi',
                    'Pengeluaran Pribadi',
                    'Upgrade Kamar Double/Triple'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Jakarta - Madinah', 'desc' => 'Terbang langsung bersama Garuda Indonesia menuju Madinah. Tiba dan istirahat di hotel.'],
                    ['day' => 2, 'title' => 'Ibadah di Masjid Nabawi & Raudhah', 'desc' => 'Shalat berjamaah lima waktu, berziarah ke makam Rasulullah dan Raudhah.'],
                    ['day' => 3, 'title' => 'Ziarah Madinah & Quba', 'desc' => 'Ziarah Masjid Quba, Jabal Uhud, dan pasar kurma Madinah.'],
                    ['day' => 4, 'title' => 'Madinah - Bir Ali - Makkah', 'desc' => 'Miqat di Bir Ali, perjalanan darat dengan bus VIP menuju kota suci Makkah dan pelaksanaan Umrah perdana.'],
                    ['day' => 5, 'title' => 'Fokus Ibadah Makkah', 'desc' => 'Ibadah mandiri dan bersama di Masjidil Haram, memperbanyak tawaf sunnah.'],
                    ['day' => 6, 'title' => 'Ziarah Kota Makkah & Ji\'ranah', 'desc' => 'Ziarah ke Jabal Tsur, Arafah, Mina dan mengambil Miqat kedua di Ji\'ranah.'],
                    ['day' => 7, 'title' => 'Kajian & Pemantapan Ibadah', 'desc' => 'Tadarus Al-Qur\'an, tausiyah ba\'da Subuh bersama Ustadz pembimbing.'],
                    ['day' => 8, 'title' => 'Tawaf Wada\' & Keberangkatan', 'desc' => 'Tawaf Wada\', perjalanan menuju Bandara Jeddah untuk kepulangan.'],
                    ['day' => 9, 'title' => 'Tiba di Indonesia', 'desc' => 'Mendarat di Jakarta/Surabaya dengan penuh keberkahan.']
                ]
            ],
            [
                'slug' => 'umrah-plus-turki-cappadocia-12-hari',
                'title' => 'Umrah Plus Turki & Cappadocia 12 Hari',
                'subtitle' => 'Napak Tilas Kejayaan Utsmaniyah & Ibadah Khusyuk Tanah Suci',
                'badge' => 'Eksklusif Wisata Sejarah',
                'badge_type' => 'special',
                'category' => 'plus',
                'duration' => '12 Hari',
                'departure_date' => '18 Desember 2026',
                'departure_city' => 'Jakarta (CGK)',
                'cover_image' => 'https://images.unsplash.com/photo-1527838832700-5059252407fa?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 5,
                'distance_makkah' => '0m Menara Jam',
                'distance_madinah' => '0m Depan Gerbang Utama',
                'hotel_makkah' => 'Pullman Zamzam Makkah (⭐️5 - 0m)',
                'hotel_madinah' => 'Anwar Al Madinah Mövenpick (⭐️5 - 0m)',
                'airline' => 'Turkish Airlines (TK-57)',
                'price_quad' => 43900000,
                'price_triple' => 46500000,
                'price_double' => 49900000,
                'currency' => 'IDR',
                'seats_left' => 4,
                'total_seats' => 40,
                'features' => [
                    'Wisata Istanbul, Bosphorus Cruise & Cappadocia',
                    'Hotel Bintang 5 di Makkah, Madinah & Cave Hotel Turki',
                    'Mengunjungi Blue Mosque, Hagia Sophia & Topkapi Palace',
                    'Penerbangan Turkish Airlines Terbaik di Eropa',
                    'Pemandu Wisata Sejarah Berlisensi & Muthawwif Khusus',
                    'Kereta Cepat Haramain Makkah - Madinah'
                ],
                'inclusions' => [
                    'Tiket Pesawat Seluruh Rute (CGK-IST-MED-JED-CGK)',
                    'Visa Umrah + Visa Turis Turki',
                    'Akomodasi Hotel Bintang 5 & Cave Hotel Cappadocia',
                    'Bosphorus Private Cruise Tour di Istanbul',
                    'Makan 3x Sehari (Menu Turki & Masakan Indonesia)',
                    'Perlengkapan Umrah Eksklusif & Bagasi Internasional'
                ],
                'exclusions' => [
                    'Tiket Hot Air Balloon di Cappadocia (Opsional)',
                    'Tipping Guide & Driver di Turki',
                    'Pengeluaran Pribadi'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Jakarta - Istanbul', 'desc' => 'Penerbangan malam menuju Istanbul dengan Turkish Airlines.'],
                    ['day' => 2, 'title' => 'Eksplorasi Istanbul & Bosphorus', 'desc' => 'Mengunjungi Blue Mosque, Hagia Sophia, Hippodrome, dan menyusuri Selat Bosphorus dengan private cruise.'],
                    ['day' => 3, 'title' => 'Istanbul - Cappadocia', 'desc' => 'Penerbangan domestik ke Cappadocia, menjelajahi Underground City dan panorama bebatuan purba.'],
                    ['day' => 4, 'title' => 'Cappadocia Sunrise & Menuju Madinah', 'desc' => 'Menyaksikan pemandangan Balon Udara saat fajar, transfer ke bandara untuk terbang menuju Madinah Al-Munawwarah.'],
                    ['day' => 5, 'title' => 'Ibadah Madinah & Raudhah Syarifah', 'desc' => 'Ziarah Makam Rasulullah SAW dan shalat di Raudhah yang mulia.'],
                    ['day' => 6, 'title' => 'Ziarah Sejarah Madinah', 'desc' => 'Ziarah Masjid Quba, Jabal Uhud, dan Pasar Kurma.'],
                    ['day' => 7, 'title' => 'Kereta Cepat ke Makkah & Umrah', 'desc' => 'Miqat di Bir Ali, menaiki Kereta Cepat Haramain ke Makkah dan melaksanakan Umrah Wajib.'],
                    ['day' => 8, 'title' => 'Ibadah Khusyuk Masjidil Haram', 'desc' => 'Tawaf, tilawah, dan shalat berjamaah tepat di depan Ka\'bah.'],
                    ['day' => 9, 'title' => 'Ziarah Makkah & Ji\'ranah', 'desc' => 'Ziarah napak tilas haji (Arafah, Muzdalifah, Mina) dan Miqat Umrah kedua.'],
                    ['day' => 10, 'title' => 'City Tour Thaif & Teleferik', 'desc' => 'Wisata pegunungan Thaif yang sejuk dan bersejarah.'],
                    ['day' => 11, 'title' => 'Tawaf Wada\' & Menuju Bandara', 'desc' => 'Tawaf Wada\' lalu bersiap transfer ke King Abdulaziz Jeddah.'],
                    ['day' => 12, 'title' => 'Tiba di Jakarta', 'desc' => 'Insya Allah tiba kembali di Indonesia membawa sejuta kenangan berkah.']
                ]
            ],
            [
                'slug' => 'haji-furoda-mujtama-langsung-berangkat',
                'title' => 'Haji Khusus Furoda & Mujamalah 1448 H',
                'subtitle' => 'Tanpa Antre Bertahun-tahun, Visa Resmi Kuota Kerajaan Arab Saudi',
                'badge' => 'Tanpa Antre Kuota',
                'badge_type' => 'vip-gold',
                'category' => 'haji',
                'duration' => '25-27 Hari',
                'departure_date' => 'Musim Haji 1448 H / Mei-Juni 2027',
                'departure_city' => 'Jakarta (CGK)',
                'cover_image' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 5,
                'distance_makkah' => '0m Menara Fairmont',
                'distance_madinah' => 'Pelataran Masjid Nabawi',
                'hotel_makkah' => 'Fairmont Makkah Clock Royal Tower (⭐️5 VIP)',
                'hotel_madinah' => 'The Oberoi Madinah / Dar Al Taqwa (⭐️5 VIP)',
                'airline' => 'Saudia Airlines / Garuda Indonesia First/Business Class Option',
                'price_quad' => 265000000,
                'price_triple' => 285000000,
                'price_double' => 310000000,
                'currency' => 'IDR',
                'seats_left' => 3,
                'total_seats' => 25,
                'features' => [
                    'Visa Haji Resmi (Mujamalah / Furoda Terdaftar)',
                    'Langsung Berangkat Tahun Berjalan Tanpa Antre',
                    'Tenda Maktab VIP Ber-AC Dingin di Arafah & Mina',
                    'Hotel Bintang 5 Terbaik Tepat di Depan Masjid',
                    'Bimbingan Ibadah Intensif oleh Ulama & Asatidz Nasional',
                    'Dokter Pendamping Pribadi & Tim Medis TOURBAIK'
                ],
                'inclusions' => [
                    'Visa Haji Furoda Resmi Terverifikasi Sistem e-Hajj KSA',
                    'Tiket Pesawat PP Internasional Langsung',
                    'Tenda Eksklusif Maktab VIP Ber-AC di Mina & Arafah',
                    'Akomodasi Hotel Bintang 5 Luxury Selama di Makkah & Madinah',
                    'Fasilitas Kereta Cepat Masyair & Haramain',
                    'Konsumsi Makanan Khusus Buffet VIP 3x Sehari',
                    'Dam / Qurban Haji Tamattu\' Termasuk',
                    'Perlengkapan Haji Eksklusif Koper Rimowa-grade'
                ],
                'exclusions' => [
                    'Pengurusan Paspor & Medical Check Up Awal',
                    'Pengeluaran Pribadi'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Pemberangkatan Menuju Madinah', 'desc' => 'Pelepasan resmi di Jakarta, terbang ke Madinah, ziarah dan shalat 40 waktu (Arba\'in).'],
                    ['day' => 8, 'title' => 'Menuju Makkah & Umrah Tamattu\'', 'desc' => 'Miqat di Dzulhulaifah, menaiki Haramain Train, pelaksanaan Umrah Tamattu\'.'],
                    ['day' => 9, 'title' => 'Tarwiyah di Mina (Opsional)', 'desc' => 'Mempersiapkan diri menuju Hari Tarwiyah.'],
                    ['day' => 10, 'title' => 'Wukuf di Padang Arafah (Puncak Haji)', 'desc' => 'Wukuf di Arafah dengan khutbah wukuf, dzikir, doa mustajab bersama para ulama.'],
                    ['day' => 11, 'title' => 'Mabit Muzdalifah & Melontar Jumrah Aqabah', 'desc' => 'Mengambil kerikil di Muzdalifah, melontar Jumrah Aqabah, tahallul awal & qurban.'],
                    ['day' => 12, 'title' => 'Hari Tasyrik di Mina', 'desc' => 'Mabit di Mina, melontar jumrah Ula, Wusta, dan Aqabah di Maktab VIP.'],
                    ['day' => 14, 'title' => 'Tawaf Ifadhah & Sa\'i Haji', 'desc' => 'Penyempurnaan rukun haji di Ka\'bah Masjidil Haram.'],
                    ['day' => 25, 'title' => 'Tawaf Wada\' & Kembali ke Tanah Air', 'desc' => 'Kepulangan ke Indonesia dengan predikat Haji Mabrur yang tiada balasan baginya selain Surga.']
                ]
            ],
            [
                'slug' => 'umrah-ramadhan-lailatul-qadar-15-hari',
                'title' => 'Umrah Ramadhan & I\'tikaf Lailatul Qadar',
                'subtitle' => 'Meraih Keberkahan 10 Malam Terakhir di Depan Ka\'bah',
                'badge' => 'Edisi Terbatas Ramadhan',
                'badge_type' => 'ramadhan',
                'category' => 'vip',
                'duration' => '15 Hari',
                'departure_date' => '20 Ramadhan 1448 H',
                'departure_city' => 'Jakarta (CGK)',
                'cover_image' => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 5,
                'distance_makkah' => '0m Pelataran',
                'distance_madinah' => '50m Pintu Nabawi',
                'hotel_makkah' => 'Makkah Clock Royal Tower, A Fairmont Hotel (⭐️5)',
                'hotel_madinah' => 'Madinah Hilton / Dallah Taibah (⭐️5)',
                'airline' => 'Saudia Airlines Direct',
                'price_quad' => 49500000,
                'price_triple' => 54000000,
                'price_double' => 59800000,
                'currency' => 'IDR',
                'seats_left' => 5,
                'total_seats' => 35,
                'features' => [
                    'I\'tikaf 10 Malam Terakhir di Masjidil Haram',
                    'Shalat Tarawih & Tahajjud Bersama Imam Besar Masjidil Haram',
                    'Sahur & Buka Puasa Buffet Hotel Bintang 5',
                    'Meraih Pahala Setara Haji Bersama Rasulullah SAW',
                    'Kajian Tematik Fiqih Ramadhan Setiap Sore',
                    'Akses Mudah Hotel Sangat Dekat untuk Lansia'
                ],
                'inclusions' => [
                    'Tiket Pesawat PP Saudia Airlines',
                    'Hotel Bintang 5 Dekat Masjid',
                    'Visa Umrah Ramadhan Resmi',
                    'Sahur dan Buka Puasa Buffet Lengkap',
                    'Bimbingan Ibadah & Program I\'tikaf Khusus',
                    'Handling & Manasik Pra-Keberangkatan'
                ],
                'exclusions' => [
                    'Paspor & Vaksin',
                    'Belanja Pribadi & Sedekah Mandiri'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Jakarta - Madinah', 'desc' => 'Berangkat dari CGK, tiba di Madinah menjelang buka puasa, shalat tarawih pertama di Nabawi.'],
                    ['day' => 2, 'title' => 'Suasana Ramadhan di Madinah', 'desc' => 'Menikmati syahdunya ifthar jama\'i bersama jutaan umat di pelataran Nabawi.'],
                    ['day' => 5, 'title' => 'Menuju Makkah untuk I\'tikaf', 'desc' => 'Memulai perjalanan ke Makkah dengan kereta cepat, memulai rangkaian 10 malam terakhir.'],
                    ['day' => 14, 'title' => 'Shalat Idul Fitri di Masjidil Haram', 'desc' => 'Merasakan takbir menggema dan shalat Ied langsung menghadap Ka\'bah.'],
                    ['day' => 15, 'title' => 'Kembali ke Indonesia', 'desc' => 'Kepulangan ke tanah air membawa ampunan dan keberkahan Ramadhan.']
                ]
            ],
            [
                'slug' => 'umrah-awal-musim-1448-h',
                'title' => 'Umrah Awal Musim 1448 H (September)',
                'subtitle' => 'Suasana Lebih Tenang, Nyaman & Tidak Terlalu Padat',
                'badge' => 'Early Bird Promo',
                'badge_type' => 'early-bird',
                'category' => 'reguler',
                'duration' => '10 Hari',
                'departure_date' => '05 September 2026',
                'departure_city' => 'Jakarta (CGK) / Surabaya (SUB)',
                'cover_image' => 'https://images.unsplash.com/photo-1565552645632-d725f8bfc19a?auto=format&fit=crop&w=800&q=80',
                'hotel_stars' => 4,
                'distance_makkah' => '200m Akses Mudah',
                'distance_madinah' => '150m dari Masjid',
                'hotel_makkah' => 'Grand Almassa Hotel (⭐️4 - 200m)',
                'hotel_madinah' => 'Emaar Elite Al Madina (⭐️4 - 150m)',
                'airline' => 'Oman Air / Saudia Airlines',
                'price_quad' => 27500000,
                'price_triple' => 29500000,
                'price_double' => 32000000,
                'currency' => 'IDR',
                'seats_left' => 11,
                'total_seats' => 45,
                'features' => [
                    'Harga Spesial Pembukaan Musim Baru',
                    'Masjidil Haram & Nabawi Relatif Lebih Longgar',
                    'Waktu Tawaf dan Masuk ke Raudhah Lebih Tenang',
                    'Cocok untuk Jamaah Pasangan & Orang Tua',
                    'Termasuk City Tour Lengkap di Makkah & Madinah',
                    'Perlengkapan Travel Lengkap'
                ],
                'inclusions' => [
                    'Tiket Pesawat PP Internasional',
                    'Hotel Bintang 4 Pilihan',
                    'Visa Umrah Resmi',
                    'Makan 3x Sehari Masakan Indonesia',
                    'Ziarah Kota Makkah dan Madinah',
                    'Handling & Manasik'
                ],
                'exclusions' => [
                    'Paspor & Vaksin',
                    'Pengeluaran Pribadi'
                ],
                'itinerary' => [
                    ['day' => 1, 'title' => 'Keberangkatan Menuju Madinah', 'desc' => 'Penerbangan menuju Madinah, tiba dan proses check-in hotel.'],
                    ['day' => 4, 'title' => 'Ziarah & Perjalanan ke Makkah', 'desc' => 'Ziarah tempat bersejarah di Madinah lalu bersiap mengambil Miqat.'],
                    ['day' => 8, 'title' => 'Ibadah & Ziarah Makkah', 'desc' => 'Memaksimalkan ibadah di Tanah Suci dan ziarah napak tilas sejarah Islam.'],
                    ['day' => 10, 'title' => 'Tiba di Indonesia', 'desc' => 'Mendarat kembali di tanah air dengan hati yang bersih.']
                ]
            ]
        ];
    }

    /**
     * Departure schedule list
     */
    private function getSchedules()
    {
        return [
            [
                'package' => 'Umrah Signature VIP 9 Hari',
                'date' => '24 Okt 2026',
                'hotel' => 'Swissôtel Al Maqam ⭐️5',
                'airline' => 'Saudia Airlines Direct',
                'price' => 'Rp 36,5 Juta',
                'quota' => '45 Seat',
                'available' => 'Sisa 6 Seat',
                'status' => 'Pasti Berangkat',
                'status_color' => 'emerald'
            ],
            [
                'package' => 'Umrah Reguler Berkah 9 Hari',
                'date' => '12 Nov 2026',
                'hotel' => 'Anjum Hotel Makkah ⭐️4',
                'airline' => 'Garuda Indonesia Direct',
                'price' => 'Rp 28,9 Juta',
                'quota' => '45 Seat',
                'available' => 'Sisa 9 Seat',
                'status' => 'Pasti Berangkat',
                'status_color' => 'emerald'
            ],
            [
                'package' => 'Umrah Plus Turki & Cappadocia 12H',
                'date' => '18 Des 2026',
                'hotel' => 'Pullman Zamzam ⭐️5 + Cave Hotel',
                'airline' => 'Turkish Airlines',
                'price' => 'Rp 43,9 Juta',
                'quota' => '40 Seat',
                'available' => 'Sisa 4 Seat',
                'status' => 'Seat Terbatas',
                'status_color' => 'amber'
            ],
            [
                'package' => 'Umrah Awal Tahun 2027 10 Hari',
                'date' => '15 Jan 2027',
                'hotel' => 'Swissôtel Makkah ⭐️5',
                'airline' => 'Saudia Airlines Direct',
                'price' => 'Rp 34,8 Juta',
                'quota' => '45 Seat',
                'available' => 'Tersedia 18 Seat',
                'status' => 'Buka Pendaftaran',
                'status_color' => 'cyan'
            ],
            [
                'package' => 'Umrah Ramadhan Lailatul Qadar 15H',
                'date' => 'Ramadhan 1448H',
                'hotel' => 'Fairmont Clock Tower ⭐️5',
                'airline' => 'Saudia Airlines Direct',
                'price' => 'Rp 49,5 Juta',
                'quota' => '35 Seat',
                'available' => 'Sisa 5 Seat',
                'status' => 'Seat Terbatas',
                'status_color' => 'amber'
            ],
            [
                'package' => 'Haji Khusus Furoda 1448 H',
                'date' => 'Musim Haji 2027',
                'hotel' => 'Fairmont Makkah + Maktab VIP',
                'airline' => 'Saudia / Garuda',
                'price' => 'Mulai Rp 265 Juta',
                'quota' => '25 Seat',
                'available' => 'Sisa 3 Seat',
                'status' => 'Fast Closing',
                'status_color' => 'rose'
            ]
        ];
    }

    /**
     * Real testimonials
     */
    private function getTestimonials()
    {
        return [
            [
                'name' => 'H. Bambang Soelistyo & Hj. Ratna',
                'city' => 'Jakarta Selatan',
                'package' => 'Umrah Signature VIP Bintang 5',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
                'title' => 'Pelayanan Luar Biasa, Ibu Saya yang 72 Tahun Merasa Sangat Nyaman',
                'quote' => 'Awalnya was-was mengajak ibu sepuh untuk umrah. Tapi TOURBAIK benar-benar profesional: hotel Swissôtel nempel pelataran Ka\'bah, kursi roda siap siaga, dan muthawwif-nya sabar sekali membimbing doa satu per satu. Makanan prasmanan Indonesia rasanya lezat. Terima kasih TOURBAIK!'
            ],
            [
                'name' => 'dr. Ardiansyah Pratama, Sp.A',
                'city' => 'Surabaya',
                'package' => 'Umrah Plus Turki 12 Hari',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=150&q=80',
                'title' => 'Itinerary Padat Ilmu, Waktu Shalat Sangat Terjaga',
                'quote' => 'Bagi kami sekeluarga, perpaduan sejarah peradaban Islam di Istanbul & kekhusyukan umrah di Makkah-Madinah dieksekusi dengan sempurna. Kereta cepat Haramain sangat menghemat waktu. Tiket dan visa keluar tepat waktu tanpa drama sama sekali.'
            ],
            [
                'name' => 'Hj. Nurlaila Fitriani',
                'city' => 'Bandung',
                'package' => 'Umrah Ramadhan 15 Hari',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
                'title' => 'Pengalaman Spiritual Paling Berkesan Seumur Hidup',
                'quote' => 'Bisa merasakan 10 malam terakhir di depan Ka\'bah bersama rombongan TOURBAIK adalah anugerah terbesar. Tausiyah Ustadz pembimbing sangat menyentuh hati dan sesuai sunnah. Pembagian kamar rapi, handling bandara cepat tanpa antre lama.'
            ],
            [
                'name' => 'H. Ir. Hendra Gunawan',
                'city' => 'Semarang',
                'package' => 'Haji Khusus Furoda 1445 H',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80',
                'title' => 'Amanah, Legalitas Kemenag Pasti & Maktab VIP Sangat Nyaman',
                'quote' => 'Memilih haji tanpa antre butuh travel yang 100% amanah. TOURBAIK membuktikan komitmennya: visa resmi terbit resmi di platform e-Hajj, tenda ber-AC di Mina sangat dingin dan bersih, makanan terjamin, serta pendampingan dokter 24 jam.'
            ]
        ];
    }

    /**
     * Hero photo slider images (Makkah, Madinah, Raudhah)
     */
    private function getHeroSlides()
    {
        return [
            [
                'image' => 'https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?auto=format&fit=crop&w=1200&q=85',
                'title' => 'Ka\'bah Al-Musyarrafah',
                'city' => 'Makkah Al-Mukarramah',
                'caption' => 'Pusat Kiblat Umat Islam Sedunia • Pelataran Thawaf yang Diberkahi'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1200&q=85',
                'title' => 'Masjid Nabawi & Kubah Hijau',
                'city' => 'Madinah Al-Munawwarah',
                'caption' => 'Raudhah Syarifah Taman Surga • Ziarah Makam Rasulullah SAW'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1565552645632-d725f8bfc19a?auto=format&fit=crop&w=1200&q=85',
                'title' => 'Kemegahan Masjidil Haram',
                'city' => 'Makkah Al-Mukarramah',
                'caption' => 'Hotel Bintang 5 Berjarak Langkah Kaki Menuju Pelataran Shalat'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&w=1200&q=85',
                'title' => 'Kekhusyukan Ibadah Malam',
                'city' => 'Masjidil Haram',
                'caption' => 'Doa Mustajab di Multazam, Hijir Ismail & Pelataran Ka\'bah'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?auto=format&fit=crop&w=1200&q=85',
                'title' => 'Panggilan Suci Baitullah',
                'city' => 'Tanah Suci',
                'caption' => 'Labbaik Allahumma Labbaik, Menuju Ibadah yang Mabrur'
            ]
        ];
    }

    /**
     * FAQ data
     */
    private function getFaqs()
    {
        return [
            [
                'q' => 'Bagaimana legalitas dan izin resmi TOURBAIK di Kementerian Agama RI?',
                'a' => 'TOURBAIK berada di bawah naungan PT Khaira Berkah Mandiri yang telah memiliki Izin Resmi Kementerian Agama RI NO. 25072200719360001 dengan Akreditasi "A". Kami menjamin kepatuhan penuh pada program 5 Pasti Umrah Kemenag (Pasti Travelnya, Pasti Jadwalnya, Pasti Terbangnya, Pasti Hotelnya, dan Pasti Visanya).'
            ],
            [
                'q' => 'Berapa jarak hotel jamaah ke Masjidil Haram dan Masjid Nabawi?',
                'a' => 'Untuk seluruh paket kategori VIP dan Signature, kami menggunakan hotel Bintang 5 yang terletak tepat di pelataran (0 - 50 meter dari pintu masuk masjid), seperti Swissôtel Al Maqam / Pullman Zamzam Clock Tower di Makkah, serta Dar Al Taqwa / Frontel Al Harithia di Madinah. Jamaah dapat berjalan kaki dalam 1-3 menit tanpa perlu naik kendaraan antardjemput.'
            ],
            [
                'q' => 'Apakah jamaah lansia atau berkebutuhan khusus mendapatkan pendampingan khusus?',
                'a' => 'Ya, tentu. Kami memiliki fasilitas ramah lansia: penyediaan kursi roda saat tawaf dan sa\'i, pendorong (mutawwif roda) resmi dan berlisensi, menu makanan yang disesuaikan, serta kamar hotel dengan akses elevator cepat ke pelataran masjid. Tim Tour Leader & Muthawwif kami senantiasa siap membantu.'
            ],
            [
                'q' => 'Bagaimana sistem pembayaran paket ibadah di TOURBAIK?',
                'a' => 'Pendaftaran cukup dengan Uang Muka (DP) sebesar Rp 5.000.000/pax untuk mengunci seat dan tiket pesawat. Pelunasan dapat dilakukan selambat-lambatnya 35 hari sebelum tanggal keberangkatan melalui rekening resmi perusahaan di Bank Mandiri (No. Rek: 1670004926746) atau Bank BCA (No. Rek: 5771470972) a.n. PT Khaira Berkah Mandiri.'
            ],
            [
                'q' => 'Apa saja syarat dokumen yang perlu disiapkan untuk pendaftaran?',
                'a' => 'Dokumen yang dibutuhkan: 1) Paspor asli dengan masa berlaku minimal 7 bulan sebelum tanggal keberangkatan dan nama minimal 2 suku kata; 2) Pasfoto terbaru latar belakang putih ukuran 4x6 (zoom wajah 80%); 3) Fotokopi KTP, KK, dan Buku Nikah (bagi suami-istri) atau Akta Kelahiran (bagi anak-anak); 4) Sertifikat vaksin meningitis resmi (sesuai regulasi Kemenkes RI).'
            ],
            [
                'q' => 'Bagaimana bimbingan manasik ibadah yang diberikan oleh TOURBAIK?',
                'a' => 'Kami memberikan bimbingan manasik secara komprehensif: 1) Manasik Teori & Praktik di hotel bintang 5 di Indonesia sebelum berangkat dengan replika Ka\'bah; 2) Pemantapan manasik intensif selama di hotel Madinah/Makkah; 3) Pembimbingan langsung saat pelaksanaan Umrah oleh Ustadz dan Muthawwif alumni Universitas Islam Madinah dan Al-Azhar Kairo yang membimbing sesuai Al-Qur\'an dan As-Sunnah.'
            ]
        ];
    }

    /**
     * Display the main landing page
     */
    public function index()
    {
        $packages = $this->getPackages();
        $heroSlides = $this->getHeroSlides();
        $testimonials = $this->getTestimonials();
        $faqs = $this->getFaqs();

        return view('landing', compact('packages', 'heroSlides', 'testimonials', 'faqs'));
    }

    /**
     * Display Privacy Policy Page
     */
    public function privacy()
    {
        return view('privacy');
    }

    /**
     * Handle consultation inquiry form and redirect to WhatsApp
     */
    public function consultation(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'telepon' => 'required|string|max:20',
            'kota' => 'nullable|string|max:100',
            'paket_minat' => 'required|string|max:150',
            'jumlah_jamaah' => 'nullable|numeric|min:1|max:50',
            'pesan' => 'nullable|string|max:500',
        ]);

        $adminPhone = '6281299997703'; // Official TOURBAIK WhatsApp Hotline: 081299997703

        $message = "Assalamu'alaikum Warahmatullahi Wabarakatuh,\n";
        $message .= "Halo Tim Konsultan Ibadah TOURBAIK,\n\n";
        $message .= "Saya ingin berkonsultasi mengenai rencana ibadah ke Tanah Suci:\n";
        $message .= "• *Nama Calon Jamaah*: " . $validated['nama'] . "\n";
        $message .= "• *Nomor WhatsApp*: " . $validated['telepon'] . "\n";
        if (!empty($validated['kota'])) {
            $message .= "• *Kota Asal*: " . $validated['kota'] . "\n";
        }
        $message .= "• *Paket yang Diminati*: " . $validated['paket_minat'] . "\n";
        if (!empty($validated['jumlah_jamaah'])) {
            $message .= "• *Rencana Jumlah Jamaah*: " . $validated['jumlah_jamaah'] . " Orang\n";
        }
        if (!empty($validated['pesan'])) {
            $message .= "• *Pertanyaan / Kebutuhan Khusus*: " . $validated['pesan'] . "\n";
        }
        $message .= "\nMohon informasi ketersediaan seat, jadwal manasik, dan rincian brosur lengkapnya. Terima kasih.";

        $waUrl = 'https://api.whatsapp.com/send?phone=' . $adminPhone . '&text=' . urlencode($message);

        return redirect()->away($waUrl);
    }
}
