<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
    <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl px-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
        <x-heroicon-o-users class="w-12 h-12 text-emerald-600 animate-bounce" />
        Struktur Pemerintahan Desa Lampoko
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Kenalan dengan jajaran struktur pemerintahan Desa Lampoko.
      </p>
    </div>

    {{-- Kepala Desa, Sekretaris & Staff --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Kepala Desa, Sekretaris & Staff</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse ($kepalaSekretarisStaff as $struktur)
          <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center
                      border border-gray-200 hover:border-emerald-500 transition duration-300 cursor-pointer
                      hover:shadow-xl">
            <div class="w-36 h-36 rounded-full overflow-hidden shadow-inner mb-5 ring-4 ring-emerald-100">
              <img src="{{ asset('uploads/struktur/' . $struktur->gambar) }}" alt="{{ $struktur->nama }}" class="w-full h-full object-cover" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 truncate w-full" title="{{ $struktur->nama }}">
              {{ $struktur->nama }}
            </h3>
            <p class="text-emerald-600 mt-2 text-base font-medium italic tracking-wide">
              {{ $struktur->jabatan }}
            </p>
          </div>
        @empty
          <p class="text-center col-span-3 text-gray-500 italic">Belum ada data Kepala Desa, Sekretaris & Staff.</p>
        @endforelse
      </div>
    </div>

    {{-- Kasi-kasi --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Kasi & Kaur</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse ($kasi as $struktur)
          <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center
                      border border-gray-200 hover:border-emerald-500 transition duration-300 cursor-pointer
                      hover:shadow-xl">
            <div class="w-36 h-36 rounded-full overflow-hidden shadow-inner mb-5 ring-4 ring-emerald-100">
              <img src="{{ asset('uploads/struktur/' . $struktur->gambar) }}" alt="{{ $struktur->nama }}" class="w-full h-full object-cover" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 truncate w-full" title="{{ $struktur->nama }}">
              {{ $struktur->nama }}
            </h3>
            <p class="text-emerald-600 mt-2 text-base font-medium italic tracking-wide">
              {{ $struktur->jabatan }}
            </p>
          </div>
        @empty
          <p class="text-center col-span-3 text-gray-500 italic">Belum ada data Kasi & Kaur.</p>
        @endforelse
      </div>
    </div>

    {{-- Kepala-kepala Dusun --}}
    <div>
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Kepala-kepala Dusun</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse ($kepalaDusun as $struktur)
          <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center text-center
                      border border-gray-200 hover:border-emerald-500 transition duration-300 cursor-pointer
                      hover:shadow-xl">
            <div class="w-36 h-36 rounded-full overflow-hidden shadow-inner mb-5 ring-4 ring-emerald-100">
              <img src="{{ asset('uploads/struktur/' . $struktur->gambar) }}" alt="{{ $struktur->nama }}" class="w-full h-full object-cover" />
            </div>
            <h3 class="text-xl font-semibold text-gray-900 truncate w-full" title="{{ $struktur->nama }}">
              {{ $struktur->nama }}
            </h3>
            <p class="text-emerald-600 mt-2 text-base font-medium italic tracking-wide">
              {{ $struktur->jabatan }}
            </p>
          </div>
        @empty
          <p class="text-center col-span-3 text-gray-500 italic">Belum ada data Kepala Dusun.</p>
        @endforelse
      </div>
    </div>
  </section>
</x-frontend-layout>
