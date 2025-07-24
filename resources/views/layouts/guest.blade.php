<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center h-screen">
        <div class="md:h-screen hidden md:flex items-center justify-center bg-cover bg-center"
            style="background-image: url('https://redeem.kleefi.com/banner.avif')">
            <div
                class="flex items-center w-[80%] flex-col leading-5 justify-center text-center bg-orange-100/90 p-8 rounded-md border border-[#1b1b1b]">
                <h2 class="text-2xl mb-2">"Day one will become one day"</h2>
                <p>— just keep going. Slow progress is still progress. Do it until your 'day one' becomes the day you
                    succeed. — </p>
            </div>
        </div>
        <div class="w-[70%] mx-auto md:block md:h-auto h-screen flex items-center justify-center">
            <div>
                <a href="#" class="flex justify-center text-center space-x-8 mb-8">
                    <span class="text-2xl font-bold text-gray-500">LOGO</span>
                </a>
                {{ $slot }}
            </div>
        </div>
    </div>

</body>

</html>