@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
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
                {{__('Page Manage')}} {{--
                <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                --}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{__('Create')}}
                </button>
            </div>
        </div>
    </div>
</div>
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
    @foreach($content['data'] as $page)
        <li class="nav-item">
            <a class="nav-link {{Request::is('cms/manage_pages/'.$page->id.'/page_content') ? 'active' : null }}" href="/cms/manage_pages/{!! $page->id !!}/page_content">
                <span>{!! $t->translateText($page->name) !!}</span>
            </a>
        </li>
    @endforeach
</ul>
@if($content['detail'])
    @include('Admin::pages.manage_pages.__Page_types.'.$content['type']->board_type)
@endif
@endsection
@section('script')
<script>
    $(document).ready(function () {
        let editor5;
        ClassicEditor.create(document.querySelector("#CreatePage1"))
            .then((newEditor) => {
                editor5 = newEditor;
            });

        $('.CreateCategoryModal').on('click', function (){
            $('#CreateCategoryModal').modal('show');
        });
    });

    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
