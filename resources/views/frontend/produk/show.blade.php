<x-frontend-layout>
    <x-breadcrumb />
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-24 relative">

        <!-- Layer Background Keren -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px] rounded-full bg-gradient-to-tr from-amber-300 to-amber-600 opacity-20 blur-3xl -z-10"></div>

        <!-- Card Detail Produk -->
        <article
            class="relative bg-white rounded-3xl shadow-[0_15px_30px_rgb(250,180,60,0.2)] border border-amber-300 overflow-hidden flex flex-col md:flex-row gap-8 md:gap-0">

            <!-- Gambar Produk (Layered) -->
            @if($produk->gambar)
                <div
                    class="md:w-1/3 relative bg-gradient-to-br from-amber-50 to-amber-100 p-6 rounded-l-3xl overflow-hidden group cursor-pointer">
                    <img src="{{ asset('uploads/produk/' . $produk->gambar) }}"
                        onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                        alt="{{ $produk->nama }}"
                        class="rounded-3xl shadow-xl object-cover w-full h-80 transition-transform duration-700 group-hover:scale-110" />

                    <!-- Badge -->
                    <span
                        class="absolute top-6 left-6 bg-amber-600 text-white uppercase tracking-wider font-bold text-xs px-5 py-1.5 rounded-full shadow-lg select-none">
                        PRODUK
                    </span>

                    <!-- Layered shadow blur -->
                    <div
                        class="absolute -bottom-8 -right-8 w-32 h-32 bg-amber-400 opacity-30 rounded-full blur-2xl"></div>
                </div>
            @endif

            <!-- Detail Produk -->
            <div
                class="md:w-2/3 p-10 flex flex-col justify-between bg-gradient-to-tr from-white/90 to-amber-50/70 rounded-r-3xl drop-shadow-lg relative z-10">

                <header class="mb-8">
                    <!-- Nama Produk Dramatis -->
                    <h1
                        class="text-5xl md:text-6xl font-extrabold text-amber-700 leading-tight tracking-tighter drop-shadow-md select-text">
                        {{ $produk->nama }}
                    </h1>

                    <!-- Penjual dengan gaya unik -->
                    <p class="text-amber-800 font-semibold mt-1 text-xl tracking-wide uppercase italic drop-shadow-sm">
                        Dijual oleh <span class="font-bold">{{ $produk->penjual ?? 'Tidak diketahui' }}</span>
                    </p>
                </header>

                <!-- Deskripsi dengan border bawah artistik -->
                @if($produk->deskripsi)
                    <section
                        class="prose max-w-none text-gray-800 text-lg leading-relaxed border-b border-amber-400 pb-6 mb-8 tracking-wide">
                        {!! nl2br(e($produk->deskripsi)) !!}
                    </section>
                @endif

                <!-- Info produk kecil tapi informatif -->
                <dl class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10 text-amber-800 font-semibold">
                    @if($produk->harga)
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-currency-dollar class="w-6 h-6" />
                            <dd class="text-2xl">Rp {{ number_format($produk->harga, 0, ',', '.') }}</dd>
                        </div>
                    @endif

                    @if($produk->alamat)
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-map-pin class="w-6 h-6" />
                            <dd class="text-lg truncate max-w-[12rem]" title="{{ $produk->alamat }}">{{ $produk->alamat }}</dd>
                        </div>
                    @endif

                    @if($produk->kontak)
                        <div class="flex items-center gap-3">
                            <x-heroicon-o-phone class="w-6 h-6" />
                            <dd class="text-lg truncate max-w-[12rem]" title="{{ $produk->kontak }}">{{ $produk->kontak }}</dd>
                        </div>
                    @endif
                </dl>

                <!-- Tombol Beli dengan efek 3D dan hover keren -->
                <div>
                    @if($produk->kontak)
                        @php
                            $nomor = preg_replace('/[^0-9]/', '', $produk->kontak);
                            if (substr($nomor, 0, 1) === '0') {
                                $nomor = '62' . substr($nomor, 1);
                            }
                        @endphp
                        <a href="https://wa.me/{{ $nomor }}?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($produk->nama) }}"
                            target="_blank"
                            class="inline-flex items-center gap-3 px-10 py-4 rounded-3xl bg-amber-600 shadow-[0_10px_20px_rgba(250,180,60,0.5)] text-white font-extrabold text-lg transition-transform duration-300 hover:scale-[1.07] hover:shadow-[0_12px_25px_rgba(250,180,60,0.75)] active:scale-[0.97] select-none">
                            <x-heroicon-o-shopping-cart class="w-7 h-7" />
                            Beli Sekarang via WA
                        </a>
                    @else
                        <p class="text-red-600 font-semibold text-center text-lg">Kontak penjual belum tersedia.</p>
                    @endif
                </div>
            </div>
        </article>

        <!-- Produk Terkait -->
        <section class="mt-20">
            <h2
                class="text-3xl font-extrabold mb-10 text-amber-700 tracking-wide border-b-4 border-amber-400 inline-block pb-2 select-none">
                Produk Terkait
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($relatedProduks->take(3) as $related)
                    <a href="{{ route('produk.frontend.show', $related->slug) }}"
                        class="relative bg-white border border-amber-300 rounded-2xl shadow-md group overflow-hidden cursor-pointer hover:shadow-lg hover:scale-[1.03] transition-transform duration-350">
                        <div class="overflow-hidden rounded-t-2xl">
                            <img src="{{ asset('uploads/produk/' . $related->gambar) }}"
                                onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                                alt="{{ $related->nama }}"
                                class="w-full h-40 object-cover object-center group-hover:scale-110 transition-transform duration-500" />
                        </div>
                        <div class="p-5">
                            <h3 class="font-extrabold text-amber-700 line-clamp-2 mb-2 tracking-tight">
                                {{ $related->nama }}
                            </h3>
                            @if($related->harga)
                                <p class="text-amber-600 font-bold text-lg">Rp {{ number_format($related->harga, 0, ',', '.') }}</p>
                            @endif
                        </div>
                        <!-- Glow effect -->
                        <div
                            class="pointer-events-none absolute -bottom-6 -left-6 w-20 h-20 rounded-full bg-amber-300 opacity-40 blur-2xl mix-blend-multiply"></div>
                    </a>
                @endforeach
            </div>
        </section>

    </section>
</x-frontend-layout>
