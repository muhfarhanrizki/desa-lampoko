<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
        <x-heroicon-o-users class="w-12 h-12 text-emerald-600 animate-pulse" />
        Badan Permusyawaratan Desa (BPD) Lampoko
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Daftar anggota BPD yang mengawasi dan memberi masukan untuk kemajuan Desa Lampoko.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      @forelse ($strukturs as $struktur)
        <div class="bg-white rounded-lg shadow-md p-5 flex flex-col items-center text-center
                    border border-gray-200 hover:border-emerald-500 transition duration-300 cursor-pointer
                    hover:shadow-lg">
          <div class="w-24 h-24 rounded-full overflow-hidden shadow-inner mb-4 ring-4 ring-emerald-100">
            <img src="{{ asset('uploads/struktur/' . $struktur->foto) }}" alt="{{ $struktur->nama }}" class="w-full h-full object-cover" />
          </div>

          <h3 class="text-lg font-semibold text-gray-900 truncate w-full" title="{{ $struktur->nama }}">
            {{ $struktur->nama }}
          </h3>
          <p class="text-emerald-600 mt-1 text-sm font-medium italic tracking-wide">
            {{ $struktur->jabatan }}
          </p>
        </div>
      @empty
        <p class="text-center col-span-3 text-gray-500 italic">
          Belum ada data anggota BPD.
        </p>
      @endforelse
    </div>
  </section>
</x-frontend-layout>
