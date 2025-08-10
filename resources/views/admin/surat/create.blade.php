<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Surat Baru
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-2xl mx-auto">
        <a href="{{ route('surat.index') }}" 
           class="inline-flex items-center text-blue-600 hover:underline mb-4 font-medium">
            <x-heroicon-o-arrow-left class="w-5 h-5 mr-1" />
            Kembali ke Daftar Surat
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

        <form action="{{ route('surat.store') }}" method="POST" class="space-y-6 bg-white p-6 rounded-md shadow-md">
            @csrf

            {{-- Nama Surat --}}
            <div>
                <label for="nama" class="block font-medium text-gray-700 mb-1">Nama Surat</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Contoh: Surat Keterangan Usaha" />
            </div>

            {{-- Link Google Form --}}
            <div>
                <label for="link" class="block font-medium text-gray-700 mb-1">Link Google Form</label>
                <input type="url" name="link" id="link" value="{{ old('link') }}" required
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="https://docs.google.com/forms/..." />
            </div>

            {{-- Link Hasil Google Form --}}
            <div>
                <label for="hasil" class="block font-medium text-gray-700 mb-1">Link Hasil Google Form</label>
                <input type="url" name="hasil" id="hasil" value="{{ old('hasil') }}"
                    class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="https://docs.google.com/spreadsheets/..." />
            </div>

            <div>
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-sm w-full">
                    Simpan Surat
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
