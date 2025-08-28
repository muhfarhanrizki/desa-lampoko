<!DOCTYPE html>
<html lang="id" class="smooth-scroll overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title & Meta SEO -->
    <title>@yield('title', 'Website Resmi Desa Lampoko - Informasi & Berita Terbaru')</title>
    <meta name="description" content="@yield('meta_description', 'Website resmi Desa Lampoko, Kecamatan Balusu, Kabupaten Barru. Informasi berita, kegiatan desa, dan layanan publik terbaru.')">
    <meta name="keywords" content="Desa Lampoko, Berita Desa, Kegiatan Desa, Profil Desa">

    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="@yield('title', 'Website Resmi Desa Lampoko')">
    <meta property="og:description" content="@yield('meta_description', 'Website resmi Desa Lampoko, menyediakan informasi berita dan kegiatan desa.')">
    <meta property="og:image" content="@yield('og_image', asset('images/logo-barru.svg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">
<link rel="icon" type="image/svg" href="{{ asset('images/logo-barru.svg') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link href="{{ asset('/build/assets/app-XOEhRosG.css') }}" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- JS (defer) -->
    <script src="{{ asset('//build/assets/app-Ca2lgtOw.js') }}" defer></script>
</head>

<body class="bg-white text-gray-900 font-sans antialiased overflow-x-hidden">
    <div class="min-h-screen bg-white flex flex-col">
        <!-- Header / Navbar -->
        @include('layouts.navbar')

        <!-- Main Content -->
        <main class="flex-grow">
            <!-- Main Slot -->
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include('layouts.footer')
    </div>       

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script> document.addEventListener('DOMContentLoaded', () => { AOS.init({duration: 800, once: false}); }); </script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Custom Frontend JS -->
    <script src="{{ asset('js/frontend.js') }}"></script>

    <!-- Optional: Button Component -->
    <x-button :isLoggedIn="Auth::check()" />
</body>
</html>
