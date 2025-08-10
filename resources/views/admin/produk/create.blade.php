<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Produk Baru
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-4xl mx-auto">
        <a href="{{ route('produk.index') }}"
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1 stroke-current" />
            Kembali ke Daftar Produk
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

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data"
              class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf

            {{-- Nama Produk --}}
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Deskripsi --}}
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                          class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none resize-none">{{ old('deskripsi') }}</textarea>
            </div>

            {{-- Upload Gambar --}}
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
                <input type="file" name="gambar" id="gambar" accept="image/*"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100 cursor-pointer" />
            </div>

            {{-- Alamat --}}
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Kontak --}}
            <div>
                <label for="kontak" class="block text-sm font-medium text-gray-700 mb-1">Kontak</label>
                <input type="text" name="kontak" id="kontak" value="{{ old('kontak') }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            <div>
                <label for="penjual" class="block text-sm font-medium text-gray-700 mb-1">Nama Penjual</label>
                <input type="text" name="penjual" id="penjual" value="{{ old('penjual') }}" required
                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
            </div>

            {{-- Harga --}}
            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga Produk</label>
                <input type="text" name="harga" id="harga" value="{{ old('harga') }}"
                    required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Contoh: 50000 (tanpa titik/koma)" />
                <p class="text-sm text-gray-500 mt-1">Masukkan angka tanpa titik/koma. Contoh: 50000 untuk Rp50.000</p>
            </div>

            {{-- Tombol Submit --}}
            <div class="pt-4">
                <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-md transition">
                    Tambah Produk
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
