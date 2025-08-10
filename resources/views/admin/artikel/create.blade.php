<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Artikel Baru
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-4xl mx-auto">
        <a href="{{ route('artikel.index') }}" 
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1 stroke-current" />
            Kembali ke Daftar Artikel
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

        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf

            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <div>
                <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <div>
                <label for="isi" class="block text-sm font-medium text-gray-700 mb-1">Isi Artikel</label>
                <textarea name="isi" id="isi" rows="6" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none">{{ old('isi') }}</textarea>
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

            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-md shadow-md transition">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
