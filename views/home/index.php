<?php 

?>
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
    <div class="relative overflow-hidden pt-25 pb-32 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-2">
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
                <span class="text-primary text-sm font-semibold group-hover:underline">Akses layanan</span>
            </div>
            </a>
            

        </div>
    </div>
</body>
</html>
