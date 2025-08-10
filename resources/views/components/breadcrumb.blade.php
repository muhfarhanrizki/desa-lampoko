@if($items && count($items))
    <nav class="text-sm text-gray-600 mb-6 select-none" aria-label="breadcrumb">
        <ol class="list-reset flex gap-2 items-center flex-wrap">
            @foreach($items as $item)
                @if(!$loop->last)
                    <li>
                        @if($item['url'])
                            <a href="{{ $item['url'] }}" class="hover:text-blue-600 font-medium">{{ $item['label'] }}</a>
                        @else
                            <span class="text-gray-400 cursor-default">{{ $item['label'] }}</span>
                        @endif
                        <span class="mx-2 text-gray-400">/</span>
                    </li>
                @else
                    <li class="text-blue-600 font-semibold cursor-default" aria-current="page">{{ $item['label'] }}</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
