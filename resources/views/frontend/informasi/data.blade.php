<x-frontend-layout>
    <section class="max-w-6xl mx-auto px-6 py-12 pt-36 pb-16 text-center">
        <!-- Header mirip halaman lain -->
        <div class="mb-12 bg-cyan-50 py-14 rounded-xl">
            <h1 class="text-4xl md:text-5xl font-extrabold text-cyan-700 flex items-center justify-center gap-3 mx-auto max-w-4xl">
                <x-heroicon-o-chart-bar class="w-12 h-12 text-cyan-600 animate-bounce" />
                Data Umum Desa Lampoko
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
                Statistik lengkap Desa Lampoko yang diupdate secara real-time melalui Looker Studio.
            </p>
            <div class="mt-6 inline-block bg-cyan-700 text-white px-6 py-2 rounded-full font-medium hover:bg-emerald-800 transition cursor-default select-none shadow">
                Data Terpercaya & Terkini
            </div>
        </div>

        <!-- Embed Looker Studio iframe -->
        <div class="w-full aspect-[16/9] max-w-5xl mx-auto rounded-xl overflow-hidden shadow-lg">
            <iframe 
                src="https://lookerstudio.google.com/embed/reporting/f4804903-2152-407b-aee7-c55716a22470/page/OiETF" 
                frameborder="0" 
                style="border:0; width:100%; height:100%;" 
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
</x-frontend-layout>
