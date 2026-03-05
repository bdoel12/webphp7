<footer id="psb" class="py-24 md:py-32 px-4 md:px-8 relative overflow-hidden z-30 bg-slate-900">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[80%] h-full bg-cyan-500/10 blur-[100px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto p-8 md:p-16 text-center reveal-up relative border border-slate-700/50 shadow-2xl bg-slate-800/60 backdrop-blur-xl rounded-[2rem] md:rounded-[4rem]">
      <span class="bg-cyan-500/20 text-cyan-300 font-bold px-4 md:px-6 py-2 rounded-full text-xs md:text-sm mb-6 md:mb-8 inline-block border border-cyan-500/30 tracking-wide animate-pulse">DISKON PENDAFTARAN 30% MINGGU INI</span>
      <h2 class="text-3xl md:text-[4.5rem] font-black text-white mb-6 md:mb-8 leading-tight tracking-tight">AMANKAN KURSI<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-sky-400">ANAK ANDA.</span></h2>
      <p class="text-slate-300 font-medium text-sm md:text-lg mb-10 max-w-2xl mx-auto">Tingkatkan pemahaman belajar anak bersama tutor profesional kami. Kuota kelas akselerasi sangat terbatas.</p>
      
      <div class="flex flex-col sm:flex-row justify-center items-center gap-4 md:gap-6">
        <a href="#" class="w-full sm:w-auto bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-400 hover:to-blue-400 text-white font-extrabold text-sm md:text-lg px-8 md:px-12 py-4 md:py-5 rounded-full shadow-[0_10px_30px_-10px_rgba(6,182,212,0.8)] transition-transform transform hover:-translate-y-1">DAFTAR SEKARANG</a>
        <a href="#" class="w-full sm:w-auto bg-slate-700/50 hover:bg-slate-700 text-white font-bold text-sm md:text-lg px-8 md:px-10 py-4 md:py-5 rounded-full border border-slate-600 transition-colors flex items-center justify-center gap-3"><i class="fa-brands fa-whatsapp text-green-400 text-xl"></i> Tanya Admin</a>
      </div>
    </div>
    
    <div class="max-w-7xl mx-auto mt-24 pt-10 border-t border-slate-800 grid grid-cols-1 md:grid-cols-3 gap-10 text-slate-400 text-center md:text-left">
      <div>
        <div class="flex items-center justify-center md:justify-start gap-3 mb-4 group cursor-pointer">
          <div class="relative w-8 h-8 flex items-center justify-center">
            <i class="fa-solid fa-book-open text-cyan-500 text-[20px] absolute transition-all duration-500 transform group-hover:scale-50 group-hover:opacity-0 group-hover:rotate-180"></i>
            <i class="fa-solid fa-fire text-rose-500 text-[20px] absolute transition-all duration-500 transform scale-50 opacity-0 -rotate-180 group-hover:scale-100 group-hover:opacity-100 group-hover:rotate-0 drop-shadow-[0_0_10px_rgba(244,63,94,0.8)]"></i>
          </div>
          <span class="font-extrabold text-xl tracking-tight text-white transition-colors">Nexus Academy</span>
        </div>
        <p class="font-medium text-sm">Membangun pemahaman konsep untuk masa depan yang lebih cerah.</p>
      </div>
      <div class="space-y-3 font-medium text-sm">
        <p><i class="fa-solid fa-location-dot mr-2"></i> Jl. Pendidikan No. 99, Jawa Barat</p>
        <p><i class="fa-solid fa-phone mr-2"></i> 0812-3456-7890 (Admin Pendaftaran)</p>
      </div>
      <div class="font-bold text-slate-500 text-sm md:text-right">© 2026 Nexus Academy Center.</div>
    </div>
  </footer>

  <script>
    // 1. MENU MOBILE
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileIcon = document.getElementById('mobile-icon');
    
    mobileBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      setTimeout(() => mobileMenu.classList.toggle('opacity-0'), 10);
      mobileIcon.classList.toggle('fa-bars');
      mobileIcon.classList.toggle('fa-xmark');
    });

    // 2. HERO OCEAN SCHOOL EXPAND (RUMUS PERBAIKAN TIMING AGAR TEKS HILANG LEBIH CEPAT)
    const heroWrapper = document.getElementById('hero-wrapper');
    const heroCarousel = document.getElementById('hero-carousel');
    const heroText = document.getElementById('hero-text');
    
    window.addEventListener('scroll', () => {
      if (heroWrapper && heroCarousel && heroText) {
        const rect = heroWrapper.getBoundingClientRect();
        const scrollTop = -rect.top; 
        const maxScroll = rect.height - window.innerHeight; 

        if (scrollTop >= 0 && scrollTop <= maxScroll) {
            let progress = scrollTop / maxScroll;
            
            // PERBAIKAN: Teks dipaksa menghilang lebih cepat (dikali 4) agar saat gambar naik tidak terjadi tabrakan
            let textOpacity = 1 - (progress * 4);
            heroText.style.opacity = Math.max(0, textOpacity); 
            heroText.style.transform = `translateY(-${progress * 150}px) scale(${1 - progress * 0.1})`;

            // Carousel Membesar
            let startW = window.innerWidth > 768 ? 80 : 90;
            let startH = window.innerWidth > 768 ? 45 : 35;
            let startR = window.innerWidth > 768 ? 4 : 2;

            let newW = startW + ((100 - startW) * progress);
            let newH = startH + ((100 - startH) * progress);
            let newR = startR - (startR * progress);

            heroCarousel.style.width = `${newW}vw`;
            heroCarousel.style.height = `${newH}vh`;
            heroCarousel.style.borderRadius = `${newR}rem`;
            
        } else if (scrollTop > maxScroll) {
            heroCarousel.style.width = '100vw';
            heroCarousel.style.height = '100vh';
            heroCarousel.style.borderRadius = '0rem';
            heroText.style.opacity = 0;
        } else {
            // Safety reset jika scroll kembali mentok ke atas
            heroCarousel.style.width = window.innerWidth > 768 ? '80vw' : '90vw';
            heroCarousel.style.height = window.innerWidth > 768 ? '45vh' : '35vh';
            heroCarousel.style.borderRadius = window.innerWidth > 768 ? '4rem' : '2rem';
            heroText.style.opacity = 1;
            heroText.style.transform = 'translateY(0) scale(1)';
        }
      }
    });

    // 3. FUNGSI GESER GAMBAR HERO
    const slides = document.querySelectorAll('#hero-wrapper .carousel-slide');
    let currentSlide = 0;
    function moveSlide(direction) {
      if (slides.length === 0) return;
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + direction + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
    }
    setInterval(() => moveSlide(1), 4000);

    // 4. TUTOR AUTO-SLIDER HORIZONTAL
    const tutorTrack = document.getElementById('tutor-track');
    const tutorPrev = document.getElementById('tutor-prev');
    const tutorNext = document.getElementById('tutor-next');
    
    if(tutorTrack) {
        let slideTimer;

        function slideTutor(direction) {
            const cardWidth = tutorTrack.querySelector('.card-safe').offsetWidth + 24; 
            const scrollAmount = tutorTrack.clientWidth; 
            let currentScroll = tutorTrack.scrollLeft;
            let maxScroll = tutorTrack.scrollWidth - tutorTrack.clientWidth;

            if (direction === 1) {
                if (currentScroll >= maxScroll - 10) {
                    tutorTrack.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    tutorTrack.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                }
            } else {
                if (currentScroll <= 10) {
                    tutorTrack.scrollTo({ left: maxScroll, behavior: 'smooth' });
                } else {
                    tutorTrack.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                }
            }
        }
        
        slideTimer = setInterval(() => slideTutor(1), 4000);

        if(tutorPrev && tutorNext) {
            tutorNext.addEventListener('click', () => { clearInterval(slideTimer); slideTutor(1); slideTimer = setInterval(() => slideTutor(1), 4000); });
            tutorPrev.addEventListener('click', () => { clearInterval(slideTimer); slideTutor(-1); slideTimer = setInterval(() => slideTutor(1), 4000); });
        }
    }

    // 5. TESTIMONI AUTO-SLIDER HORIZONTAL
    const testiTrack = document.getElementById('testi-track');
    let testiIndex = 0;
    const totalTesti = 3; 

    function moveTesti() {
        if(!testiTrack) return;
        testiIndex = (testiIndex + 1) % totalTesti;
        testiTrack.style.transform = `translateX(-${testiIndex * 100}%)`;
    }
    setInterval(moveTesti, 4000);

    // 6. ANIMASI ANGKA BERJALAN SAAT SCROLL
    const counters = document.querySelectorAll('.stat-counter');
    let hasCounted = false; 
    const runCounter = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const speed = 100; 
                const inc = target / speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    // 7. NAVBAR SCROLL EFEK
    const navContainer = document.getElementById('nav-container');
    const navIcon1 = document.getElementById('logo-icon-1');
    const navText = document.getElementById('nav-text');
    const navLinks = document.querySelectorAll('.nav-link');
    const navBtn = document.getElementById('nav-btn');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        if(navContainer) { navContainer.classList.add('glass-effect-dark', 'shadow-sm', 'bg-white'); navContainer.classList.remove('bg-transparent', 'glass-effect-dark'); }
        if(navIcon1) navIcon1.classList.replace('text-white', 'text-cyan-600');
        if(navText) navText.classList.replace('text-white', 'text-slate-900');
        navLinks.forEach(l => { l.classList.replace('text-white', 'text-slate-600'); l.classList.replace('hover:text-cyan-400', 'hover:text-cyan-600'); });
        if(navBtn) { navBtn.classList.replace('bg-white', 'bg-slate-900'); navBtn.classList.replace('text-slate-900', 'text-white'); }
      } else {
        if(navContainer) { navContainer.classList.remove('shadow-sm', 'bg-white'); navContainer.classList.add('bg-transparent'); }
        if(navIcon1) navIcon1.classList.replace('text-cyan-600', 'text-white');
        if(navText) navText.classList.replace('text-slate-900', 'text-white');
        navLinks.forEach(l => { l.classList.replace('text-slate-600', 'text-white'); l.classList.replace('hover:text-cyan-600', 'hover:text-cyan-400'); });
        if(navBtn) { navBtn.classList.replace('bg-slate-900', 'bg-white'); navBtn.classList.replace('text-white', 'text-slate-900'); }
      }
    });

    // 8. REVEAL ANIMATIONS
    const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');
    const revealOnScroll = new IntersectionObserver((entries) => {
      entries.forEach(entry => { 
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          if(entry.target.id === 'stats-section' && !hasCounted) {
              runCounter();
              hasCounted = true;
          }
        } 
      });
    }, { threshold: 0.1 });
    
    revealElements.forEach(el => revealOnScroll.observe(el));
  </script>
</body>
</html>