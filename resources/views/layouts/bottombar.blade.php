{{-- layouts/bottombar.blade.php --}}
<div class="fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 shadow-md">
    <div class="flex justify-around md:justify-center md:gap-12 items-center text-sm text-gray-600 px-2 py-2">

        {{-- Beranda --}}
        <a href="{{ route('dashboard.home') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('dashboard.home') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-home class="h-6 w-6 mb-0.5" />
            <span>Beranda</span>
        </a>

        {{-- Berita --}}
        <a href="{{ route('berita.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('berita.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-newspaper class="h-6 w-6 mb-0.5" />
            <span>Berita</span>
        </a>

        {{-- Galeri --}}
        <a href="{{ route('galeri.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('galeri.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-photo class="h-6 w-6 mb-0.5" />
            <span>Galeri</span>
        </a>

        {{-- Artikel --}}
        <a href="{{ route('artikel.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('artikel.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-document-text class="h-6 w-6 mb-0.5" />
            <span>Artikel</span>
        </a>

        {{-- Struktur --}}
        <a href="{{ route('struktur.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('struktur.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-user-group class="h-6 w-6 mb-0.5" />
            <span>Struktur</span>
        </a>

        {{-- Kontak --}}
        <a href="{{ route('kontak.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('kontak.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-phone class="h-6 w-6 mb-0.5" />
            <span>Kontak</span>
        </a>

        {{-- Persuratan --}}
        <a href="{{ route('surat.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('surat.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-envelope class="h-6 w-6 mb-0.5" />
            <span>Surat</span>
        </a>

        {{-- Produk --}}
        <a href="{{ route('produk.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('produk.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-cube class="h-6 w-6 mb-0.5" />
            <span>Produk</span>
        </a>

        {{-- Informasi --}}
        <a href="{{ route('informasi.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('informasi.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-information-circle class="h-6 w-6 mb-0.5" />
            <span>Info</span>
        </a>

        {{-- Pengumuman --}}
        <a href="{{ route('pengumuman.index') }}"
           class="flex flex-col items-center transition {{ request()->routeIs('pengumuman.*') ? 'text-green-600 font-semibold' : 'hover:text-green-600' }}">
            <x-heroicon-o-megaphone class="h-6 w-6 mb-0.5" />
            <span>Pengumuman</span>
        </a>
    </div>
</div>
