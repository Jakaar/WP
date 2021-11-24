@if (Request::getRequestUri() == $checker->url)
    active
@endif
@foreach ($checker->child as $child)
    @if (Request::getRequestUri() == $checker->url)
        active
    @endif
    @include('Admin::layouts.checker',[
    'checker' => $child
    ])
@endforeach
