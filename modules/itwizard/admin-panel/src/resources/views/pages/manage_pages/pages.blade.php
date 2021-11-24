<div class=" @if ($children->child->count() != 0) btn-group dropleft @endif me-2 w-100 mb-2">
    <a href="/cms/manage_pages/{{ $children->id }}/page_content" tabindex="0"
        class="dropdown-item border border-primary rounded  @if (Request::getRequestURi() == '/cms/manage_pages/' . $children->id . '/page_content') active @endif">{!! $t->translateText($children->name) !!}</a>
    @if ($children->child->count() != 0)
        <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
            class="dropdown-toggle-split dropdown-toggle btn btn-outline-primary ">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
    @endif
    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu p-3" style="">
        @foreach ($children->child as $child)
            @include('Admin::pages.manage_pages.pages',[
            'children' => $child
            ])
        @endforeach
    </div>

</div>
