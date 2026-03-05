<?php include 'header.php'; ?>

<main>
  <section id="hero-wrapper" class="relative h-[200vh] bg-slate-900">
    <div class="sticky top-0 h-screen w-full overflow-hidden flex flex-col items-center">
      
      <div id="hero-bg-blur" class="absolute inset-0 bg-cover bg-center blur-[60px] scale-125 opacity-60 z-0 transition-all duration-1000" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1600&auto=format&fit=crop');"></div>
      <div class="absolute inset-0 bg-slate-900/50 mix-blend-multiply z-0"></div>

      <div id="hero-text" class="absolute top-[12%] md:top-[15%] w-full text-center px-4 z-10 will-change-transform">
        <h1 class="font-black text-5xl md:text-[8rem] leading-[0.9] text-white uppercase drop-shadow-2xl tracking-tight">PAHAMI KONSEP<br>RAIH PRESTASI</h1>
        <p class="text-lg md:text-2xl text-white/90 font-medium drop-shadow-md mt-6 max-w-3xl mx-auto tracking-wide"></p>
      </div>

      <div id="hero-carousel" class="absolute top-[65%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90vw] md:w-[80vw] h-[35vh] md:h-[45vh] rounded-[2rem] md:rounded-[4rem] overflow-hidden shadow-2xl border-[4px] border-white/20 z-20 will-change-[width,height,border-radius]">
        <div class="carousel-slide active"><img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
        <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=1600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
        <div class="carousel-slide"><img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=1600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
      </div>
    </div>
  </section>

  <section id="solusi" class="py-24 px-6 lg:px-8 relative z-30 overflow-hidden bg-slate-50">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
      <div class="reveal-left">
        <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-8 leading-tight tracking-tight">Melihat anak kesulitan mengikuti pelajaran di sekolah?</h2>
        <ul class="space-y-5">
          <li class="flex items-center gap-5 p-5 card-safe shadow-sm transition-all hover:shadow-[0_15px_30px_-10px_rgba(6,182,212,0.4)] hover:-translate-y-2 group cursor-default">
            <span class="w-14 h-14 rounded-full bg-red-100 text-red-500 flex items-center justify-center shrink-0 text-xl group-hover:scale-125 group-hover:-rotate-12 transition-transform duration-500"><i class="fa-solid fa-person-running"></i></span>
            <span class="text-base md:text-lg font-bold text-slate-700">Penjelasan guru terlalu cepat, tertinggal materi.</span>
          </li>
          <li class="flex items-center gap-5 p-5 card-safe shadow-sm transition-all hover:shadow-[0_15px_30px_-10px_rgba(6,182,212,0.4)] hover:-translate-y-2 group cursor-default">
            <span class="w-14 h-14 rounded-full bg-orange-100 text-orange-500 flex items-center justify-center shrink-0 text-xl group-hover:scale-125 group-hover:rotate-12 transition-transform duration-500"><i class="fa-solid fa-arrow-trend-down"></i></span>
            <span class="text-base md:text-lg font-bold text-slate-700">Nilai Try Out stagnan dan cenderung menurun.</span>
          </li>
          <li class="flex items-center gap-5 p-5 card-safe shadow-sm transition-all hover:shadow-[0_15px_30px_-10px_rgba(6,182,212,0.4)] hover:-translate-y-2 group cursor-default">
            <span class="w-14 h-14 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center shrink-0 text-xl group-hover:scale-125 group-hover:-rotate-12 transition-transform duration-500"><i class="fa-solid fa-stopwatch"></i></span>
            <span class="text-base md:text-lg font-bold text-slate-700">Manajemen waktu belajar yang berantakan.</span>
          </li>
        </ul>
      </div>
      
      <div class="reveal-right delay-200 relative group">
        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 to-blue-500 shape-blob-1 blur-2xl opacity-20 animate-floating-2 group-hover:opacity-40 transition-opacity duration-700"></div>
        <div class="card-safe hover-3d-lift p-8 md:p-12 border-2 border-cyan-200 relative shadow-xl bg-gradient-to-br from-white to-cyan-50/50">
          <h2 class="text-2xl md:text-3xl font-black text-slate-900 mb-8">Sistem Nexus Adalah Solusinya</h2>
          <ul class="space-y-8">
            <li class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-cyan-500 to-blue-500 text-white font-bold flex items-center justify-center shrink-0 shadow-glow-cyan animate-pulse">1</div>
              <div>
                <strong class="text-slate-900 text-xl block mb-2 font-bold">Kurikulum Adaptif</strong>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">Tutor menyesuaikan kecepatan mengajar dengan daya tangkap masing-masing siswa.</p>
              </div>
            </li>
            <li class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-cyan-500 to-blue-500 text-white font-bold flex items-center justify-center shrink-0 shadow-glow-cyan animate-pulse">2</div>
              <div>
                <strong class="text-slate-900 text-xl block mb-2 font-bold">Laporan Progres Harian</strong>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">Orang tua menerima laporan setoran tugas dan nilai try out rutin via dashboard.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="kurikulum" class="py-24 px-6 lg:px-8 relative z-30 bg-slate-50">
    <div class="max-w-7xl mx-auto text-center">
      <h2 class="text-xs md:text-sm font-bold text-cyan-600 mb-12 uppercase tracking-widest reveal-up px-6 py-2 card-safe inline-block shadow-sm">Pilih Jenjang Kesuksesan</h2>
      <div class="flex flex-col md:flex-row flex-wrap justify-center items-center gap-4 md:gap-10 mb-20">
        <div class="blob-hover-wrapper reveal-up">
          <div class="blob-bg" style="background: linear-gradient(135deg, #0ea5e9, #38bdf8, #818cf8);"></div>
          <h3 class="blob-text font-black text-4xl md:text-6xl text-slate-900 tracking-tighter">SD & SMP</h3>
        </div>
        <div class="blob-hover-wrapper reveal-up delay-100">
          <div class="blob-bg" style="background: linear-gradient(135deg, #fde047, #f59e0b, #ea580c);"></div>
          <h3 class="blob-text font-black text-4xl md:text-6xl text-slate-900 tracking-tighter">SMA & UTBK</h3>
        </div>
        <div class="blob-hover-wrapper reveal-up delay-200">
          <div class="blob-bg" style="background: linear-gradient(135deg, #34d399, #10b981, #059669);"></div>
          <h3 class="blob-text font-black text-4xl md:text-6xl text-slate-900 tracking-tighter">KEDINASAN</h3>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left relative">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-gradient-to-r from-cyan-200/30 via-sky-200/30 to-blue-200/30 shape-blob-3 blur-[100px] animate-blob-spin-slow -z-10 hidden md:block"></div>
        
        <div class="hover-3d-lift p-8 md:p-10 shadow-lg shadow-cyan-100/50 reveal-up border border-white bg-gradient-to-b from-white to-cyan-50/30 rounded-3xl md:rounded-tl-[3rem] md:rounded-br-[3rem]">
          <div class="w-14 h-14 bg-cyan-100 rounded-full flex items-center justify-center text-cyan-600 text-xl mb-6"><i class="fa-solid fa-book-open"></i></div>
          <h4 class="text-xl md:text-2xl font-black text-slate-900 mb-4 tracking-tight">Reguler Dasar</h4>
          <ul class="space-y-3 text-slate-600 font-semibold text-sm md:text-base">
            <li class="flex items-center gap-2">✓ Pemantapan Matematika</li>
            <li class="flex items-center gap-2">✓ Logika IPA & Bahasa Inggris</li>
          </ul>
        </div>
        <div class="hover-3d-lift p-8 md:p-10 shadow-lg shadow-amber-100/50 reveal-up delay-100 border border-white bg-gradient-to-b from-white to-amber-50/30 rounded-3xl md:rounded-tr-[3rem] md:rounded-bl-[3rem]">
          <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 text-xl mb-6"><i class="fa-solid fa-graduation-cap"></i></div>
          <h4 class="text-xl md:text-2xl font-black text-slate-900 mb-4 tracking-tight">Intensif UTBK</h4>
          <ul class="space-y-3 text-slate-600 font-semibold text-sm md:text-base">
            <li class="flex items-center gap-2">✓ Kupas Tuntas TPS & TKA</li>
            <li class="flex items-center gap-2">✓ Try Out Nasional Rutin</li>
          </ul>
        </div>
        <div class="hover-3d-lift p-8 md:p-10 shadow-lg shadow-emerald-100/50 reveal-up delay-200 border border-white bg-gradient-to-b from-white to-emerald-50/30 rounded-3xl md:rounded-tl-[3rem] md:rounded-br-[3rem]">
           <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 text-xl mb-6"><i class="fa-solid fa-shield-halved"></i></div>
          <h4 class="text-xl md:text-2xl font-black text-slate-900 mb-4 tracking-tight">Kedinasan</h4>
          <ul class="space-y-3 text-slate-600 font-semibold text-sm md:text-base">
            <li class="flex items-center gap-2">✓ Latihan Soal SKD</li>
            <li class="flex items-center gap-2">✓ Simulasi Psikotes & Wawancara</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="guru" class="py-24 px-6 lg:px-8 relative z-30 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16 reveal-up">
        <h2 class="text-xs md:text-sm font-bold text-cyan-600 mb-2 uppercase tracking-widest px-6 py-2 card-safe inline-block">Tutor Berprestasi</h2>
        <h3 class="text-3xl md:text-5xl font-black text-slate-900 mt-4 tracking-tight">Dibimbing Langsung Oleh Ahlinya</h3>
      </div>
      
      <div class="relative w-full reveal-up delay-100 group/slider">
        <div id="tutor-track" class="flex gap-6 overflow-x-auto hide-scrollbar snap-x snap-mandatory py-6 px-2 items-stretch">
          
          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1755548259915-52cdd9476399?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Andriawan, M.Sc.</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Matematika & Fisika</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="88b66cb6c261ee05c84f0b6ae1790cee.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni ITB
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1604904612715-47bf9d9bc670?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Sarah Olivia, B.A.</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Bahasa Inggris</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="3bbd4b10bbf4b5311a962164512989ba.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni UI
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://plus.unsplash.com/premium_photo-1661580702098-b1a081567ba3?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Faisal Akbar, S.E.</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Pakar TPS & Logika</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="3cb9c695d329f017c1496dfae653d144.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni UGM
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Maya Safira, S.IP</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Spesialis Kedinasan</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="Untitled design (7).png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Lulusan STAN
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Budi Santoso, M.T.</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Kimia Terapan</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="PinClipart.com_nurse-practitioner-symbol-clip_2099883.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni UNPAD
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Rina Kartika, S.Pd</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Bahasa Indonesia</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="pngwing.com.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni UNDIP
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Arif Rahman, B.Eng</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Penalaran Umum</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="pngegg.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni ITS
                </div>
            </div>
          </div>

          <div class="snap-start card-safe h-auto p-5 bg-white shadow-lg hover-3d-lift group w-[85vw] sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] flex-none flex flex-col cursor-pointer">
            <div class="w-full h-72 md:h-80 rounded-2xl overflow-hidden mb-5 relative flex-shrink-0">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            </div>
            <div class="flex flex-col flex-1">
                <h4 class="font-extrabold text-xl text-slate-900 text-center">Dian Pertiwi, M.Si</h4>
                <p class="text-cyan-600 font-bold text-sm mb-4 text-center">Biologi & Ekologi</p>
                <div class="mt-auto bg-slate-50 border border-slate-100 rounded-lg p-3 text-xs font-bold text-slate-600 flex items-center justify-center gap-2 transition-colors group-hover:bg-slate-100">
                  <img src="ipb.png" class="h-5 object-contain grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500"> Alumni IPB
                </div>
            </div>
          </div>

        </div>
        
        <button id="tutor-prev" class="absolute left-[-10px] md:left-[-20px] top-1/2 -translate-y-1/2 w-12 h-12 bg-white text-slate-800 rounded-full flex justify-center items-center shadow-2xl hover:bg-cyan-500 hover:text-white transition-colors z-20"><i class="fa-solid fa-chevron-left"></i></button>
        <button id="tutor-next" class="absolute right-[-10px] md:right-[-20px] top-1/2 -translate-y-1/2 w-12 h-12 bg-white text-slate-800 rounded-full flex justify-center items-center shadow-2xl hover:bg-cyan-500 hover:text-white transition-colors z-20"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <section id="kehidupan" class="py-32 px-6 lg:px-8 bg-vibrant-ocean relative overflow-hidden z-30">
    <div class="absolute inset-0 bg-slate-900 opacity-20 mix-blend-multiply"></div>
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal-left text-white relative z-10">
        <h2 class="text-4xl md:text-6xl font-black mb-8 leading-none drop-shadow-sm">TRANSPARANSI<br>PROGRES</h2>
        <p class="text-lg md:text-xl text-white mb-10 leading-relaxed font-bold">Pantau perkembangan anak Anda dari rumah.</p>
        <div class="glass-effect-dark hover-3d-lift p-6 md:p-8 rounded-[2rem] border-2 border-white/20 shadow-xl">
          <ul class="space-y-4 text-white text-base md:text-lg font-bold">
            <li class="flex items-center gap-4"><span class="w-10 h-10 bg-white/20 flex items-center justify-center rounded-full"><i class="fa-solid fa-check"></i></span> Validasi Kehadiran Kelas</li>
            <li class="flex items-center gap-4"><span class="w-10 h-10 bg-white/20 flex items-center justify-center rounded-full"><i class="fa-solid fa-chart-line"></i></span> Laporan Nilai Try Out Mingguan</li>
            <li class="flex items-center gap-4"><span class="w-10 h-10 bg-white/20 flex items-center justify-center rounded-full"><i class="fa-solid fa-list-check"></i></span> Rekap Setoran Tugas Harian</li>
          </ul>
        </div>
      </div>
      <div class="grid grid-cols-2 gap-4 md:gap-6 reveal-right delay-200 relative z-10">
        <div class="space-y-4 md:space-y-6 mt-6 md:mt-12">
          <div class="h-40 md:h-64 rounded-[2rem] md:rounded-[3rem] border-[4px] border-white/40 overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
          <div class="h-32 md:h-48 rounded-[1.5rem] md:rounded-[2rem] border-[4px] border-white/40 overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
        </div>
        <div class="space-y-4 md:space-y-6">
          <div class="h-32 md:h-48 rounded-[1.5rem] md:rounded-[2rem] border-[4px] border-white/40 overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
          <div class="h-40 md:h-64 rounded-[2rem] md:rounded-[3rem] border-[4px] border-white/40 overflow-hidden shadow-xl"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="trust" class="py-24 px-6 lg:px-8 relative z-30 bg-slate-50">
    <div class="max-w-4xl mx-auto flex flex-col items-center">
      <h2 class="text-3xl md:text-5xl font-black text-center text-slate-900 mb-12 reveal-up tracking-tight">BUKAN SEKADAR JANJI,<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-600">INI BUKTI NYATA.</span></h2>

      <div class="reveal-up w-full max-w-2xl mb-16 relative">
        <div class="card-safe hover-3d-lift p-8 md:p-12 shadow-2xl text-center relative min-h-[250px] flex flex-col items-center justify-center overflow-hidden">
          
          <div class="text-6xl text-cyan-200 absolute top-4 left-1/2 transform -translate-x-1/2 font-serif z-20">"</div>
          
          <div class="w-full overflow-hidden relative mt-8">
            <div id="testi-track" class="flex transition-transform duration-700 ease-in-out">
              <div class="w-full flex-shrink-0 px-2">
                <p class="text-slate-700 text-base md:text-lg mb-6 font-semibold leading-relaxed">Sistem laporannya sangat transparan. Saya bisa cek setoran tugas harian anak. Alhamdulillah nilai sekolahnya naik pesat.</p>
                <h5 class="font-extrabold text-slate-900 text-base">Bapak H. Rahman</h5>
                <p class="text-xs text-cyan-600 font-bold mt-1">Wali Siswa SMP</p>
              </div>
              <div class="w-full flex-shrink-0 px-2">
                <p class="text-slate-700 text-base md:text-lg mb-6 font-semibold leading-relaxed">Cara ngajar tutornya seru banget dan gampang dipahami. Pede banget buat ngadapi ujian SNBT tahun depan!</p>
                <h5 class="font-extrabold text-slate-900 text-base">Dimas Anggara</h5>
                <p class="text-xs text-cyan-600 font-bold mt-1">Diterima di ITB</p>
              </div>
              <div class="w-full flex-shrink-0 px-2">
                <p class="text-slate-700 text-base md:text-lg mb-6 font-semibold leading-relaxed">Latihan soal kedinasannya sangat update. Simulasi wawancara dan psikotesnya benar-benar membantu mental saya saat tes asli.</p>
                <h5 class="font-extrabold text-slate-900 text-base">Siti Aisyah</h5>
                <p class="text-xs text-cyan-600 font-bold mt-1">Lulusan STAN 2025</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="reveal-up delay-100 grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl" id="stats-section">
        <div class="hover-3d-lift bg-white/80 backdrop-blur-sm border border-white px-6 py-8 text-center shadow-md rounded-3xl md:rounded-tl-[2rem] md:rounded-br-[2rem]">
          <div class="text-4xl md:text-5xl font-black text-cyan-600 mb-2"><span class="stat-counter" data-target="2500">0</span>+</div>
          <div class="text-slate-600 font-bold">Siswa Didik Aktif</div>
        </div>
        <div class="hover-3d-lift bg-white/80 backdrop-blur-sm border border-white px-6 py-8 text-center shadow-md rounded-3xl md:rounded-tr-[2rem] md:rounded-bl-[2rem]">
          <div class="text-4xl md:text-5xl font-black text-amber-500 mb-2"><span class="stat-counter" data-target="95">0</span>%</div>
          <div class="text-slate-600 font-bold">Lolos PTN & Kedinasan</div>
        </div>
        <div class="hover-3d-lift bg-white/80 backdrop-blur-sm border border-white px-6 py-8 text-center shadow-md rounded-3xl md:rounded-tl-[2rem] md:rounded-br-[2rem]">
          <div class="text-4xl md:text-5xl font-black text-emerald-500 mb-2">Top <span class="stat-counter" data-target="5">0</span></div>
          <div class="text-slate-600 font-bold">Bimbel Terbaik Kota</div>
        </div>
      </div>
    </div>
  </section>

  <section id="pendaftaran" class="py-24 px-6 lg:px-8 relative z-30 bg-slate-50">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-16 reveal-up">
        <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4 tracking-tight">Langkah Menuju Prestasi</h2>
        <p class="text-slate-600 font-medium text-lg">Proses pendaftaran dirancang mudah dan cepat.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 reveal-up delay-100">
        <div class="hover-3d-lift bg-gradient-to-b from-white to-sky-50 p-8 border border-white shadow-lg text-center rounded-3xl md:rounded-tl-[3rem] md:rounded-br-[3rem] relative">
          <div class="w-12 h-12 bg-cyan-500 text-white rounded-full flex items-center justify-center font-bold text-xl absolute -top-5 left-1/2 -translate-x-1/2 shadow-[0_0_15px_rgba(6,182,212,0.6)]">1</div>
          <h4 class="font-bold text-xl text-slate-900 mt-6 mb-2">Pendaftaran Online</h4>
          <p class="text-slate-600 text-sm">Mengisi formulir data diri awal dan memilih program via website.</p>
        </div>
        <div class="hover-3d-lift bg-gradient-to-b from-white to-sky-50 p-8 border border-white shadow-lg text-center rounded-3xl md:rounded-tr-[3rem] md:rounded-bl-[3rem] relative delay-100">
          <div class="w-12 h-12 bg-cyan-500 text-white rounded-full flex items-center justify-center font-bold text-xl absolute -top-5 left-1/2 -translate-x-1/2 shadow-[0_0_15px_rgba(6,182,212,0.6)]">2</div>
          <h4 class="font-bold text-xl text-slate-900 mt-6 mb-2">Konsultasi & Tes</h4>
          <p class="text-slate-600 text-sm">Konsultasi admin dan tes dasar untuk memetakan gaya belajar.</p>
        </div>
        <div class="hover-3d-lift bg-gradient-to-b from-white to-sky-50 p-8 border border-white shadow-lg text-center rounded-3xl md:rounded-tl-[3rem] md:rounded-br-[3rem] relative delay-200">
          <div class="w-12 h-12 bg-cyan-500 text-white rounded-full flex items-center justify-center font-bold text-xl absolute -top-5 left-1/2 -translate-x-1/2 shadow-[0_0_15px_rgba(6,182,212,0.6)]">3</div>
          <h4 class="font-bold text-xl text-slate-900 mt-6 mb-2">Mulai Belajar</h4>
          <p class="text-slate-600 text-sm">Siswa siap memulai kelas akselerasi bersama tutor andalan.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>