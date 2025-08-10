<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Galeri: {{ $galeri->judul }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-4xl mx-auto">
        <a href="{{ route('galeri.index') }}"
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1 stroke-current" />
            Kembali ke Daftar Galeri
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

        <form action="{{ route('galeri.update', $galeri->slug) }}" method="POST" enctype="multipart/form-data"
              class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Galeri</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Deskripsi --}}
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                          class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none">{{ old('deskripsi', $galeri->deskripsi) }}</textarea>
            </div>

            {{-- Gambar Saat Ini --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Saat Ini</label>
                @if ($galeri->gambar)
                    <img src="{{ asset('uploads/galeri/' . $galeri->gambar) }}" alt="{{ $galeri->judul }}"
                         class="w-40 h-auto rounded-md shadow-sm border mb-2">
                @else
                    <p class="text-gray-500 text-sm">Tidak ada gambar</p>
                @endif
            </div>

            {{-- Upload Gambar Baru --}}
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Ganti Gambar</label>
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
