<x-app-layout>
    <div class="min-h-screen bg-gray-50 px-6 py-10">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold text-gray-800">Data Pengaduan</h1>
        </div>

        {{-- Notifikasi --}}
        @if(session('success'))
            <div class="max-w-7xl mx-auto mb-6 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel --}}
        <div class="max-w-7xl mx-auto mb-20 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">Kategori</th>
                        <th class="px-6 py-3 text-left">Judul</th>
                        <th class="px-6 py-3 text-left">Gambar</th>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($pengaduans as $pengaduan)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $pengaduan->nama_lengkap }}</td>
                            <td class="px-6 py-4 text-gray-700 capitalize">{{ $pengaduan->kategori }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $pengaduan->judul }}</td>

                            {{-- Gambar --}}
                            <td class="px-6 py-4">
                                @if($pengaduan->gambar)
                                    <img src="{{ asset($pengaduan->gambar) }}" alt="Gambar" 
                                         class="h-12 w-12 rounded object-cover border">
                                @else
                                    <span class="text-gray-400 italic">Tidak ada</span>
                                @endif
                            </td>

                            <td class="px-6 py-4 text-gray-700">
                                {{ \Carbon\Carbon::parse($pengaduan->created_at)->translatedFormat('l, d F Y') }}
                            </td>

                            {{-- Status --}}
                            <td class="px-6 py-4">
                                <form action="{{ route('pengaduan.updateStatus', $pengaduan->slug) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()"
                                        class="w-28 text-sm font-medium rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400
                                               {{ $pengaduan->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                                                  ($pengaduan->status == 'diproses' ? 'bg-blue-100 text-blue-800' : 'bg-red-100 text-red-800') }}">
                                        <option value="pending" {{ $pengaduan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="diproses" {{ $pengaduan->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                        <option value="ditolak" {{ $pengaduan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </form>
                            </td>

                            {{-- Aksi --}}
                            <td class="px-6 py-4 text-center space-x-2 whitespace-nowrap">
                                <a href="{{ route('pengaduan.show', $pengaduan->slug) }}"
                                   class="inline-block px-4 py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                                    Detail
                                </a>
                                <form action="{{ route('pengaduan.destroy', $pengaduan->slug) }}"
                                      method="POST"
                                      class="inline"
                                      onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-block px-4 py-2 rounded-md bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-gray-500 italic">
                                Belum ada data pengaduan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 rounded-b-lg flex justify-end">
                {{ $pengaduans->links() }}
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    @include('layouts.bottombar')
</x-app-layout>
