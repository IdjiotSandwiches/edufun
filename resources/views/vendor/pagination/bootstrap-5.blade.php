@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="flex-fill d-flex align-items-center justify-content-between gap-1">
            <div>
                <p class="small">
                    {!! __('Page | ') !!}
                </p>
            </div>

            <div>
                <ul class="d-flex gap-2 p-0">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <button class="page-item disabled bg-transparent border-0" aria-disabled="true"><span class="page-link">{{ $element }}</span></button>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <button class="page-item active fw-bold bg-transparent border-0 p-0" aria-current="page"><span class="page-link">{{ $page }}</span></button>
                                @else
                                    <button class="page-item bg-transparent border-0 p-0"><a class="page-link" href="{{ $url }}">{{ $page }}</a></button>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
@endif
