@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    {{--    @php dd($content) @endphp--}}
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }

        .ck-editor__editable {
            max-height: 400px;
        }

    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Page Manage') }} {{-- <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div> --}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                        class="btn-shadow me-3 btn btn-info" id="reload_page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success save ShowModal">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span>
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        @foreach ($content['data'] as $page)
            <li class="nav-item btn-group">
                <a class="nav-link {{ Request::is('*/*/' . $page->id . '/*') ? 'active' : null }}"
                    href="/cms/manage_pages/{!! $page->id !!}/page_content">
                    <span>{!! $t->translateText($page->name) !!}</span>
                </a>
                <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                    class="dropdown-toggle-split dropdown-toggle btn btn-link">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
        </li>
        @endforeach
    </ul> --}}
    <div class="mb-3 d-flex">
        @foreach ($content['data'] as $page)
            <div class=" @if ($page->child->count() != null) btn-group dropleft @endif me-2">
                <a href="/cms/manage_pages/{{ $page->id }}/{{$page->board_master_id}}"
                   class="btn btn-outline-primary px-4 @if (Request::getRequestURi() == '/cms/manage_pages/' . $page->id . '/page_content') active @endif"> {!! $t->translateText($page->name) !!} </a>
                @if ($page->child->count() != null)
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                            class="dropdown-toggle-split dropdown-toggle btn btn-outline-primary ">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                @endif
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu p-2" style="">
                    @foreach ($page->child as $child)
                        @include('Admin::pages.manage_pages.pages',[
                        'children' => $child
                        ])
                    @endforeach
                </div>

            </div>
        @endforeach
    </div>

    @if (isset($board))
        @include('Admin::pages.manage_pages.__Page_types.'.$board->board_type)
    @endif

@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('.GetPageContent').on('click', function() {
                Axios.get('/api/GetPageContent/' + $(this).data('key')).then((r) => {
                    console.log(r)
                });
            })
        });

        $('#reload_page').click(function() {
            location.reload(true);
        });
    </script>
@endsection
