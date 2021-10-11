@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-album icon-gradient bg-sunny-morning"></i>
                </div>
                <div>
                    {{__('Galleries')}}
{{--                    <div class="page-title-subheading">Create easy and beautiful slideshows with these React components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                        {{__('Create Gallery')}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="main-card mb-3 card">
                <div class="card-header">
{{--                    <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"></i>--}}
                    Art <a href="#!"><small class="text-muted"> ( 36 {{__('Photos')}}...)</small></a>
                </div>
                <div class="card-body menu-header-image" style="background-image: url({{asset('aPanel/imgs/abstract5.jpg')}});
                    max-height: 300px;
                    min-height: 200px;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    filter: grayscale(80%);
                    ">
                </div>
                <div class="d-block text-end card-footer">
                    <div class="widget-content-right">
                        <button class="border-0 btn-transition btn btn-outline-info">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button class="border-0 btn-transition btn btn-outline-danger">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="main-card mb-3 card">
                <div class="card-header">
{{--                    <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"></i>--}}
                    Technologies <a href="#!"><small class="text-muted"> ( 14 {{__('Photos')}}...)</small></a>
                </div>
                <div class="card-body menu-header-image" style="background-image: url({{asset('aPanel/imgs/abstract6.jpg')}});
                    max-height: 300px;
                    min-height: 200px;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    filter: grayscale(80%);
                    ">
                </div>
                <div class="d-block text-end card-footer">
                    <div class="widget-content-right">
                        <button class="border-0 btn-transition btn btn-outline-info">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button class="border-0 btn-transition btn btn-outline-danger">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    {{--                    <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"></i>--}}
                    Science <a href="#!"><small class="text-muted"> ( 36 {{__('Photos')}}...)</small></a>
                </div>
                <div class="card-body menu-header-image" style="background-image: url({{asset('aPanel/imgs/nightcolors.jpg')}});
                    max-height: 300px;
                    min-height: 200px;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    filter: grayscale(80%);
                    ">
                </div>
                <div class="d-block text-end card-footer">
                    <div class="widget-content-right">
                        <button class="border-0 btn-transition btn btn-outline-info">
                            <i class="fa fa-pen"></i>
                        </button>
                        <button class="border-0 btn-transition btn btn-outline-danger">
                            <i class="fa fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
