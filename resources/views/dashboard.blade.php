<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Halo, {{ Auth::user()->name }}</h2>
        <p class="text-gray-500 mb-8">Silakan pilih menu untuk mengelola website desa:</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-dashboard-card 
                title="Berita Desa" 
                description="Tambah, edit, atau hapus berita desa."
                color="blue" 
                icon="document-text" 
                :url="route('berita.index')" />

            <x-dashboard-card 
                title="Galeri Desa" 
                description="Kelola dokumentasi kegiatan desa."
                color="green" 
                icon="photo" 
                :url="route('galeri.index')" />

            <x-dashboard-card 
                title="Artikel" 
                description="Kelola artikel dan tulisan desa."
                color="yellow" 
                icon="pencil-square" 
                :url="route('artikel.index')" />

            <x-dashboard-card 
                title="Struktur Organisasi" 
                description="Atur struktur kepengurusan desa."
                color="purple" 
                icon="users" 
                :url="route('struktur.index')" />

            <x-dashboard-card 
                title="Kontak Desa" 
                description="Kelola informasi kontak resmi desa."
                color="red" 
                icon="phone" 
                :url="route('kontak.index')" />

            <x-dashboard-card 
                title="Persuratan" 
                description="Kelola surat masuk dan keluar."
                color="gray" 
                icon="inbox" 
                :url="route('surat.index')" />

            <x-dashboard-card 
                title="Produk Desa" 
                description="Atur produk UMKM desa."
                color="indigo" 
                icon="shopping-bag" 
                :url="route('produk.index')" />
            
            <!-- Tambahan baru -->
            <x-dashboard-card
                title="Informasi Desa"
                description="Kelola informasi umum desa."
                color="teal"
                icon="information-circle"
                :url="route('informasi.index')" />

            <x-dashboard-card
                title="Pengumuman"
                description="Kelola pengumuman penting desa."
                color="orange"
                icon="megaphone"
                :url="route('pengumuman.index')" />
        </div>
    </div>
</x-app-layout>
