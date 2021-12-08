@foreach ($subcategories as $sub)
    <option value="{{ $sub->id }}"  @if($sub->id == Request::input('category')) selected @endif >{{ $parent}} -> {{ $sub->name }}</option>
    @if ($sub->child->count() > 0)
        @php
            $parents = $parent . '->' . $sub->name;
        @endphp
        @include('client.pages.products._category', ['subcategories' =>
        $sub->child,
        'parent' => $category->name])
    @endif
@endforeach