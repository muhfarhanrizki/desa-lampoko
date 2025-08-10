<section class="py-16  bg-rose-50 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12" data-aos="fade">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-3 rounded-full bg-gradient-to-r from-rose-400 to-rose-700 text-white text-sm font-semibold shadow-lg shadow-red-400/50">
                <x-heroicon-o-photo class="w-5 h-5" />
                Galeri Desa
            </div>
            <h2 class="text-3xl md:text-4xl mt-2 font-extrabold text-gray-800">
                Potret Kegiatan & Keindahan Desa
            </h2>
            <p class="mt-2 text-gray-500 max-w-xl mx-auto text-sm md:text-base">
                Dokumentasi momen-momen penting dan keindahan alam Desa Lampoko.
            </p>
        </div>


        <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
            @foreach ($galeris->take(6) as $galeri)
                <div class="overflow-hidden rounded-2xl relative group" data-aos="fade-up">
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
                            {{ Str::limit(strip_tags($galeri->deskripsi), 100) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center" data-aos="fade-up">
            <a href="{{ url('/informasi/galeri') }}"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-rose-400 to-rose-700
                      text-white px-8 py-3 rounded-xl shadow-lg hover:shadow-xl
                      transition-all duration-300 ease-in-out font-semibold
                      backdrop-blur-md bg-opacity-90 ring-1 ring-white/20 hover:scale-[1.02] transform shadow-rose-400/50">
                <x-heroicon-o-photo class="w-5 h-5 text-white" />
                Lihat Semua Galeri
            </a>
        </div>
    </div>
</section>