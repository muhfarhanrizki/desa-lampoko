<div class="relative h-screen overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/desa.jpeg') }}" alt="Background" class="w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-700/70"></div>
    </div>


    {{-- Konten Hero --}}
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6 mt-8">
        <img src="{{ asset('images/logo-barru.png') }}" alt="Logo" class="h-24 w-24 md:h-28 md:w-28 object-contain mb-4 drop-shadow-lg" />
        <h1 class="text-3xl md:text-5xl font-bold mb-2 drop-shadow-lg">Selamat Datang di Desa Lampoko</h1>
        <p class="text-lg md:text-xl font-light drop-shadow mb-6">Website resmi informasi dan layanan desa</p>

        {{-- Tombol CTA --}}
        <div class="mt-2 mb-8">
            <a href="#" class="inline-block bg-white text-green-800 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-green-100 transition-all duration-300">
                Jelajahi Desa
            </a>
        </div>

        {{-- Statistik Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-4 w-full max-w-6xl mb-8">
            {{-- Jumlah Penduduk --}}
            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user-group class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div class="text-left">
                    <p class="text-sm font-semibold uppercase">Jumlah Penduduk</p>
                    <p class="text-2xl font-bold counter" data-target="{{ $informasi->jumlah_penduduk }}">
                        {{ $informasi->jumlah_penduduk }}
                    </p>
                </div>
            </div>

            {{-- Jumlah Keluarga --}}
            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-home class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div class="text-left">
                    <p class="text-sm font-semibold uppercase">Jumlah Keluarga</p>
                    <p class="text-2xl font-bold counter" data-target="{{ $informasi->jumlah_keluarga }}">
                        {{ $informasi->jumlah_keluarga }}
                    </p>
                </div>
            </div>

            {{-- Laki-laki --}}
            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div class="text-left">
                    <p class="text-sm font-semibold uppercase">Laki-laki</p>
                    <p class="text-2xl font-bold counter" data-target="{{ $informasi->jumlah_laki_laki }}">
                        {{ $informasi->jumlah_laki_laki }}
                    </p>
                </div>
            </div>

            {{-- Perempuan --}}
            <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                <x-heroicon-o-user class="w-8 h-8 md:w-10 md:h-10 text-white" />
                <div class="text-left">
                    <p class="text-sm font-semibold uppercase">Perempuan</p>
                    <p class="text-2xl font-bold counter" data-target="{{ $informasi->jumlah_perempuan }}">
                        {{ $informasi->jumlah_perempuan }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Card Video Profil --}}
<div class="w-full px-4 md:px-12 mt-[-80px] mb-16 z-20 relative flex justify-center x">
    <div class="w-full max-w-5xl bg-white/60 backdrop-blur rounded-2xl shadow-xl border border-green-200 p-6">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            {{-- Video --}}
            <div class="rounded-xl overflow-hidden">
                <video controls class="w-full h-auto rounded-xl">
                    <source src="{{ asset('videos/profile-desa.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung pemutar video.
                </video>
            </div>

            {{-- Deskripsi --}}
            <div class="text-left">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tentang Video Profil Desa</h3>
                <p class="text-gray-600 leading-relaxed">
                    Video ini memberikan gambaran umum mengenai Desa Lampoko, termasuk lokasi, kegiatan masyarakat,
                    potensi wilayah, serta suasana kehidupan sehari-hari warga. Konten ini membantu mengenalkan desa
                    secara visual kepada masyarakat luas.
                </p>
            </div>
        </div>
    </div>
</div>
