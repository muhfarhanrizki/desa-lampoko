<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Surat: {{ $surat->nama }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-4xl mx-auto">
        <a href="{{ route('surat.index') }}"
           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium mb-6 transition">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1 stroke-current" />
            Kembali ke Daftar Surat
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

        <form action="{{ route('surat.update', $surat->slug) }}" method="POST"
              class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('PUT')

            {{-- Nama Surat --}}
            <div>
                <label for="nama" class="block font-medium text-gray-700 mb-1">Nama Surat</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $surat->nama) }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            {{-- Link Google Form --}}
            <div>
                <label for="link" class="block font-medium text-gray-700 mb-1">Link Google Form</label>
                <input type="url" name="link" id="link" value="{{ old('link', $surat->link) }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            {{-- Link Hasil Google Form --}}
            <div>
                <label for="hasil" class="block font-medium text-gray-700 mb-1">Link Hasil Google Form</label>
                <input type="url" name="hasil" id="hasil" value="{{ old('hasil', $surat->hasil) }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            {{-- Tombol Submit --}}
            <div class="pt-4">
                <button type="submit"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-2 rounded-md transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
