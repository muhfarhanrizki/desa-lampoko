<x-app-layout>
    {{-- Konten utama halaman --}}
    <div class="min-h-screen bg-gray-50 px-6 py-10">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-8 mx-16 px-10">
            <h1 class="text-3xl font-semibold text-gray-800">Informasi Umum Desa</h1>
            <a href="{{ route('informasi.edit') }}"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300 inline-flex items-center gap-2">
                <x-heroicon-o-pencil-square class="w-5 h-5" />
                Edit Informasi
            </a>
        </div>

        {{-- Notifikasi --}}
        @if(session('success'))
            <div class="max-w-4xl mx-auto mb-6 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Informasi --}}
        <div class="max-w-4xl mx-auto mb-20 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th class="px-6 py-4 text-left">Jenis Informasi</th>
                        <th class="px-6 py-4 text-left">Jumlah</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Jumlah Penduduk</td>
                        <td class="px-6 py-4">{{ $informasi->jumlah_penduduk }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Jumlah Keluarga</td>
                        <td class="px-6 py-4">{{ $informasi->jumlah_keluarga }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Jumlah Laki-laki</td>
                        <td class="px-6 py-4">{{ $informasi->jumlah_laki_laki }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900">Jumlah Perempuan</td>
                        <td class="px-6 py-4">{{ $informasi->jumlah_perempuan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Bottom bar --}}
    @include('layouts.bottombar')
</x-app-layout>
