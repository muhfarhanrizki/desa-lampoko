<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
        <!-- Header -->
        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl" data-aos="fade-down">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-sparkles class="w-12 h-12 text-emerald-600 animate-bounce" />
                Potensi Wisata Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Potensi wisata unggulan di Desa Lampoko yang wajib kamu kunjungi: <strong>Pantai Bawasalo</strong>.
            </p>
        </div>

<!-- Foto -->
<div class="mb-8 overflow-hidden rounded-xl shadow-lg hover:scale-105 transition-transform duration-500" data-aos="zoom-in">
    <img src="{{ asset('/images/pantai.jpeg') }}" 
         alt="Pantai Bawasalo" 
         class="w-full h-96 object-cover">
</div>

<!-- Foto Tambahan -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
    <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('/images/pantai1.jpeg') }}" alt="Spot Foto 1" 
             class="w-full h-64 object-center hover:scale-110 transition-transform duration-500">
    </div>
    <div class="overflow-hidden rounded-xl shadow-md hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('/images/pantai3.jpeg') }}" alt="Spot Foto 2" 
             class="w-full h-64 object-cover object-center hover:scale-110 transition-transform duration-500">
    </div>
</div>


        <!-- Informasi Pantai -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-xl transition flex items-start gap-5" data-aos="fade-up">
            <x-heroicon-o-sun class="w-12 h-12 text-emerald-600 flex-shrink-0 animate-pulse" />
            <div>
                <h2 class="text-2xl font-semibold text-emerald-700 mb-3">Pantai Bawasalo</h2>
                <p class="text-gray-700 leading-relaxed">
                    Pantai ini cocok banget buat nikmatin sunset, main santai, piknik bareng keluarga, atau sekadar nonton anak-anak main bola sore-sore yang asik dan penuh keceriaan.
                </p>

                <!-- Detail -->
                <ul class="mt-4 space-y-2 text-gray-700">
                    <li>🕒 Jam Operasional: <span class="italic text-gray-500">Belum ditentukan</span></li>
                    <li>💰 Tiket Masuk: <span class="italic text-gray-500">Gratis</span></li>
                    <li>🏝️ Fasilitas: <span class="italic text-gray-500">Belum tersedia secara resmi</span></li>
                    <li>🎯 Aktivitas: Berenang, memancing, fotografi, dan jelajah pantai</li>
                </ul>

                <!-- Tombol -->
                <a href="https://maps.app.goo.gl/KRg5tcMReqNcuDjY6" target="_blank"
                   class="mt-6 inline-block bg-emerald-600 text-white px-5 py-3 rounded-lg hover:bg-emerald-700 transition transform hover:scale-105">
                    📍 Lihat Lokasi di Maps
                </a>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="mt-10 rounded-lg overflow-hidden shadow-lg" data-aos="fade-up">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2192.261979999547!2d119.62484431743661!3d-4.293645446013024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d958f0f3bc4d1ad%3A0x9da3874d14a130b8!2sLampoko%2C%20Kec.%20Balusu%2C%20Kabupaten%20Barru%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1754904331452!5m2!1sid!2sid"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Testimoni -->
        <div class="mt-14">
  <h3 class="text-2xl font-bold text-emerald-700 mb-6 flex items-center gap-2" data-aos="fade-right">
    <x-heroicon-o-chat-bubble-left-ellipsis class="w-7 h-7 text-emerald-600" />
    Apa Kata Pengunjung?
  </h3>

  <div class="grid md:grid-cols-3 gap-6">
    <!-- Komentar 1 -->
    <div class="bg-emerald-50 p-6 rounded-lg shadow-md hover:shadow-xl transition flex flex-col" data-aos="fade-up" data-aos-delay="100">
      <p class="italic text-gray-700 flex-grow">
        "Tempatnya asik buat santai sore, anak-anak pada main bola rame banget."
      </p>
      <p class="text-sm text-gray-500 mt-auto text-left">— Fariz, Makassar</p>
    </div>

    <!-- Komentar 2 -->
    <div class="bg-emerald-50 p-6 rounded-lg shadow-md hover:shadow-xl transition flex flex-col" data-aos="fade-up" data-aos-delay="200">
      <p class="italic text-gray-700 flex-grow">
        "Keren sunsetnya!"
      </p>
      <p class="text-sm text-gray-500 mt-auto text-left">— Gerry, Makassar</p>
    </div>

    <!-- Komentar 3 -->
    <div class="bg-emerald-50 p-6 rounded-lg shadow-md hover:shadow-xl transition flex flex-col" data-aos="fade-up" data-aos-delay="300">
      <p class="italic text-gray-700 flex-grow">
        "Pantai Bawasalo memang sederhana, tapi bagi kami warga desa ini, tempat ini jadi ruang terbuka buat berkumpul dan melepas penat. Anak-anak sering main bola sore-sore, remaja datang buat piknik santai, dan banyak juga yang menikmati sunset di sini sambil ngobrol santai."
      </p>
      <p class="text-sm text-gray-500  mt-auto text-left">— Warga Sekitar</p>
    </div>
  </div>
</div>

    </section>
</x-frontend-layout>
