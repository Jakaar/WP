@if ($child_category->categories)
    @if(count($child_category->categories) > 0)
        <li class="" >
            <a href="#" aria-expanded="true" data-key="{{$child_category->id}}">
                <i class="metismenu-icon pe-7s-plugin"></i>
                {{ $child_category->name }}
                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                <span class="">
                    <button key="{{$childCategory->id}}" class="btn btn-outline-success float-end navBtns ModalShow ModalShow">
                        <i class="pe-7s-plus"></i>
                    </button>
                </span>
                <span class="">
                    <button key="{{$childCategory->id}}" class="btn btn-outline-danger float-end navBtns DeleteMenu ">
                        <i class="pe-7s-trash"></i>
                    </button>
                </span>
            </a>
            <ul>
                @foreach ($child_category->categories as $childCategory)
                    @include('Admin::pages.user_menu.child_category', ['child_category' => $childCategory])
                @endforeach
            </ul>
        </li>
    @else
        <li>
            <a href="#" aria-expanded="true"  data-key="{{$child_category->id}}">
                <i class="metismenu-icon"></i>
                {{ $child_category->name }}
                <span class="">
                    <button key="{{$child_category->id}}" class="btn btn-outline-success float-end navBtns ModalShow">
                        <i class="pe-7s-plus"></i>
                    </button>
                </span>
                <span class="">
                    <button key="{{$child_category->id}}" class="btn btn-outline-danger float-end navBtns DeleteMenu">
                        <i class="pe-7s-trash"></i>
                    </button>
                </span>
            </a>
        </li>
    @endif
@endif
