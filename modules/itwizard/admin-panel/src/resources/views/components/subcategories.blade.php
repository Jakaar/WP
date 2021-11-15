@foreach($subcategories as $sub)
    @if($sub->subcategories)
        <li>
            <a href="{{route('page_content', ['slug' => explode('/',url()->current())[5], 'id'=>$sub->id])}}"
               class="{{Request::is('*/*/'.explode('/',url()->current())[5].'/*/'.$sub->id) ? 'active' :null}}"
               data-key="{{ $sub->id }}">
                {{ $t->translateText($sub->name) }}
            </a>

        </li>
    @else
        <li>
            <a href="{{route('page_content', ['slug' => explode('/',url()->current())[5], 'id'=>$sub->id])}}"
               class="{{Request::is('*/*/'.explode('/',url()->current())[5].'/*/'.$sub->id) ? 'active' :null}}"
               data-key="{{ $sub->id }}">
                {{ $t->translateText($sub->name) }}
            </a>
        </li>
    @endif
@endforeach
{{--version 2--}}
{{--@foreach ($subcategories as $sub)--}}
{{--    <option value="{{ $sub->id }}">{{ $t->translateText($parent) }} -> {{ $t->translateText($sub->name) }}</option>--}}
{{--    @if (count($sub->subcategories) > 0)--}}
{{--        @php--}}
{{--            $parents = $parent . '->' . $sub->name;--}}
{{--        @endphp--}}
{{--        @include('Admin::components.subcategories', ['subcategories' => $sub->subcategories, 'parent' => $parents])--}}
{{--    @endif--}}
{{--@endforeach--}}

{{--version 1--}}
{{--@if(isset($row->child))--}}
{{--    <optgroup label="{!! $t->translateText($row->name) !!}">--}}
{{--        @foreach($row->child as $subChild)--}}
{{--            @include('Admin::components.subcategories', ['row' => $subChild])--}}
{{--        @endforeach--}}
{{--        @else--}}
{{--            <option value="{{ $row->id }}">{!! ucfirst($row->name) !!}</option>--}}
{{--@endif--}}
