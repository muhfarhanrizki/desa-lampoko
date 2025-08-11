<x-frontend-layout>
  <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16 text-gray-800">

    <div class="text-center mb-12 bg-emerald-50 py-14 px-12 rounded-xl">
      <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
        <x-heroicon-o-users class="w-12 h-12 text-emerald-600 animate-bounce" />
        Lembaga Pemberdayaan Masyarakat
      </h1>
      <p class="mt-4 text-lg md:text-xl text-gray-700">
        Struktur organisasi LPM Desa Lampoko beserta anggota tiap seksi.
      </p>

      {{-- Penjelasan LPM --}}
      <div class="mt-8 text-left text-gray-700 leading-relaxed">
        <h2 class="text-2xl font-semibold text-emerald-700 mb-4 mt-8 text-center">Tentang<h2>
        <p class="mb-4">
          Lembaga Pemberdayaan Masyarakat (LPM) adalah organisasi yang berfungsi sebagai wadah aspirasi masyarakat desa
          dalam pelaksanaan pembangunan dan pemberdayaan masyarakat. LPM berperan dalam meningkatkan partisipasi warga desa
          dan menjembatani komunikasi antara masyarakat dengan pemerintah desa.
        </p>

        <h3 class="text-xl font-semibold text-emerald-600 mb-3">Tugas dan Fungsi</h3>
        <ul class="list-disc list-inside space-y-2">
          <li>Menampung, menyalurkan, dan menindaklanjuti aspirasi masyarakat.</li>
          <li>Mengawal pelaksanaan pembangunan desa agar sesuai dengan kebutuhan masyarakat.</li>
          <li>Mendorong partisipasi aktif masyarakat dalam berbagai program desa.</li>
          <li>Menjalin kerjasama dengan berbagai pihak dalam rangka pemberdayaan masyarakat.</li>
          <li>Mengorganisir kegiatan yang bertujuan meningkatkan kesejahteraan masyarakat desa.</li>
        </ul>
      </div>
    </div>

    {{-- Pimpinan LPM --}}
    <div class="mb-16">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Pimpinan</h2>
      <div class="flex flex-wrap justify-center gap-8">
        {{-- Ketua --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Ketua LPM" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">ASTUTI</h3>
          <p class="text-emerald-600 italic">Ketua</p>
        </div>

        {{-- Sekretaris --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Sekretaris LPM" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">RAHMAWATI</h3>
          <p class="text-emerald-600 italic">Sekretaris</p>
        </div>

        {{-- Bendahara --}}
        <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
          <img src="{{ asset('images/no-image.png') }}" alt="Bendahara LPM" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
          <h3 class="font-semibold text-lg">SARJAN ARSYAD</h3>
          <p class="text-emerald-600 italic">Bendahara</p>
        </div>
      </div>
    </div>

    {{-- Seksi-Seksi LPM --}}
    @php
      $seksis = [
        [
          'judul' => 'Seksi Agama',
          'koordinator' => ['nama' => 'ARHAM MUSTAFA', 'foto' => 'no-image.png'],
          'anggota' => ['nama' => 'JUSMAN, S.Pdi', 'foto' => 'no-image.png'],
        ],
        [
          'judul' => 'Seksi Pendidikan',
          'koordinator' => ['nama' => 'HASRIANI, S.E', 'foto' => 'no-image.png'],
          'anggota' => ['nama' => 'YUSNITA', 'foto' => 'no-image.png'],
        ],
        [
          'judul' => 'Seksi Pembangunan dan Lingkungan Hidup',
          'koordinator' => ['nama' => 'ARMAN', 'foto' => 'no-image.png'],
          'anggota' => ['nama' => 'NURHAYATI', 'foto' => 'no-image.png'],
        ],
        [
          'judul' => 'Seksi Pemberdayaan dan Ekonomi Koperasi',
          'koordinator' => ['nama' => 'A. RAMANSYAH', 'foto' => 'no-image.png'],
          'anggota' => ['nama' => 'ALI ASKAR', 'foto' => 'no-image.png'],
        ],
        [
          'judul' => 'Seksi Kesejahteraan Sosial',
          'koordinator' => ['nama' => 'SAFRI', 'foto' => 'no-image.png'],
          'anggota' => ['nama' => 'AHMAD FADLI', 'foto' => 'no-image.png'],
        ],
      ];
    @endphp

    @foreach ($seksis as $seksi)
      <div class="mb-16">
        <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">{{ $seksi['judul'] }}</h2>
        <div class="flex flex-wrap justify-center gap-8">
          {{-- Koordinator --}}
          <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
            <img src="{{ asset('images/' . $seksi['koordinator']['foto']) }}" alt="Koordinator {{ $seksi['judul'] }}" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
            <h3 class="font-semibold text-lg">{{ $seksi['koordinator']['nama'] }}</h3>
            <p class="text-emerald-600 italic">Koordinator</p>
          </div>
          {{-- Anggota --}}
          <div class="bg-white rounded-xl shadow-lg p-5 w-60 text-center">
            <img src="{{ asset('images/' . $seksi['anggota']['foto']) }}" alt="Anggota {{ $seksi['judul'] }}" class="w-36 h-36 mx-auto rounded-full object-cover mb-4 shadow-inner" />
            <h3 class="font-semibold text-lg">{{ $seksi['anggota']['nama'] }}</h3>
            <p class="text-emerald-600 italic">Anggota</p>
          </div>
        </div>
      </div>
    @endforeach

  </section>
</x-frontend-layout>
