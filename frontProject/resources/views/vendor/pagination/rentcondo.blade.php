@if ($paginator->hasPages())

    <div class="pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="fas fa-chevron-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="#" class="page-link disable">...</a>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="page-link active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link"><i class="fas fa-chevron-right"></i></a>
        @else
            {{-- <a href="#" class="page-link disable">Next</a> --}}
        @endif
    </div>

@endif
