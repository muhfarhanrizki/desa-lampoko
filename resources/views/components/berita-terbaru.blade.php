<section class="py-20  bg-emerald-50 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-5 gap-4 items-start">
            <div class="md:col-span-2 text-left" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-5 py-2 mb-3 rounded-full bg-gradient-to-r from-emerald-400 to-emerald-700 text-white text-sm font-semibold mx-auto shadow-lg shadow-emerald-400/50">
                    <x-heroicon-o-newspaper class="w-5 h-5" />
                    Info Terkini
                </div>

                <h2 class="text-3xl md:text-4xl mt-2 font-extrabold text-gray-800">
                    Berita & Informasi
                </h2>

                <p class="mt-2 text-gray-500 max-w-md text-sm md:text-base md:ml-auto">
                    Dapatkan berita terbaru dan informasi penting dari Desa Lampoko.
                </p>

                <div class="mt-8" data-aos="fade-right">
                    <a href="{{ route('berita.informasi.index') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-400 to-emerald-700
                        text-white px-6 py-2.5 rounded-xl shadow-lg hover:shadow-xl
                        transition-all duration-300 ease-in-out font-semibold
                        backdrop-blur-md bg-opacity-90 ring-1 ring-white/20
                        hover:scale-[1.02] transform shadow-emerald-400/50">
                        <x-heroicon-o-newspaper class="w-5 h-5 text-white" />
                        Lihat Semua Berita
                    </a>
                </div>
            </div>

            <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-3 gap-4" data-aos="fade-left">
                @foreach ($beritas->take(3) as $berita)
                    <a href="{{ route('berita.informasi.show', $berita->slug) }}" 
                        class="group relative block bg-gradient-to-br from-white to-gray-100 rounded-2xl shadow-xl hover:shadow-2xl transition overflow-hidden border border-gray-200 hover:border-green-700 hover:scale-[1.02] duration-300">
                        
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
                            <div class="flex items-center gap-2 text-sm text-green-600/80 mb-2">
                                <x-heroicon-o-calendar class="w-4 h-4 text-green-600/80" />
                                <span>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</span>
                            </div>

                            <h3 class="font-bold text-base text-gray-800 group-hover:text-green-700 line-clamp-2">
                                {{ $berita->judul }}
                            </h3>

                            <p class="text-gray-600 text-sm mt-2 line-clamp-3">
                                {{ Str::limit(strip_tags($berita->isi), 100) }}
                            </p>

                            <div class="mt-3 text-green-700 font-medium text-sm transition duration-300 opacity-0 group-hover:opacity-100">
                                Klik untuk baca selengkapnya →
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
