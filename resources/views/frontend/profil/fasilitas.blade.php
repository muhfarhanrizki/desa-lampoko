<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16 text-gray-800">

    <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl px-6 md:px-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
        <x-heroicon-o-building-office class="w-12 h-12 text-emerald-600 animate-bounce" />
        Fasilitas Umum Desa Lampoko
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Informasi fasilitas umum di Desa Lampoko.
      </p>
    </div>

    {{-- Fasilitas Ibadah --}}
    <div class="mb-14">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 border-b border-emerald-300 pb-2">Fasilitas Ibadah</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-sparkles class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Mesjid</h3>
            <p class="text-gray-700 text-lg font-medium">5 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-sparkles class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Mushallah</h3>
            <p class="text-gray-700 text-lg font-medium">2 unit</p>
          </div>
        </div>

      </div>
    </div>

    {{-- Fasilitas Olahraga --}}
    <div class="mb-14">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 border-b border-emerald-300 pb-2">Fasilitas Olahraga</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-flag class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Lapangan Sepak Bola</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-flag class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Lapangan Bulutangkis</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-flag class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Lapangan Volli</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

      </div>
    </div>

    {{-- Fasilitas Kesehatan --}}
    <div class="mb-14">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 border-b border-emerald-300 pb-2">Fasilitas Kesehatan</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-building-office class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Posyandu</h3>
            <p class="text-gray-700 text-lg font-medium">4 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-building-office class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Pustu</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-building-office class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">Poskesdes</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

      </div>
    </div>

    {{-- Fasilitas Pendidikan --}}
    <div class="mb-14">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 border-b border-emerald-300 pb-2">Fasilitas Pendidikan</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">PAUD</h3>
            <p class="text-gray-700 text-lg font-medium">2 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">TK</h3>
            <p class="text-gray-700 text-lg font-medium">2 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">SD</h3>
            <p class="text-gray-700 text-lg font-medium">4 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">SMP</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">SMK</h3>
            <p class="text-gray-700 text-lg font-medium">1 unit</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition flex items-center gap-5">
          <x-heroicon-o-book-open class="w-10 h-10 text-emerald-600 flex-shrink-0" />
          <div>
            <h3 class="text-lg font-semibold text-emerald-700 mb-1">PERPUSTAKAAN</h3>
            <p class="text-gray-700 text-lg font-medium">4 unit</p>
          </div>
        </div>

      </div>
    </div>

  </section>
</x-frontend-layout>
