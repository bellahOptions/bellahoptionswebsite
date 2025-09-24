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

<body class="font-sans bg-blue-100 p-30 max-h-screen">
    <div class="grid grid-cols-2 gap-4 p-10">
        <div id="form-grid " class="bg-white p-10 rounded-lg">
            <h1 class="text-3xl mb-3 text-gray-500 font-bold text-center">Create an account with us</h1>
            <p class="my-2 text-center text-gray-500">Join our list of smart businesses, utilizing the power of compelling visuals to make a difference in thier  niche</p>
            <form method="post" action="#">
                @csrf

                <div class="mb-3">
                    <label class="block text-gray-500 mb-1">First Name</label>
                    <input type="text" name="fname" class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
                    <small class="text-gray-500">Please enter your government name for eligibilty on rewards and coupons</small>
        </div>
         <div class="mb-3">
                    <label class="block text-gray-500 mb-1">Last Name</label>
                    <input type="text" name="lname" class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
                    <small class="text-gray-500">Please enter your government name for eligibilty on rewards and coupons</small>
        </div>
         <div class="mb-3">
                    <label class="block text-gray-500 mb-1">Phone/Whatsapp</label>
                    <input class="block border-gray-300 rounded-lg w-full focus:ring-gray-300" type="tel" name="tel">
        </div>
        <div class="flex flex-cols mb-3 space-x-2">
         <div>
                    <label class="block text-gray-500 mb-1">What do you do?</label>
                    <select class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
                        <option class="p-2">Entrepreneur</option>
                        <option class="p-2">Agency</option>
                        <option class="p-2">Wholesale/Retail</option>
                        <option class="p-2">Entertainment</option>
                        <option class="p-2">Freelancer</option>
                        <option class="p-2">Others</option>
                    </select>
        </div>        
         <div class="flex-auto">
                    <label class="block text-gray-500 mb-1">Brand/Business Name</label>
                    <input class="block border-gray-300 rounded-lg w-full focus:ring-gray-300" type="text" name="tel">
        </div>
    </div>
         <div class="mb-3">
                    <label class="block text-gray-500 mb-1">Email Address</label>
                    <input type="email" name="email" class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
        </div>
         <div class="mb-3">
                    <label class="block text-gray-500 mb-1">Password</label>
                    <input type="password" name="password" class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
        </div>
         <div class="mb-3">
                    <label class="block text-gray-500 mb-1">Retype Password</label>
                    <input type="password" name="rpassword" class="block border-gray-300 rounded-lg w-full focus:ring-gray-300">
        </div>
    <div class="mb-3 mt-4">
        <button class="bg-blue-500 text-white p-2 py-3 w-full rounded-lg hover:bg-blue-800">Create an account <i class="fa fa-arrow"></i></button>
    </div>
    </form>
</div>
        <div id="img-grid">
            Image here
        </div>
    </div>
   
</body>
</html>