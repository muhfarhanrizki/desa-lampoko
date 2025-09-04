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
         class="flex flex-col items-end gap-3"
        style="display: none;">
         

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
    <div x-show="showForm" 
         x-transition.opacity
         class="fixed inset-0 flex items-center justify-center z-50"
         style="display: none;">
        <div class="absolute inset-0 bg-black/30 backdrop-blur-md"></div>

        <div class="bg-white rounded-2xl shadow-xl max-w-lg p-6 relative border border-gray-100 max-h-[80vh] overflow-y-auto">
            <h2 class="text-xl font-bold text-emerald-600 mb-6 text-center">Kirim Pengaduan</h2>

            <form action="{{ route('frontend.pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <!-- Nama Lengkap & Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-user class="w-4 h-4 text-emerald-500"/> Nama Lengkap
                    </label>
                    <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                </div>
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-envelope class="w-4 h-4 text-emerald-500"/> Email
                    </label>
                    <input type="email" name="email" placeholder="Masukkan email" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                </div>
                </div>
                
                <!-- Telepon & Kategori -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                            <x-heroicon-o-phone class="w-4 h-4 text-emerald-500"/> Telepon
                        </label>
                        <input type="text" name="telepon" placeholder="No. Telepon" required
                               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                    </div>
                    <div>
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                            <x-heroicon-o-clipboard-document-list class="w-4 h-4 text-emerald-500"/> Kategori
                        </label>
                        <select name="kategori" required
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
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
                </div>

                <!-- Alamat -->
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-map class="w-4 h-4 text-emerald-500"/> Alamat
                    </label>
                    <input type="text" name="alamat" placeholder="Masukkan alamat" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                </div>

                <!-- Judul Pengaduan -->
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-pencil class="w-4 h-4 text-emerald-500"/> Judul Pengaduan
                    </label>
                    <input type="text" name="judul" placeholder="Masukkan judul pengaduan" required
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" />
                </div>

                <!-- Deskripsi -->
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-document-text class="w-4 h-4 text-emerald-500"/> Deskripsi
                    </label>
                    <textarea name="deskripsi" rows="3" placeholder="Jelaskan pengaduan Anda" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm"></textarea>
                </div>

                <!-- Foto Pendukung -->
                <div>
                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-1">
                        <x-heroicon-o-photo class="w-4 h-4 text-emerald-500"/> Foto Pendukung (Opsional)
                    </label>
                    <label for="gambar"
                        class="flex flex-col items-center justify-center w-full h-40 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-emerald-500 transition-colors text-gray-500 text-sm bg-gray-50">
                        <x-heroicon-o-photo class="w-10 h-10 mb-2 text-emerald-500" />
                        <span>Klik untuk memilih foto pendukung</span>
                        <span class="text-xs text-gray-400 mt-1">Format: JPG/PNG, Maks: 2MB</span>
                        <input type="file" name="gambar" id="gambar" accept="image/*" class="hidden" />
                    </label>
                </div>

                <!-- Tombol -->
                <div class="flex gap-3 mt-3">
                    <button type="button" @click="showForm = false"
                            class="flex-1 bg-gray-200 text-gray-700 py-2 rounded-lg font-semibold hover:bg-gray-300 transition text-sm">
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


</div>