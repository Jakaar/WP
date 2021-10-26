@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Content & Menu')}}
{{--                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                      <span class="btn-icon-wrapper pe-2 opacity-7">
                      <i class="pe-7s-plus"></i>
                      </span>
                        {{__('Create Main Menu')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card-title">Menus</div>
            <div class="main-card mb-3 p-2 card">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            @foreach($categories as $category)
                                @if(count($category->childrenCategories) > 0)
                                    <li class="">
                                        <a href="#" aria-expanded="false">
                                            <i class="metismenu-icon pe-7s-less"></i>
                                                {{$category->name}}
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            <span class="">
                                                <button key="{{$category->id}}" class="btn btn-outline-success float-end navBtns ModalShow">
                                                    <i class="pe-7s-plus"></i>
                                                </button>
                                            </span>
                                            <span class="">
                                                <button key="{{$category->id}}" class="btn btn-outline-danger float-end navBtns DeleteMenu">
                                                    <i class="pe-7s-trash"></i>
                                                </button>
                                            </span>
                                        </a>
                                        <ul class="mm-collapse" style="height: 7.04px;">
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('Admin::pages.user_menu.child_category', ['child_category' => $childCategory])
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a href="#" class="GetContent" key="{{$category->id}}">
                                            <i class="metismenu-icon pe-7s-less"></i>
                                            {{ $category->name }}
                                            <span class="">
                                            <button key="{{$category->id}}" class="btn btn-outline-success float-end navBtns ModalShow">
                                                <i class="pe-7s-plus"></i>
                                            </button>
                                            </span>
                                            <span class="">
                                            <button key="{{$category->id}}" class="btn btn-outline-danger float-end navBtns DeleteMenu">
                                                <i class="pe-7s-trash"></i>
                                            </button>
                                        </span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-title">{{__('Details')}}</div>
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div id="ContentData">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <div id="CreateMenuModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
                            {{--                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>--}}
                            {{__('Create Board')}}
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="CrtBrd">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <h5 class="card-title">{{__('Name')}}</h5>
                                    <input name="" id="BoardName" placeholder="" type="email" class="form-control">
                                </div>
                            </div>
{{--                            <div class="col-md-6">--}}
{{--                                <h5 class="card-title">{{__('Board Type')}}</h5>--}}
{{--                                <select id="BoardType" class="multiselect-dropdown form-control">--}}
{{--                                    <option value="" selected disabled>{{__('Choose')}}</option>--}}

{{--                                </select>--}}
{{--                            </div>--}}
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Window')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="blank" name="target" value="1" >
                                    <label class="form-check-label" for="blank">{{__('Current Tab')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="current" name="target" value="0" checked>
                                    <label class="form-check-label" for="current">{{__('New Tab')}}</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateMenu">{{__('Create')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $('.ModalShow').click(function (){
                $('#CreateMenuModal').attr('key',$(this).attr('key')).modal('show');
                localStorage.setItem('MenuParentId', $(this).attr('key'));
            });
            $('.CreateMenu').on('click', function () {
                const data = {
                    MenuName: $('#BoardName').val(),
                    OpenType: $("input[name='target']:checked").val(),
                    parent_id: $('#CreateMenuModal').attr('key')
                };
                Axios.post('/api/CreateMenu', data).then((resp) => {
                    Toast.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });

                    $('#CreateMenuModal').modal('hide').removeAttr('key');
                    setTimeout(function (){
                        location.reload()
                    },2000);
                });
            });
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
                        Axios.post('/api/DeleteMenu/' + $(this).attr('key')).then((resp) => {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        });
                    }
                })
            });
        });
    </script>
@endsection
