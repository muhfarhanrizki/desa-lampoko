<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Struktur: {{ $struktur->nama }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-4xl mx-auto">
        <a href="{{ route('struktur.index') }}"
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1 stroke-current" />
            Kembali ke Daftar Struktur
        </a>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-md text-sm">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('struktur.update', $struktur->slug) }}" method="POST" enctype="multipart/form-data"
              class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $struktur->nama) }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Jabatan --}}
            <div>
                <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $struktur->jabatan) }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Gambar Saat Ini --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Foto Saat Ini</label>
                @if ($struktur->gambar)
                    <img src="{{ asset('uploads/struktur/' . $struktur->gambar) }}" alt="{{ $struktur->nama }}"
                         class="w-40 h-auto rounded-md shadow-sm border mb-2">
                @else
                    <p class="text-gray-500 text-sm">Tidak ada gambar</p>
                @endif
            </div>

            {{-- Upload Gambar Baru --}}
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Ganti Foto</label>
                <input type="file" name="gambar" id="gambar" accept="image/*"
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                              file:rounded-md file:border-0
                              file:text-sm file:font-semibold
                              file:bg-blue-50 file:text-blue-700
                              hover:file:bg-blue-100 cursor-pointer" />
            </div>

            {{-- Tombol Submit --}}
            <div class="pt-4">
                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-2 rounded-md transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
