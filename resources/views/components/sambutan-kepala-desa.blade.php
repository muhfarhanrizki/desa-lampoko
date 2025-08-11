<section class="relative py-16 px-6 bg-gray-50 overflow-hidden">

    <h2 class="text-4xl md:text-5xl font-extrabold text-emerald-700 text-center mb-16 tracking-tight"
        data-aos="fade-up">
        Sambutan Hangat dari Kepala Desa
    </h2>

    <div class="relative max-w-5xl mx-auto flex flex-col-reverse md:flex-row items-center md:items-start gap-10 md:gap-16">

        {{-- Bubble Sambutan --}}
        <div class="w-full md:w-2/3 bg-gradient-to-br from-green-50 via-white to-blue-50 border border-emerald-200 rounded-3xl p-8 shadow-lg relative"
            data-aos="fade-right" data-aos-delay="100">
            <span class="absolute top-0 left-6 -translate-y-1/2 text-sm bg-emerald-500 text-white px-3 py-1 rounded-full shadow">
                📣 Sambutan
            </span>

            <div class="text-gray-700 text-base sm:text-lg leading-relaxed space-y-5">
                <p>
                    <span class="text-xl font-bold text-gray-900">Assalamu’alaikum Warahmatullahi Wabarakatuh,</span><br>
                    Selamat datang di <strong>Website Resmi Desa Lampoko</strong>. Platform ini kami siapkan sebagai jembatan komunikasi, transparansi informasi, dan pelayanan digital untuk seluruh warga.
                </p>
                <p>
                    Harapan kami, website ini bisa menjadi sumber informasi terpercaya, terbuka untuk siapa saja dan kapan saja.
                </p>
                <p class="italic text-gray-600">Salam hangat dan terima kasih atas kunjungannya. 💚</p>

                <div class="flex justify-end mt-10">
                    <a href="{{ route('profil.visi-misi') }}"
                       class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white text-sm sm:text-base font-semibold px-5 py-2 rounded-xl transition duration-300 shadow-md"
                       data-aos="fade-up" data-aos-delay="200">
                        Jelajahi Profil Desa →
                    </a>
                </div>
            </div>
        </div>

        {{-- Foto Kepala Desa --}}
        <div class="w-full md:w-1/3 flex justify-center md:justify-start mt-4"
            data-aos="fade-left" data-aos-delay="300">
            <div class="relative group w-64 h-[22rem] sm:w-60 sm:h-[20rem]">
                <img src="{{ asset('images/kepala-desa.jpeg') }}"
                     alt="Kepala Desa"
                     class="w-full h-full object-cover rounded-3xl shadow-xl border-4 border-white transition-transform duration-300 group-hover:scale-105">

                <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-white px-5 py-2 rounded-xl shadow text-sm font-semibold text-gray-700">
                    Budiman – Kepala Desa
                </div>
            </div>
        </div>

    </div>
</section>
