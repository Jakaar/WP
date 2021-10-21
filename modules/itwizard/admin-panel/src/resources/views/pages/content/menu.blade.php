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
                        {{__('Menu Create')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-title">Menus</div>
            <div class="main-card mb-3 p-2 card">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                            @foreach($categories as $category)
                                @if(count($category->childrenCategories) > 0)
                                    <li class="">
                                        <a href="#" aria-expanded="false">
{{--                                            <i class="metismenu-icon pe-7s-plugin"></i>--}}
                                            {{$category->name}}
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            <button key="{{$category->id}}" class="btn btn-success navBtns CreateSubMenu"><i class="pe-7s-plus"></i></button>
                                            <button key="{{$category->id}}" class="btn btn-danger navBtns DeleteMenu"><i class="pe-7s-trash"></i></button>
                                        </a>
                                        <ul class="mm-collapse" style="height: 7.04px;">
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('Admin::pages.content.child_category', ['child_category' => $childCategory])
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a href="#" class="GetContent" key="{{$category->id}}">
                                            {{ $category->name }}
                                        </a>
                                        <button key="{{$category->id}}" class="btn btn-success navBtns CreateSubMenu"><i class="pe-7s-plus"></i></button>
                                        <button key="{{$category->id}}" class="btn btn-danger navBtns DeleteMenu"><i class="pe-7s-trash"></i></button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-9">
            <div class="card-title">{{__('Content')}}</div>
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
    <div id="CreateMenuMoad" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <div class="col-md-6">
                                <h5 class="card-title">{{__('Board Type')}}</h5>
                                <select id="BoardType" class="multiselect-dropdown form-control">
                                    <option value="" selected disabled>{{__('Choose')}}</option>

                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Comment')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noComment" name="isComment" value="1" checked>
                                    <label class="form-check-label" for="noComment">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesComment" name="isComment" value="0">
                                    <label class="form-check-label" for="yesComment">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateBoard">{{__('Create')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $('.ModalShow').click(function (){
                $('#CreateMenuMoad').modal('show');
            });
            $('.GetContent').on('click', function (){
               Axios.post('/api/GetContentData/'+$(this).attr('key')).then((resp) => {
                   console.log(resp.data.data)
                   $('#ContentData').html(resp.data.data)
               })
            });
            $('.CreateSubMenu').on('click', function (){
                console.log($(this).attr('key'))
            })
            $('.DeleteMenu').on('click', function (){
                Axios.post('/api/DeleteMenu/'+$(this).attr('key')).then((resp)=>{
                    alert('deleted')
                })
            })
        });
    </script>
@endsection
