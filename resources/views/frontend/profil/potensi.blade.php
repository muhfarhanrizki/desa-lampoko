<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16">
        <!-- Header -->
        <div class="text-center mb-12 bg-emerald-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-emerald-700 flex items-center justify-center gap-3">
                <x-heroicon-o-sparkles class="w-12 h-12 text-emerald-600 animate-bounce" />
                Potensi Wisata Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Jelajahi potensi wisata yang dimiliki Desa Lampoko yang kaya akan keindahan alam dan budaya.
            </p>
        </div>

        <!-- Potensi Wisata List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-sun class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Pantai Lampoko</h2>
                    <p class="text-gray-700 leading-relaxed">Spot sunset yang indah dengan pasir putih dan ombak yang tenang, cocok untuk rekreasi keluarga.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-map-pin class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Hutan Mangrove</h2>
                    <p class="text-gray-700 leading-relaxed">Wisata edukasi dan konservasi ekosistem mangrove yang menjadi paru-paru desa.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-archive-box class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Rumah Adat</h2>
                    <p class="text-gray-700 leading-relaxed">Bangunan tradisional yang menjadi simbol budaya dan sejarah Desa Lampoko.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-map-pin class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Kuliner Lokal</h2>
                    <p class="text-gray-700 leading-relaxed">Nikmati aneka makanan khas Lampoko dengan cita rasa autentik dan menggugah selera.</p>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow hover:shadow-lg transition flex items-start gap-5">
                <x-heroicon-o-map-pin class="w-10 h-10 text-emerald-600 flex-shrink-0" />
                <div>
                    <h2 class="text-xl font-semibold text-emerald-700 mb-2">Agrowisata</h2>
                    <p class="text-gray-700 leading-relaxed">Wisata kebun dan pertanian yang memberikan pengalaman langsung petik buah dan hasil bumi.</p>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
