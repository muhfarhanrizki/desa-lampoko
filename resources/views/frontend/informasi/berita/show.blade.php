<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 pt-36 pb-16">
        
        <!-- Konten Utama -->
        <div class="md:col-span-2 bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <button onclick="history.back()" 
                class="mb-5 inline-flex items-center px-4 py-2 bg-emerald-600 text-white rounded-full hover:bg-emerald-700 transition text-sm">
                <x-heroicon-o-arrow-left class="w-3 h-3 mr-2" />
                Kembali
            </button>

            <x-breadcrumb/>

            {{-- Gambar berita utama --}}
            <div class="mb-6 rounded-md overflow-hidden border border-gray-300 shadow-sm">
                <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" 
                    onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                    alt="{{ $berita->judul }}" 
                    class="w-full h-96 object-cover object-center">
            </div>

            <h1 class="text-3xl font-semibold text-gray-800 mb-3">{{ $berita->judul }}</h1>
            <p class="text-sm text-gray-500 mb-2 italic flex items-center gap-2">
                <x-heroicon-o-calendar class="w-4 h-4 text-emerald-500" />
                {{ $berita->created_at->translatedFormat('d F Y') }}
            </p>
                <p class="text-sm text-gray-500 mb-6 flex items-center gap-1 ">
                <x-heroicon-o-user class="w-4 h-4 text-emerald-500" />
                Oleh <span class="font-medium text-gray-700">Admin Desa</span>
            </p>
            
            <article class="prose max-w-none text-gray-700">
                {!! nl2br(e($berita->isi)) !!}
            </article>
        </div>

        <!-- Sidebar Berita Terkait -->
        <aside class="md:col-span-1 space-y-5">
        <h2 class="text-2xl font-semibold mb-6 border-b border-gray-200 pb-2 text-emerald-700">Berita Terbaru</h2>
        
        @foreach($relatedBeritas as $related)
            <a href="{{ route('berita.informasi.show', $related->slug) }}" 
            class="block bg-white rounded-xl border border-gray-200 shadow-sm hover:shadow-lg hover:scale-[1.02] transition-transform duration-300 p-4">
                
                <div class="flex items-center gap-4">
                    <img src="{{ asset('uploads/berita/' . $related->gambar) }}" 
                        onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';"
                        alt="{{ $related->judul }}" 
                        class="w-16 h-16 object-cover rounded-lg shadow-sm flex-shrink-0">
                    
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-gray-900 line-clamp-2 leading-tight">{{ $related->judul }}</h3>
                        <p class="text-xs text-emerald-600 mt-1 flex items-center gap-1 font-semibold">
                            <x-heroicon-o-calendar class="w-4 h-4" />
                            {{ \Carbon\Carbon::parse($related->created_at)->translatedFormat('d F Y') }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
        </aside>

    </section>
</x-frontend-layout>
