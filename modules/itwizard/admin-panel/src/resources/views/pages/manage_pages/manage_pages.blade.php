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
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".create-page-management">
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
{{--@section('modal')--}}
{{--<div class="modal fade create-page-management" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-xl">--}}
{{--        <div class="modal-content ">--}}
{{--            <div class="modal-header bg-white shadow shadow-sm">--}}
{{--                <h5 class="modal-title card-title" id="exampleModalLongTitle">{{ __('Create Page') }}</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <ul class="nav tabs-animated">--}}
{{--                    @foreach($data['langs'] as $key=>$lang)--}}
{{--                        <li class="nav-item">--}}
{{--                            <a role="tab" class="nav-link @if($key === 0) active @endif" id="tab-c1-{{$lang->id}}" data-bs-toggle="tab" href="#tab-animated1-{{$lang->id}}">--}}
{{--                                <span class="nav-text">{{$lang->country}}</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--                <div class="tab-content mt-3">--}}
{{--                    @foreach($data['langs'] as $key=>$lang)--}}
{{--                    <div class="tab-pane fade @if($key === 0) active show @endif" id="tab-animated1-{{$lang->id}}" role="tabpanel">--}}
{{--                        <div class="row">--}}
{{--                <form id="create_page_form" class="col-md-12 mx-auto" method="post" action="">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-2">--}}
{{--                            <div class="position-relative mb-3">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Menu') }}*</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10">--}}
{{--                            <div class="input-group">--}}
{{--                                <select name="select" id="GroupManage" class="form-select form-control">--}}
{{--                                    <option value="">Please choose an option</option>--}}
{{--                                    <option value="Solution">Solution</option>--}}
{{--                                    <option value="Mongolia manpower outsourcing">Mongolia manpower outsourcing</option>--}}
{{--                                    <option value="Portfolio">Portfolio</option>--}}
{{--                                    <option value="Service center">Service center</option>--}}
{{--                                    <option value="About us">About us</option>--}}
{{--                                </select>--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ __('Group Management') }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ __('Priority') }}</span>--}}
{{--                                </div>--}}
{{--                                <select name="select" id="Priority" class="form-select form-control">--}}
{{--                                    <option value="">Please choose an option</option>--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4">4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
{{--                            <div class="position-relative p-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Name') }}*</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Connection') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-3">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Url') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Code') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-5">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Content') }}</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10">--}}
{{--                            <input value="" maxlength="110" id="PageName" name="PageName" placeholder="with ABC a placeholder" class="form-control text-lowercase" />--}}
{{--                            <div class="jsp-connection p-3">--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Connection" value="Use" />--}}
{{--                                    <label class="form-check-label" for="inlineRadio1">Use</label>--}}
{{--                                </div>--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Connection" value="Not Used" />--}}
{{--                                    <label class="form-check-label" for="inlineRadio1">Not Used</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ config('app.url') }}</span>--}}
{{--                                </div>--}}
{{--                                <input value="" maxlength="110" id="PageUrl" name="PageUrl" placeholder="with ABC a placeholder" class="form-control text-lowercase" />--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <input value="" maxlength="110" placeholder="with ABC a placeholder" id="PageCode" name="PageCode" class="form-control text-lowercase" />--}}
{{--                            </div>--}}
{{--                            <div class="position-relative mb-3" id="CreatePage{{$lang->id}}" name="PageContent"></div>--}}
{{--                        </div>--}}
{{--                        <!--                    <div class="col-md-12 text-center mt-3">-->--}}
{{--                        <!--                        <button class="btn-wide mb-2 me-2 btn btn-outline-primary btn-lg">Save</button>-->--}}
{{--                        <!--                        <button class="btn-wide mb-2 me-2 btn btn-outline-dark btn-lg">List</button>-->--}}
{{--                        <!--                    </div>-->--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="modal-footer card-btm-border card-shadow-success border-success">--}}
{{--                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>--}}
{{--                <button type="button" class="btn btn-success createPageSubmit">{{ __('Save') }}</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!--create page management-->--}}
{{--@foreach($datas as $key=>$page)--}}
{{--    <div class="modal fade page-edit-{{$page->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-xl">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header bg-white shadow shadow-sm">--}}
{{--                <h5 class="modal-title card-title" id="exampleModalLongTitle">{{ __('Edit Page') }}</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form id="edit_page_form" class="col-md-12 mx-auto" method="post" action="">--}}
{{--                    <div class="row">--}}

{{--                        <div class="col-md-2">--}}
{{--                            <div class="position-relative mb-3">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Menu') }}*</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10">--}}
{{--                            <div class="input-group">--}}
{{--                                <select name="select" id="GroupManage" class="form-select form-control" value="{{$page->menu_group}}">--}}
{{--                                    <option>Solution</option>--}}
{{--                                    <option>Mongolia manpower outsourcing</option>--}}
{{--                                    <option>Portfolio</option>--}}
{{--                                    <option>Service center</option>--}}
{{--                                    <option>About us</option>--}}
{{--                                </select>--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ __('Group Management') }}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ __('Priority') }}</span>--}}
{{--                                </div>--}}
{{--                                <select name="select" id="Priority" class="form-select form-control">--}}
{{--                                    <option>{{$page->priority}}</option>--}}
{{--                                    <option>1</option>--}}
{{--                                    <option>2</option>--}}
{{--                                    <option>3</option>--}}
{{--                                    <option>4</option>--}}
{{--                                    <option>5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-2">--}}
{{--                            <div class="position-relative p-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Name') }}*</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Connection') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-3">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Url') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Code') }}</label>--}}
{{--                            </div>--}}
{{--                            <div class="position-relative p-2 mt-2">--}}
{{--                                <label for="exampleSelect" class="form-label">{{ __('Page Content') }}</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10">--}}
{{--                            <input value="{{$page->page_name}}" maxlength="110" id="PageName" placeholder="with ABC a placeholder" class="form-control text-lowercase" />--}}
{{--                            <div class="jsp-connection p-3">--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Connection" value="Use" />--}}
{{--                                    <label class="form-check-label" for="inlineRadio1">Use</label>--}}
{{--                                </div>--}}
{{--                                <div class="form-check form-check-inline">--}}
{{--                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Connection" value="Not Used" />--}}
{{--                                    <label class="form-check-label" for="inlineRadio1">Not Used</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <div class="input-group-text">--}}
{{--                                    <span class="">{{ config('app.url') }}</span>--}}
{{--                                </div>--}}
{{--                                <input value="{{$page->page_url}}" maxlength="110" id="PageUrl" placeholder="with ABC a placeholder" class="form-control text-lowercase" />--}}
{{--                            </div>--}}
{{--                            <div class="input-group mt-3 mb-3">--}}
{{--                                <input value="{{$page->page_code}}" maxlength="110" placeholder="with ABC a placeholder" id="PageCode" class="form-control text-lowercase" />--}}
{{--                            </div>--}}
{{--                            <div class="position-relative mb-3 w-100 editable" id="EditPage" name="EditPage" key="{{$page->id}}">--}}
{{--                                {{$page->page_content}}--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>--}}
{{--                <button type="button" class="btn btn-success createPageSubmit">{{ __('Save') }}</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--<!--edit page management-->--}}
{{--@endsection--}}
@section('script')
<script>
    $(document).ready(function () {
        let editor5;
        ClassicEditor.create(document.querySelector("#CreatePage1"))
            .then((newEditor) => {
                editor5 = newEditor;
            })


        $(".createPageSubmit").on("click", function () {
            const data = {
                GroupManage: $("#GroupManage").val(),
                Priority: $("#Priority").val(),
                PageName: $("#PageName").val(),
                Connection: $('input[name="inlineRadioOptions"]:checked').val(),
                PageUrl: $("#PageUrl").val(),
                PageCode: $("#PageCode").val(),
                PageContent: editor5.getData(),
                isEnable: 1,
            };
            console.log(data);
            Axios.post("/api/managepage/create", data)
                .then((resp) => {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener("mouseenter", Swal.stopTimer);
                            toast.addEventListener("mouseleave", Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        icon: "success",
                        title: resp.data.msg,
                    });
                })
                .catch((err) => {
                    console.log(err);
                });
        });
    });
</script>
<!--delete script-->
<script>
    $(document).ready(function() {

        $('.DeleteMenu').on('click', function () {
            Swal.fire({
                title: '{{__('Are you sure?')}}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: '{{__('Cancel')}}',
                confirmButtonText: '{{__('Yes Delete It!')}}'
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/managepage/delete/' + $(this).attr('key')).then(() => {
                        Swal.fire(
                            'Deleted',
                            'Your file has been deleted.',
                            'success'
                        )
                        $(this).closest('tr').fadeOut();
                    });
                }
            })
        });
    })
//   -- Reload page --
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
