<option value="{{ $children->id }}"> {{ $parent }} -> {{ $children->name }} </option>
@if($children->child->count() != 0)
    @php
        $parents = $parent . ' -> ' . $children->name
    @endphp
    @foreach ($children->childs as $sub)
        @include('Admin::pages.products.categoryDropdown',[
            'children' => $sub,
            'parent' => $parents,
        ])
    @endforeach
 @else
 @endif
