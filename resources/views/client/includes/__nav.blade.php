@if ($child_category->categories)
    @if(count($child_category->categories) > 0)
        <ul>
            <a class="dropdown-item text-info" href="/{{$child_category->board_master_id}}/{{$child_category->id}}">
{{--                            <i class="ni ni-album-2 text-info"></i>--}}
                <b>{!! $t->translateText($childCategory->name) !!}</b>
            </a>
            @foreach ($child_category->categories as $childCategory)
                @include('client.includes.__nav', ['child_category' => $childCategory])
            @endforeach
        </ul>
    @else
        <a class="dropdown-item text-info" href="/{{$child_category->board_master_id}}/{{$child_category->id}}">
{{--            <i class="ni ni-album-2 text-info"></i>--}}
            <b>{!! $t->translateText($childCategory->name) !!}</b>
        </a>
    @endif
@endif
