@if ($paginator->hasPages())
    <nav class="float-end" aria-label="Page navigation example">
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a href="javascript:void(0);" class="page-link">{{ $page }}</a>
                            </li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </li>
        @else
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="visually-hidden">Next</span>
                </a>
            </li>
        @endif
    </ul>
    </nav>

@endif
