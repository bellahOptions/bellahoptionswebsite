<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bellah Options is a creative tech startup helping African businesses with branding, graphic design, social media management, and custom websites to scale their digital presence.">
    <meta name="keywords"
        content="branding agency Africa, creative tech startup, graphic design services, social media management Nigeria, Bellah Options, affordable website design">
        <!-- put this BEFORE the Tailwind CDN script -->
<script>
  tailwind = window.tailwind || {};
  tailwind.config = {
    darkMode: 'class'
  }
</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="icon" href="{{ asset('images/icon.jpg') }}">
    <title>
        @yield('title') | Creative Branding &amp; Tech Solutions for Startups)
    </title>
    <link rel="canonical" href="https://bellahoptions.com/">
    <!-- Open Graph -->
    <meta property="og:title" content="Bellah Options | Creative Branding &amp; Tech Solutions for Startups">
    <meta property="og:description"
        content="Bellah Options is a creative tech startup helping African businesses with branding, graphic design, social media management, and custom websites to scale their digital presence.">
    <meta property="og:url" content="https://bellahoptions.com/">
    <meta property="og:site_name" content="Bellah Options">
    <meta property="og:type" content="website">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bellah Options | Creative Branding &amp; Tech Solutions for Startups">
    <meta name="twitter:description"
        content="Bellah Options is a creative tech startup helping African businesses with branding, graphic design, social media management, and custom websites to scale their digital presence.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <style type="text/css">
      *{
  font-family: "Bricolage Grotesque", sans-serif;
}
    </style>
</head>

<body class="font-sans">
  <header class="w-full">
  <div class="backdrop shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">

        <!-- logo -->
        <a href="/welcome" class="flex items-center gap-3">
          <img id="bellah-logo" src="{{ asset('images/logo-06.svg')}}" alt="Bellah Options" class="w-36 fade-in-left delay-100">
        </a>

        <!-- desktop nav -->
        <nav class="hidden md:flex items-center space-x-6">          
          <a href="{{ route('about')}}" class="text-gray-700 hover:text-indigo-600 transition fade-in-up delay-300">About</a>

          <!-- services dropdown (simple link here; implement dropdown if needed) -->
          <a href="{{ route('services')}}" class="text-gray-700 hover:text-indigo-600 transition fade-in-up delay-400">Services</a>

          <a href="{{ route('careers')}}" class="text-gray-700 hover:text-indigo-600 transition fade-in-up delay-500">Careers</a>
          <a href="boss.bellahoptions.com" class="text-indigo-700 font-semibold animate-pulse fade-in-up delay-600">BOSS</a>
        </nav>

        <!-- right controls -->
        <div class="flex items-center gap-3">
          <a href="{{ route('login')}}" class="hidden md:inline-block px-3 py-1 rounded-md border border-indigo-600 text-indigo-600 fade-in-up delay-500">Login</a>
          <a href="{{ route('register')}}" class="hidden md:inline-block px-3 py-1 rounded-md bg-indigo-600 text-white shadow-sm hover:brightness-95 transform transition fade-in-up delay-600">Sign Up</a>


          <!-- mobile menu button -->
          <button id="menu-toggle" class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 transition" aria-controls="mobile-menu" aria-expanded="false">
            <!-- open -->
            <svg id="menu-open" class="h-6 w-6 block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <!-- close -->
            <svg id="menu-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
      <div class="px-4 py-3 space-y-2">
        <a href="index.php" class="block text-gray-700 hover:text-indigo-600 transition fade-in-up delay-100">Home</a>
        <a href="about.php" class="block text-gray-700 hover:text-indigo-600 transition fade-in-up delay-200">About</a>
        <a href="/services" class="block text-gray-700 hover:text-indigo-600 transition fade-in-up delay-300">Services</a>
        <a href="careers.php" class="block text-gray-700 hover:text-indigo-600 transition fade-in-up delay-400">Careers</a>

        <div class="pt-2 border-t border-gray-100">
          <a href="{{ route('login')}}" class="block px-3 py-2 rounded-md text-indigo-600 hover:bg-indigo-50 fade-in-up delay-500">Login</a>
          <a href="{{ route('register')}}" class="block mt-2 px-3 py-2 rounded-md bg-indigo-600 text-white text-center fade-in-up delay-600">Sign Up</a>
        </div>
      </div>
    </div>

  </div>
    </header>
    <main> <!-- AOS Animation CSS -->
        <!--Main Content goes here -->
        @yield('main')
    </main>


    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
<!-- Tailwind Footer -->
<footer class="bg-gray-100 text-gray-700 pt-12 pb-6 mt-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

      <!-- Brand -->
      <div>
        <a href="#" class="flex items-center mb-4">
          <img src="{{ asset('images/logo-06.svg') }}" alt="Bellah Options" class="h-10">
        </a>
        <p class="text-sm leading-relaxed">
          Bellah Options helps you build digital experiences with sleek designs and smart solutions.
        </p>
      </div>

      <!-- Company -->
      <div>
        <h3 class="text-gray-900 font-semibold mb-4">Company</h3>
        <ul class="space-y-2">
          <li><a href="about.php" class="hover:text-indigo-600 transition">About Us</a></li>
          <li><a href="careers.php" class="hover:text-indigo-600 transition">Careers</a></li>
          <li><a href="boss.bellahoptions.com" class="hover:text-indigo-600 transition">BOSS</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-gray-900 font-semibold mb-4">Services</h3>
        <ul class="space-y-2">
          <li><a href="/services#design" class="hover:text-indigo-600 transition">Design</a></li>
          <li><a href="/services#branding" class="hover:text-indigo-600 transition">Branding</a></li>
          <li><a href="/services#marketing" class="hover:text-indigo-600 transition">Marketing</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h3 class="text-gray-900 font-semibold mb-4">Contact</h3>
        <ul class="space-y-2 text-sm">
          <li>Email: <a href="mailto:info@bellahoptions.com" class="hover:text-indigo-600 transition">info@bellahoptions.com</a></li>
          <li>Phone: <a href="tel:+2348000000000" class="hover:text-indigo-600 transition">+234 800 000 0000</a></li>
          <li>Location: Lagos, Nigeria</li>
        </ul>
      </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-gray-300 my-6"></div>

    <!-- Bottom -->
    <div class="flex flex-col md:flex-row items-center justify-between text-sm text-gray-500">
      <p>&copy; 2025 Bellah Options. All rights reserved.</p>
      <div class="flex space-x-4 mt-4 md:mt-0">
        <a href="#" class="hover:text-indigo-600 transition">Privacy Policy</a>
        <a href="#" class="hover:text-indigo-600 transition">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

   </body>

</html>