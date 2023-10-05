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

    <!-- Styles -->
    @livewireStyles
</head>

<body>
 <header>

    {{-- début de ma nav --}}




    <nav
        class="relative flex w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <div class="ml-2 w-1/4 md:w-full">
                <x-application-logo />
                <a class="text-xl text-neutral-800 dark:text-neutral-200" href="{{ route('atelierdusud.accueil') }}">
                    <svg class="w-6 h-6 mb-1 text-gray-800 dark:text-gray-400 hover-bg-rounded " fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                </a>
                <div>
                    <a href="{{ route('artists.index') }}">Artistes</a>
                </div>
                <div>
                    <a href="{{ route('categories.index') }}">Categories</a>
                </div>

                <div class="font-sans text-gray-900 antialiased">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </nav>


    @livewireScripts
</header>
</body>

</html>
