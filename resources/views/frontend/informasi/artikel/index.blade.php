<x-frontend-layout>
    <section class="max-w-6xl mx-auto py-12 px-4 pt-36 pb-16">

        <!-- Hero -->
        <div class="text-center mb-12 bg-blue-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 flex items-center justify-center gap-3">
                <x-heroicon-o-document-text class="w-12 h-12 text-blue-600 animate-bounce" />
                Artikel Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Temukan berbagai artikel menarik dan informatif seputar Desa Lampoko yang selalu update.
            </p>
            <div class="mt-6 inline-block bg-blue-700 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-800 transition cursor-default select-none shadow">
                Inspirasi dan Informasi Terkini
            </div>
        </div>

        <!-- Breadcrumb + Search -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">

            <div class="mb-4 md:mb-0">
                <x-breadcrumb />
            </div>

            <form method="GET" action="{{ route('artikel.informasi.index') }}" class="flex gap-2 max-w-md">
                <input
                    type="text"
                    name="q"
                    value="{{ request('q') }}"
                    placeholder="Cari artikel..."
                    class="flex-grow px-4 py-2 text-sm border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-blue-500 focus:outline-none"
                />
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 font-semibold text-sm transition flex items-center gap-1 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-lg">
                    <x-heroicon-o-arrow-right class="w-4 h-4" />
                    Cari
                </button>
            </form>

        </div>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-6" data-aos="fade-left">
            @foreach($artikels as $artikel)
                <a href="{{ route('artikel.informasi.show', $artikel->slug) }}" 
                   class="group relative block bg-gradient-to-br from-white to-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition overflow-hidden border border-gray-200 hover:border-blue-700 hover:scale-[1.02] duration-300">
                    
                    <div class="overflow-hidden h-44">
                        <img src="{{ asset('uploads/artikel/' . $artikel->gambar) }}" 
                             onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                             alt="{{ $artikel->judul }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-2 left-2 bg-blue-600 text-white text-xs px-3 py-1 rounded-full shadow">
                            Artikel
                        </div>
                    </div>

                    <div class="p-5">
                        <div class="flex items-center gap-2 text-sm text-blue-600/80 mb-2">
                            <x-heroicon-o-calendar class="w-4 h-4 text-blue-600/80" />
                            <span>{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                        <div class="text-xs text-gray-500">
                          Oleh {{ $artikel->penulis ?? 'Admin Desa Lampoko' }}
                        </div>
                        <h3 class="font-bold text-base text-gray-800 group-hover:text-blue-700 line-clamp-2">
                            {{ $artikel->judul }}
                        </h3>

                        <p class="text-gray-600 text-sm mt-2 line-clamp-3">
                            {{ Str::limit(strip_tags($artikel->isi), 100) }}
                        </p>

                        <div class="mt-3 text-blue-700 font-medium text-sm transition duration-300 opacity-0 group-hover:opacity-100">
                            Klik untuk baca selengkapnya →
                        </div>
                    </div>
                </a>
            @endforeach
        </div>      

        <!-- Pagination -->
        <div class="mt-10 flex justify-center">
            {{ $artikels->links('pagination::tailwind') }}
        </div>
    </section>
</x-frontend-layout>
