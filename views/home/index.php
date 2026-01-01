<?php if(isset($_SESSION['success'])): ?>
    <div class="fixed top-6 left-1/2 -translate-x-1/2 z-[9999] bg-green-200 text-green-900 px-6 py-4 rounded-2xl shadow-xl">
        <?= $_SESSION['success']; ?>
    </div>
<?php unset($_SESSION['success']); endif; ?>

<?php if(isset($_SESSION['error'])): ?>
    <div class="fixed top-6 left-1/2 -translate-x-1/2 z-[9999] bg-red-200 text-red-900 px-6 py-4 rounded-2xl shadow-xl">
        <?= $_SESSION['error']; ?>
    </div>
<?php unset($_SESSION['error']); endif; ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/output.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

</head>
<body class="bg-blue-100 dark:bg-background-dark text-slate-800 dark:text-slate-100 transition-color duration-300">
    <nav class="fixed w-full z-50 top-0 transition-all duration-300 px-4 pt-4">
        <div class="glass-panel max-w-7xl mx-auto rounded-full px-6 py-3 flex justify-between items-center shadow-lg shadow-sky-100/50 dark:shadow-none">
            <div class="flex items-center gap-2">
                <div class="w-8 h-4  rounded-full flex items-center justify-center text-white font-bold">
                    <img src="../../logo.png" alt="">
                    <span class=" text-sm" ><img src="img/logo.png" alt=""> </span>
                </div>
                <span class="font-bold text-lg tracking-tight text-slate-900 dark:text-white">PiDiAM</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600 dark:text-slate-300">
                <a class="hover:text-primary transition-colors" href="#">Beranda</a>
                <a class="hover:text-primary transition-colors" href="#layanan-kami">Layanan</a>
                <a class="hover:text-primary transition-colors" href="#">Profile</a>
                <a class="hover:text-primary transition-colors" href="#">Statistik</a>
            </div>
            <div class="flex items-center gap-4">
                <button class="py-2 px-3 rounded-full cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-700 dark:bg-slate-800 transition-colors" onclick="document.documentElement.classList.toggle('dark')">
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </button>
                <a href="#" class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white px-5 py-2 rounded-full text-sm  shadow-sm border-slate-200 dark:border-slate-600 hover:shadow-md dark:hover:bg-slate-700 transition-all flex items-center gap-2 group">
                    <div class="w-3">
                        <i class="fa-solid fa-phone"></i>
                    </div>    
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>
    <div class="relative overflow-hidden pt-25 pb-15 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto ">
        <div class="absolute bg-sky-200/40 top-0 left-0 -translate-x-1/4 w-[600px] h-[600px] dark:bg-sky-900/20 rounded-full blur-[100px] -z-10"></div>
        <div class="absolute bg-cyan-100/40 top-40 right-0 translate-x-1/4 w-[500px] h-[500px] dark:bg-cyan-900/20 rounded-full blur-[80px] -z-10"></div>
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-8 items-center  mb-20 ml-2">
            <div class="space-y-3 relative z-10 mt-1">
                <div class="inline-flex bg-white dark:bg-sky-900 rounded-2xl items-center px-3 py-1 dark:border-slate-700">
                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-300 uppercase tracking-wider">:)</span>
                </div>
                <h1 class="text-5xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.1] text-slate-900 dark:text-white">AIR BERSIH <br>
                <span class="text-primary dark:text-sky-400">UNTUK SEMUA</span> <br>
                MASYARAKAT
            </h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 max-w-lg leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sunt, optio voluptas doloremque dolore maiores! Voluptatibus sit, ipsum nam ex, aut commodi tempora quod aperiam placeat recusandae nesciunt nostrum veritatis.</p>
            <div class="flex flex-wrap items-center gap-4 pt-4">
                <a href="" class="bg-[#1e3a8a] px-8 py-4 text-white rounded-2xl border border-white dark:bg-blue-900/20 transition-all transform hover:bg-blue-800 flex items-center gap-3">
                    Lihat Layanan
                </a>
                <div class="flex items-center gap-4 px-6 py-3 bg-white/50 backdrop-blur-sm rounded-2xl border border-white/50 dark:bg-slate-800/50 dark:border-slate-700"></div>
            </div> 
            
        
        </div>
        <div class="relative h-[400px] w-full  flex items-center justify-center">
                <div class="absolute w-[450px] h-[450px] bg-gradient-to-tr from-sky-200 to-white
                dark:from-slate-800 dark:to-slate-700 rounded-full top-1/14 left-70 transform -translate-x-1/2 shadow-xl">
                </div>
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 z-10 w-[400px]">
                    <img src="img/img-aliran.png" class="w-full h-auto drop-shadow-2xl mask-image-gradient" alt="">
                </div>
        </div>
        <div class="absolute top-27 right-10 z-20 float" style="animation-delay: 0.5s;">
            <div class="glass-card p-4 rounded-2xl shadow-soft max-2-[160px]">
                <div class="bg-blue-100 w-10 h-10 dark:bg-blue-900/50 rounded-full flex items-center justify-center mb-2">
                    <i class="fa-solid fa-droplet text-primary"></i>
                </div>
                <p class="text-2xl font-bold text-slate-500 dark:text-slate-400">99.0%</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Tingkat Kemurnian</p>
            </div>
        </div>
        </div>
        <div class=" flex items-center justify-center mt-40"><span class="text-2xl font-bold" id="layanan-kami">Layanan Kami</span></div>
        <div class="grid md:grid-cols-3 gap-6 relative z-10 mb-24 top-10">
            <a href="#">
                <div class="glass-card p-6 rounded-[2rem] hover:shadow-xl transition-all duration-300 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-0 group-hover:opacity-100 transition-opacity" >
                    <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center transform group-hover:rotate-45 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-down fa-rotate-180"></i>
                    </div>
                </div>
                <div class="w-20 h-20 bg-blue-100/40 mb-4 rounded-2xl flex items-center justify-center relative">
                <div class="">
                    <i class="fa-solid fa-file-lines w-full text-4xl"></i>
                </div>    
                
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Cek Tagihan &amp; <br> Pembayaran</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Cek dan Bayar tagihan air bulanan dengan mudah, cepat, dan aman.</p>
                <span class="text-primary text-sm font-semibold group-hover:underline">Akses layanan</span>
            </div>
            </a>
            <a href="<?= BASE_URL ?>/permohonan">
                <div class="glass-card p-6 rounded-[2rem] hover:shadow-xl transition-all duration-300 group cursor-pointer relative overflow-hidden" >
                <div class="absolute top-0 right-0 p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center transform group-hover:rotate-45 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-down fa-rotate-180"></i>
                    </div>
                </div>
                <div class="w-20 h-20 bg-blue-100/40 mb-4 rounded-2xl flex items-center justify-center relative">
                <div class="">
                    <i class="fa-solid fa-file-signature w-full text-4xl"></i>
                </div>    
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Pasang <br>Sambungan</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Pengajuan pemasangan instalasi air baru untuk rumah atau bisnis.</p>
                <span class="text-primary text-sm font-semibold group-hover:underline">Daftar Sekarang</span>
            </div>
            </a>
            <a href="#">
                <div class="glass-card p-6 rounded-[2rem] hover:shadow-xl transition-all duration-300 group cursor-pointer relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center transform group-hover:rotate-45 transition-transform duration-300">
                        <i class="fa-solid fa-arrow-down fa-rotate-180"></i>
                    </div>
                </div>
                <div class="w-20 h-20 bg-blue-100/40 mb-4 rounded-2xl flex items-center justify-center relative">
                <div class="">
                    <i class="fa-solid fa-file-lines w-full text-4xl"></i>
                </div>    
                
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Pengaduan &amp; <br> Layanan Teknis</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Laporan kebocoran pipa atau gangguan air di wilayah Anda</p>
                <span class="text-primary text-sm font-semibold group-hover:underline">Buat Laporan</span>
            </div>
            </a>
            
            

        </div>
        <div class="grid mt-40 lg:grid-cols-2 gap-12 items-center bg-white dark:bg-slate-800/50 rounded-[3rem] p-8 lg:p-12 shadow-sm border-slate-100 dark:border-slate-700 mb-20">
                <div class="relative ">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-accent/20 rounded-full blur-xl z-10">
                    </div>
                    <div class="absolute w-32 h-32 bg-primary/20 -bottom-4 -left-4 rounded-full blur-xl -z-10">
                    </div>
                    <img src="img/PDAM-Building.png" alt="PDAM Building" class="rounded-3xl shadow-2xl relative z-10 w-full h-[400px] object-cover">
                    <div class="absolute  dark:text-white tracking-widest uppercase">
                        Pusat Pelayanan
                    </div>
                    <div class="absolute bottom-4 left-4 z-20 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-5 py-2 rounded-xl shadow-lg border border-slate-100 dark:border-slate-700 max-w-[200px]">
                        <h4 class="font-bold text-slate-900 dark:text-white text-lg">Pusat</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-300 mt-1">Jl. Air Bersih No. 123, Semarang</p>
                    </div>
                </div>
                <div class="space-y-6">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 text-xs font-bold uppercase tracking-wider">Tentang Kami</span>
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white leading-tight">MENGHUBUNGKAN TEKNOLOGI DENGAN <span CLASS="text-primary">KEBUTUHAN DASAR</span></h2>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam inventore nesciunt illum officiis! Nemo architecto tempore iusto vero cupiditate? Nemo doloremque eum adipisci recusandae aliquid quibusdam ipsum earum! Fugiat, fuga.</p>
                    <div class="grid grid-cols-2 gap-4 pt-2">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-primary mt-1 text-3xl"></i>
                            <div>
                                <h5 class="font-bold text-slate-900 dark:text-white text-sm">Air Bersih 24/7</h5>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Pasokan tanpa henti</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-circle-check text-primary mt-1 text-3xl"></i>
                            <div>
                                <h5 class="font-bold text-slate-900 dark:text-white text-sm">Teknologi Pintar</h5>
                            <p class="text-xs text-slate-500 dark:text-slate-400 ">Monitoring Real-time</p>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="pt-2 flex flex-wrap gap-4 items-center">
                <a href="" class="bg-[#1e3a8a] text-white px-6 py-3 rounded-full font-medium hover:bg-blue-900 transition-colors flex items-center gap-2">Pelajari Profil <i class="fa-solid fa-arrow-down fa-rotate-270"></i></a>
                <div class="flex items-center gap-3 px-4 py-2 border border-slate-200 rounded-full dark:border-slate-700">
                    <i class="fa-solid fa-phone text-slate-400"></i>
                    <div class="text-xs font-medium">
                        <span class="block text-slate-600 dark:text-slate-500">Layanan Pelanggan</span>
                        <span class="block text-slate-900 dark:text-white font-bold text-sm">021-555-0199</span>
                    </div>
                </div>
              </div>
            </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-slate-200 dark:border-slate-800 pt-10 mb-20">
        <div class="text-center group">
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-3 group-hover:text-primary transition-colors">50 Jt</h3>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Investasi Infrastruktur</p>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Dalam pengembangan pipa</p>
        </div>
        <div class="text-center group">
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-3 group-hover:text-primary transition-colors">2k+</h3>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Pelanggan terlayani</p>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Di seluruh kecamatan</p>
        </div>
        <div class="text-center group">
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-3 group-hover:text-primary transition-colors">90%</h3>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Tingkat Kepuasan</p>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Berdasarkan survei</p>
        </div>
        <div class="text-center group">
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white mb-3 group-hover:text-primary transition-colors">50+</h3>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Kecamatan</p>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wide">Area jangkauan layanan</p>
        </div>
    </div>
    
</body>
</html>
