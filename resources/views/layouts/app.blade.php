<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Welcome') | {{ config('app.name', 'NodeBill App') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-full">
    <header class="bg-sky-600 py-4">
        <nav class="w-full mx-auto container px-2 sm:px-6 md:px-20 flex items-center justify-between">
            <a href="#" class="text-lg font-bold text-white hover:text-gray-200">{{ config('app.name') }}</a>
            <ul class="flex-1">
                <li>
                    <a href="#">
                        Store
                    </a>
                </li>
            </ul>
            <div>

            </div>

            {{-- Mobile Menu --}}
            <div></div>
        </nav>
    </header>
    <main class="py-6">
        <div class="mx-auto container px-2 sm:px-6 md:px-20">
            @yield('content')
        </div>
    </main>
</body>

</html>
