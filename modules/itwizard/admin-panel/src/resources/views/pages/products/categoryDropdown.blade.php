@if($children->child->count() != 0)
<optgroup label=" - {{ $children->name }} - ">
    @foreach ($children->child as $sub)
        @include('Admin::pages.products.categoryDropdown',[
            'children' => $sub,
        ])
    @endforeach
 </optgroup>
 @else
 <option value="{{ $children->id }}"> {{ $children->name }} </option>
 @endif
