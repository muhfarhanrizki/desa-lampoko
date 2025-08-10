<x-frontend-layout>
    <section class="max-w-3xl mx-auto px-4 py-12 pt-36 pb-16">
        <h1 class="text-3xl font-bold text-amber-600 mb-8 text-center">Daftarkan Produk UMKM Kamu</h1>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded shadow text-center">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-800 rounded shadow">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produk.frontend.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf

            <div>
                <label for="nama" class="block font-semibold mb-1">Nama Produk <span class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600" />
            </div>

            <div>
                <label for="penjual" class="block font-semibold mb-1">Nama Penjual <span class="text-red-500">*</span></label>
                <input type="text" id="penjual" name="penjual" value="{{ old('penjual') }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600" />
            </div>

            <div>
                <label for="deskripsi" class="block font-semibold mb-1">Deskripsi Produk</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600">{{ old('deskripsi') }}</textarea>
            </div>

            <div>
                <label for="alamat" class="block font-semibold mb-1">Alamat Penjual</label>
                <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600" />
            </div>

            <div>
                <label for="kontak" class="block font-semibold mb-1">Nomor WA / Kontak</label>
                <input type="text" id="kontak" name="kontak" value="{{ old('kontak') }}"
                    placeholder="Contoh: 08123456789 atau +628123456789"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600" />
            </div>

            <div>
                <label for="harga" class="block font-semibold mb-1">Harga (Rp)</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga') }}" min="0"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-amber-600 focus:ring-1 focus:ring-amber-600" />
            </div>

            <div>
                <label for="gambar" class="block font-semibold mb-1">Foto Produk</label>
                <input type="file" id="gambar" name="gambar" accept="image/*"
                    class="w-full" />
            </div>

            <button type="submit" 
                class="w-full bg-amber-600 text-white py-3 rounded font-semibold hover:bg-amber-700 transition">
                Daftarkan Produk
            </button>
        </form>
    </section>
</x-frontend-layout>
