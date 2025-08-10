<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Struktur Baru
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-2xl mx-auto">
        <a href="{{ route('struktur.index') }}" 
           class="inline-flex items-center text-blue-600 hover:underline mb-4 font-medium">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1" />
            Kembali ke Daftar Struktur
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

        <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama" />
            </div>

            <div>
                <label for="jabatan" class="block font-medium text-gray-700 mb-1">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan jabatan" />
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Upload Foto</label>
                <input type="file" name="gambar" id="gambar" accept="image/*"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                           file:rounded-md file:border-0
                           file:text-sm file:font-semibold
                           file:bg-blue-50 file:text-blue-700
                           hover:file:bg-blue-100 cursor-pointer" />
            </div>

            <div>
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-sm w-full">
                    Simpan Struktur
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
