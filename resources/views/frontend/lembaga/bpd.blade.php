<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16 text-gray-800">

<div class="text-center mb-12 bg-emerald-50 py-14 px-12 rounded-xl">
  <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
    <x-heroicon-o-users class="w-12 h-12 text-emerald-600 animate-bounce" />
    Badan Permusyawaratan Desa
  </h1>
  <p class="mt-4 text-lg md:text-xl text-gray-700">
    Berikut struktur organisasi BPD Desa Lampoko beserta anggota tiap bidang.
  </p>

  {{-- Penjelasan BPD --}}
  <div class="mt-8 text-left text-gray-700 leading-relaxed">
    <h2 class="text-2xl font-semibold text-emerald-700 mb-4 mt-8 text-center">Tentang</h2>
    <p class="mb-4">
      Badan Permusyawaratan Desa (BPD) merupakan lembaga yang mewakili masyarakat desa dalam mengawasi pelaksanaan pemerintahan desa
      serta memberikan masukan kepada kepala desa untuk kemajuan dan kesejahteraan warga Desa Lampoko.
    </p>

    <h3 class="text-xl font-semibold text-emerald-600 mb-3">Fungsi</h3>
    <ul class="list-disc list-inside space-y-2">
      <li>Membawa dan menyepakati rancangan Peraturan Desa bersama Kepala Desa;</li>
      <li>Menampung dan menyalurkan aspirasi masyarakat Desa;</li>
      <li>Melakukan pengawasan kinerja Kepala Desa.</li>
    </ul>

    <h3 class="text-xl font-semibold text-emerald-600 mt-6 mb-3">Tugas</h3>
    <ul class="list-disc list-inside space-y-2">
      <li>Menggali aspirasi masyarakat;</li>
      <li>Menampung aspirasi masyarakat;</li>
      <li>Mengelola aspirasi masyarakat;</li>
      <li>Menyalurkan aspirasi masyarakat;</li>
      <li>Menyelenggarakan musyawarah BPD;</li>
      <li>Menyelenggarakan musyawarah Desa;</li>
      <li>Membentuk panitia pemilihan Kepala Desa;</li>
      <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antar waktu;</li>
      <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa;</li>
      <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa;</li>
      <li>Melakukan evaluasi Laporan keterangan penyelenggaraan pemerintahan Desa;</li>
      <li>Menciptakan hubungan kerja yang harmonis dengan pemerintah Desa dan Lembaga Desa lainnya;</li>
      <li>Melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan.</li>
    </ul>
  </div>
</div>

    {{-- Paling Atas --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Pimpinan</h2>
      <div class="flex flex-wrap justify-center gap-8">
        {{-- Ketua --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua BPD" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">BAHARUDDIN</h3>
          <p class="text-emerald-600 italic">Ketua BPD</p>
        </div>

        {{-- Wakil Ketua --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua BPD" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">H. ABD MUIN</h3>
          <p class="text-emerald-600 italic">Wakil Ketua BPD</p>
        </div>

        {{-- Sekretaris --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris BPD" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">RATNA</h3>
          <p class="text-emerald-600 italic">Sekretaris BPD</p>
        </div>
      </div>
    </div>

    {{-- Bidang 1 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">
        Bidang Penyelenggaraan Pemerintahan Desa dan Pembinaan Kemasyarakatan
      </h2>
      <div class="flex flex-wrap justify-center gap-8">
        {{-- Ketua Bidang 1 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Bidang 1" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MUH. TASRIK ARIS</h3>
          <p class="text-emerald-600 italic">Ketua</p>
        </div>

        {{-- Anggota 1 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota Bidang 1" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MASKUR</h3>
          <p class="text-emerald-600 italic">Anggota</p>
        </div>

        {{-- Anggota 2 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota Bidang 1" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">RISKAYANA</h3>
          <p class="text-emerald-600 italic">Anggota</p>
        </div>
      </div>
    </div>

    {{-- Bidang 2 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">
        Bidang Pembangunan Desa dan Pemberdayaan Masyarakat Desa
      </h2>
      <div class="flex flex-wrap justify-center gap-8">
        {{-- Ketua Bidang 2 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Bidang 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">H. ABD MUTTALIB</h3>
          <p class="text-emerald-600 italic">Ketua</p>
        </div>

        {{-- Anggota 1 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota Bidang 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MUSLIMA A MADU</h3>
          <p class="text-emerald-600 italic">Anggota</p>
        </div>

        {{-- Anggota 2 --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota Bidang 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MUZAKKIR</h3>
          <p class="text-emerald-600 italic">Anggota</p>
        </div>
      </div>
    </div>

  </section>
</x-frontend-layout>
