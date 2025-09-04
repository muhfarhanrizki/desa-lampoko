<x-app-layout>
    <div class="p-6 max-w-4xl mx-auto">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Detail Pengaduan</h2>
        </div>

        <!-- Card Detail -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 space-y-5">
                <!-- Info dasar -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Nama:</span>
                        <span class="text-gray-900">{{ $pengaduan->nama_lengkap }}</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Email:</span>
                        <span class="text-gray-900">{{ $pengaduan->email }}</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Telepon:</span>
                        <span class="text-gray-900">{{ $pengaduan->telepon }}</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Kategori:</span>
                        <span class="text-gray-900">{{ ucfirst($pengaduan->kategori) }}</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Alamat:</span>
                        <span class="text-gray-900">{{ $pengaduan->alamat }}</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Judul:</span>
                        <span class="text-gray-900">{{ $pengaduan->judul }}</span>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="bg-gray-50 p-4 rounded">
                    <span class="font-semibold text-gray-700">Deskripsi:</span>
                    <p class="text-gray-900 mt-2">{{ $pengaduan->deskripsi }}</p>
                </div>

                <div class="p-4">
                <a href="{{ route('pengaduan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded shadow mt-18">
                Kembali
                </a>
                </div>
                <!-- Gambar -->
                @if ($pengaduan->gambar)
                    <div>
                        <span class="font-semibold text-gray-700">Gambar:</span>
                        <img src="{{ asset($pengaduan->gambar) }}" alt="Gambar Pengaduan" class="mt-2 w-full rounded-lg shadow-md object-cover max-h-96">
                    </div>
                @endif

            </div> 
        </div>
    </div>
</x-app-layout>
