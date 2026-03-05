<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nexus Academy | Pahami Konsep, Raih Prestasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cyan: { 400: '#22d3ee', 500: '#06b6d4', 600: '#0891b2' },
            blue: { 500: '#3b82f6', 600: '#2563eb' },
            amber: { 400: '#fbbf24', 500: '#f59e0b' },
            emerald: { 400: '#34d399', 500: '#10b981' },
            slate: { 900: '#0f172a', 800: '#1e293b', 700: '#334155', 600: '#475569' }
          },
          fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] }
        }
      }
    }
  </script>
  
  <style>
    body { background-color: #f8fafc; color: #0f172a; overflow-x: hidden; }

    /* CARD GLASSMORPHISM */
    .card-safe { border-radius: 2rem; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.6); }
    .glass-effect-dark { background: rgba(15, 23, 42, 0.7); backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.1); }
    
    /* EFEK 3D CARD HOVER (YANG ANDA MINTA KEMBALI) */
    .hover-3d-lift { transition: all 0.5s cubic-bezier(0.25, 1, 0.3, 1); }
    .hover-3d-lift:hover { transform: translateY(-12px) scale(1.02); box-shadow: 0 25px 50px -12px rgba(6, 182, 212, 0.3); z-index: 20; }

    /* ANIMASI REVEAL SAAT SCROLL */
    .reveal-up { opacity: 0; transform: translateY(50px); transition: all 1s cubic-bezier(0.25, 1, 0.3, 1); }
    .reveal-left { opacity: 0; transform: translateX(-50px); transition: all 1s cubic-bezier(0.25, 1, 0.3, 1); }
    .reveal-right { opacity: 0; transform: translateX(50px); transition: all 1s cubic-bezier(0.25, 1, 0.3, 1); }
    .reveal-up.active, .reveal-left.active, .reveal-right.active { opacity: 1; transform: translate(0); }
    .delay-100 { transition-delay: 0.1s; } .delay-200 { transition-delay: 0.2s; }

    /* EFEK BLOB MENU KURIKULUM */
    .blob-hover-wrapper { position: relative; display: inline-block; padding: 1.5rem 3rem; cursor: pointer; z-index: 10; }
    .blob-bg { position: absolute; top: 50%; left: 50%; width: 120%; height: 140%; background-size: 200% 200%; border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%; transform: translate(-50%, -50%) scale(0); transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.4s ease; z-index: -1; opacity: 0; }
    .blob-hover-wrapper:hover .blob-bg { opacity: 1; transform: translate(-50%, -50%) scale(1); }
    .blob-hover-wrapper:hover .blob-text { color: #ffffff !important; transition: color 0.3s ease; }

    /* CAROUSEL HERO */
    .carousel-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 1.5s ease-in-out; z-index: 0; }
    .carousel-slide.active { opacity: 1; z-index: 10; }

    /* HILANGKAN SCROLLBAR PADA SLIDER TUTOR */
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* BACKGROUND ANIMATIONS */
    .bg-vibrant-ocean { background: linear-gradient(135deg, #0ea5e9, #0891b2, #10b981); background-size: 200% 200%; animation: gradientFlow 15s ease infinite; color: white; }
    @keyframes gradientFlow { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
  </style>
</head>
<body class="text-slate-900 relative z-0">

  <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
    <div class="absolute top-[-10%] left-[-10%] w-[60%] h-[60%] rounded-full bg-sky-300/20 blur-[120px] mix-blend-multiply"></div>
    <div class="absolute top-[40%] right-[-20%] w-[50%] h-[50%] rounded-full bg-cyan-300/20 blur-[150px] mix-blend-multiply"></div>
  </div>

  <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-500 py-4">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
      <div id="nav-container" class="bg-transparent rounded-full p-2 pl-4 pr-3 flex justify-between items-center transition-all duration-500 relative z-50">
        
        <a href="#" class="flex items-center gap-3 group">
          <div class="relative w-10 h-10 flex items-center justify-center">
            <i id="logo-icon-1" class="fa-solid fa-book-open text-white text-[26px] absolute transition-all duration-500 ease-in-out transform group-hover:scale-50 group-hover:opacity-0 group-hover:rotate-180"></i>
            <i class="fa-solid fa-fire text-rose-500 text-[26px] absolute transition-all duration-500 ease-in-out transform scale-50 opacity-0 -rotate-180 group-hover:scale-110 group-hover:opacity-100 group-hover:rotate-0 drop-shadow-[0_0_10px_rgba(244,63,94,0.8)]"></i>
          </div>
          <span id="nav-text" class="font-extrabold text-xl text-white tracking-wide transition-colors">Nexus Academy</span>
        </a>
        
        <nav class="hidden lg:flex gap-8 font-bold text-sm uppercase tracking-widest">
          <a href="#solusi" class="nav-link text-white hover:text-cyan-400 transition-colors">Metode</a>
          <a href="#kurikulum" class="nav-link text-white hover:text-cyan-400 transition-colors">Program</a>
          <a href="#guru" class="nav-link text-white hover:text-cyan-400 transition-colors">Tutor</a>
          <a href="#trust" class="nav-link text-white hover:text-cyan-400 transition-colors">Bukti</a>
        </nav>

        <div class="flex items-center gap-4">
          <a href="#psb" id="nav-btn" class="hidden md:inline-block bg-white text-slate-900 font-bold px-6 py-2.5 rounded-full transition-all transform hover:scale-105 hover:shadow-[0_0_20px_rgba(6,182,212,0.5)] text-sm shadow-lg">
            Daftar Sekarang
          </a>
          <button id="mobile-menu-btn" class="lg:hidden text-white p-2 focus:outline-none">
            <i id="mobile-icon" class="fa-solid fa-bars text-2xl"></i>
          </button>
        </div>
      </div>
    </div>

    <div id="mobile-menu" class="absolute top-0 left-0 w-full h-screen bg-slate-900/95 backdrop-blur-xl z-40 hidden flex-col items-center justify-center gap-8 opacity-0 transition-opacity duration-300">
      <a href="#solusi" class="mobile-link text-2xl font-bold text-white hover:text-cyan-400">Metode</a>
      <a href="#kurikulum" class="mobile-link text-2xl font-bold text-white hover:text-cyan-400">Program</a>
      <a href="#guru" class="mobile-link text-2xl font-bold text-white hover:text-cyan-400">Tutor</a>
      <a href="#trust" class="mobile-link text-2xl font-bold text-white hover:text-cyan-400">Bukti</a>
      <a href="#psb" class="mobile-link bg-cyan-500 text-white px-8 py-3 rounded-full font-bold text-xl mt-4">Daftar Sekarang</a>
    </div>
  </header>