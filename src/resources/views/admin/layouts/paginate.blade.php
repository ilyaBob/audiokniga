@if ($paginator->hasPages())
    <div class="card-footer clearfix">
        @foreach ($elements as $element)
            @if (is_string($element))
                <span type="button" class="btn page-item" style="color:white; background: #138496">...</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span type="button" class="btn page-item" style="color:white; background: #138496">{{$page}}</span>
                    @else
                        <a type="button" class="btn page-item" href="{{$url}}">{{$page}}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
@endif
