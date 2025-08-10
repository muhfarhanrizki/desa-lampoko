@props(['title', 'description', 'icon', 'url' => '#', 'color' => 'blue'])

@php
$colors = [
    'blue' => 'bg-blue-100 text-blue-600 group-hover:text-blue-800',
    'green' => 'bg-green-100 text-green-600 group-hover:text-green-800',
    'yellow' => 'bg-yellow-100 text-yellow-600 group-hover:text-yellow-800',
    'red' => 'bg-red-100 text-red-600 group-hover:text-red-800',
    'gray' => 'bg-gray-100 text-gray-600 group-hover:text-gray-800',
    'indigo' => 'bg-indigo-100 text-indigo-600 group-hover:text-indigo-800',
    'purple' => 'bg-purple-100 text-purple-600 group-hover:text-purple-800',
    'teal' => 'bg-teal-100 text-teal-600 group-hover:text-teal-800',
    'orange' => 'bg-orange-100 text-orange-600 group-hover:text-orange-800',
];
@endphp

<a href="{{ $url }}" class="group block bg-white shadow-md rounded-2xl p-6 hover:shadow-xl hover:scale-[1.02] transition duration-200">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="p-2 rounded-full {{ $colors[$color] ?? 'bg-gray-100 text-gray-600' }}">
                {{-- Heroicons outline version --}}
                <x-dynamic-component :component="'heroicon-o-'.$icon" class="w-6 h-6" />
            </div>
            <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
        </div>
        <x-heroicon-o-chevron-right class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition" />
    </div>
    <p class="text-sm text-gray-500 mt-2">{{ $description }}</p>
</a>
