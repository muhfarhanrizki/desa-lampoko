<nav id="navbar" x-data="{ mobileOpen: false, dropdown: null }"
     class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[90%] md:w-[80%] bg-emerald-900/70 backdrop-blur-md border border-white/30 shadow-lg rounded-2xl transition-all duration-300 shadow-emerald-900/50">
    <div class="px-6 py-3 flex justify-between items-center">
        {{-- Logo + Title --}}
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo-barru.png') }}" alt="Logo" class="h-10 w-10 object-contain" />
            <div class="flex flex-col leading-tight text-white">
                <span class="text-base font-semibold">Desa Lampoko</span>
                <span class="text-[12px] font-normal text-white">Kab. Barru, Sulawesi Selatan</span>
            </div>
        </div>

        {{-- Desktop Navigation --}}
        <ul class="hidden md:flex space-x-6 font-medium text-white items-center relative">
            <li><a href="{{ url('/') }}" class="hover:text-amber-400 transition">Beranda</a></li>

            {{-- Dropdown Profil Desa --}}
            <li @mouseenter="dropdown = 'profil'" @mouseleave="dropdown = null" class="relative">
                <button class="hover:text-amber-400 transition cursor-pointer select-none">Profil Desa</button>
                <ul
                    x-show="dropdown === 'profil'"
                    x-transition.opacity.origin.top.duration.200ms
                    class="absolute left-0 mt-2 w-56 bg-emerald-900/70 backdrop-blur-md border border-white/20 rounded-xl shadow-lg py-2 z-50 text-white"
                    style="display: none;"
                >
                    <li><a href="{{ route('profil.visi-misi') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Visi Misi</a></li>
                    <li><a href="{{ route('profil.sejarah') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Sejarah Desa</a></li>
                    <li><a href="{{ route('profil.peta') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Peta Desa</a></li>
                    <li><a href="{{ route('struktur.frontend') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Struktur Organisasi</a></li>
                    <li><a href="{{ route('profil.potensi') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Potensi Wisata</a></li>
                    <li><a href="{{ route('profil.fasilitas') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Fasilitas Umum</a></li>
                </ul>
            </li>

            {{-- Dropdown Lembaga --}}
            <li @mouseenter="dropdown = 'lembaga'" @mouseleave="dropdown = null" class="relative">
                <button class="hover:text-amber-400 transition cursor-pointer select-none">Lembaga</button>
                <ul
                    x-show="dropdown === 'lembaga'"
                    x-transition.opacity.origin.top.duration.200ms
                    class="absolute left-0 mt-2 w-56 bg-emerald-900/70 backdrop-blur-md border border-white/20 rounded-xl shadow-lg py-2 z-50 text-white"
                    style="display: none;"
                >
                    <li><a href="{{ route('lembaga.bpd') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Badan Permusyawaratan Desa</a></li>
                    <li><a href="{{ route('lembaga.lpm') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Lembaga Pemberdayaan Masyarakat</a></li>
                    <li><a href="{{ route('lembaga.pkk') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Pembinaan Kesejahteraan Keluarga</a></li>
                </ul>
            </li>

            {{-- Dropdown Informasi --}}
            <li @mouseenter="dropdown = 'informasi'" @mouseleave="dropdown = null" class="relative">
                <button class="hover:text-amber-400 transition cursor-pointer select-none">Informasi</button>
                <ul
                    x-show="dropdown === 'informasi'"
                    x-transition.opacity.origin.top.duration.200ms
                    class="absolute left-0 mt-2 w-56 bg-emerald-900/70 backdrop-blur-md border border-white/20 rounded-xl shadow-lg py-2 z-50 text-white"
                    style="display: none;"
                >
                    <li><a href="{{ route('berita.informasi.index') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Berita Desa</a></li>
                    <li><a href="{{ route('informasi.data') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Data Desa</a></li>
                    <li><a href="{{ route('artikel.informasi.index') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Artikel Desa</a></li>
                    <li><a href="{{ route('informasi.galeri') }}" class="block px-4 py-2 hover:bg-white/20 rounded transition hover:text-amber-400">Galeri Desa</a></li>
                </ul>
            </li>

            <li><a href="{{ route('administrasi.surat') }}" class="hover:text-amber-400 transition">Administrasi</a></li>
            <li><a href="{{ route('produk.frontend.index') }}" class="hover:text-amber-400 transition">Produk</a></li>
        </ul>

        {{-- Hamburger --}}
        <button @click="mobileOpen = !mobileOpen" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path x-show="!mobileOpen" d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="mobileOpen" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen" x-transition class="md:hidden px-6 pb-4 pt-4 bg-emerald-900/60 backdrop-blur-md rounded-b-2xl space-y-3 text-white font-medium" style="display:none;">
        <a href="{{ url('/') }}" class="block hover:text-amber-400">Beranda</a>

        {{-- Mobile Dropdown Profil --}}
        <div x-data="{ open: false }" class="space-y-1">
            <button @click="open = !open" class="w-full text-left hover:text-amber-400 font-semibold">
                Profil Desa
                <svg :class="{'rotate-180': open}" class="inline w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition class="pl-4 space-y-2 bg-gray-500/20 backdrop-blur-md rounded-md p-2 text-sm">
                <a href="{{ route('profil.visi-misi') }}" class="block hover:text-amber-400">Visi Misi</a>
                <a href="{{ route('profil.sejarah') }}" class="block hover:text-amber-400">Sejarah Desa</a>
                <a href="{{ route('profil.peta') }}" class="block hover:text-amber-400">Peta Desa</a>
                <a href="{{ route('struktur.frontend') }}" class="block hover:text-amber-400">Struktur Organisasi</a>
                <a href="{{ route('profil.potensi') }}" class="block hover:text-amber-400">Potensi Wisata</a>
                <a href="{{ route('profil.fasilitas') }}" class="block hover:text-amber-400">Fasilitas Umum</a>
            </div>
        </div>

        {{-- Mobile Dropdown Lembaga --}}
        <div x-data="{ open: false }" class="space-y-1">
            <button @click="open = !open" class="w-full text-left hover:text-amber-400 font-semibold">
                Lembaga
                <svg :class="{'rotate-180': open}" class="inline w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition class="pl-4 space-y-2 bg-gray-500/20 backdrop-blur-md rounded-md p-2 text-sm">
                <a href="{{ route('lembaga.bpd') }}" class="block hover:text-amber-400">Badan Permusyawaratan Desa</a>
                <a href="{{ route('lembaga.lpm') }}" class="block hover:text-amber-400">Lembaga Pemberdayaan Masyarakat</a>
                <a href="{{ route('lembaga.pkk') }}" class="block hover:text-amber-400">Pembinaan Kesejahteraan Keluarga</a>
            </div>
        </div>

        {{-- Mobile Dropdown Informasi --}}
        <div x-data="{ open: false }" class="space-y-1">
            <button @click="open = !open" class="w-full text-left hover:text-amber-400 font-semibold">
                Informasi
                <svg :class="{'rotate-180': open}" class="inline w-4 h-4 ml-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition class="pl-4 space-y-2 bg-gray-500/20 backdrop-blur-md rounded-md p-2 text-sm">
                <a href="{{ route('berita.informasi.index') }}" class="block hover:text-amber-400">Berita Desa</a>
                <a href="{{ route('informasi.data') }}" class="block hover:text-amber-400">Data Desa</a>
                <a href="{{ route('artikel.informasi.index') }}" class="block hover:text-amber-400">Artikel Desa</a>
                <a href="{{ route('informasi.galeri') }}" class="block hover:text-amber-400">Galeri Desa</a>
            </div>
        </div>

        <a href="{{ route('administrasi.surat') }}" class="block hover:text-amber-400 font-semibold">Administrasi</a>
        <a href="{{ route('produk.frontend.index') }}" class="block hover:text-amber-400 font-semibold">Produk Desa</a>
    </div>
</nav>
