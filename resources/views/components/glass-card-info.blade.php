<section class="relative h-screen overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/desa.jpeg') }}" alt="Background" class="w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-700/70"></div>
    </div>

    {{-- Konten Hero --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
        <img src="{{ asset('images/logo-barru.png') }}" alt="Logo" class="h-24 w-24 md:h-28 md:w-28 object-contain mb-4 drop-shadow-lg" />
        <h1 class="text-3xl md:text-5xl font-bold mb-2 drop-shadow-lg">Selamat Datang di Desa Lampoko</h1>
        <p class="text-lg md:text-xl font-light drop-shadow mb-6">Website Resmi Desa Lampoko</p>

        {{-- Glass Card Statistik --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-4 w-full max-w-6xl">
            {{-- Jumlah Penduduk --}}
            <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user-group class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div>
                    <p class="text-sm font-semibold">Penduduk</p>
                    <p class="text-2xl font-bold counter" data-target="3075">0</p>
                </div>
            </div>

            {{-- Jumlah Keluarga --}}
            <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-home class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div>
                    <p class="text-sm font-semibold">Keluarga</p>
                    <p class="text-2xl font-bold counter" data-target="728">0</p>
                </div>
            </div>

            {{-- Laki-laki --}}
            <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div>
                    <p class="text-sm font-semibold">Laki-laki</p>
                    <p class="text-2xl font-bold counter" data-target="1080">0</p>
                </div>
            </div>

            {{-- Perempuan --}}
            <div class="flex items-center gap-4 bg-white/20 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div>
                    <p class="text-sm font-semibold">Perempuan</p>
                    <p class="text-2xl font-bold counter" data-target="1081">0</p>
                </div>
            </div>
        </div>
    </div>
</section>
