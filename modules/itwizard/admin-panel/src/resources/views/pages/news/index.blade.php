@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('News')}}
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
                        {{__('Create News')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="order-lg-1 order-sm-2 col-lg-8">
{{--            <div class="d-flex flex-wrap justify-content-between">--}}
{{--                <div>--}}
{{--                    <button type="button" class="btn btn-shadow btn-wide btn-primary">--}}
{{--                                    <span class="btn-icon-wrapper pe-2 opacity-7">--}}
{{--                                        <i class="fa fa-plus fa-w-20"></i>--}}
{{--                                    </span>--}}
{{--                        New thread--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-3 p-0 mb-3">--}}
{{--                    <input type="text" class="form-control" placeholder="Search...">--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="card mb-3">
                <div class="card-header ps-0 pe-0">
                    <div class="row g-0 w-100 align-items-center">
                        <div class="col-8">
                            <div class="row g-0 align-items-center">

                                <div class="row">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        {{__('Last news')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 text-muted">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">{{__('Comments')}}</div>
                                <div class="col-8">{{__('Date')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col-1">
                            <a href="javascript:void(0);" class="avatar-icon-wrapper btn-hover-shine avatar-icon-xl">
                                <div class="avatar-icon rounded">
                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Sed scelerisque justo elit, sed maximus arcu fringilla at</a>
                            <span class="badge bg-success align-text-bottom ms-1">Solved</span>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Allie Rodriguez</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">12</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/2.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Leon Wilson</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Sed scelerisque justo elit, sed maximus arcu fringilla at</a>
                            <span class="badge bg-success align-text-bottom ms-1">Solved</span>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Allie Rodriguez</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">43</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/3.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Allie Rodriguez</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Donec lobortis molestie sem, ac consectetur turpis egestas quis</a>
                            <span class="badge bg-default align-text-bottom ms-1">Locked</span>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Kenneth Frazier</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">42</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/4.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Kenneth Frazier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Donec tellus nibh, efficitur a interdum id, vulputate ultrices mi</a>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Nellie Maxwell</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">632</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/5.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Nellie Maxwell</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Pellentesque in consequat erat</a>
                            <span class="badge bg-secondary align-text-bottom ms-1">Closed</span>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Mae Gibson</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">53</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/6.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Mae Gibson</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Vivamus maximus lectus sed finibus pellentesque</a>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Alice Hampton</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">33</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/7.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Alice Hampton</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Nullam luctus eget odio in bibendum</a>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Hallie Lewis</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">58</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/8.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Hallie Lewis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Donec rutrum metus mi, eget consequat metus posuere non</a>
                            <span class="badge bg-success align-text-bottom ms-1">Solved</span>
                            <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Amanda Warner</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">134</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/8.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Amanda Warner</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Integer eu tortor purus</a>
                            <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Wayne Morgan</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">32</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/9.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Wayne Morgan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body py-3">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a href="javascript:void(0)" class="text-big">Nullam luctus eget odio in bibendum</a>
                            <span class="badge bg-danger align-text-bottom ms-1">Hot!</span>
                            <div class="text-muted small mt-1">
                                Started 25 days ago &nbsp;·&nbsp;
                                <a href="javascript:void(0)" class="text-muted">Belle Ross</a>
                            </div>
                        </div>
                        <div class="d-none d-md-block col-4">
                            <div class="row g-0 align-items-center">
                                <div class="col-4">12</div>
                                <div class="d-flex col-8 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img style="width: 40px; height: auto;" src="images/avatars/6.jpg"
                                             alt="" class="d-block ui-w-30 rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 flex-truncate ms-2">
                                        <div class="line-height-1 text-truncate">1 day ago</div>
                                        <a href="javascript:void(0)" class="text-muted small text-truncate">by Belle Ross</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-lg-2 order-sm-1 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('News Statistic')}}</div>
                </div>
                <div class="card-body">
                    <div id="chart-col-3"></div>
                </div>
                <div class="p-0 d-block card-footer">
                    <div class="grid-menu grid-menu-2col">
                        <div class="g-0 row">
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                    <i class="lnr-lighter text-success opacity-7 btn-icon-wrapper mb-2"></i>
                                    Accounts
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-info">
                                    <i class="lnr-bus text-info opacity-7 btn-icon-wrapper mb-2"></i>
                                    Products
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                        {{__('Visitors')}}
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-col-2"></div>
                </div>
                <div class="p-0 d-block card-footer">
                    <div class="grid-menu grid-menu-2col">
                        <div class="g-0 row">
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                    <i class="lnr-construction text-warning opacity-7 btn-icon-wrapper mb-2"></i>
                                    Contacts
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-alternate">
                                    <i class="lnr-gift text-alternate opacity-7 btn-icon-wrapper mb-2"></i>
                                    Services
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-header">
            <i class="header-icon lnr-license icon-gradient bg-tempting-azure"></i>
            {{__('All News')}}
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="NewsTable" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('Short Desc')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Created At')}}</th>
                    <th>{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>테스트 뉴스입니다</th>
                    <td>
                        <button class="mb-2 me-2 border-0 btn-transition btn btn-shadow btn-outline-danger">Technologies</button>
                    </td>
                    <td class="w-50">
                        <div class="">
                            <div class="text--muted text-wrap small">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis consectetur eaque, eius eos, fugit illum magnam mollitia nam praesentium sequi ut veritatis voluptates. Ad fuga quibusdam temporibus veniam veritatis?
                            </div>
                        </div>

                    </td>
                    <td>
                        <button class="mb-2 me-2 btn btn-success">{{__('Published')}}</button>
                    </td>
                    <td>
                        2021/10/17
                    </td>
                    <td>
                        <div class="widget-content-right">
                            <button class="border-0 btn-transition btn btn-outline-info">
                                <i class="fa fa-pen"></i>
                            </button>
                            <button class="border-0 btn-transition btn btn-outline-danger">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>테스트 뉴스입니다</th>
                    <td>
                        <button class="mb-2 me-2 border-0 btn-transition btn btn-shadow btn-outline-success">science</button>
                    </td>
                    <td class="w-50">
                        <div class="">
                            <div class="text--muted text-wrap small">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis consectetur eaque, eius eos, fugit illum magnam mollitia nam praesentium sequi ut veritatis voluptates. Ad fuga quibusdam temporibus veniam veritatis?
                            </div>
                        </div>

                    </td>
                    <td>
                        <button class="mb-2 me-2 btn btn-danger">{{__('Disabled')}}</button>
                    </td>
                    <td>
                        2021/10/17
                    </td>
                    <td>
                        <div class="widget-content-right">
                            <button class="border-0 btn-transition btn btn-outline-info">
                                <i class="fa fa-pen"></i>
                            </button>
                            <button class="border-0 btn-transition btn btn-outline-danger">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>테스트 뉴스입니다</th>
                    <td>
                        <button class="mb-2 me-2 border-0 btn-transition btn btn-shadow btn-outline-info">Music</button>
                    </td>
                    <td class="w-50">
                        <div class="">
                            <div class="text--muted text-wrap small">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis consectetur eaque, eius eos, fugit illum magnam mollitia nam praesentium sequi ut veritatis voluptates. Ad fuga quibusdam temporibus veniam veritatis?
                            </div>
                        </div>

                    </td>
                    <td>
                        <button class="mb-2 me-2 btn btn-warning">{{__('UnPublished')}}</button>
                    </td>
                    <td>
                        2021/10/17
                    </td>
                    <td>
                        <div class="widget-content-right">
                            <button class="border-0 btn-transition btn btn-outline-info">
                                <i class="fa fa-pen"></i>
                            </button>
                            <button class="border-0 btn-transition btn btn-outline-danger">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Category')}}</th>
                    <th>{{__('Short Desc')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Created At')}}</th>
                    <th>{{__('Actions')}}</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
