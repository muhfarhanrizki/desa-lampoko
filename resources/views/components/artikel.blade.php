<section class="py-20 bg-sky-50 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-5 gap-4 items-start">
            
            <!-- Kiri: Judul & Deskripsi -->
            <div class="md:col-span-2 text-left" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-5 py-2 mb-3 rounded-full 
                            bg-gradient-to-r from-sky-400 to-sky-700 text-white text-sm font-semibold 
                            shadow-lg shadow-sky-400/50">
                    <x-heroicon-o-newspaper class="w-5 h-5" />
                    Artikel Desa
                </div>

                <h2 class="text-3xl md:text-4xl mt-2 font-extrabold text-gray-800">
                    Artikel & Wawasan
                </h2>

                <p class="mt-2 text-gray-500 max-w-md text-sm md:text-base">
                    Temukan artikel menarik dan bermanfaat seputar Desa Lampoko.
                </p>

                <div class="mt-8" data-aos="fade-right">
                    <a href="{{ route('artikel.informasi.index') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-sky-400 to-sky-700
                        text-white px-6 py-2.5 rounded-xl shadow-lg hover:shadow-xl
                        transition-all duration-300 ease-in-out font-semibold
                        backdrop-blur-md bg-opacity-90 ring-1 ring-white/20
                        hover:scale-[1.02] transform shadow-sky-400/50">
                        <x-heroicon-o-newspaper class="w-5 h-5 text-white" />
                        Lihat Semua Artikel
                    </a>
                </div>
            </div>

            <!-- Kanan: Card Artikel -->
            <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-3 gap-4" data-aos="fade-left">
            @foreach ($artikels->take(3) as $artikel)
                <a href="{{ route('artikel.informasi.show', $artikel->slug) }}" 
                    class="group relative bg-gradient-to-br from-white to-gray-100 rounded-2xl shadow-xl hover:shadow-2xl 
                        transition overflow-hidden border border-gray-200 hover:border-sky-700 hover:scale-[1.02] duration-300 
                        flex flex-col">
                    
                    <!-- Gambar -->
                    <div class="overflow-hidden h-44">
                        <img src="{{ asset('uploads/artikel/' . $artikel->gambar) }}" 
                            onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                            alt="{{ $artikel->judul }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        
                        <div class="absolute top-2 left-2 bg-sky-500 text-white text-xs px-3 py-1 rounded-full shadow">
                            Artikel
                        </div>
                    </div>

                    <!-- Konten -->
                    <div class="p-5 flex flex-col flex-grow">
                        <!-- Tanggal -->
                        <div class="flex items-center gap-1 mb-2 text-xs text-sky-600/80">
                            <x-heroicon-o-calendar class="w-4 h-4 text-sky-600/80" />
                            <span>{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y') }}</span>
                        </div>

                        <!-- Penulis -->
                        <div class="flex items-center gap-1 text-xs text-sky-600/80 mb-2">
                            <x-heroicon-o-user class="w-4 h-4 text-sky-600/80" />
                            <span>{{ $artikel->penulis }}</span>
                        </div>

                        <!-- Judul -->
                        <h3 class="font-bold text-base text-gray-800 group-hover:text-sky-700 line-clamp-2">
                            {{ $artikel->judul }}
                        </h3>

                        <!-- Cuplikan Isi -->
                        <p class="text-gray-600 text-sm mt-2 line-clamp-3 flex-grow">
                            {{ Str::limit(strip_tags($artikel->isi), 100) }}
                        </p>

                        <!-- Link di bagian bawah -->
                        <div class="mt-3 text-sky-700 font-medium text-sm transition duration-300 opacity-0 group-hover:opacity-100 text-left">
                            Klik untuk baca selengkapnya →
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        </div>
    </div>
</section>
