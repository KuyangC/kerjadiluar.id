<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Pertukaran Budaya Korea & Jepang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        .gradient-text {
            background: linear-gradient(135deg, #dc2626 0%, #7c2d12 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .blur-bg {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <!-- Header -->
   <header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-sm border-b border-gray-200/50">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex-shrink-0 w-16 h-16 -ml-2"> 
                <img src="{{ asset('logos.svg') }}" alt="Logo" 
                     class="w-full h-full object-contain hover:scale-105 transition-transform">
            </div>

            <nav class="hidden md:flex items-center space-x-6 mx-4"> 
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900 font-medium py-1 transition-colors whitespace-nowrap">Program</a>
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900 font-medium py-1 transition-colors whitespace-nowrap">Tentang</a>
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900 font-medium py-1 transition-colors whitespace-nowrap">Kontak</a>
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900 font-medium py-1 transition-colors whitespace-nowrap">Galeri</a>
            </nav>

            <div class="flex-shrink-0 flex items-center space-x-3">
                <a href="{{ route('register') }}" 
                   class="text-sm bg-gradient-to-r from-red-600 to-red-700 text-white px-4 py-1.5 rounded-lg hover:shadow-md transition-all font-medium whitespace-nowrap">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
</header>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-red-50 via-white to-blue-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23f87171" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full border border-gray-200/50">
                        <span class="text-2xl">🇰🇷</span>
                        <span class="text-sm font-medium text-gray-700">Program Pertukaran Budaya</span>
                        <span class="text-2xl">🇯🇵</span>
                    </div>
                    <h1 class="text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="text-gray-900">Jelajahi</span><br>
                        <span class="gradient-text">Budaya Asia</span><br>
                        <span class="text-gray-900">Bersama Kami</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                        Rasakan pengalaman tak terlupakan dengan mendalami budaya Korea dan Jepang secara langsung dalam program immersive 3-6 bulan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="group bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-2xl hover:shadow-2xl hover:scale-105 transition-all duration-300 font-semibold text-lg">
                            <span class="flex items-center space-x-2">
                                <span>Mulai Petualangan</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </button>
                        <button class="group border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl hover:bg-gray-50 hover:border-gray-400 transition-all duration-300 font-semibold text-lg">
                            <span class="flex items-center space-x-2">
                                <i class="fas fa-play"></i>
                                <span>Tonton Video</span>
                            </span>
                        </button>
                    </div>
                    <div class="flex items-center space-x-8 pt-4">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-users text-red-600"></i>
                            <span class="text-sm font-medium text-gray-600">500+ Peserta</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span class="text-sm font-medium text-gray-600">4.9/5 Rating</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-certificate text-blue-600"></i>
                            <span class="text-sm font-medium text-gray-600">Sertifikat Resmi</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="floating-animation">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=600&h=500&fit=crop" 
                             alt="Korean Culture" 
                             class="rounded-3xl shadow-2xl w-full h-96 object-cover border-8 border-white">
                    </div>
                    <div class="absolute -top-6 -right-6 glass-effect rounded-2xl p-4 text-white">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-globe text-white"></i>
                            </div>
                            <div>
                                <div class="font-bold">15+ Negara</div>
                                <div class="text-sm opacity-80">Partner Global</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center group hover-lift">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-100 to-red-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <span class="text-3xl font-bold text-red-600">500+</span>
                    </div>
                    <div class="font-semibold text-gray-900">Peserta Berhasil</div>
                    <div class="text-sm text-gray-500">Alumni sukses</div>
                </div>
                <div class="text-center group hover-lift">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <span class="text-3xl font-bold text-blue-600">15+</span>
                    </div>
                    <div class="font-semibold text-gray-900">Mitra Institusi</div>
                    <div class="text-sm text-gray-500">Partner terpercaya</div>
                </div>
                <div class="text-center group hover-lift">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <span class="text-3xl font-bold text-green-600">98%</span>
                    </div>
                    <div class="font-semibold text-gray-900">Tingkat Kepuasan</div>
                    <div class="text-sm text-gray-500">Rating peserta</div>
                </div>
                <div class="text-center group hover-lift">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <span class="text-3xl font-bold text-purple-600">24/7</span>
                    </div>
                    <div class="font-semibold text-gray-900">Dukungan Penuh</div>
                    <div class="text-sm text-gray-500">Support tim</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <div class="inline-flex items-center space-x-2 bg-red-100 px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-star text-red-600"></i>
                    <span class="text-sm font-semibold text-red-600">Program Unggulan</span>
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-6">
                    Program Terbaik untuk<br>
                    <span class="gradient-text">Generasi Muda Indonesia</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Bergabunglah dengan ribuan anak muda Indonesia yang telah merasakan pengalaman 
                    luar biasa menjelajahi budaya Korea dan Jepang secara mendalam.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 mb-20">
                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-torii-gate text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Eksplorasi Budaya Korea</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <span>Pengalaman mengenakan Hanbok tradisional</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <span>Kelas K-Pop dance dan bahasa Korea</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <span>Workshop memasak makanan Korea</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                            <span>Kunjungan ke Istana Gyeongbok</span>
                        </li>
                    </ul>
                    <div class="text-3xl font-bold text-gray-900 mb-4">Rp 28 juta</div>
                    <button class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-4 rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300 font-semibold">
                        Pilih Program Korea
                    </button>
                </div>

                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-mountain text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Petualangan Budaya Jepang</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span>Upacara minum teh dan mengenakan Kimono</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span>Kursus intensif bahasa Jepang</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span>Belajar membuat Sushi dan Ramen</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span>Perjalanan ke Gunung Fuji dan Kyoto</span>
                        </li>
                    </ul>
                    <div class="text-3xl font-bold text-gray-900 mb-4">Rp 32 juta</div>
                    <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-4 rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300 font-semibold">
                        Pilih Program Jepang
                    </button>
                </div>

                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Jaringan Global</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span>Tinggal bersama keluarga lokal</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span>Berteman dengan peserta internasional</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span>Proyek kolaborasi budaya</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span>Sertifikat dan surat rekomendasi</span>
                        </li>
                    </ul>
                    <div class="text-3xl font-bold text-gray-900 mb-4">Rp 45 juta</div>
                    <button class="w-full bg-gradient-to-r from-purple-500 to-purple-600 text-white py-4 rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300 font-semibold">
                        Pilih Program Kombinasi
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Program Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <!-- First Detail -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
                <div class="space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-red-100 px-4 py-2 rounded-full">
                        <i class="fas fa-sparkles text-red-600"></i>
                        <span class="text-sm font-semibold text-red-600">Program Khusus</span>
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900 leading-tight">
                        Dirancang Khusus untuk<br>
                        <span class="gradient-text">Generasi Muda Indonesia</span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Program ini dikembangkan dengan memahami kebutuhan dan minat anak muda Indonesia 
                        yang ingin mengeksplorasi budaya Asia Timur dengan cara yang menyenangkan dan bermakna.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-heart text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Program Disesuaikan Minat</h4>
                                <p class="text-gray-600">Jadwal dan aktivitas disesuaikan dengan passion masing-masing peserta</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-graduation-cap text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Bimbingan Ahli</h4>
                                <p class="text-gray-600">Didampingi mentor berpengalaman dari Indonesia dan negara tujuan</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-red-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-camera text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Konten Media Sosial</h4>
                                <p class="text-gray-600">Bantuan pembuatan konten Instagram dan TikTok yang menarik</p>
                            </div>
                        </div>
                    </div>
                    <button class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-2xl hover:shadow-lg hover:scale-105 transition-all duration-300 font-semibold text-lg">
                        Lihat Detail Program
                    </button>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=600&h=500&fit=crop" 
                         alt="Cultural Program" 
                         class="rounded-3xl shadow-2xl w-full h-96 object-cover">
                    <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-star text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-900">4.9/5</div>
                                <div class="text-gray-600">Rating Peserta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Detail -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?w=600&h=500&fit=crop" 
                         alt="Cultural Activities" 
                         class="rounded-3xl shadow-2xl w-full h-96 object-cover">
                    <div class="absolute -top-8 -left-8 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-gray-900">500+</div>
                                <div class="text-gray-600">Teman Baru</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 space-y-8">
                    <div class="inline-flex items-center space-x-2 bg-blue-100 px-4 py-2 rounded-full">
                        <i class="fas fa-globe text-blue-600"></i>
                        <span class="text-sm font-semibold text-blue-600">Pengalaman Autentik</span>
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900 leading-tight">
                        Hidup Seperti Lokal dan<br>
                        <span class="gradient-text">Bangun Persahabatan Seumur Hidup</span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Rasakan kehidupan sehari-hari masyarakat Korea dan Jepang dengan tinggal 
                        bersama keluarga lokal dan berteman dengan anak muda dari seluruh dunia.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold gradient-text mb-2">3-6 Bulan</div>
                            <div class="text-gray-600 font-medium">Durasi Program</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold gradient-text mb-2">24 Jam</div>
                            <div class="text-gray-600 font-medium">Dukungan Lokal</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold gradient-text mb-2">100%</div>
                            <div class="text-gray-600 font-medium">Jaminan Keamanan</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold gradient-text mb-2">∞</div>
                            <div class="text-gray-600 font-medium">Aktivitas Budaya</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <div class="inline-flex items-center space-x-2 bg-purple-100 px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-route text-purple-600"></i>
                    <span class="text-sm font-semibold text-purple-600">Cara Mendaftar</span>
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-6">
                    4 Langkah Mudah<br>
                    <span class="gradient-text">Menuju Impian Anda</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Proses pendaftaran yang simpel dan transparan untuk memulai petualangan budaya Anda
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-red-200 via-blue-200 to-purple-200 rounded-full"></div>
                    
                    <div class="space-y-20">
                        <!-- Step 1 -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 text-right">
                                <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover-lift border border-gray-100">
                                    <div class="flex items-center justify-end space-x-4 mb-6">
                                        <h3 class="text-2xl font-bold text-gray-900">Isi Formulir Online</h3>
                                        <div class="w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-edit text-red-600 text-2xl"></i>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-4 leading-relaxed">
                                        Lengkapi data diri dan ceritakan motivasi Anda bergabung. 
                                        Hanya butuh waktu 5 menit!
                                    </p>
                                    <div class="inline-flex items-center space-x-2 bg-red-100 px-3 py-1 rounded-full">
                                        <i class="fas fa-clock text-red-600 text-sm"></i>
                                        <span class="text-sm font-medium text-red-600">5 menit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                1
                            </div>
                            <div class="w-1/2 pl-12"></div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                2
                            </div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover-lift border border-gray-100">
                                    <div class="flex items-center space-x-4 mb-6">
                                        <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-search text-blue-600 text-2xl"></i>
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-900">Seleksi Berkas</h3>
                                    </div>
                                    <p class="text-gray-600 mb-4 leading-relaxed">
                                        Tim kami akan meninjau aplikasi Anda dengan teliti. 
                                        Hasil akan diumumkan dalam 3 hari kerja.
                                    </p>
                                    <div class="inline-flex items-center space-x-2 bg-blue-100 px-3 py-1 rounded-full">
                                        <i class="fas fa-clock text-blue-600 text-sm"></i>
                                        <span class="text-sm font-medium text-blue-600">3 hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12 text-right">
                                <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover-lift border border-gray-100">
                                    <div class="flex items-center justify-end space-x-4 mb-6">
                                        <h3 class="text-2xl font-bold text-gray-900">Wawancara Online</h3>
                                        <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-video text-green-600 text-2xl"></i>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 mb-4 leading-relaxed">
                                        Sesi wawancara santai selama 20 menit dengan tim seleksi 
                                        untuk mengenal Anda lebih baik.
                                    </p>
                                    <div class="inline-flex items-center space-x-2 bg-green-100 px-3 py-1 rounded-full">
                                        <i class="fas fa-clock text-green-600 text-sm"></i>
                                        <span class="text-sm font-medium text-green-600">20 menit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                3
                            </div>
                            <div class="w-1/2 pl-12"></div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-center">
                            <div class="w-1/2 pr-12"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl shadow-lg">
                                4
                            </div>
                            <div class="w-1/2 pl-12">
                                <div class="bg-white rounded-3xl shadow-xl p-8 hover:shadow-2xl transition-all duration-500 hover-lift border border-gray-100">
                                    <div class="flex items-center space-x-4 mb-6">
                                        <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center">
                                            <i class="fas fa-plane text-purple-600 text-2xl"></i>
                                        </div>
                                        <h3 class="text-2xl font-bold text-gray-900">Lolos & Persiapan</h3>
                                    </div>
                                    <p class="text-gray-600 mb-4 leading-relaxed">
                                        Selamat! Anda diterima. Ikuti orientasi pra-keberangkatan 
                                        dan persiapkan dokumen perjalanan.
                                    </p>
                                    <div class="inline-flex items-center space-x-2 bg-purple-100 px-3 py-1 rounded-full">
                                        <i class="fas fa-clock text-purple-600 text-sm"></i>
                                        <span class="text-sm font-medium text-purple-600">1 minggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center space-x-2 bg-red-100 px-4 py-2 rounded-full mb-6">
                        <i class="fas fa-rocket text-red-600"></i>
                        <span class="text-sm font-semibold text-red-600">Daftar Sekarang</span>
                    </div>
                    <h2 class="text-5xl font-bold text-gray-900 mb-6">
                        Formulir Pendaftaran<br>
                        <span class="gradient-text">Program Budaya</span>
                    </h2>
                    <p class="text-xl text-gray-600">
                        Mulai perjalanan budaya Anda dengan mengisi formulir di bawah ini
                    </p>
                </div>

                <div class="bg-white rounded-3xl shadow-2xl p-12 border border-gray-100">
                    <form class="space-y-10">
                        <!-- Personal Information -->
                        <div class="space-y-8">
                            <h3 class="text-2xl font-bold text-gray-900 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-red-600"></i>
                                </div>
                                <span>Data Pribadi</span>
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Nama Lengkap *</label>
                                    <input type="text" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" placeholder="Masukkan nama lengkap Anda">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Usia *</label>
                                    <input type="number" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" placeholder="Contoh: 22">
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Email *</label>
                                    <input type="email" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" placeholder="contoh@email.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Nomor WhatsApp *</label>
                                    <input type="tel" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" placeholder="08123456789">
                                </div>
                            </div>
                        </div>

                        <!-- Program Selection -->
                        <div class="space-y-8">
                            <h3 class="text-2xl font-bold text-gray-900 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-globe text-blue-600"></i>
                                </div>
                                <span>Pilihan Program</span>
                            </h3>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Program yang Diminati *</label>
                                <select class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                                    <option>Pilih program yang Anda minati</option>
                                    <option>Program Budaya Korea (3 bulan)</option>
                                    <option>Program Budaya Jepang (3 bulan)</option>
                                    <option>Program Kombinasi Korea-Jepang (6 bulan)</option>
                                    <option>Program Singkat (1 bulan)</option>
                                </select>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Waktu Keberangkatan Diinginkan</label>
                                    <input type="date" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Kemampuan Bahasa</label>
                                    <select class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all">
                                        <option>Pemula (belum pernah belajar)</option>
                                        <option>Dasar (bisa sedikit)</option>
                                        <option>Menengah (bisa percakapan sederhana)</option>
                                        <option>Mahir (lancar berkomunikasi)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Motivation -->
                        <div class="space-y-8">
                            <h3 class="text-2xl font-bold text-gray-900 flex items-center space-x-3">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-heart text-purple-600"></i>
                                </div>
                                <span>Motivasi & Harapan</span>
                            </h3>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Ceritakan motivasi Anda mengikuti program ini *</label>
                                <textarea class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" rows="6" placeholder="Tuliskan alasan Anda ingin bergabung dengan program pertukaran budaya ini, apa yang ingin Anda pelajari, dan bagaimana program ini akan membantu mencapai tujuan Anda..."></textarea>
                            </div>
                        </div>

                        <!-- Agreement -->
                        <div class="space-y-4 p-6 bg-gray-50 rounded-2xl">
                            <div class="flex items-start space-x-3">
                                <input type="checkbox" class="mt-1 w-5 h-5 text-red-600 border-2 border-gray-300 rounded focus:ring-red-500">
                                <label class="text-sm text-gray-700">
                                    Saya menyetujui penggunaan data pribadi untuk keperluan program. <a href="#" class="text-red-600 underline font-medium">Baca kebijakan privasi</a>
                                </label>
                            </div>
                            <div class="flex items-start space-x-3">
                                <input type="checkbox" class="mt-1 w-5 h-5 text-red-600 border-2 border-gray-300 rounded focus:ring-red-500">
                                <label class="text-sm text-gray-700">
                                    Saya telah membaca dan menyetujui syarat dan ketentuan program. <a href="#" class="text-red-600 underline font-medium">Lihat syarat lengkap</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-8">
                            <button type="submit" class="group bg-gradient-to-r from-red-600 to-red-700 text-white px-12 py-5 rounded-2xl hover:shadow-2xl hover:scale-105 transition-all duration-300 font-bold text-xl">
                                <span class="flex items-center space-x-3">
                                    <span>Kirim Pendaftaran</span>
                                    <i class="fas fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                                </span>
                            </button>
                            <p class="text-sm text-gray-500 mt-6">
                                Tim kami akan menghubungi Anda dalam 3 hari kerja setelah pendaftaran.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <div class="inline-flex items-center space-x-2 bg-yellow-100 px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-quote-left text-yellow-600"></i>
                    <span class="text-sm font-semibold text-yellow-600">Testimoni Peserta</span>
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-6">
                    Cerita Sukses<br>
                    <span class="gradient-text">Alumni Program</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Dengarkan pengalaman nyata dari kakak-kakak yang telah merasakan program ini
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="flex items-center space-x-1 mb-6">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-8 leading-relaxed text-lg">
                        "3 bulan di Korea benar-benar mengubah hidup saya! Dari yang awalnya cuma suka K-Drama, 
                        sekarang saya bisa berbahasa Korea dan punya keluarga angkat di Seoul."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                             alt="Sari Dewi" 
                             class="w-16 h-16 rounded-2xl object-cover border-4 border-red-100">
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Sari Dewi</h4>
                            <p class="text-gray-500">Alumni Program Korea 2023</p>
                            <p class="text-sm text-red-600 font-medium">⭐ Mahasiswa UI, Jakarta</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="flex items-center space-x-1 mb-6">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-8 leading-relaxed text-lg">
                        "Jepang selalu jadi impian saya sejak kecil. Program ini membuat impian jadi kenyataan! 
                        Sekarang saya kerja di perusahaan Jepang di Jakarta berkat pengalaman ini."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                             alt="Andi Pratama" 
                             class="w-16 h-16 rounded-2xl object-cover border-4 border-blue-100">
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Andi Pratama</h4>
                            <p class="text-gray-500">Alumni Program Jepang 2023</p>
                            <p class="text-sm text-blue-600 font-medium">⭐ Lulusan ITB, Bandung</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="group hover-lift bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100">
                    <div class="flex items-center space-x-1 mb-6">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 italic mb-8 leading-relaxed text-lg">
                        "Program 6 bulan Korea-Jepang adalah investasi terbaik untuk masa depan! 
                        Sekarang saya punya teman dari 15 negara dan sedang merintis bisnis ekspor-impor."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face" 
                             alt="Maya Sari" 
                             class="w-16 h-16 rounded-2xl object-cover border-4 border-purple-100">
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Maya Sari</h4>
                            <p class="text-gray-500">Alumni Program Kombinasi 2022</p>
                            <p class="text-sm text-purple-600 font-medium">⭐ Entrepreneur, Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Stats -->
            <div class="mt-20 text-center">
                <div class="grid md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="group hover-lift">
                        <div class="text-5xl font-bold gradient-text mb-2 group-hover:scale-110 transition-transform">98%</div>
                        <div class="text-gray-600 font-medium">Akan Merekomendasikan</div>
                    </div>
                    <div class="group hover-lift">
                        <div class="text-5xl font-bold gradient-text mb-2 group-hover:scale-110 transition-transform">4.9/5</div>
                        <div class="text-gray-600 font-medium">Rating Kepuasan</div>
                    </div>
                    <div class="group hover-lift">
                        <div class="text-5xl font-bold gradient-text mb-2 group-hover:scale-110 transition-transform">500+</div>
                        <div class="text-gray-600 font-medium">Alumni Sukses</div>
                    </div>
                    <div class="group hover-lift">
                        <div class="text-5xl font-bold gradient-text mb-2 group-hover:scale-110 transition-transform">95%</div>
                        <div class="text-gray-600 font-medium">Ingin Ikut Lagi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <div class="inline-flex items-center space-x-2 bg-blue-100 px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-question-circle text-blue-600"></i>
                    <span class="text-sm font-semibold text-blue-600">Tanya Jawab</span>
                </div>
                <h2 class="text-5xl font-bold text-gray-900 mb-6">
                    Pertanyaan yang<br>
                    <span class="gradient-text">Sering Diajukan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan-pertanyaan umum seputar program kami
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <div class="group bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover-lift">
                    <div class="flex items-center justify-between cursor-pointer">
                        <h3 class="text-xl font-bold text-gray-900">Siapa saja yang bisa ikut program ini?</h3>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-gray-600 transition-colors"></i>
                    </div>
                    <p class="text-gray-600 mt-6 leading-relaxed">
                        Program ini terbuka untuk WNI berusia 18-30 tahun yang sehat jasmani dan rohani. 
                        Tidak ada syarat khusus kemampuan bahasa - yang penting punya semangat belajar dan minat pada budaya Asia Timur!
                    </p>
                </div>

                <div class="group bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover-lift">
                    <div class="flex items-center justify-between cursor-pointer">
                        <h3 class="text-xl font-bold text-gray-900">Berapa biaya yang harus dikeluarkan?</h3>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-gray-600 transition-colors"></i>
                    </div>
                    <p class="text-gray-600 mt-6 leading-relaxed">
                        Biaya bervariasi tergantung program yang dipilih. Untuk program 3 bulan sekitar Rp 25-40 juta 
                        (sudah termasuk tiket pesawat, akomodasi, makan, dan semua aktivitas). Tersedia juga program beasiswa!
                    </p>
                </div>

                <div class="group bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover-lift">
                    <div class="flex items-center justify-between cursor-pointer">
                        <h3 class="text-xl font-bold text-gray-900">Bagaimana dengan keamanan selama program?</h3>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-gray-600 transition-colors"></i>
                    </div>
                    <p class="text-gray-600 mt-6 leading-relaxed">
                        Keamanan adalah prioritas utama kami. Ada tim support 24/7 di setiap negara, asuransi kesehatan internasional, 
                        dan sistem monitoring berkala. Orang tua akan mendapat laporan rutin tentang perkembangan peserta.
                    </p>
                </div>

                <div class="group bg-gray-50 rounded-2xl p-8 hover:bg-gray-100 transition-all duration-300 hover-lift">
                    <div class="flex items-center justify-between cursor-pointer">
                        <h3 class="text-xl font-bold text-gray-900">Apakah harus bisa bahasa Korea/Jepang dulu?</h3>
                        <i class="fas fa-chevron-down text-gray-400 group-hover:text-gray-600 transition-colors"></i>
                    </div>
                    <p class="text-gray-600 mt-6 leading-relaxed">
                        Tidak harus! Kami menyediakan kelas bahasa intensif sebelum keberangkatan dan selama program berlangsung. 
                        Banyak alumni yang berangkat dari nol dan pulang sudah lancar berkomunikasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-2xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl">BN</span>
                        </div>
                        <h3 class="text-2xl font-bold">Budaya Nusantara</h3>
                    </div>
                    <p class="text-gray-400 mb-8 leading-relaxed text-lg">
                        Mewujudkan impian anak muda Indonesia untuk mengeksplorasi budaya dunia 
                        dan membangun jembatan persahabatan internasional melalui program pertukaran budaya berkualitas.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-2xl flex items-center justify-center hover:bg-red-700 cursor-pointer transition-all hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-2xl flex items-center justify-center hover:bg-red-700 cursor-pointer transition-all hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-2xl flex items-center justify-center hover:bg-red-700 cursor-pointer transition-all hover:scale-110">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-2xl flex items-center justify-center hover:bg-red-700 cursor-pointer transition-all hover:scale-110">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-8">Program Kami</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors hover:translate-x-1 transform duration-300 block">Program Korea</a></li>
                        <li><a href="#" class="hover:text-white transition-colors hover:translate-x-1 transform duration-300 block">Program Jepang</a></li>
                        <li><a href="#" class="hover:text-white transition-colors hover:translate-x-1 transform duration-300 block">Program Kombinasi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors hover:translate-x-1 transform duration-300 block">Program Singkat</a></li>
                        <li><a href="#" class="hover:text-white transition-colors hover:translate-x-1 transform duration-300 block">Info Beasiswa</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-xl font-bold mb-8">Hubungi Kami</h4>
                    <div class="space-y-6 text-gray-400">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-red-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <span>021-1234-5678</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-green-600 rounded-xl flex items-center justify-center">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                            <span>0812-3456-7890</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <span>info@budayanusantara.id</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-purple-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <span>Jakarta Selatan, Indonesia</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-orange-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                            <span>Senin-Jumat: 09:00-17:00 WIB</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 mt-16 pt-12">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-6 lg:space-y-0">
                    <p class="text-gray-400">
                        &copy; 2024 Budaya Nusantara. Seluruh hak cipta dilindungi undang-undang.
                    </p>
                    <div class="flex space-x-8 text-gray-400">
                        <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-white transition-colors">Kebijakan Refund</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281234567890" target="_blank" class="fixed bottom-8 right-8 z-50 group">
        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl shadow-2xl flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-3xl">
            <i class="fab fa-whatsapp text-white text-2xl group-hover:scale-110 transition-transform"></i>
        </div>
        <div class="absolute -top-12 right-0 bg-gray-900 text-white px-4 py-2 rounded-xl text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Chat dengan kami
        </div>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scrollToTop" class="fixed bottom-8 left-8 z-50 w-12 h-12 bg-gray-900 text-white rounded-2xl shadow-lg hover:bg-gray-800 transition-all duration-300 hover:scale-110 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Scroll to top functionality
        window.addEventListener('scroll', function() {
            const scrollToTopBtn = document.getElementById('scrollToTop');
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>