<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bellah Options | Security Check</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-950 flex items-center justify-center h-screen text-white">
    <div class="text-center space-y-6 animate-fadeIn">
        <!-- Icon -->
        <div class="flex justify-center">
            <div class="w-20 h-20 rounded-full border-4 border-cyan-500 flex items-center justify-center animate-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 11c0 .88-.39 1.67-1 2.22V15h2v-1.78A2.99 2.99 0 0012 11zM5 13l-1 4 4-1m6-6h3a2 2 0 012 2v1a2 2 0 01-2 2h-3v-5z" />
                </svg>
            </div>
        </div>

        <!-- Headline -->
        <div>
            <h1 class="text-2xl font-bold tracking-wide">Device Security Check</h1>
            <p class="text-gray-400">Verifying your connection and device integrity…</p>
        </div>

        <!-- Loader bar -->
        <div class="w-64 h-2 bg-gray-700 rounded-full overflow-hidden mx-auto">
            <div class="h-full bg-cyan-500 animate-loading-bar"></div>
        </div>

        <!-- Footer text -->
        <p class="text-sm text-gray-500">This may take a few seconds. Please wait…</p>
    </div>

    <!-- Animations -->
    <style>
        @keyframes loading-bar {
            0% { transform: translateX(-100%); }
            50% { transform: translateX(0); }
            100% { transform: translateX(100%); }
        }
        .animate-loading-bar {
            width: 100%;
            animation: loading-bar 2s infinite linear;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease forwards;
        }
    </style>

    <!-- Auto Redirect after 4 seconds -->
    <script>
        setTimeout(() => {
            window.location.href = "/welcome";
        }, 4000);
    </script>
</body>
</html>
