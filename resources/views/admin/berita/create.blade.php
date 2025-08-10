<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Berita Baru
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-3xl mx-auto">
        <a href="{{ route('berita.index') }}" 
           class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6 font-medium transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-2 stroke-2" />
            Kembali ke Daftar Berita
        </a>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-300 text-red-700 rounded-md">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf

            <div>
                <label for="judul" class="block mb-2 font-semibold text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required
                    class="w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" 
                    placeholder="Masukkan judul berita" />
            </div>

            <div>
                <label for="isi" class="block mb-2 font-semibold text-gray-700">Isi Berita</label>
                <textarea name="isi" id="isi" rows="8" required
                    class="w-full rounded-md border border-gray-300 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                    placeholder="Tulis isi berita di sini...">{{ old('isi') }}</textarea>
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Upload Gambar</label>
                <input type="file" name="gambar" id="gambar" accept="image/*"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100 cursor-pointer" />
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-md shadow-md transition">
                    Simpan Berita
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
