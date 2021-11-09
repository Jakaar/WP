@foreach ($subcategories as $sub)
    <option value="{{ $sub->id }}">{{ $parent}} -> {{ $sub->name }}</option>

    @if (count($sub->subcategories) > 0)
        @php
            // Creating parents list separated by ->.
            $parents = $parent . '->' . $sub->name;
        @endphp
        @include('subcategories', ['subcategories' => $sub->subcategories, 'parent' => $parents])
    @endif
@endforeach
