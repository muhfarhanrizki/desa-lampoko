<section class="py-20 bg-amber-50 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="md:grid md:grid-cols-5 gap-4 items-start">

            <!-- Judul & Subjudul di atas card untuk mobile -->
            <div class="block md:hidden mb-6 text-center">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 mb-3 rounded-full bg-gradient-to-r from-amber-400 to-amber-700 text-white text-sm font-semibold shadow-lg shadow-amber-400/50 mx-auto">
                    <x-heroicon-o-cube class="w-5 h-5" />
                    Produk Lokal
                </div>
                <h2 class="text-3xl font-extrabold text-gray-800 mb-2">
                    Produk UMKM
                </h2>
                <p class="text-gray-500 max-w-md mx-auto text-sm md:text-base">
                    Temukan produk unggulan hasil karya warga Desa Lampoko.
                </p>
            </div>

            <!-- Produk cards tanpa slider, normal grid di mobile -->
            <div class="md:col-span-3">
                <div
                    class="grid grid-cols-1 sm:grid-cols-3 gap-4"
                    data-aos="fade-right">

                    @foreach ($produks->take(3) as $produk)
                        <a href="{{ route('produk.frontend.show', $produk->slug) }}"
                            class="group bg-gradient-to-br from-white to-gray-100 border border-gray-200 hover:border-amber-600 rounded-2xl shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300 overflow-hidden h-full flex flex-col">

                            {{-- Gambar --}}
                            <div class="relative">
                                <img src="{{ asset('uploads/produk/' . $produk->gambar) }}"
                                    onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                                    alt="{{ $produk->nama }}"
                                    class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300" />

                                <div
                                    class="absolute top-2 left-2 bg-amber-600 text-white text-xs px-3 py-1 rounded-full shadow">
                                    UMKM
                                </div>
                            </div>

                            {{-- Konten --}}
                            <div class="p-5 flex flex-col flex-grow">
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $produk->nama }}</h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-2 flex-grow">
                                    {{ Str::limit(strip_tags($produk->deskripsi), 80) }}</p>

                                <div
                                    class="mt-auto flex items-center justify-between pt-2 border-t border-gray-100">
                                    <div
                                        class="flex items-center gap-1 text-xs text-amber-600 transition font-medium">
                                        <x-heroicon-o-eye class="w-4 h-4 text-amber-600" />
                                        Lihat Produk
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <!-- Judul & Subjudul di kanan untuk desktop -->
            <div class="hidden md:block md:col-span-2 text-left md:text-right" data-aos="fade-left">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 mb-3 rounded-full bg-gradient-to-r from-amber-400 to-amber-700 text-white text-sm font-semibold shadow-lg shadow-amber-400/50">
                    <x-heroicon-o-cube class="w-5 h-5" />
                    Produk Lokal
                </div>

                <h2 class="text-3xl md:text-4xl mt-2 font-extrabold text-gray-800">
                    Produk UMKM
                </h2>

                <p class="mt-2 text-gray-500 max-w-md text-sm md:text-base md:ml-auto">
                    Temukan produk unggulan hasil karya warga Desa Lampoko.
                </p>

                <div class="mt-8" data-aos="fade-left">
                    <a href="{{ route('produk.frontend.index') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-400 to-amber-700
                        text-white px-6 py-2.5 rounded-xl shadow-lg hover:shadow-xl
                        transition-all duration-300 ease-in-out font-semibold
                        backdrop-blur-md bg-opacity-90 ring-1 ring-white/20
                        hover:scale-[1.02] transform shadow-amber-400/50">
                        <x-heroicon-o-cube class="w-5 h-5 text-white" />
                        Lihat Semua Produk
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>
