<!DOCTYPE html>
<html lang="id" class="smooth-scroll">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Website Resmi Desa Lampoko</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-white text-gray-900 font-sans antialiased overflow-x-hidden">
    <div class="min-h-screen bg-white">
        @include('layouts.navbar')
         <main>
             {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>       
    
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init({duration: 800,once: false,});</script>
    <script src="{{ asset('js/frontend.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <x-button :isLoggedIn="Auth::check()" />

</body>
</html>
