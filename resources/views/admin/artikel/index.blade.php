<x-app-layout>
    <div class="min-h-screen bg-gray-50 px-6 py-10">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-8 mx-16 px-10">
            <h1 class="text-3xl font-semibold text-gray-800">Daftar Artikel Desa</h1>
            <a href="{{ route('artikel.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-5 rounded-lg shadow-md transition duration-300">
                + Tambah Artikel
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
                        <th class="px-6 py-4 text-left">Judul</th>
                        <th class="px-6 py-4 text-left">Penulis</th>
                        <th class="px-6 py-4 text-left">Gambar</th>
                        <th class="px-6 py-4 text-left">Isi Artikel</th>
                        <th class="px-6 py-4 text-left">Tanggal</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($artikels as $artikel)
                        <tr>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $artikel->judul }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $artikel->penulis }}</td>
                            <td class="px-6 py-4">
                                @if($artikel->gambar)
                                    <img src="{{ asset('uploads/artikel/' . $artikel->gambar) }}"
                                        alt="{{ $artikel->judul }}"
                                        class="w-24 h-auto rounded-md shadow-sm object-cover" />
                                @else
                                    <span class="text-gray-400 italic">Tidak ada</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-700">
                                {{ \Illuminate\Support\Str::limit(strip_tags($artikel->isi), 60, '...') }}
                            </td>
                            <td class="px-6 py-4 text-gray-500">
                                {{ $artikel->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 text-center space-x-3 whitespace-nowrap">
                                <a href="{{ route('artikel.edit', $artikel->slug) }}"
                                    class="inline-block px-3 py-1 rounded-md bg-yellow-200 text-yellow-800 font-semibold hover:bg-yellow-300 transition">
                                    Edit
                                </a>
                                <form action="{{ route('artikel.destroy', $artikel->slug) }}"
                                      method="POST"
                                      class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
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
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500 italic">
                                Belum ada artikel.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 rounded-b-lg flex justify-end">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>

    @include('layouts.bottombar')
</x-app-layout>
