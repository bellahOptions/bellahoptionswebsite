@extends('layouts.default')
@section('title', 'Welcome to Bellah Options BN3668420')
@section('main')
<div class="max-w-7xl mx-auto px-6 lg:px-20">

  <!-- HERO -->
  <div id="her" class="my-5 lg:my-20 p-5 lg:p-20 text-center">
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-3 text-gray-700">
      Design. Technology. Growth.
    </h1>
    <p class="text-gray-500 max-w-3xl mx-auto">
      We're building the future of branding — where bold creativity meets smart tech. At Bellah Options,
      we craft brands people remember, websites people love, and digital content that sells.
    </p>

    <!-- Buttons: fixed responsive layout -->
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 my-4">
      <a href="#"
         class="w-full sm:w-auto text-center px-6 py-3 rounded-lg bg-sky-600 text-white hover:bg-sky-800 transition">
        Let's Build together
      </a>

      <a href="#"
         class="w-full sm:w-auto text-center px-6 py-3 rounded-lg bg-blue-600 text-white hover:bg-blue-800 transition">
        Order a service
      </a>
    </div>

    <small class="block text-sm text-gray-500 mt-3">Africa is the new economic super power</small>
  </div>

  <!-- PRODUCTS / LOGO STRIP --> 
  <section id="products" class="py-12">
    <!--<h2 class="text-center text-2xl font-semibold mb-8 text-gray-700">Our Products</h2>-->

    <div class="overflow-hidden">
      <div class="flex items-center space-x-12 md:space-x-20 animate-scroll">
        <img src="{{ asset('images/Wingram-07.svg')}}" class="h-12" alt="Wingram" />
        <img src="{{ asset('images/BOSS-logo-02.svg')}}" class="h-12" alt="BOSS" />
        <img src="{{ asset('images/obf.svg')}}" class="h-12" alt="Wingram" /> 
        <img src="{{ asset('images/reup-03.svg')}}" class="h-12" alt="Reup" />
        <img src="{{ asset('images/stepwise.svg')}}" class="h-12" alt="workhq" />
        <img src="{{ asset('images/Wingram-07.svg')}}" class="h-12" alt="Wingram" />
        <img src="{{ asset('images/BOSS-logo-02.svg')}}" class="h-12" alt="BOSS" />
        <img src="{{ asset('images/obf.svg')}}" class="h-12" alt="Wingram" /> 
        <img src="{{ asset('images/reup-03.svg')}}" class="h-12" alt="Reup" />
        <img src="{{ asset('images/stepwise.svg')}}" class="h-12" alt="workhq" />
      </div>
    </div>
  </section>
</div>
  <style>
    @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .animate-scroll { animation: scroll 20s linear infinite; width: max-content; }
  </style>

  <!-- WE'RE NOT JUST A DESIGN AGENCY -->
  <!-- Lucide Icons CDN (keep once on page) -->
  <script src="https://unpkg.com/lucide@latest" defer></script>

  <section id="wwa" class="py-16 bg-blue-950">
    <div class="max-w-5xl mx-auto px-6">
      <div class="sect-header mb-10 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-cyan-500 mb-4">We're Not Just a Design Agency</h1>
        <p class="text-gray-100 text-lg">We're a Brand-Building Machine – a creative-tech startup that helps businesses grow faster through:</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="border border-gray-100 p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <i data-lucide="palette" class="w-12 h-12 text-white animate-glow-cyan"></i>
          </div>
          <h4 class="text-white font-semibold">Strategic Brand Design</h4>
        </div>

        <div class="border border-gray-100 p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <i data-lucide="instagram" class="w-12 h-12 text-white animate-glow-pink"></i>
          </div>
          <h4 class="text-white font-semibold">Social Media Content</h4>
        </div>

        <div class="border border-gray-100 p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <i data-lucide="globe" class="w-12 h-12 text-white animate-glow-green"></i>
          </div>
          <h4 class="text-white font-semibold">Conversion-Ready Websites</h4>
        </div>
      </div>

      <p class="text-center text-gray-100 mt-6 text-lg max-w-2xl mx-auto">
        We combine creativity, technology, and growth strategy to deliver results for both clients and investors.
      </p>
    </div>
  </section>
<div class="max-w-7xl mx-auto px-6 lg:px-20">
  <!-- WHY WE EXIST -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <section class="py-16">
    <div class="max-w-3xl mx-auto text-center reveal">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Why We Exist</h2>
      <p class="topic mt-4 text-lg text-gray-600">
        <i class="fa fa-quote-left text-sky-600 mr-2"></i>
        Because Great Brands Don't Happen by Accident
      </p>
      <p class="mt-4 text-gray-500">
        In today's world, attention is currency. Brands that look good, speak clearly, and connect instantly win.
        We give businesses the tools, designs, and digital platforms they need to stand out — and scale.
      </p>
    </div>
  </section>

  <!-- OUR OFFER -->
<section class="py-16 bg-gray-50 reveal">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-center text-3xl md:text-4xl font-bold text-gray-800">What We Offer</h2>
    <p class="text-center text-gray-600 mt-3">Our services are designed for <strong>impact, scalability, and return on investment:</strong></p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
      <!-- Branding -->
      <div class="service p-6 border rounded-xl bg-white text-center hover-lift animate-fadeInScale animate-delay-1">
        <div class="mb-3 flex justify-center">
          <i data-lucide="pen-tool" class="w-12 h-12 text-sky-600"></i>
        </div>
        <h4 class="font-semibold text-gray-800">Graphic Design & Branding</h4>
        <p class="text-gray-500 mt-2">Logos, brand kits, marketing assets.</p>
      </div>

      <!-- Social Media Design -->
      <div class="service p-6 border rounded-xl bg-white text-center hover-lift animate-fadeInScale animate-delay-2">
        <div class="mb-3 flex justify-center">
          <i data-lucide="palette" class="w-12 h-12 text-pink-500"></i>
        </div>
        <h4 class="font-semibold text-gray-800">Social Media Design</h4>
        <p class="text-gray-500 mt-2">Scroll-stopping visuals for any platform.</p>
      </div>

      <!-- Social Media Management -->
      <div class="service p-6 border rounded-xl bg-white text-center hover-lift animate-fadeInScale animate-delay-3">
        <div class="mb-3 flex justify-center">
          <i data-lucide="users" class="w-12 h-12 text-green-500"></i>
        </div>
        <h4 class="font-semibold text-gray-800">Social Media Management</h4>
        <p class="text-gray-500 mt-2">Content planning, posting, engagement.</p>
      </div>

      <!-- Website Design -->
      <div class="service p-6 border rounded-xl bg-white text-center hover-lift animate-fadeInScale animate-delay-4">
        <div class="mb-3 flex justify-center">
          <i data-lucide="globe" class="w-12 h-12 text-indigo-500"></i>
        </div>
        <h4 class="font-semibold text-gray-800">Website Design (BOSS)</h4>
        <p class="text-gray-500 mt-2">Custom websites for you.</p>
      </div>
    </div>
  </div>
</section>
</div>

<section class="py-16 bg-gray-900 text-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-center text-3xl md:text-4xl font-bold mb-12">
      Our Impact in Numbers
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <!-- Counter 1 -->
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-sky-400 counter" data-target="600">0</h3>
        <p class="mt-2 text-lg">Designs Delivered</p>
      </div>

      <!-- Counter 2 -->
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-pink-400 counter" data-target="20">0</h3>
        <p class="mt-2 text-lg">Websites Launched</p>
      </div>

      <!-- Counter 3 -->
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-green-400 counter" data-target="35">0</h3>
        <p class="mt-2 text-lg">Logos Done</p>
      </div>

      <!-- Counter 4 -->
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-yellow-400 counter" data-target="2000000">0</h3>
        <p class="mt-2 text-lg">₦ Paid in Freelancer Wages</p>
      </div>
    </div>
  </div>
</section>

<div class="max-w-7xl mx-auto px-6 lg:px-20">
  <!-- INVESTORS -->
  <section class="py-16 reveal">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800">A Creative-Tech Brand with a Scalable Future</h2>
      <p class="mt-4 text-gray-600">
        Bellah Options isn't just delivering services — we're building a platform. With BOSS, our subscription-based
        website service, we're tapping into a high-demand, recurring revenue model for SMEs and startups.
      </p>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="py-16 bg-sky-50 reveal hover-glow">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Whether You're Ready to Build Your Brand or Invest in Ours — Let's Talk.</h3>
      <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
        <a href="#" class="inline-block px-6 py-3 bg-sky-600 text-white rounded-lg shadow hover-lift">Work With Us</a>
        <a href="#" class="inline-block px-6 py-3 bg-sky-600 text-white rounded-lg shadow hover-lift">Investor Relations</a>
      </div>
    </div>
  </section>

</div>

<!-- Animations & helper styles (kept as before) -->
<style>
  .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
  .hover-lift:hover { transform: translateY(-6px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); }

  .hover-glow { transition: box-shadow 0.4s ease; }
  .hover-glow:hover { box-shadow: 0 0 20px rgba(56,189,248,0.6); }

  .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
  .reveal.active { opacity: 1; transform: translateY(0); }

  @keyframes fadeInScale { 0% { opacity: 0; transform: scale(0.9); } 100% { opacity: 1; transform: scale(1); } }
  .animate-fadeInScale { animation: fadeInScale 0.8s forwards; }
  .animate-delay-1 { animation-delay: 0.2s; }
  .animate-delay-2 { animation-delay: 0.4s; }
  .animate-delay-3 { animation-delay: 0.6s; }
  .animate-delay-4 { animation-delay: 0.8s; }

  /* Glow animations for lucide icons */
  @keyframes glow-cyan { 0%,100%{filter:drop-shadow(0 0 6px rgba(0,255,255,0.8))} 50%{filter:drop-shadow(0 0 16px rgba(0,255,255,1))} }
  @keyframes glow-pink { 0%,100%{filter:drop-shadow(0 0 6px rgba(255,0,128,0.8))} 50%{filter:drop-shadow(0 0 16px rgba(255,0,128,1))} }
  @keyframes glow-green { 0%,100%{filter:drop-shadow(0 0 6px rgba(0,255,128,0.8))} 50%{filter:drop-shadow(0 0 16px rgba(0,255,128,1))} }
  .animate-glow-cyan{animation:glow-cyan 2s infinite ease-in-out}
  .animate-glow-pink{animation:glow-pink 2s infinite ease-in-out}
  .animate-glow-green{animation:glow-green 2s infinite ease-in-out}
</style>

<script>
  // Reveal animation on scroll
  function handleReveal() {
    document.querySelectorAll('.reveal').forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) el.classList.add('active');
    });
  }
  window.addEventListener('scroll', handleReveal);
  window.addEventListener('load', handleReveal);

  // Render lucide icons when script loads
  window.addEventListener('load', () => {
    if (window.lucide && typeof lucide.createIcons === 'function') {
      lucide.createIcons();
    }
  });
</script>
@endsection
