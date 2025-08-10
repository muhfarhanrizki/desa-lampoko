@props(['isLoggedIn' => false])

<div x-data="{ open: false }" class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3">
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
           class="group flex items-center gap-2 px-4 py-2 bg-white shadow-lg border border-gray-200 rounded-xl transition hover:bg-white hover:scale-105 hover:shadow-xl text-sm text-gray-800">
            <x-heroicon-o-lock-closed class="w-5 h-5 text-green-600 group-hover:text-green-800 transition" />
            <span>Admin</span>
        </a>

        {{-- Saran --}}
        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer"
           class="group flex items-center gap-2 px-4 py-2 bg-white shadow-lg border border-gray-200 rounded-xl transition hover:bg-white hover:scale-105 hover:shadow-xl text-sm text-gray-800">
            <x-heroicon-o-phone-arrow-down-left class="w-5 h-5 text-blue-600 group-hover:text-blue-800 transition" />
            <span>Hubungi Langsung</span>
        </a>
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
</div>
