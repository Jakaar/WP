@foreach ($subcategories as $sub)
    <option value="{{ $sub->id }}">{{ $t->translateText($parent) }} -> {{ $t->translateText($sub->name) }}</option>
    @if (count($sub->subcategories) > 0)
        @php
            $parents = $parent . '->' . $sub->name;
        @endphp
        @include('Admin::components.subcategories', ['subcategories' => $sub->subcategories, 'parent' => $parents])
    @endif
@endforeach
{{--@if(isset($row->child))--}}
{{--    <optgroup label="{!! $t->translateText($row->name) !!}">--}}
{{--        @foreach($row->child as $subChild)--}}
{{--            @include('Admin::components.subcategories', ['row' => $subChild])--}}
{{--        @endforeach--}}
{{--        @else--}}
{{--            <option value="{{ $row->id }}">{!! ucfirst($row->name) !!}</option>--}}
{{--@endif--}}
