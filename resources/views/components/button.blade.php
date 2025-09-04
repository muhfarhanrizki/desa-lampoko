@props(['isLoggedIn' => false])

<div x-data="{ open: false, showForm: false }" class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3" x-cloak>
    
    {{-- Tombol-Tombol Toggle --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-4"
         class="flex flex-col items-end gap-3">

        {{-- Admin --}}
        <a href="{{ $isLoggedIn ? route('dashboard') : route('login') }}"
           class="group flex items-center gap-2 px-4 py-2 bg-white shadow-md border border-gray-200 rounded-xl transition hover:scale-105 text-sm text-gray-800">
            <x-heroicon-o-lock-closed class="w-5 h-5 text-green-600 group-hover:text-green-800" />
            <span>Admin</span>
        </a>

        {{-- Hubungi --}}
        <a href="https://wa.me/6281234567890" target="_blank"
           class="group flex items-center gap-2 px-4 py-2 bg-white shadow-md border border-gray-200 rounded-xl transition hover:scale-105 text-sm text-gray-800">
            <x-heroicon-o-phone-arrow-down-left class="w-5 h-5 text-blue-600 group-hover:text-blue-800" />
            <span>Hubungi Langsung</span>
        </a>

        {{-- Tombol Pengaduan --}}
        <button @click="showForm = true"
                class="group flex items-center gap-2 px-4 py-2 bg-white shadow-md border border-gray-200 rounded-xl transition hover:scale-105 text-sm text-gray-800">
            <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5 text-purple-600 group-hover:text-purple-800" />
            <span>Pengaduan</span>
        </button>
    </div>

    {{-- Tombol Utama (FAB) --}}
    <button @click="open = !open"
            class="flex items-center justify-center w-12 h-12 bg-green-600 hover:bg-green-700 text-white rounded-full shadow-lg transition-all transform hover:scale-110 focus:outline-none">
        <template x-if="!open">
            <x-heroicon-o-bars-3 class="w-6 h-6" />
        </template>
        <template x-if="open">
            <x-heroicon-o-bars-3-bottom-left class="w-6 h-6" />
        </template>
    </button>

    {{-- Popup Form Pengaduan --}}
{{-- Popup Form Pengaduan --}}
<div x-show="showForm"
     x-transition.opacity
     class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center p-4 z-50">

    <div class="bg-white rounded-xl shadow-lg w-full max-w-lg p-6 relative border border-gray-100 max-h-[90vh] overflow-y-auto">
        <h2 class="text-xl font-bold text-emerald-600 mb-4 text-center">Kirim Pengaduan</h2>

        <form action="{{ route('frontend.pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
            @csrf

            {{-- Nama & Email --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required 
                       class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                <input type="email" name="email" placeholder="Email" required 
                       class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
            </div>

            {{-- Telepon & Kategori --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <input type="text" name="telepon" placeholder="No Telepon" required 
                       class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                <select name="kategori" required 
                        class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
                    <option value="">Pilih Kategori</option>
                    <option value="ekonomi">Ekonomi</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="keamanan">Keamanan</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="pelayanan publik">Pelayanan Publik</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            {{-- Alamat --}}
            <input type="text" name="alamat" placeholder="Alamat" required 
                   class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />

            {{-- Judul & Gambar --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 items-end">
                <input type="text" name="judul" placeholder="Judul Pengaduan" required 
                       class="w-full border border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                <input type="file" name="gambar" accept="image/*" 
                       class="w-full border border-gray-300 rounded-lg px-2 py-2 file:mr-3 file:py-1 file:px-3
                              file:rounded-lg file:border-0 file:text-sm file:font-semibold
                              file:bg-emerald-50 file:text-emerald-600
                              hover:file:bg-emerald-100 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
            </div>

            {{-- Deskripsi --}}
            <textarea name="deskripsi" placeholder="Deskripsi Pengaduan" required 
                      class="w-full border h-28 border-gray-300 rounded-lg px-2 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm"></textarea>

            {{-- Tombol Kirim & Kembali --}}
            <div class="flex gap-3 mt-3">
                <button type="button" @click="showForm = false"
                        class="flex-1 bg-rose-300 text-gray-800 py-2 rounded-lg font-semibold hover:bg-rose-400 focus:outline-none transition text-sm">
                    Kembali
                </button>
                <button type="submit"
                        class="flex-1 bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700 focus:outline-none transition text-sm">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>

</div>
