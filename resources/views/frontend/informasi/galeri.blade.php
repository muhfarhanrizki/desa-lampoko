<x-frontend-layout>
    <section class="max-w-6xl mx-auto py-12 px-4 pt-36 pb-16">

        <!-- Header -->
        <div class="text-center mb-12 bg-rose-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-rose-700 flex items-center justify-center gap-3">
                <x-heroicon-o-photo class="w-12 h-12 text-rose-600 animate-bounce" />
                Galeri Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Koleksi foto dan momen berharga yang menggambarkan keindahan dan kehidupan Desa Lampoko.
            </p>
            <div class="mt-6 inline-block bg-rose-600 text-white px-6 py-2 rounded-full font-medium hover:bg-rose-700 transition cursor-default select-none shadow">
                Abadikan setiap kenangan
            </div>
        </div>

        <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
            @foreach ($galeris as $galeri)
                <div class="overflow-hidden rounded-2xl relative group">
                    {{-- Gambar --}}
                    <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}"
                        alt="{{ $galeri->nama ?? 'Galeri' }}"
                        class="w-full object-cover rounded-2xl transition-transform duration-300 ease-in-out group-hover:scale-105">
                    <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-black/70 to-transparent 
                        opacity-0 group-hover:opacity-100 transition duration-300 rounded-b-2xl pointer-events-none">
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white z-10 
                                opacity-0 group-hover:opacity-100 transition duration-300">
                        <p class="text-sm font-medium line-clamp-2">
                            {{ Str::limit(strip_tags($galeri->judul), 100) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
</x-frontend-layout>
