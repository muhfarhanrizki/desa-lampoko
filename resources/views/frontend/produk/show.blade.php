<x-frontend-layout>
    
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-24 relative">
            <x-breadcrumb />
        <!-- Glow Background -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px] rounded-full bg-gradient-to-tr from-amber-300 to-amber-600 opacity-20 blur-3xl -z-10"></div>

        <!-- Tombol Kembali -->
        <div class="my-4">
            <button onclick="history.back()" 
                class="mb-5 inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition text-sm">
                <x-heroicon-o-arrow-left class="w-3 h-3 mr-2" />
                Kembali
            </button>
        </div>

        <!-- Card Detail Produk -->
        <article class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden flex flex-col md:flex-row">

            <!-- Gambar Produk -->
            @if($produk->gambar)
                <div class="md:w-1/3 p-4 flex items-center justify-center bg-gray-50">
                    <img src="{{ asset('uploads/produk/' . $produk->gambar) }}"
                        onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                        alt="{{ $produk->nama }}"
                        class="object-cover rounded-lg w-full h-64 md:h-full" />
                </div>
            @endif

            <!-- Detail Produk -->
            <div class="md:w-2/3 p-6 py-8 flex flex-col justify-between">
    <!-- Header -->
    <header class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900">
            {{ $produk->nama }}
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            Dijual oleh <span class="font-medium text-gray-800">{{ $produk->penjual ?? 'Tidak diketahui' }}</span>
        </p>
    </header>

    <!-- Deskripsi -->
    @if($produk->deskripsi)
        <p class="text-gray-700 text-sm mb-4 leading-relaxed">
            {!! nl2br(e($produk->deskripsi)) !!}
        </p>
    @endif

    <!-- Alamat & Kontak -->
    <div class="space-y-2 text-sm text-gray-700 mb-6">
        @if($produk->alamat)
            <div class="flex items-center gap-2">
                <x-heroicon-o-map-pin class="w-5 h-5 text-amber-500" />
                <span class="truncate" title="{{ $produk->alamat }}">{{ $produk->alamat }}</span>
            </div>
        @endif
        @if($produk->kontak)
            <div class="flex items-center gap-2">
                <x-heroicon-o-phone class="w-5 h-5 text-amber-500" />
                <span class="truncate" title="{{ $produk->kontak }}">{{ $produk->kontak }}</span>
            </div>
        @endif
    </div>

    <!-- Tombol Beli & Harga -->
    <div class="flex justify-between items-center border-t pt-4 mt-auto">
        @if($produk->kontak)
            @php
                $nomor = preg_replace('/[^0-9]/', '', $produk->kontak);
                if (substr($nomor, 0, 1) === '0') {
                    $nomor = '62' . substr($nomor, 1);
                }
            @endphp
            <a href="https://wa.me/{{ $nomor }}?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($produk->nama) }}"
                target="_blank"
                class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-amber-500 text-white font-medium shadow hover:bg-amber-600 transition">
                <x-heroicon-o-shopping-cart class="w-5 h-5" />
                Beli Sekarang
            </a>
        @else
            <p class="text-red-600 font-semibold text-sm">Kontak penjual belum tersedia.</p>
        @endif

        @if($produk->harga)
            <div class="flex items-center gap-2 text-xl font-semibold text-gray-900">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </div>
        @endif
    </div>
</div>

        </article>

        <!-- Produk Terkait -->
        @if($relatedProduks->count())
        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-8 text-gray-800 border-b-2 border-amber-400 inline-block pb-1">
                Produk Terkait
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($relatedProduks->take(3) as $related)
                    <a href="{{ route('produk.frontend.show', $related->slug) }}"
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden hover:shadow-lg hover:scale-[1.02] transition-transform flex flex-col">
                        <img src="{{ asset('uploads/produk/' . $related->gambar) }}"
                            onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                            alt="{{ $related->nama }}"
                            class="w-full h-44 object-cover hover:scale-105 transition-transform duration-500" />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="font-bold text-amber-700 text-lg line-clamp-2 mb-2">{{ $related->nama }}</h3>
                            @if($related->harga)
                                <p class="text-amber-600 font-semibold mb-3">Rp {{ number_format($related->harga, 0, ',', '.') }}</p>
                            @endif
                            <div class="mt-auto flex items-center justify-between text-sm font-medium text-amber-700">
                                <span>Info Selengkapnya</span>
                                <x-heroicon-o-arrow-right class="w-4 h-4" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        @endif
    </section>
</x-frontend-layout>
