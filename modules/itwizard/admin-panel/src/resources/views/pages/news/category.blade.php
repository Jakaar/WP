@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-th-large icon-gradient bg-malibu-beach"></i>
                </div>
                <div>
                    {{__('Category')}}
                    {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                        {{__('Create Category')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">+</small>
                                        {{__('Science')}}
                                    </div>
                                    <div class="ms-auto">
                                        <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                            <span class="text-success ps-2">157 <small>{{__('News')}} ...</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">+</small>
                                        {{__('Technologies')}}
                                    </div>
                                    <div class="ms-auto">
                                        <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                            <span class="text-success ps-2">87 <small>{{__('News')}} ...</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">+</small>
                                        {{__('Art')}}
                                    </div>
                                    <div class="ms-auto">
                                        <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                            <span class="text-success ps-2">30 <small>{{__('News')}} ...</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">+</small>
                                        {{__('Art')}}
                                    </div>
                                    <div class="ms-auto">
                                        <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                            <span class="text-success ps-2">30 <small>{{__('News')}} ...</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fa fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers mb-0 w-100">
                                <div class="widget-chart-flex">
                                    <div class="fsize-4">
                                        <small class="opacity-5">+</small>
                                        {{__('Art')}}
                                    </div>
                                    <div class="ms-auto">
                                        <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                            <span class="text-success ps-2">30 <small>{{__('News')}} ...</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
