<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
        <!-- Header -->
        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-map-pin class="w-12 h-12 text-emerald-600 animate-bounce" />
                Peta Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Temukan posisi strategis Desa Lampoko di peta dengan mudah dan lengkap.
            </p>
        </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <!-- Peta -->
    <div>
      <div class="rounded-3xl overflow-hidden shadow-lg hover:shadow-xl border border-emerald-200 h-96 md:h-[28rem] ">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31828.812427095065!2d119.61586780129913!3d-4.297310327908482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d958f0f3bc4d1ad%3A0x9da3874d14a130b8!2sLampoko%2C%20Kec.%20Balusu%2C%20Kabupaten%20Barru%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1754662465696!5m2!1sid!2sid"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="rounded-3xl"
        ></iframe>
      </div>

      <!-- Info zoom control -->
      <p class="mt-3 text-sm text-gray-500 italic select-none text-center">
        Gunakan <kbd class="border border-gray-300 rounded px-1 text-xs bg-gray-100">Ctrl</kbd> + Scroll untuk memperbesar / memperkecil peta
      </p>
    </div>

        <!-- Info Lokasi -->
        <div class="from-green-50 via-white to-blue-50 rounded-xl shadow-md hover:shadow-xl p-6 border border-gray-200 ">
        <h3 class="text-2xl font-semibold text-gray-800">Informasi Lokasi</h3>
        <p class="text-gray-700 text-sm max-w-md mb-6">
        Detail lengkap tentang lokasi dan jam operasional kantor desa.
        </p>

        <div class="flex items-center gap-4 mb-3">
            <div class="p-3 bg-white rounded-lg text-emerald-700">
            <x-heroicon-o-building-office class="w-7 h-7" />
            </div>
            <div>
            <h4 class="font-semibold text-gray-900">Alamat Lengkap</h4>
            <p class="text-gray-700 text-sm max-w-md">
                Desa Lampoko, Kecamatan Balusu, Kabupaten Barru, Sulawesi Selatan, Indonesia
            </p>
            </div>
        </div>

        <div class="flex items-center gap-4 mb-3">
            <div class="p-3 bg-white rounded-lg text-emerald700">
            <x-heroicon-o-map-pin class="w-7 h-7" />
            </div>
            <div>
            <h4 class="font-semibold text-gray-900">Koordinat GPS</h4>
            <p class="text-gray-700 text-sm font-mono">
                Lat: -4.297310 | Long: 119.615867
            </p>
            </div>
        </div>

        <div class="flex items-center gap-4 mb-8">
            <div class="p-3 bg-white rounded-lg text-emerald-700">
            <x-heroicon-o-clock class="w-7 h-7" />
            </div>
            <div>
            <h4 class="font-semibold text-gray-900">Jam Kerja Kantor Desa</h4>
            <p class="text-gray-700 text-sm">
                Senin - Jumat: <span class="font-medium">08.00 - 16.00 WITA</span><br />
                Sabtu & Minggu: <span class="font-medium">Libur</span>
            </p>
            </div>
        </div>
            <div class="mt-6 flex justify-center gap-4 mb-3">
            <a
                href="https://www.google.com/maps/dir/?api=1&destination=Kantor+Desa+Lampoko,+Balusu,+Barru,+Sulawesi+Selatan&travelmode=driving"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-2xl shadow-lg transition-transform transform hover:scale-105 font-semibold tracking-wide"
            >
                <x-heroicon-o-paper-airplane class="w-5 h-5" />
                Navigasi ke Desa
            </a>

            <a
                href="https://www.google.com/maps/place/Kantor+Desa+Lampoko,+Balusu,+Barru,+Sulawesi+Selatan"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 px-6 py-3 bg-white border-2 border-emerald-600 text-emerald-600 rounded-2xl shadow hover:bg-green-50 transition-transform transform hover:scale-105 font-semibold tracking-wide"
            >
                <x-heroicon-o-map class="w-5 h-5" />
                Lihat di Google Maps
            </a>
        </div>
      </div>
  </div>

        <section class="bg-white px-4">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Judul -->
                <h2 class="text-2xl font-bold text-gray-800 mt-14 mb-8">Batas Wilayah</h2>

                <!-- Grid Kartu -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6 px-2 md:px-0">
                    
                    <!-- Utara -->
                    <div class="flex flex-col items-center bg-white/70 p-5 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] backdrop-blur transition duration-300">
                        <div class="p-3 bg-emerald-100 rounded-full shadow mb-3">
                            <x-heroicon-o-map class="w-6 h-6 text-emerald-600" />
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800">Dusun</h4>
                        <p class="text-sm text-gray-500">Pallae</p>
                    </div>

                    <!-- Timur -->
                    <div class="flex flex-col items-center bg-white/70 p-5 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] backdrop-blur transition duration-300">
                        <div class="p-3 bg-emerald-100 rounded-full shadow mb-3">
                            <x-heroicon-o-map class="w-6 h-6 text-emerald-600" />
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800">Dusun</h4>
                        <p class="text-sm text-gray-500">Bulu Lampoko</p>
                    </div>

                    <!-- Selatan -->
                    <div class="flex flex-col items-center bg-white/70 p-5 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] backdrop-blur transition duration-300">
                        <div class="p-3 bg-emerald-100 rounded-full shadow mb-3">
                            <x-heroicon-o-map class="w-6 h-6 text-emerald-600" />
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800">Dusun</h4>
                        <p class="text-sm text-gray-500">Labungnge</p>
                    </div>

                    <!-- Barat -->
                    <div class="flex flex-col items-center bg-white/70 p-5 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] backdrop-blur transition duration-300">
                        <div class="p-3 bg-emerald-100 rounded-full shadow mb-3">
                            <x-heroicon-o-map class="w-6 h-6 text-emerald-600" />
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800">Dusun</h4>
                        <p class="text-sm text-gray-500">Bawasalo</p>
                    </div>

                    <!-- Tengah -->
                    <div class="flex flex-col items-center bg-white/70 p-5 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] backdrop-blur transition duration-300">
                        <div class="p-3 bg-emerald-100 rounded-full shadow mb-3">
                            <x-heroicon-o-map class="w-6 h-6 text-emerald-600" />
                        </div>
                        <h4 class="text-lg font-semibold text-gray-800">Dusun</h4>
                        <p class="text-sm text-gray-500">Lampoko</p>
                    </div>

                </div>
            </div>
        </section>

    </section>
</x-frontend-layout>
