<x-frontend-layout>
    <section class="max-w-6xl mx-auto py-12 px-4 pt-36 pb-16">

        <!-- Hero -->
        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-newspaper class="w-12 h-12 text-emerald-600 animate-bounce" />
                Berita Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Ikuti kabar terbaru, cerita menarik, dan informasi penting yang membentuk kehidupan Desa Lampoko setiap harinya.
            </p>
            <div class="mt-6 inline-block bg-emerald-700 text-white px-6 py-2 rounded-full font-medium hover:bg-emerald-800 transition cursor-default select-none shadow">
                Selalu update, selalu terkini
            </div>
        </div>

                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">

            <div class="mb-4 md:mb-0">
                <x-breadcrumb />
            </div>

            {{-- Search kanan --}}
            <form method="GET" action="{{ route('berita.informasi.index') }}" class="flex gap-2 max-w-md">
                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Cari berita..."
                    class="flex-grow px-4 py-2 text-sm border border-gray-300 rounded-lg focus:border-emerald-500 focus:ring-emerald-500 focus:outline-none"
                />
                <button type="submit" 
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 font-semibold text-sm transition flex items-center gap-1 focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-lg">
                    <x-heroicon-o-arrow-right class="w-4 h-4" />
                    Cari
                </button>
            </form>

        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-6" data-aos="fade-left">
            @foreach($beritas as $berita)
                <a href="{{ route('berita.informasi.show', $berita->slug) }}" 
                   class="group relative block bg-gradient-to-br from-white to-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition overflow-hidden border border-gray-200 hover:border-emerald-700 hover:scale-[1.02] duration-300">
                    
                    <div class="overflow-hidden h-44">
                        <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" 
                             onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                             alt="{{ $berita->judul }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-2 left-2 bg-emerald-600 text-white text-xs px-3 py-1 rounded-full shadow">
                            Berita
                        </div>
                    </div>

                    <div class="p-5">
                        <div class="flex items-center gap-2 text-sm text-emerald-600/80 mb-2">
                            <x-heroicon-o-calendar class="w-4 h-4 text-emerald-600/80" />
                            <span>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</span>
                        </div>

                        <h3 class="font-bold text-base text-gray-800 group-hover:text-emerald-700 line-clamp-2">
                            {{ $berita->judul }}
                        </h3>

                        <p class="text-gray-600 text-sm mt-2 line-clamp-3">
                            {{ Str::limit(strip_tags($berita->isi), 100) }}
                        </p>

                        <div class="mt-3 text-emerald-700 font-medium text-sm transition duration-300 opacity-0 group-hover:opacity-100">
                            Klik untuk lihat selengkapnya →
                        </div>
                    </div>
                </a>
            @endforeach
        </div>      

        <!-- Pagination -->
        <div class="mt-10 flex justify-center">
            {{ $beritas->links('pagination::tailwind') }}
        </div>
    </section>
</x-frontend-layout>
