<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="max-w-screen-xl mx-auto ">
        <x-navbar></x-navbar>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>