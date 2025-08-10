@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
        
        {{-- Mobile: Previous & Next --}}
        <div class="flex justify-between w-full sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="text-gray-400 text-sm px-4 py-2">← Sebelumnya</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="text-sm px-4 py-2 text-green-600 hover:underline">← Sebelumnya</a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="text-sm px-4 py-2 text-green-600 hover:underline">Berikutnya →</a>
            @else
                <span class="text-gray-400 text-sm px-4 py-2">Berikutnya →</span>
            @endif
        </div>

        {{-- Desktop --}}
        <div class="hidden sm:flex items-center justify-between w-full">
            {{-- Info --}}
            <div class="text-sm text-gray-500">
                Menampilkan
                <span class="font-medium text-gray-700">{{ $paginator->firstItem() }}</span>
                -
                <span class="font-medium text-gray-700">{{ $paginator->lastItem() }}</span>
                dari
                <span class="font-medium text-gray-700">{{ $paginator->total() }}</span>
                hasil
            </div>

            {{-- Page Links --}}
            <div class="flex space-x-1">
                {{-- Previous --}}
                @if ($paginator->onFirstPage())
                    <span class="px-3 py-1 text-gray-400 text-sm">←</span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-1 text-sm text-green-600 hover:underline">←</a>
                @endif

                {{-- Page Numbers --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="px-3 py-1 text-sm text-gray-400">{{ $element }}</span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-3 py-1 text-sm text-gray-600 hover:underline hover:text-green-600">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-1 text-sm text-green-600 hover:underline">→</a>
                @else
                    <span class="px-3 py-1 text-sm text-gray-400">→</span>
                @endif
            </div>
        </div>
    </nav>
@endif
