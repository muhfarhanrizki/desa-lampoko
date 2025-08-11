<x-frontend-layout>
    <section class="max-w-6xl mx-auto py-12 px-4 pt-36 pb-16">

        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-document-text class="w-12 h-12 text-emerald-600 animate-bounce" />
                Administrasi Surat Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Kelola surat desa dengan mudah, akses formulir pengajuan dengan cepat dan praktis.
            </p>
            <div class="mt-6 inline-block bg-emerald-700 text-white px-6 py-2 rounded-full font-medium hover:bg-emerald-800 transition cursor-default select-none shadow">
                Mudah & Terpercaya
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4 mb-6">
          <h2 class="text-2xl font-bold text-emerald-800 mb-2">
          Pilih Layanan Surat
          </h2>
          <p class="text-gray-600 text-sm">
          Klik salah satu jenis surat di bawah ini untuk mengakses formulir pengajuan secara online.
          </p>
        </div>

        {{-- Surat cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-16 max-w-5xl mx-auto px-4">
            @foreach ($surats as $surat)
                <a href="{{ $surat->link }}" target="_blank" 
                class=" bg-white rounded-xl shadow-md p-5 flex flex-col justify-center border border-emerald-300 hover:shadow-xl hover:border-emerald-500 transition duration-300 cursor-pointer group no-underline">
                    <h2 class="text-md font-semibold text-emerald-700 group-hover:text-emerald-900 transition-colors truncate" title="{{ $surat->nama }}">
                        {{ $surat->nama }}
                    </h2>
                </a>
            @endforeach
        </div>

        <!-- Informasi Kontak -->
        <div class="max-w-4xl mx-auto px-6 pt-24 text-center font-sans">
        <h2
            class="text-4xl font-extrabold text-emerald-800 mb-4 flex items-center justify-center gap-3">
            Informasi Kontak
        </h2>
        <p class="text-gray-600 text-lg mb-14 max-w-xl mx-auto">
            Hubungi kami untuk mendapatkan layanan atau informasi lebih lanjut dengan mudah dan cepat.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 mb-12">
            <!-- Telepon -->
            <div
            class="bg-gray-100 rounded-3xl p-8 shadow-neumorph flex flex-col transition-transform hover:scale-[1.05] cursor-pointer"
            >
            <div class="bg-emerald-100 p-5 rounded-full shadow-inner mb-6 self-center">
                <x-heroicon-o-phone class="w-10 h-10 text-emerald-600" />
            </div>
            <h3 class="text-xl font-semibold text-emerald-700 mb-2 text-center">Telepon</h3>
            <p class="text-gray-700 mb-6 text-center flex-grow flex items-center justify-center">
                Hubungi kami di jam kerja
            </p>
            <a
                href="https://wa.me/+6285240399565"
                class="text-emerald-600 font-semibold flex items-center justify-center gap-2 hover:text-emerald-800 transition select-text mt-auto"
            >
                0852-4039-9565
            </a>
            </div>

            <!-- Email -->
            <div
            class="bg-gray-100 rounded-3xl p-8 shadow-neumorph flex flex-col transition-transform hover:scale-[1.05] cursor-pointer"
            >
            <div class="bg-emerald-100 p-5 rounded-full shadow-inner mb-6 self-center">
                <x-heroicon-o-envelope class="w-10 h-10 text-emerald-600" />
            </div>
            <h3 class="text-xl font-semibold text-emerald-700 mb-2 text-center">Email</h3>
            <p class="text-gray-700 mb-6 text-center flex-grow flex items-center justify-center">
                Kirim email untuk pertanyaan
            </p>
            <a
                href="mailto:desalampoko.barru@gmail.com"
                class="text-emerald-600 font-semibold flex items-center justify-center gap-2 hover:text-emerald-800 transition select-text mt-auto"
            >
                desalampoko.barru@gmail.com
            </a>
            </div>

            <!-- Alamat -->
            <a
    href="https://maps.app.goo.gl/Rdc3ykosXRTzfN1x7"
    target="_blank"
    rel="noopener noreferrer"
    class="bg-gray-100 rounded-3xl p-8 shadow-neumorph flex flex-col transition-transform hover:scale-[1.05] cursor-pointer no-underline"
>
    <div class="bg-emerald-100 p-5 rounded-full shadow-inner mb-6 self-center">
        <x-heroicon-o-map-pin class="w-10 h-10 text-emerald-600" />
    </div>
    <h3 class="text-xl font-semibold text-emerald-700 mb-2 text-center">Alamat</h3>
    <p class="text-gray-700 mb-6 text-center flex-grow flex items-center justify-center">
        Kunjungi kantor desa
    </p>
    <address
        class="not-italic text-emerald-600 font-semibold flex items-center justify-center gap-2 select-text mt-auto"
    >
        Kantor Desa Lampoko
    </address>
    </a>
            </div>
        </div>

        <!-- Jam Pelayanan -->
            <div class="max-w-4xl mx-auto pt-12 text-center text-gray-700 font-semibold">

            <!-- Baris 1: Icon + Label -->
            <div class="flex items-center justify-center gap-3 mb-2 text-emerald-700 text-xl font-bold">
                <x-heroicon-o-clock class="w-8 h-8" />
                <span>Jam Pelayanan</span>
            </div>

            <!-- Baris 2: Jam kerja & Libur -->
            <div class="flex justify-center gap-16 text-gray-800 text-base font-normal">
                <div>
                <p class="font-semibold">Senin - Jumat</p>
                <p>08:00 - 16:00 WITA</p>
                </div>

                <div>
                <p class="font-semibold">Sabtu - Minggu</p>
                <p>Libur</p>
                </div>
            </div>

            </div>

        </div>

        <style>
        /* Neumorphism shadow */
        .shadow-neumorph {
            box-shadow: 8px 8px 15px #c0c8d8, -8px -8px 15px #ffffff;
        }
        </style>

    </section>
</x-frontend-layout>
