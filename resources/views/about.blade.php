@extends('layouts.default')
@section('title', 'About Bellah Options BN3668420')
@section('main')
<style type="text/css">
	*{
		color: #3E3E3E;
	}
</style>
<section class="py-16  overflow-clip px-6 md:px-12 lg:px-20 lg:py-30">
  <!-- Page Title -->
  <div class="text-center mb-20" data-aos="fade-up">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-600">
      We’re Not Just Building Brands <span class="text-blue-500">We’re Building Growth Stories</span>
    </h1>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 my-4">
      <a href="#"
         class="w-full sm:w-auto text-center px-6 py-3 rounded-lg bg-sky-600 text-white hover:bg-sky-800 transition">
        Partner with us
      </a>
    </div>
  </div>

  <!-- Our Story -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-16">
    <div data-aos="fade-right">
      <h2 class="text-2xl md:text-3xl font-bold mb-4">Our Story</h2>
      <p class="mb-4">
        The Bellah Options dream began in <strong>2018</strong>, sparked by one powerful mission: 
        <em>make world-class branding accessible to every business in Africa — no matter their budget</em>.
      </p>
      <p class="mb-4">
        In Africa’s creative industry, high costs often lock out small businesses and startups from keeping up with their 
        <strong>branding, social media campaigns, and digital strategies</strong>. This creates an uneven playing field — 
        where great ideas lose to bigger marketing budgets.
      </p>
      <p class="mb-4">
        Our founder, <strong>Mr. Olumuyiwa Bellah</strong>, saw this gap and envisioned something different. As a young 
        innovator passionate about solving <strong>economic challenges through creativity and technology</strong>, he set 
        out to build a solution that would give small businesses and startups the same competitive edge as large corporations.
      </p>
      <p>
        That vision became <strong>Bellah Options</strong>, officially registered with the 
        <strong>Corporate Affairs Commission (CAC)</strong> on <strong>May 27th, 2022</strong>. Since then, we’ve grown 
        into a <strong>creative-tech brand</strong> blending design excellence, smart technology, and affordability to 
        empower ambitious brands across Africa.
      </p>
    </div>
    <div class="text-center" data-aos="fade-left">
      <img src="{{ asset('images/ceo-main.png')}}" alt="Bellah Options Founder" class="mx-auto w-auto rounded-lg shadow-lg max-w-xs md:max-w-sm lg:max-w-md">
    </div>
  </div>

  <!-- Our Mission -->
  <div class="mb-16" data-aos="fade-up">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">Our Mission</h2>
    <p class="italic mb-4">
      To help ambitious brands unlock their full potential with strategic design, smart digital solutions, and growth-focused branding.
    </p>
    <ul class="list-disc list-inside space-y-2 text-gray-700">
      <li>Grabs attention instantly.</li>
      <li>Builds lasting connections with customers.</li>
      <li>Supports long-term business growth.</li>
    </ul>
  </div>

  <!-- What Makes Us Different -->
  <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">What Makes Us Different</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-700">
      <li><strong>Creative + Tech DNA</strong> – Every project blends design flair with technical precision.</li>
      <li><strong>Scalable Solutions</strong> – From branding to subscription-based websites, we think long-term.</li>
      <li><strong>Client-Centric Approach</strong> – We become an extension of your team, not just a service provider.</li>
      <li><strong>Investor Appeal</strong> – Our BOSS platform is designed for recurring revenue and market expansion.</li>
    </ul>
  </div>

  <!-- Our Vision -->
  <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">Our Vision</h2>
    <p class="mb-4">
      We see Bellah Options as more than a design agency — we’re building a 
      <strong>creative-tech brand ecosystem</strong> that transforms how businesses grow online.
    </p>
    <ul class="list-disc list-inside space-y-2 text-gray-700">
      <li>Scale <strong>BOSS – Bellah Options Smart Sites</strong> into a market-leading subscription platform.</li>
      <li>Expand our creative services across Africa and beyond.</li>
      <li>Become a go-to partner for SMEs, startups, and investors looking for innovative growth solutions.</li>
    </ul>
  </div>

  <!-- Meet the Team -->
  <div class="mb-16" data-aos="fade-up" data-aos-delay="300">
    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center">Meet the Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      <div data-aos="zoom-in" data-aos-delay="100">
        <img src="https://placehold.co/400x400" alt="Moyosore Francis" class="mx-auto rounded-full mb-4 w-36 h-36 object-cover shadow-md">
        <h5 class="font-bold">Moyosore Francis</h5>
        <p class="text-sm text-gray-500">Operations Officer</p>
        <p class="text-sm mt-2">The visionary behind Bellah Options, passionate about using creativity and technology to solve real business challenges in Africa.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="200">
        <img src="https://placehold.co/400x400" alt="Ahmed Bello" class="mx-auto rounded-full mb-4 w-36 h-36 object-cover shadow-md">
        <h5 class="font-bold">Ahmed Bello</h5>
        <p class="text-sm text-gray-500">Lead Brand Designer & Strategist</p>
        <p class="text-sm mt-2">Blending design thinking with market strategy to create brands that stand out and sell.</p>
      </div>
      <div data-aos="zoom-in" data-aos-delay="300">
        <img src="https://placehold.co/400x400" alt="Oluseye Olamide" class="mx-auto rounded-full mb-4 w-36 h-36 object-cover shadow-md">
        <h5 class="font-bold">Idowu Gabriel</h5>
        <p class="text-sm text-gray-500">Communications</p>
        <p class="text-sm mt-2">A network of talented creatives working together to bring our clients’ visions to life.</p>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="text-center" data-aos="fade-up" data-aos-delay="400">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">If you’re ready to grow, we’re ready to build.</h2>
    <div class="space-x-4 space-y-2">
      <a href="/contact" class="inline-block px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition">Work With Us</a>
      <a href="/investors" class="inline-block px-6 py-3 border border-blue-500 text-blue-500 font-semibold rounded-lg hover:bg-blue-500 hover:text-white transition">Investor Relations</a>
    </div>
  </div>
</section>

@endsection