<x-frontend-layout>
    <section class="max-w-3xl mx-auto px-4 py-12 pt-36 pb-16">
        <h1 class="text-3xl font-bold text-amber-600 mb-8 text-center">Daftarkan Produk UMKM Kamu</h1>

        <!-- Tombol Kembali -->
        <div>
            <button onclick="history.back()" 
                class="mb-5 inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition text-sm">
                <x-heroicon-o-arrow-left class="w-3 h-3 mr-2" />
                Kembali
            </button>
        </div>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-800 rounded-lg shadow-sm text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Notifikasi Error -->
        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-800 rounded-lg shadow-sm">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('produk.frontend.store') }}" method="POST" enctype="multipart/form-data" 
              class="bg-white p-8 rounded-xl shadow-lg space-y-6 border border-gray-100">
            @csrf

            <!-- Nama Produk -->
            <div>
                <label for="nama" class="block font-semibold mb-1">Nama Produk <span class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" />
            </div>

            <!-- Nama Penjual -->
            <div>
                <label for="penjual" class="block font-semibold mb-1">Nama Penjual <span class="text-red-500">*</span></label>
                <input type="text" id="penjual" name="penjual" value="{{ old('penjual') }}" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" />
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="deskripsi" class="block font-semibold mb-1">Deskripsi Produk</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500">{{ old('deskripsi') }}</textarea>
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block font-semibold mb-1">Alamat Penjual</label>
                <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" />
            </div>

            <!-- Kontak -->
            <div>
                <label for="kontak" class="block font-semibold mb-1">Nomor WA / Kontak</label>
                <input type="text" id="kontak" name="kontak" value="{{ old('kontak') }}"
                    placeholder="Contoh: 08123456789 atau +628123456789"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" />
            </div>

            <!-- Harga -->
            <div>
                <label for="harga" class="block font-semibold mb-1">Harga (Rp)</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga') }}" min="0"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-amber-500" />
            </div>

            <!-- Foto Produk -->
            <div>
                <label for="gambar" class="block font-semibold mb-1">Foto Produk</label>
                <input type="file" id="gambar" name="gambar" accept="image/*"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0 file:text-sm file:font-semibold
                           file:bg-amber-50 file:text-amber-600
                           hover:file:bg-amber-100" />
            </div>

            <!-- Submit -->
            <button type="submit" 
                class="w-full bg-amber-600 text-white py-3 rounded-lg font-semibold hover:bg-amber-700 transition">
                Daftarkan Produk
            </button>
        </form>
    </section>
</x-frontend-layout>
