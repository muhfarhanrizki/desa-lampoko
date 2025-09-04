<x-frontend-layout>

@if($pengumuman->count() > 0)
<!-- Sticky Button Pengumuman -->
<div x-data="{ open: false, selected: null }" class="fixed bottom-6 left-6 z-50" x-cloak>
    <button 
        @click="open = !open"
        class="bg-amber-500 text-white font-semibold px-4 py-2 rounded-full shadow-lg hover:bg-amber-600 transition hover:scale-105"
    >
        📢 Pengumuman
    </button>

    <div 
        x-show="open" 
        x-transition.origin.top.left
        @click.away="open = false"  
        class="mt-2 w-80 bg-white rounded-xl shadow-xl border border-gray-200 "
        style="display: none;"
    >
        <ul class="divide-y divide-gray-200 max-h-64 overflow-y-auto">
            @foreach($pengumuman as $item)
                <li 
                    class="px-4 py-3 hover:bg-amber-50 rounded-xl cursor-pointer"
                    @click="selected = selected === {{ $item->id }} ? null : {{ $item->id }}"
                >
                    <p class="text-sm font-medium text-gray-800">{{ $item->judul }}</p>
                    <p class="text-xs text-gray-400">
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                    </p>

                    <div x-show="selected === {{ $item->id }}" x-transition x-cloak class="mt-2 text-gray-700 text-sm">
                        <p class="italic text-gray-500">{{ $item->lokasi }}</p>
                        <p class="mt-1">{{ $item->deskripsi }}</p> <!-- tambahan deskripsi -->
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="relative h-screen overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/desa.jpeg') }}" alt="Background" class="w-full h-full object-cover object-top" />
        <div class="absolute inset-0 bg-gradient-to-br from-black/50 to-green-700/70"></div>
    </div>

    
    <!-- Konten Hero -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 sm:px-6 pt-8 md:px-8 mt-6">
        <!-- Logo Desa -->
        <img src="{{ asset('images/logo-barru.png') }}" alt="Logo Desa Lampoko"
            data-aos="fade-down"
            data-aos-duration="1000"
            class="h-20 w-20 md:h-24 md:w-24 object-contain mb-4 drop-shadow-xl hover:scale-105 transition-transform duration-300" />

        <!-- Judul Hero -->
        <h1 data-aos="fade-up" data-aos-delay="200" class="text-3xl sm:text-4xl md:text-6xl font-extrabold mb-3 drop-shadow-xl tracking-tight leading-tight">
            Selamat Datang di <span class="text-amber-500">Desa Lampoko</span>
        </h1>

        <!-- Subjudul -->
        <p data-aos="fade-up" data-aos-delay="400" class="text-base sm:text-lg font-light text-white/90 max-w-2xl mb-12 drop-shadow">
            Website resmi desa yang menyajikan informasi terkini, layanan publik, dan potensi lokal secara digital.
        </p>

        <!-- Statistik Cards -->
        <div data-aos="fade-up" data-aos-delay="400" class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-6xl mb-4 px-4">
            <!-- Card Template -->
            @foreach ([
                ['icon' => 'user-group', 'label' => 'Jumlah Penduduk', 'value' => $informasi->jumlah_penduduk],
                ['icon' => 'home', 'label' => 'Kepala Keluarga', 'value' => $informasi->jumlah_keluarga],
                ['icon' => 'user', 'label' => 'Laki-laki', 'value' => $informasi->jumlah_laki_laki],
                ['icon' => 'user', 'label' => 'Perempuan', 'value' => $informasi->jumlah_perempuan],
            ] as $stat)
                <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 border border-white/30 text-white hover:scale-105 transition-transform duration-300">
                    <x-dynamic-component :component="'heroicon-o-' . $stat['icon']" class="w-8 h-8 md:w-10 md:h-10 sm:w-10 sm:h-10 text-white" />
                    <div class="text-left">
                        <p class="text-sm font-semibold uppercase">{{ $stat['label'] }}</p>
                        <p class="text-2xl font-bold counter" data-target="{{ $stat['value'] }}">
                            {{ number_format($stat['value']) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Card Video Profil -->
<div class="w-full px-4 sm:px-6 md:px-12 -mt-20 mb-12 z-20 relative flex justify-center">
  <div class="w-full max-w-5xl bg-white/40 backdrop-blur rounded-2xl shadow-xl border border-white/200 p-6">
    <div class="grid md:grid-cols-2 gap-8 items-center">
      
        <div class="rounded-xl overflow-hidden" style="aspect-ratio: 16 / 10; max-height: 480px;">
          <iframe 
            src="https://www.youtube.com/embed/EFG9E1OU08Y" 
            title="Profil Desa Lampoko" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen 
            class="w-full h-full rounded-xl">
          </iframe>
        </div>

      <div class="text-left">
        <h3 class="text-xl md:text-2xl font-semibold text-emerald-800 mb-4">Profil Desa Lampoko</h3>
        <p class="text-gray-600 leading-relaxed text-sm md:text-base text-justify">
          Desa Lampoko adalah desa yang terletak di Kecamatan Balusu, Kabupaten Barru, dengan penduduk sekitar 3.400 jiwa yang tersebar di lima dusun: Pallae, Bulu Lampoko, Labunge, Bawasalo, dan Lampoko. Dikenal dengan kekayaan alam, budaya, serta semangat gotong royong, desa ini memiliki potensi unggulan di bidang pertanian, pariwisata, dan UMKM lokal.
        </p>
      </div>

    </div>
  </div>
</div>

<x-profil-video />
<x-sambutan-kepala-desa />
<x-berita-terbaru :beritas="$beritas" />
<x-produk-umkm :produks="$produks" />
<x-artikel :artikels="$artikels" />
<x-galeri-kegiatan :galeris="$galeris" />
<x-lokasi/>


@push('scripts')
<script src="{{ asset('js/frontend.js') }}"></script>
@endpush
</x-frontend-layout>
