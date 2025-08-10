<x-frontend-layout>
    <section class="max-w-6xl mx-auto py-12 px-4 pt-36 pb-16">
            <!-- Header utama -->
            <div class="text-center mb-12 bg-amber-50 py-14 rounded-xl">
                <h1 class="text-4xl md:text-5xl font-extrabold text-amber-600 flex items-center justify-center gap-3">
                    <x-heroicon-o-shopping-bag class="w-14 h-14 text-amber-600 animate-bounce" />
                    Produk UMKM Desa Lampoko
                </h1>
                <p class="mt-5 text-lg md:text-xl text-gray-600 max-w-xl mx-auto leading-relaxed">
                    Temukan berbagai produk unggulan hasil karya masyarakat Desa Lampoko yang berkualitas dan terjangkau.
                </p>
            </div>

            <!-- Cards produk -->
            <div class="grid md:grid-cols-3 gap-8" data-aos="fade-up">
                @foreach($produks as $produk)
                    @php
                        $nomorWA = preg_replace('/[^0-9]/', '', $produk->kontak);
                        if (substr($nomorWA, 0, 1) === '0') {
                            $nomorWA = '62' . substr($nomorWA, 1);
                        }
                    @endphp

                    <div class="group relative flex flex-col bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-2xl hover:border-amber-600 transition duration-300 overflow-hidden">

                        <!-- Gambar Produk -->
                        <div class="overflow-hidden h-52 relative rounded-t-3xl">
                            <img src="{{ asset('uploads/produk/' . $produk->gambar) }}" 
                                onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                                alt="{{ $produk->nama }}" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out rounded-t-3xl">
                            <span class="absolute top-3 left-3 bg-amber-600 text-white text-xs px-4 py-1 rounded-full shadow-lg font-semibold tracking-wide">
                                Produk
                            </span>
                        </div>

                        <!-- Konten -->
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="font-bold text-lg text-gray-900 group-hover:text-amber-600 transition line-clamp-1">
                                {{ $produk->nama }}
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Penjual: <span class="font-medium text-gray-700">{{ $produk->penjual }}</span>
                            </p>

                            <p class="text-gray-700 text-sm mt-3 line-clamp-3 leading-relaxed">
                                {{ Str::limit(strip_tags($produk->deskripsi), 90) }}
                            </p>

                            <div class="mt-5 text-amber-700 font-extrabold text-xl tracking-wide">
                                Rp {{ number_format($produk->harga, 0, ',', '.') }}
                            </div>

                            <!-- Tombol -->
                            <div class="mt-auto flex gap-4 pt-5 text-sm">
                                <a href="{{ route('produk.frontend.show', $produk->slug) }}" 
                                   class="flex-1 text-center py-3 rounded-xl font-medium border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white transition shadow-md">
                                    Lihat Produk
                                </a>
                                <a href="https://wa.me/{{ $nomorWA }}?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($produk->nama) }}" 
                                   target="_blank" 
                                   class="flex-1 text-center py-3 rounded-xl font-medium bg-gradient-to-r from-amber-500 to-amber-700 text-white hover:from-amber-600 hover:to-amber-800 transition shadow-md">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>      

            <!-- Pagination -->
            <div class="mt-14 flex justify-center">
                {{ $produks->links('pagination::tailwind') }}
            </div>

            <div class="bg-gradient-to-r from-amber-400 to-amber-600 rounded-xl p-10 mt-16 text-center shadow-xl">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
                    Punya Produk UMKM? Daftarkan Sekarang!
                </h2>
                <p class="text-amber-200 max-w-2xl mx-auto mb-8 text-lg md:text-xl leading-relaxed">
                    Tunjukkan produkmu kepada masyarakat dan dukung ekonomi lokal. Daftar produkmu mudah, cepat, dan langsung direview oleh admin kami.
                </p>
                <a href="{{ route('produk.frontend.create') }}" 
                   class="inline-block bg-white text-amber-600 font-extrabold px-10 py-4 rounded-full text-lg hover:bg-amber-50 transition shadow-lg hover:shadow-xl">
                    Daftarkan Produk Kamu
                </a>
            </div>
    </section>
</x-frontend-layout>
