<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Kontak: {{ $kontak->nama }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-3xl mx-auto">
        <a href="{{ route('kontak.index') }}"
           class="inline-flex items-center text-blue-600 hover:underline mb-4 font-medium">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1" />
            Kembali ke Daftar Kontak
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

        <form action="{{ route('kontak.update', $kontak->slug) }}" method="POST"
              class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')

            {{-- Nama Kontak --}}
            <div>
                <label for="nama" class="block font-medium text-gray-700 mb-1">Nama Kontak</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $kontak->nama) }}" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: Kantor Desa Lampoko" />
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $kontak->email) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: desa.lampoko@gmail.com" />
            </div>

            {{-- Telepon --}}
            <div>
                <label for="telepon" class="block font-medium text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $kontak->telepon) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: 0821-xxxx-xxxx" />
            </div>

            {{-- Alamat --}}
            <div>
                <label for="alamat" class="block font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"
                    placeholder="Contoh: Jl. Poros Desa Lampoko No. 12, Dusun Bawasalo">{{ old('alamat', $kontak->alamat) }}</textarea>
            </div>

            {{-- Tombol Submit --}}
            <div>
                <button type="submit"
                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded shadow-sm w-full">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
