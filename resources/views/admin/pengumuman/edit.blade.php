<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Pengumuman: {{ $pengumuman->judul }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-3xl mx-auto">
        <a href="{{ route('pengumuman.index') }}"
           class="inline-flex items-center text-blue-600 hover:underline mb-4 font-medium">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1" />
            Kembali ke Daftar Pengumuman
        </a>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pengumuman.update', $pengumuman->slug) }}" method="POST"
      class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div>
                <label for="judul" class="block font-medium text-gray-700 mb-1">Judul Pengumuman</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $pengumuman->judul) }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan judul pengumuman" />
            </div>

            {{-- Isi --}}
            <div>
                <label for="isi" class="block font-medium text-gray-700 mb-1">Isi Pengumuman</label>
                <textarea name="isi" id="isi" rows="6"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                    placeholder="Masukkan isi pengumuman">{{ old('isi', $pengumuman->isi) }}</textarea>
            </div>

            {{-- Tanggal --}}
            <div>
            <label for="tanggal" class="block font-medium text-gray-700 mb-1">Tanggal Pengumuman</label>
            <input type="date" name="tanggal" id="tanggal" 
            value="{{ old('tanggal', \Carbon\Carbon::parse($pengumuman->tanggal)->format('Y-m-d')) }}" required
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />

            </div>

            {{-- Lokasi --}}
            <div>
                <label for="lokasi" class="block font-medium text-gray-700 mb-1">Lokasi Pengumuman</label>
                <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $pengumuman->lokasi) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan lokasi pengumuman (opsional)" />
            </div>

            {{-- Status --}}
            <div>
                <label class="inline-flex items-center space-x-2">
                    <input type="checkbox" name="status" id="status" value="1"
                        {{ old('status', $pengumuman->status) ? 'checked' : '' }}
                        class="form-checkbox h-5 w-5 text-green-600" />
                    <span class="text-gray-700 font-medium">Aktifkan Pengumuman</span>
                </label>
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded shadow-sm w-full">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
