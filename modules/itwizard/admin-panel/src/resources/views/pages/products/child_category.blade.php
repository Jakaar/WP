<li class="">
    <a href="#" aria-expanded="true" data-key="{{ $child_category->id }}">
        <i class="metismenu-icon pe-7s-plugin"></i>
        {{ $child_category->name }}
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
        <span class="">
            <button data-key="{{ $child_category->id }}"
                class="btn btn-outline-success float-end navBtns ModalShow ModalShow">
                <i class="pe-7s-plus"></i>
            </button>
        </span>
        <span class="">
            <button data-key="{{ $child_category->id }}" class="btn btn-outline-danger float-end navBtns DeleteMenu ">
                <i class="pe-7s-trash"></i>
            </button>
        </span>
    </a>
    <ul>
        @foreach ($child_category->child as $childCategory)
            @include('Admin::pages.products.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
</li>
{{-- <li>
            <a href="#" aria-expanded="true" data-key="{{ $child_category->id }}">
                <i class="metismenu-icon"></i>
                {{ $t->translateText($child_category->name) }}
                <span class="">
                    <button key="{{ $child_category->id }}" class="btn btn-outline-success float-end navBtns ModalShow">
                        <i class="pe-7s-plus"></i>
                    </button>
                </span>
                <span class="">
                    <button key="{{ $child_category->id }}" class="btn btn-outline-danger float-end navBtns DeleteMenu">
                        <i class="pe-7s-trash"></i>
                    </button>
                </span>
            </a>
        </li> --}}
