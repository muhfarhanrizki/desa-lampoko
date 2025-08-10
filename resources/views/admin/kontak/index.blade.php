<x-app-layout>
    {{-- Konten utama halaman --}}
    <div class="min-h-screen bg-gray-50 px-6 py-10">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-8 mx-16 px-10">
            <h1 class="text-3xl font-semibold text-gray-800">Data Kontak</h1>
            <a href="{{ route('kontak.create') }}"
               class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300 inline-flex items-center gap-2">
                <x-heroicon-o-plus class="w-5 h-5" />
                Tambah Kontak
            </a>
        </div>

        {{-- Notifikasi --}}
        @if(session('success'))
            <div class="max-w-4xl mx-auto mb-6 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel --}}
        <div class="max-w-7xl mx-auto mb-20 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th class="px-6 py-4 text-left">Nama</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-left">Telepon</th>
                        <th class="px-6 py-4 text-left">Alamat</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($kontaks as $kontak)
                        <tr>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $kontak->nama }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $kontak->email }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $kontak->telepon }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $kontak->alamat }}</td>
                            <td class="px-6 py-4 text-center space-x-3 whitespace-nowrap">
                                <a href="{{ route('kontak.edit', $kontak->slug) }}"
                                   class="inline-block px-3 py-1 rounded-md bg-yellow-200 text-yellow-800 font-semibold hover:bg-yellow-300 transition">
                                    Edit
                                </a>
                                <form action="{{ route('kontak.destroy', $kontak->slug) }}"
                                      method="POST"
                                      class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus kontak ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-block px-3 py-1 rounded-md bg-red-200 text-red-800 font-semibold hover:bg-red-300 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500 italic">
                                Belum ada data kontak.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 rounded-b-lg flex justify-end">
                {{ $kontaks->links() }}
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    @include('layouts.bottombar')
</x-app-layout>
