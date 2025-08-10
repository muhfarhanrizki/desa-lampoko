<x-app-layout>
    {{-- Konten utama halaman --}}
    <div class="min-h-screen bg-gray-50 px-6 py-10">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-8 mx-16 px-10">
            <h1 class="text-3xl font-semibold text-gray-800">Edit Informasi Umum Desa</h1>
            <a href="{{ route('informasi.index') }}"
                class="text-blue-600 hover:underline font-medium flex items-center gap-1">
                <x-heroicon-o-arrow-left class="w-5 h-5" />
                Kembali
            </a>
        </div>

        {{-- Validasi Error --}}
        @if ($errors->any())
            <div class="max-w-4xl mx-auto mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Edit --}}
        <form action="{{ route('informasi.update') }}" method="POST"
              class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg shadow-md px-8 py-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="jumlah_penduduk" class="block font-medium text-gray-700 mb-1">Jumlah Penduduk</label>
                <input type="number" name="jumlah_penduduk" id="jumlah_penduduk"
                       value="{{ old('jumlah_penduduk', $informasi->jumlah_penduduk) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-200" required />
            </div>

            <div>
                <label for="jumlah_keluarga" class="block font-medium text-gray-700 mb-1">Jumlah Keluarga</label>
                <input type="number" name="jumlah_keluarga" id="jumlah_keluarga"
                       value="{{ old('jumlah_keluarga', $informasi->jumlah_keluarga) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-200" required />
            </div>

            <div>
                <label for="jumlah_laki_laki" class="block font-medium text-gray-700 mb-1">Jumlah Laki-laki</label>
                <input type="number" name="jumlah_laki_laki" id="jumlah_laki_laki"
                       value="{{ old('jumlah_laki_laki', $informasi->jumlah_laki_laki) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-200" required />
            </div>

            <div>
                <label for="jumlah_perempuan" class="block font-medium text-gray-700 mb-1">Jumlah Perempuan</label>
                <input type="number" name="jumlah_perempuan" id="jumlah_perempuan"
                       value="{{ old('jumlah_perempuan', $informasi->jumlah_perempuan) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-200" required />
            </div>

            <div>
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg shadow transition w-full">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
