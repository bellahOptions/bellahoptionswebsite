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
        Create a Bellah Options account
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

<button id="theme-toggle" class="theme-btn">
    🌙
</button>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
