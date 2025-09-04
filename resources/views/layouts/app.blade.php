<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard Admin</title>
        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <script src="{{ asset('/build/assets/app-Ca2lgtOw.js') }}" defer></script>
    <link href="{{ asset('/build/assets/app-XOEhRosG.css') }}" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>

        </div>
    </body>
    </html>
