@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled m-2" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
        @else
            <li class="m-2"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li classs="m-2"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
        @else
            <li class="disabled m-2" aria-disabled="true"><span>@lang('pagination.next')</span></li>
        @endif
    </ul>
@endif
