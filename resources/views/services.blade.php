@extends('layouts.default')

@section('main')
<section class="py-16 my-20 overflow-clip px-6 md:px-12 lg:px-20 lg:py-30 min-h-screen flex items-center justify-center bg-white px-6">
  <div class="text-center max-w-3xl">
    <!-- Question -->
    <h1 class="text-3xl md:text-5xl font-extrabold mb-6 text-gray-800 animate-bounce">
      👋 What service are you interested in?
    </h1>
    <p class="mb-10 text-lg text-gray-500">
      Choose your path below and we’ll take you straight to what you need.
    </p>
    <style type="text/css">
    	.service-ico{
    		padding: 20px 10px;
    	}
    </style>
    <!-- Options Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Logo / Brand Design -->
      <a href="/#brand-identity" 
         class="service-ico group py-5 rounded-2xl bg-gray-50 border border-gray-200 shadow-md hover:bg-sky-600 transition duration-300 transform hover:-translate-y-2">
        <div class="flex justify-center mb-4">
          <i class="fa fa-paint-brush text-5xl text-sky-600 group-hover:text-white"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white">Logo / Brand Design</h3>
        <p class="mt-2 text-gray-500 text-sm group-hover:text-gray-100">
          Memorable brands that stand out & connect.
        </p>
      </a>

      <!-- Web Design -->
      <a href="/#web-design" 
         class="service-ico group p-8 rounded-2xl bg-gray-50 border border-gray-200 shadow-md hover:bg-green-600 transition duration-300 transform hover:-translate-y-2">
        <div class="flex justify-center mb-4">
          <i class="fa fa-globe text-5xl text-blue-600 group-hover:text-white"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white">Web Design</h3>
        <p class="mt-2 text-gray-500 text-sm group-hover:text-gray-100">
          Fast, conversion-ready websites for growth.
        </p>
      </a>

      <!-- Graphic Design -->
      <a href="/#graphic-design" 
         class="service-ico group p-8 rounded-2xl bg-gray-50 border border-gray-200 shadow-md hover:bg-pink-600 transition duration-300 transform hover:-translate-y-2">
        <div class="flex justify-center mb-4">
          <i class="fa fa-pencil-square-o text-5xl text-blue-600 group-hover:text-white"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white">Graphic Design</h3>
        <p class="mt-2 text-gray-500 text-sm group-hover:text-gray-100">
          Scroll-stopping designs for your business.
        </p>
      </a>
    </div>

    <!-- Hint -->
    <p class="mt-12 text-gray-400 text-sm animate-pulse">
      🚀 Pick one to get started
    </p>
  </div>
</section>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection