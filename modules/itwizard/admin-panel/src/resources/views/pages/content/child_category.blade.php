@if ($child_category->categories)
    @if(count($child_category->categories) > 0)
        <li class="">
            <a href="#" aria-expanded="false">
                <i class="metismenu-icon pe-7s-plugin"></i>
                {{ $child_category->name }}
                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
                @foreach ($child_category->categories as $childCategory)
                    @include('Admin::pages.content.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
        </li>
    @else
        <li>
            <a href="#" aria-expanded="false">
                <i class="metismenu-icon"></i>
                {{ $child_category->name }}
            </a>
        </li>
    @endif
@endif
