<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard Admin</title>
       <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
       <link rel="icon" type="image/svg" href="{{ asset('images/logo-barru.svg') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

            <script src="{{ asset('/build/assets/app-Ca2lgtOw.js') }}" defer></script>
    <link href="{{ asset('/build/assets/app-XOEhRosG.css') }}" rel="stylesheet" />
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logo-barru.png') }}" alt="Logo" class="h-32 pb-6 w-auto">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
