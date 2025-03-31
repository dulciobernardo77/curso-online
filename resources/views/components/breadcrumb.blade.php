<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-1">
        @foreach($items as $item)
            @if($loop->last)
                <li class="breadcrumb-item active" aria-current="page">{{ $item['title'] }}</li>
            @else
                <li class="breadcrumb-item">
                    <a href="{{ $item['url'] }}" class="text-decoration-none text-secondary">{{ $item['title'] }}</a>
                </li>
            @endif
        @endforeach
    </ol>
</nav> 