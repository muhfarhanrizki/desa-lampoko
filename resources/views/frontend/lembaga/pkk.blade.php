<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
    <div class="text-center mb-12 bg-pink-50 py-14 px-4 rounded-xl">
      <h1 class="text-4xl md:text-5xl font-extrabold text-pink-600 flex items-center justify-center gap-3">
        <x-heroicon-o-users class="w-12 h-12 text-pink-500 animate-pulse" />
        Pembinaan Kesejahteraan Keluarga
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Struktur organisasi PKK Desa Lampoko beserta anggota tiap pokja.
      </p>

      {{-- Penjelasan PKK --}}
      <div class="mt-8 text-left max-w-4xl mx-auto text-gray-700">
        <h2 class="text-2xl font-semibold text-pink-600 mb-4 text-center">Tentang</h2>
        <p class="mb-4 leading-relaxed">
          Pembinaan Kesejahteraan Keluarga (PKK) adalah gerakan masyarakat yang berfungsi sebagai mitra pemerintah
          dalam pembangunan nasional, khususnya di bidang keluarga dan kesejahteraan. PKK berperan aktif dalam
          pemberdayaan keluarga melalui berbagai kegiatan sosial, edukasi, dan pembinaan.
        </p>
        <h3 class="text-xl font-semibold text-pink-500 mb-2">Tugas dan Fungsi</h3>
        <ul class="list-disc list-inside space-y-2">
          <li>Meningkatkan kualitas hidup keluarga dan masyarakat melalui pembinaan di bidang kesehatan, pendidikan, dan ekonomi.</li>
          <li>Menggerakkan peran serta keluarga dalam pembangunan masyarakat.</li>
          <li>Melaksanakan kegiatan pemberdayaan masyarakat yang berfokus pada kesejahteraan keluarga.</li>
          <li>Menjalin komunikasi dan koordinasi dengan berbagai pihak terkait untuk mendukung program PKK.</li>
          <li>Melakukan pembinaan dan pengawasan terhadap pelaksanaan program kerja PKK di tingkat desa dan dusun.</li>
        </ul>
      </div>
    </div>

    {{-- Pimpinan PKK --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Pimpinan</h2>
      <div class="flex flex-wrap justify-center gap-8">
        {{-- Ketua --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua PKK" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">LINSIFAR, S.Kep., Ns</h3>
          <p class="text-pink-600 italic">Ketua</p>
        </div>
        {{-- Wakil Ketua --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua PKK" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">NASRIAH </h3>
          <p class="text-pink-600 italic">Wakil Ketua</p>
        </div>
        {{-- Sekretaris --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris PKK" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">FITRIANA, Amd., Keb</h3>
          <p class="text-pink-600 italic">Sekretaris</p>
        </div>
        {{-- Bendahara --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Bendahara PKK" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">SRI RAHAYU</h3>
          <p class="text-pink-600 italic">Bendahara</p>
        </div>
      </div>
    </div>

    {{-- Pokja 1 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Pokja I</h2>
      <div class="flex flex-wrap justify-center gap-8 mb-6">
        {{-- Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Pokja I" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">A. NURJAMIL, S.Ag</h3>
          <p class="text-pink-600 italic">Ketua</p>
        </div>
        {{-- Wakil Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua Pokja I" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">HASMAWATI</h3>
          <p class="text-pink-600 italic">Wakil Ketua</p>
        </div>
        {{-- Sekretaris Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris Pokja I" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MARLINA, S1.Pust</h3>
          <p class="text-pink-600 italic">Sekretaris</p>
        </div>
      </div>

      {{-- 5 Anggota Pokja --}}
      <div class="flex flex-wrap justify-center gap-6">
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 1 Pokja I" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">MARHAWA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 2 Pokja I" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">BABRIANI </h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 3 Pokja I" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">ROSNAWATI</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 4 Pokja I" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">NURLIAH. A</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 5 Pokja I" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">NURLIAN</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
      </div>
    </div>

    {{-- Pokja 2 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Pokja 2</h2>
      <div class="flex flex-wrap justify-center gap-8 mb-6">
        {{-- Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Pokja 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">SYAMSURIANA, SH</h3>
          <p class="text-pink-600 italic">Ketua</p>
        </div>
        {{-- Wakil Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua Pokja 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">ARMYANTI HARMAYANI, S.Pd</h3>
          <p class="text-pink-600 italic">Wakil Ketua</p>
        </div>
        {{-- Sekretaris Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris Pokja 2" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">DARMAWATI</h3>
          <p class="text-pink-600 italic">Sekretaris</p>
        </div>
      </div>

      {{-- 5 Anggota Pokja --}}
      <div class="flex flex-wrap justify-center gap-6">
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 1 Pokja 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">SULFITRIANA, Amd, Pust</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 2 Pokja 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">HJ. SARMILA KUSUMA DEWI, S.Pd</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 3 Pokja 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">NURWINA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 4 Pokja 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">MUTMAINNAH</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 5 Pokja 2" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">GUSTIANI</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
      </div>
    </div>

    {{-- Pokja 3 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Pokja 3</h2>
      <div class="flex flex-wrap justify-center gap-8 mb-6">
        {{-- Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Pokja 3" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">MUSLIMAH A. MADU</h3>
          <p class="text-pink-600 italic">Ketua</p>
        </div>
        {{-- Wakil Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua Pokja 3" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">RAMLAWATI</h3>
          <p class="text-pink-600 italic">Wakil Ketua</p>
        </div>
        {{-- Sekretaris Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris Pokja 3" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">FITRIANA</h3>
          <p class="text-pink-600 italic">Sekretaris</p>
        </div>
      </div>

      {{-- 5 Anggota Pokja --}}
      <div class="flex flex-wrap justify-center gap-6">
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 1 Pokja 3" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">DARMIATI</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 2 Pokja 3" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">ITA YUSNITA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 3 Pokja 3" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">KADARIA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 4 Pokja 3" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">HARTATI</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 5 Pokja 3" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">RISKAYANA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
      </div>
    </div>

    {{-- Pokja 4 --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">Pokja 4</h2>
      <div class="flex flex-wrap justify-center gap-8 mb-6">
        {{-- Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua Pokja 4" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">WAHYUNI, S.,Tr.,Keb. Bdng</h3>
          <p class="text-pink-600 italic">Ketua</p>
        </div>
        {{-- Wakil Ketua Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Wakil Ketua Pokja 4" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">NURTANG</h3>
          <p class="text-pink-600 italic">Wakil Ketua</p>
        </div>
        {{-- Sekretaris Pokja --}}
        <div class="bg-white rounded-lg shadow-md p-5 w-60 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris Pokja 4" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">RATNA</h3>
          <p class="text-pink-600 italic">Sekretaris</p>
        </div>
      </div>

      {{-- 5 Anggota Pokja --}}
      <div class="flex flex-wrap justify-center gap-6">
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 1 Pokja 4" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">IDA FARIDA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 2 Pokja 4" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">FATMAWATI</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 3 Pokja 4" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">NURJANNAH</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 4 Pokja 4" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">NIRWANA</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-44 text-center border border-gray-200 hover:border-pink-500 transition duration-300 hover:shadow-lg">
          <img src="{{ asset('images/no-image.png') }}" alt="Anggota 5 Pokja 4" class="w-24 h-24 mx-auto rounded-full object-cover mb-3 shadow-inner" />
          <h3 class="font-semibold text-md">HARTANG</h3>
          <p class="text-pink-600 italic text-sm">Anggota</p>
        </div>
      </div>
    </div>
  </section>
</x-frontend-layout>
