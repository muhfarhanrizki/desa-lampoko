<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
        <!-- Header -->
        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-building-office class="w-12 h-12 text-emerald-600 animate-bounce" />
                Fasilitas Umum Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Informasi fasilitas umum yang tersedia di Desa Lampoko untuk menunjang kenyamanan dan kebutuhan warga.
            </p>
        </div>

        <!-- List Fasilitas Umum -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-heart class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Puskesmas</h2>
                    <p class="text-gray-700 leading-relaxed">Fasilitas kesehatan dasar untuk pelayanan medis dan konsultasi masyarakat.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-academic-cap class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Sekolah Dasar</h2>
                    <p class="text-gray-700 leading-relaxed">Pendidikan dasar bagi anak-anak desa dengan fasilitas lengkap dan tenaga pengajar profesional.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-book-open class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Perpustakaan Desa</h2>
                    <p class="text-gray-700 leading-relaxed">Tempat belajar dan akses literasi untuk semua usia di Desa Lampoko.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-banknotes class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Bank Sampah</h2>
                    <p class="text-gray-700 leading-relaxed">Fasilitas pengelolaan sampah berbasis komunitas untuk lingkungan yang lebih bersih dan sehat.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-light-bulb class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Penerangan Jalan</h2>
                    <p class="text-gray-700 leading-relaxed">Lampu jalan yang menerangi area utama desa demi keamanan dan kenyamanan malam hari.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-flag class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Balai Desa</h2>
                    <p class="text-gray-700 leading-relaxed">Tempat kegiatan dan pertemuan warga untuk urusan pemerintahan dan sosial budaya.</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
