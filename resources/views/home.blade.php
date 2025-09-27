@extends('layouts.default')
@section('title', 'Welcome to Bellah Options BN3668420')
@section('main')
<div class="mx-auto px-6 lg:px-20">
  <!-- HERO -->
  <div id="her" class="my-2 mt-10 lg:mt-20 md:mb-8 p-5 md:px-5 text-center">
    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-3 text-gray-700">
      Creative Branding & Design Solutions for growing Businesses
    </h1>
    <p class="text-gray-500 max-w-3xl mx-auto">
      We ahelp SMEs shine online & poffline. From stunning <strong><a href="#">Graphic Design</a></strong> and responsive <strong><a href="#">Websites</a></strong> to seamless <strong><a href="#">UI/UX experiences</a></strong> and engaging <strong><a href="#">Social Media Management</a></strong>, we deliver solutions that make your brand stand out.
    </p>

    <div class="flex flex-col md:flex-row items-center justify-center gap-4 my-4">
      <a href="#"
         class="w-full sm:w-auto text-center px-6 py-3 rounded-lg bg-blue text-white hover:bg-sky-800 transition" id="her-btn">
        Get Started
      </a>

      <a href="#"
         class="w-full sm:w-auto text-center px-6 py-3 rounded-lg bg-gray-600 text-white hover:bg-blue-800 transition">
        See Our Work
      </a>
    </div>

    <small class="block text-sm text-gray-500 mt-3">Africa is the new economic super power</small>
  </div>
  <!-- PRODUCTS / LOGO STRIP -->
  <section id="products" class="py-12">    
    <div class="overflow-hidden">
      <div class="flex items-center space-x-12 md:space-x-20 animate-scroll">
        <!-- Duplicate logos twice for seamless loop -->
        <img src="{{ asset('images/stepwise.svg') }}" class="h-12" alt="Stepwise Design Lab" />
        <img src="{{ asset('images/reup.svg') }}" class="h-12" alt="Reup" />
        <img src="{{ asset('images/wingram.svg') }}" class="h-12" alt="Wingram" />
        <img src="{{ asset('images/stepwise.svg') }}" class="h-12" alt="Stepwise Design Lab" />
        <img src="{{ asset('images/reup.svg') }}" class="h-12" alt="Reup" />
        <img src="{{ asset('images/wingram.svg') }}" class="h-12" alt="Wingram" />
        <img src="{{ asset('images/stepwise.svg') }}" class="h-12" alt="Stepwise Design Lab" />
        <img src="{{ asset('images/reup.svg') }}" class="h-12" alt="Reup" />
        <img src="{{ asset('images/wingram.svg') }}" class="h-12" alt="Wingram" />
      </div>
    </div>
  </section>
</div>
  <style>
    @keyframes scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .animate-scroll { animation: scroll 20s linear infinite; width: max-content; }
  </style>

  <section id="wwa" class="py-16">
    <div class="max-w-5xl mx-auto px-6">
      <div class="sect-header mb-10 text-center">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-cyan-500 mb-4">We're Not Just a Design Agency</h1>
        <p class="text-gray-100 text-lg">We're a Brand-Building Machine – a creative-tech startup that helps businesses grow faster through:</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-12 h-12 text-sky-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
</svg>
          </div>
          <h4 class="text-white font-semibold">Strategic Brand Design</h4>
          <p class="text-gray-500 mt-2">Logos, brand kits, marketing assets.</p
        </div>

        <div class="p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-12 h-12 text-sky-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
</svg>
          </div>
          <h4 class="text-white font-semibold">Social Media Design</h4>
          <p class="text-gray-500 mt-2">Scroll-stopping visuals for any platform.</p>
        </div>

        <div class="p-6 rounded-xl text-center">
          <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-12 h-12 text-sky-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
</svg>

          </div>
          <h4 class="text-white font-semibold">Website Design</h4>
          <p class="text-gray-500 mt-2">Custom websites for you.</p>
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
</div>

<section id="Impact" class="py-16 bg-gray-900 text-white">
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
        <h3 class="text-4xl md:text-5xl font-extrabold text-gray-300 counter" data-target="20">0</h3>
        <p class="mt-2 text-lg">Websites Launched</p>
      </div>

      <!-- Counter 3 -->
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-green-400 counter" data-target="35">0</h3>
        <p class="mt-2 text-lg">Logos Done</p>
      </div>

      <!-- Counter 4
      <div>
        <h3 class="text-4xl md:text-5xl font-extrabold text-yellow-400 counter" data-target="2000000">0</h3>
        <p class="mt-2 text-lg">₦ Paid in Freelancer Wages</p>
      </div> -->
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
</div>
  <!-- FINAL CTA -->
  <section class="py-10 px-12 bg-sky-50 reveal hover-glow">
    <div class="max-w-4xl mx-auto text-center">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-800">Whether You're Ready to Build Your Brand or Invest in Ours — Let's Talk.</h3>
      <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
        <a href="#" id="her-btn" class="inline-block px-6 py-3 bg-sky-600 text-white rounded-lg shadow hover-lift">Work With Us</a>
        <a href="#" class="inline-block px-6 py-3 bg-gray-600 text-white rounded-lg shadow hover-lift">Investor Relations</a>
      </div>
    </div>
  </section>

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
