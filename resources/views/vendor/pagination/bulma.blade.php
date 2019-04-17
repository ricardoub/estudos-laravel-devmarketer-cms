@if ($paginator->hasPages())
  <nav class="pagination is-centered m-t-20">


    <ul class="pagination-list">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li><a class="pagination-previous" disabled> &lsaquo; </a></li>
      @else
        <li><a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> &lsaquo; </a></li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li><span class="pagination-ellipsis"><span>{{ $element }}</span></span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li><a class="pagination-link is-current">{{ $page }}</a></li>
            @else
              <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Nexts Page Link --}}
      @if ($paginator->hasMorePages())
        <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next"> &rsaquo; </a>
      @else
        <a class="pagination-next" disabled> &rsaquo; </a>
      @endif

    </ul>
  </nav>
@endif