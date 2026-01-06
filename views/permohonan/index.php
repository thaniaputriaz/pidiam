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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />




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
                <a class="hover:text-primary transition-colors" href="<?= BASE_URL ?>/home">Beranda</a>
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
    <div
      class="relative overflow-hidden pt-25 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto flex-grow"
    >
      <div
        class="absolute top-0 left-0 -translate-x-1/4 -translate-y-1/4 w-[600px] h-[600px] bg-sky-200/40 dark:bg-sky-900/20 rounded-full blur-[100px] -z-10"
      ></div>
      <div
        class="absolute bottom-40 right-0 translate-x-1/4 w-[500px] h-[500px] bg-cyan-100/40 dark:bg-cyan-900/20 rounded-full blur-[80px] -z-10"
      ></div>
      <div class="max-w-5xl mx-auto">
        <div
          class="mb-8 flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400"
        >
          <a class="hover:text-primary flex items-center gap-1" href="<?= BASE_URL ?>/home">
            <i class="fa-solid fa-arrow-down fa-rotate-90"></i>
            Kembali
          </a>
          <span class="text-slate-300 dark:text-slate-700">/</span>
          <span>Layanan</span>
          <span class="text-slate-300 dark:text-slate-700">/</span>
          <span class="text-slate-900 dark:text-white font-medium"
            >Pasang Baru</span
          >
        </div>
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
          <div class="lg:col-span-4 space-y-6">
            <div
              class="bg-white/40 dark:bg-slate-800/40 backdrop-blur-sm p-6 rounded-[2rem] border border-white/50 dark:border-slate-700"
            >
              <h2
                class="text-2xl font-bold text-slate-900 dark:text-white mb-4"
              >
                Informasi Pendaftaran
              </h2>
              <p
                class="text-slate-600 dark:text-slate-400 text-sm mb-6 leading-relaxed"
              >
                Pastikan data yang Anda masukkan valid dan sesuai dengan
                identitas resmi (KTP). Tim kami akan melakukan survei lokasi
                dalam waktu 3x24 jam setelah permohonan diterima.
              </p>
              <div class="space-y-4">
                <div
                  class="flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700"
                >
                  <div
                    class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary"
                  >
                    <i class="fa-solid fa-id-card-clip"></i>
                  </div>
                  <div>
                    <h4
                      class="font-bold text-slate-900 dark:text-white text-sm"
                    >
                      Data Lengkap
                    </h4>
                    <p class="text-xs text-slate-500">
                      Isi formulir dengan detail
                    </p>
                  </div>
                </div>
                <div
                  class="flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700"
                >
                  <div
                    class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary"
                  >
                    <i class="fa-solid fa-map-location"></i>
                  </div>
                  <div>
                    <h4
                      class="font-bold text-slate-900 dark:text-white text-sm"
                    >
                      Lokasi Akurat
                    </h4>
                    <p class="text-xs text-slate-500">
                      Tentukan titik pemasangan
                    </p>
                  </div>
                </div>
                <div
                  class="flex items-center gap-4 p-3 bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-100 dark:border-slate-700"
                >
                  <div
                    class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-primary"
                  >
                    <i class="fa-solid fa-house-circle-check"></i>
                  </div>
                  <div>
                    <h4
                      class="font-bold text-slate-900 dark:text-white text-sm"
                    >
                      Survei Teknis
                    </h4>
                    <p class="text-xs text-slate-500">Kunjungan petugas PDAM</p>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="bg-gradient-to-br from-primary to-secondary p-6 rounded-[2rem] text-white shadow-xl shadow-blue-500/20 relative overflow-hidden"
            >
              <div class="relative z-10">
                <i class="fa-solid fa-house-circle-plus"></i>
                <h3 class="font-bold text-lg mb-1">Sudah Mengirimkan Permohonan?</h3>
                <p class="text-blue-100 text-sm mb-4">
                  Lacak status verifikasi dan jadwal survei anda disini
                </p>
                <a href="<?= BASE_URL ?>/permohonan/cek-status">
                  <button
                  class="w-full cursor-pointer bg-white text-primary py-2.5 rounded-xl font-bold text-sm hover:bg-sky-50 transition-colors shadow-sm"
                >
                  Cek Status Permohonan Anda 
                  <i class="fa-solid fa-arrow-down fa-rotate-270"></i>
                </button>
                </a>
                
              </div>
              <div
                class="absolute -bottom-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"
              ></div>
            </div>
          </div>
          <div class="lg:col-span-8">
            <div
              class="glass-card p-8 md:p-10 rounded-[2.5rem] shadow-xl border-t border-white dark:border-slate-700"
            >
              <div class="flex items-center gap-4 mb-8">
                <div
                  class="w-14 h-14 bg-sky-50 dark:bg-slate-800 rounded-2xl flex items-center justify-center text-primary border border-sky-100 dark:border-slate-700 shadow-sm"
                >
                  <i class="fa-solid fa-house-chimney-medical text-2xl"></i>
                </div>
                <div>
                  <h1
                    class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white"
                  >
                    Pendaftaran Permohonan Sambungan
                  </h1>
                  <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">
                    Isi formulir untuk pengajuan instalasi baru.
                  </p>
                </div>
              </div>
              <form class="space-y-8" method="post" action="<?= BASE_URL ?>/permohonan/store">
                <div class="space-y-6">
                  <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2 group">
                      <label
                        class="block text-sm font-bold text-slate-700 dark:text-slate-300 ml-1 group-focus-within:text-primary transition-colors " for="nik"
                      >
                        NIK (Nomor Induk Kependudukan)
                        <span class="text-red-500">*</span>
                      </label>
                      <div class="relative">
                        <div
                          class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"
                        >
                          <i class="fa-solid fa-address-card text-slate-500"></i>
                        </div>
                        <input
                          class="w-full rounded-2xl border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800/50 py-3.5 pl-11 pr-4 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm"
                          placeholder="Masukkan 16 digit NIK"
                          type="text" inputmode="numeric" pattern="[0-9]{16}" maxlength="16" required id="nik" name="nik"
                        />
                      </div>
                    </div>
                    <div class="space-y-2 group">
                      <label
                        class="block text-sm font-bold text-slate-700 dark:text-slate-300 ml-1 group-focus-within:text-primary transition-colors" for="nama"
                      >
                        Nama Lengkap <span class="text-red-500">*</span>
                      </label>
                      <div class="relative">
                        <div
                          class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"
                        >
                          <i class="fa-solid fa-user text-slate-500"></i>
                        </div>
                        <input
                          class="w-full rounded-2xl border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800/50 py-3.5 pl-11 pr-4 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm"
                          placeholder="Sesuai KTP"
                          type="text" maxlength="40" required id="nama" name="nama"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="space-y-2 group">
                    <label
                      class="block text-sm font-bold text-slate-700 dark:text-slate-300 ml-1 group-focus-within:text-primary transition-colors" for="no_hp"
                    >
                      Nomor Handphone / WhatsApp
                      <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                      <div
                        class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"
                      >
                        <i class="fa-solid fa-square-phone text-slate-500"></i>
                      </div>
                      <input
                        class="w-full rounded-2xl border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800/50 py-3.5 pl-11 pr-4 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm"
                        placeholder="Contoh: 081234567890"
                        type="tel" required id="no_hp" name="no_hp" maxlength="13"
                      />
                    </div>
                    <p class="text-xs text-slate-500 ml-1">
                      Nomor ini akan digunakan untuk konfirmasi jadwal survei.
                    </p>
                  </div>
                  <div class="space-y-2 group">
                    <label
                      class="block text-sm font-bold text-slate-700 dark:text-slate-300 ml-1 group-focus-within:text-primary transition-colors" for="alamat"
                    >
                      Alamat Lengkap Pemasangan
                      <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                      <div
                        class="absolute top-4 left-0 pl-4 pointer-events-none"
                      >
                       <i class="fa-solid fa-house text-slate-500"></i>
                      </div>
                      <textarea
                        class="w-full rounded-2xl border-slate-200 dark:border-slate-600 bg-white dark:bg-slate-800/50 py-3.5 pl-11 pr-4 text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm"
                        placeholder="Nama Jalan, No. Rumah, RT/RW, Kelurahan, Kecamatan"
                        rows="3" required name="alamat" id="alamat"
                      ></textarea>
                    </div>
                  </div>
                  <div class="space-y-2 pt-2">
                    <div class="flex justify-between items-center ml-1 mb-1">
                      <label
                        class="block text-sm font-bold text-slate-700 dark:text-slate-300"
                      >
                        Titik Lokasi Pemasangan
                      </label>
                      <span
                        class="text-xs text-primary bg-sky-50 dark:bg-sky-900/30 px-2 py-1 rounded-lg font-medium"
                        >Wajib Diisi</span
                      >
                    </div>
                    <div
                      class="w-full h-80 rounded-[2rem] overflow-hidden relative border-2 border-dashed border-slate-300 dark:border-slate-600 map-pattern group cursor-pointer hover:border-primary transition-all duration-300"
                    >
                      <div
                        class="absolute inset-0 bg-white/60 dark:bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center z-10 backdrop-blur-[2px] pointer-events-none"
                      >
                        <div
                          class="bg-primary text-white px-4 py-3 rounded-full shadow-lg mb-2 transform scale-90 group-hover:scale-100 transition-transform duration-300"
                        >
                          <i class="fa-solid fa-magnifying-glass-location"></i>
                        </div>
                        <span class="font-bold text-slate-800 dark:text-white"
                          >Sesuaikan Lokasi</span
                        >
                      </div>
                      <div
                        class="w-full h-80 rounded-[2rem] overflow-hidden relative border-2 border-dashed border-slate-300"
                      >
                        <div id="map" class="w-full h-full rounded-[2rem]"></div>
                      
                        <input type="hidden" id="lat" name="latitude" required>
                        <input type="hidden" id="lng" name="longitude" required>
                    </div>

                      <!-- <div class="relative">
                          <i class="fa-solid fa-location-crosshairs"></i>
                          <div
                            class="w-8 h-2 bg-black/20 rounded-full blur-sm absolute bottom-1 left-1/2 transform -translate-x-1/2"
                          ></div>
                      </div> -->
                     
                      <div
                        class="absolute bottom-4 right-4 flex flex-col gap-2"
                      >
                        <div
                          class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl shadow-md flex items-center justify-center text-slate-600 dark:text-slate-300 hover:text-primary cursor-pointer"
                        >
                          <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div
                          class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl shadow-md flex items-center justify-center text-slate-600 dark:text-slate-300 hover:text-primary cursor-pointer"
                        >
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div
                          class="w-10 h-10 bg-white dark:bg-slate-800 rounded-xl shadow-md flex items-center justify-center text-slate-600 dark:text-slate-300 hover:text-primary cursor-pointer"
                        >
                          <i class="fa-solid fa-trash"></i>
                        </div>
                      </div>
                    </div>
                    <p
                      class="text-xs text-slate-500 dark:text-slate-400 mt-2 flex items-start gap-1 ml-1"
                    >
                      <span
                        class="material-icons-round text-sm translate-y-[1px]"
                        >info</span
                      >
                      <span
                        >Geser peta dan pastikan pin merah tepat berada di
                        lokasi meteran air akan dipasang.</span
                      >
                    </p>
                  </div>
                </div>
                <div
                  class="border-t border-slate-100 dark:border-slate-700"
                ></div>
                <div
                  class="flex flex-col-reverse sm:flex-row items-center justify-end gap-4"
                >
                  <button
                    class="w-full sm:w-auto px-8 cursor-pointer py-3.5 rounded-full font-bold text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-slate-200 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors"
                    type="button"
                    href=""
                  >
                    Batal
                  </button>
                  <button
                    class="w-full sm:w-auto bg-primary hover:bg-secondary cursor-pointer text-white px-10 py-3.5 rounded-full font-bold shadow-lg shadow-sky-200 dark:shadow-blue-900/20 transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 group"
                    type="submit" 
                  >
                    <span>Kirim Permohonan</span>
                    <div
                      class="bg-white/20 rounded-full px-3 py-1 group-hover:translate-x-1 transition-transform"
                    >
                      <i class="fa-solid fa-location-arrow"></i>
                    </div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div
        class="mt-20 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400 font-medium border-t border-slate-200 dark:border-slate-800 pt-8"
      >
        <div class="flex items-center gap-2 mb-4 md:mb-0">
          <div
            class="w-6 h-6 bg-slate-200 dark:bg-slate-700 rounded-full flex items-center justify-center"
          >
            <span
              class="material-icons-round text-[10px] text-slate-500 dark:text-slate-400"
              >water_drop</span
            >
          </div>
          <p class="text-slate-500 dark:text-slate-400">
            © 2023 PDAM Digital AquaFlow. Hak Cipta Dilindungi.
          </p>
        </div>
        <div class="flex gap-6">
          <a class="hover:text-primary transition-colors" href="#"
            >Syarat &amp; Ketentuan</a
          >
          <a class="hover:text-primary transition-colors" href="#"
            >Kebijakan Privasi</a
          >
          <a class="hover:text-primary transition-colors" href="#">Bantuan</a>
        </div>
      </div>
    </div>
    
</body>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const defaultLat = -6.9667;
  const defaultLng = 110.4167;


  document.getElementById("lat").value = defaultLat;
  document.getElementById("lng").value = defaultLng;

  const map = L.map('map').setView([defaultLat, defaultLng], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

  const marker = L.marker([defaultLat, defaultLng], { draggable: true }).addTo(map);

  marker.on('dragend', function () {
    const pos = marker.getLatLng();
    document.getElementById("lat").value = pos.lat;
    document.getElementById("lng").value = pos.lng;
  });
});
</script>

</html>
