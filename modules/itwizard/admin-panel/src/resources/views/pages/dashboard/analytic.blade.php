@extends('Admin::layouts.master')

@section('title'){{__('Analyse')}} @endsection

@section('content')
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">Product</div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-subheading">{{__('Total Products')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4 text-success">
                                    <small class="opacity-5">+</small>
                                    {{$dataC['total_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                        <span class="text-success ps-2">+14%</span>
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
                    <h6 class="widget-subheading">{{__('New Products')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4 text-danger">
                                    <small class="opacity-5 text-muted"><i class="fa fa-angle-up"></i></small>
                                    {{$dataC['new_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                        <span class="text-danger ps-2">
                                            <span class="pe-1">
                                                <i class="fa fa-angle-up"></i>
                                            </span>
                                            8%
                                        </span>
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
                    <h6 class="widget-subheading">{{__('Active Status Product')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <span class="text-success pe-2">
                                        <i class="fa fa-angle-down"></i>
                                    </span>
                                    <small class="opacity-5">$</small>
                                    {{$dataC['active_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                        <span class="text-success ps-2">
                                            <span class="pe-1">
                                                <i class="fa fa-angle-down"></i>
                                            </span>
                                            15%
                                        </span>
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
                    <h6 class="widget-subheading">{{__('Inactive Product')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <small class="opacity-5">$</small>
                                    {{$dataC['inactive_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                        <span class="text-warning ps-2">+76%</span>
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
    <div class="col-md-12 col-lg-12 mb-3">
        <div class="card ">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active fade show" id="tab-content-income" role="tabpanel">
                        <h5 class="menu-header-title">Target Sales</h5>
                        <h6 class="menu-header-subtitle opacity-6">Total performance for this month</h6>
                        <div class="mt-3 row">
                            <div class="col-sm-12 col-md-6">
                                <div class="card-border mb-sm-3 mb-md-0 border-light no-shadow card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Orders</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers line-height-1 text-primary">
                                                        <span>366</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-progress-wrapper mt-1">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;">
                                                    </div>
                                                </div>
                                                <div class="progress-sub-label">
                                                    <div class="sub-label-left">Monthly Target</div>
                                                    <div class="sub-label-right">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card-border border-light no-shadow card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Income</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers line-height-1 text-success">
                                                        <span>$2797</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-progress-wrapper mt-1">
                                                <div class="progress-bar-xs progress-bar-animated progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;">
                                                    </div>
                                                </div>
                                                <div class="progress-sub-label">
                                                    <div class="sub-label-left">Monthly Target</div>
                                                    <div class="sub-label-right">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-content-expenses" role="tabpanel">
                        <h5 class="menu-header-title">Tabbed Content</h5>
                        <h6 class="menu-header-subtitle opacity-6">
                            Example of various options built with
                            ArchitectUI
                        </h6>
                        <div class="mt-3 row">
                            <div class="col-sm-12 col-md-6">
                                <div class="card-hover-shadow-2x mb-sm-3 mb-md-0 widget-chart widget-chart2 bg-premium-dark text-start card">
                                    <div class="widget-chart-content text-white">
                                        <div class="widget-chart-flex">
                                            <div class="widget-title">Sales</div>
                                            <div class="widget-subtitle opacity-7">Monthly Goals</div>
                                        </div>
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers text-success">
                                                <small>$</small>
                                                976
                                                <small class="opacity-8 ps-2">
                                                    <i class="fa fa-angle-up"></i>
                                                </small>
                                            </div>
                                            <div class="widget-description ms-auto opacity-7">
                                                <i class="fa fa-angle-up"></i>
                                                <span class="ps-1">175%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card-hover-shadow-2x widget-chart widget-chart2 bg-premium-dark text-start card">
                                    <div class="widget-chart-content text-white">
                                        <div class="widget-chart-flex">
                                            <div class="widget-title">Clients</div>
                                            <div class="widget-subtitle text-warning">Returning</div>
                                        </div>
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers text-warning">
                                                84
                                                <small>%</small>
                                                <small class="opacity-8 ps-2">
                                                    <i class="fa fa-angle-down"></i>
                                                </small>
                                            </div>
                                            <div class="widget-description ms-auto text-warning">
                                                <span class="pe-1">45</span>
                                                <i class="fa fa-angle-up"></i>
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
    </div>
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">User</div>
</div>
<div class="row">

    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 widget-chart-hover text-start mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('Total user')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                                        <span class="opacity-10 text-success pe-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </span>
                                {{-- {!! $data['users_count'] !!} --}}
                                {{$dataC['users']}}
                                <small class="opacity-5 ps-1">명</small>
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-danger border-danger card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('New User')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                                        <span class="opacity-10 text-success pe-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </span>
                                {{ $dataC['new_user'] }}
                                <small class="opacity-5 ps-1">명</small>
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-danger-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-warning border-warning card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('Total Admin')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pe-1">+</small>
                                {{$dataC['total_admin'] }}
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-warning-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('This week visited')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pe-1">+</small>
                                34
                                <!--                                    <small class="opacity-5 ps-1">hires</small>-->
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-success-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                        {{__('Traffic Sources')}}
                    </div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <button class="btn btn-warning">{{__('Actions')}}</button>
                    </div>
                </div>
                <div class="pt-0 card-body">
                    <div id="chart-combined"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('Income')}}</div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group">
                            <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="lnr-cog btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                 class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu dropdown-menu-right">
                                <h6 tabindex="-1" class="dropdown-header">
                                    {{__('Header')}}
                                </h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-inbox"></i>
                                    <span>{{__('Menus')}}</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>
                                    <span>{{__('Settings')}}</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-book"></i>
                                    <span>{{__('Actions')}}</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-1 text-end">
                                    <button class="me-2 btn-shadow btn-sm btn btn-link">{{__('View Details')}}</button>
                                    <button class="me-2 btn-shadow btn-sm btn btn-primary">{{__('Action')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-0 card-body">
                    <div id="chart-radial"></div>
                    <div class="widget-content pt-0 w-100">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pe-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 32%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">{{__('Spendings Target')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
        <div class="card-header-title fsize-2 text-capitalize fw-normal">{{__('Target Section')}}</div>
        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
            <button class="btn btn-link btn-sm">{{__('View Details')}}</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-content p-0 w-100">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left pe-2 fsize-1">
                                <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                            </div>
                            <div class="widget-content-right w-100">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71"
                                         aria-valuemin="0" aria-valuemax="100"  style="width: 71%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">{{__('Income Target')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-content p-0 w-100">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left pe-2 fsize-1">
                                <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                            </div>
                            <div class="widget-content-right w-100">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">{{__('Expenses Target')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-content p-0 w-100">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left pe-2 fsize-1">
                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                            </div>
                            <div class="widget-content-right w-100">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 32%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">{{__('Spendings Target')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                <div class="widget-content p-0 w-100">
                    <div class="widget-content-outer">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left pe-2 fsize-1">
                                <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                            </div>
                            <div class="widget-content-right w-100">
                                <div class="progress-bar-xs progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left fsize-1">
                            <div class="text-muted opacity-6">{{__('Totals Target')}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('Total Sales')}}</div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="lnr-cog btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                 class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header">{{__('Header')}}</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-inbox"></i>
                                    <span>{{__('Menus')}}</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"></i>
                                    <span>{{__('Settings')}}</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-book"></i>
                                    <span>{{__('Actions')}}</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-1 text-end">
                                    <button class="me-2 btn-shadow btn-sm btn btn-link">{{__('View Details')}}</button>
                                    <button class="me-2 btn-shadow btn-sm btn btn-primary">{{__('Action')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-col-1"></div>
                </div>
                <div class="p-0 d-block card-footer">
                    <div class="grid-menu grid-menu-2col">
                        <div class="g-0 row">
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-car text-primary opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Admin')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-bullhorn text-danger opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Blog')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-bug text-success opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Register')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-heart text-warning opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Directory')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('Daily Sales')}}</div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <button class="btn-wide btn-outline-2x btn btn-outline-focus btn-sm">{{__('View All')}}</button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart-col-2"></div>
                </div>
                <div class="p-0 d-block card-footer">
                    <div class="grid-menu grid-menu-2col">
                        <div class="g-0 row">
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-apartment text-dark opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Overview')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-database text-dark opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Support')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-printer text-dark opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Activities')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                    <i class="lnr-store text-dark opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Marketing')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('Total Expenses')}}</div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <button class="btn-wide btn-outline-2x btn btn-outline-primary btn-sm">{{__('View All')}}</button>
                    </div>
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
                                    {{__('Accounts')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                    <i class="lnr-construction text-warning opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Contacts')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-info">
                                    <i class="lnr-bus text-info opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Products')}}
                                </button>
                            </div>
                            <div class="p-2 col-sm-6">
                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-alternate">
                                    <i class="lnr-gift text-alternate opacity-7 btn-icon-wrapper mb-2"></i>
                                    {{__('Services')}}
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
            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                {{__('Company Agents Status')}}
            </div>
            <div class="btn-actions-pane-right">
                <button type="button" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    {{__('Actions Menu')}}
                    <span class="ps-2 align-middle opacity-7">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">{{__('Avatar')}}</th>
                    <th class="text-center">{{__('Name')}}</th>
                    <th class="text-center">{{__('Company')}}</th>
                    <th class="text-center">{{__('Status')}}</th>
                    <th class="text-center">{{__('Due Date')}}</th>
                    <th class="text-center">{{__('Target Achievement')}}</th>
                    <th class="text-center">{{__('Actions')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#54</td>
                    <td class="text-center" style="width: 80px;">
<!--                        <img width="40" class="rounded-circle" src="/public/aPanel/imgs/1.jpg" alt="">-->
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Juan C. Cargill</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Micro Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-danger">Canceled</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-danger">71%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 aria-valuenow="71" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 71%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#55</td>
                    <td class="text-center" style="width: 80px;">
<!--                        <img width="40" class="rounded-circle" src="images/avatars/3.jpg" alt="">-->
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Johnathan Phelan</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Hatchworks</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-info">On Hold</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        15 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-warning">54%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-warning"
                                                 role="progressbar" aria-valuenow="54"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
<!--                        <img  width="40" class="rounded-circle" src="images/avatars/2.jpg" alt="">-->
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Darrell Lowe</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Riddle Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-warning">In Progress</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        6 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-success">97%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-success"
                                                 role="progressbar"  aria-valuenow="97"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
<!--                        <img width="40" class="rounded-circle" src="images/avatars/1.jpg" alt="">-->
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">George T. Cottrell</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Pixelcloud</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-success">Completed</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        19 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-info">88%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 aria-valuenow="88" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 88%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="d-block p-4 text-center card-footer">
            <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-dark btn-lg">
                                    <span class="me-2 opacity-7">
                                        <i class="fa fa-cog fa-spin"></i>
                                    </span>
                <span class="me-1">View Complete Report</span>
            </button>
        </div>
    </div>
@endsection
@section('script')
<script>
    // analytic new account
    $(".circle-progress-gradient-alt-sm")
        .circleProgress({
             value: 0,
            size: 46,
            lineCap: "round",
            fill: { gradient: ["#007bff", "#16aaff"] },
        })
        .on("circle-animation-progress", function (event, progress, stepValue) {
            $(this)
                .find("small")
                .html("<span>" + stepValue.toFixed(0) + "<span>");
        });
    // combined charts
    var options777 = {
        chart: {
            height: 397,
            type: 'line',
            // toolbar: {
            //     show: false,
            // }
        },
        series: [{
            name: 'Website Blog',
            type: 'column',
            data: [40, 5, 14, 71, 27, 13, 1, 52, 52, 20, 57, 60]
        }, {
            name: 'Social Media',
            type: 'line',
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
        stroke: {
            width: [0, 4]
        },
        // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        // labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
        xaxis: {
            type: 'datetime'
        },
        yaxis: [{
            title: {
                text: 'Website Blog',
            },

        }, {
            opposite: true,
            title: {
                text: 'Social Media'
            }
        }]

    };

    $(document).ready(function (){
         Axios.post('/api/dashboard/GetContent').then((resp)=>{

              // window.asd = resp.data.labels
             const getData = async () => {
                  var GG = resp.data.labels;
                  return GG;
             }
             getData().then(GG=> console.log(GG))
             // return asd;

         }).catch((err)=>{

         })
        const data = [440, 505];
        const options777 = {
            chart: {
                height: 397,
                type: 'line',
                // toolbar: {
                //     show: false,
                // }
            },
            series: [{
                name: 'Content',
                type: 'column',
                data: data
            }],
            stroke: {
                width: [0, 4]
            },
            // labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
             labels: [
                '01 Jan 2001',
                '02 Jan 2001',
                '03 Jan 2001',
                '04 Jan 2001',
                '05 Jan 2001',
                '06 Jan 2001',
                '07 Jan 2001',
                '08 Jan 2001',
                '09 Jan 2001',
                '10 Jan 2001',
                '11 Jan 2001',
                '12 Jan 2001'
            ],

            xaxis: {
                type: 'datetime'
            },
            yaxis: [{
                title: {
                    text: 'Content',
                },

            }]

        };


        const chart777 = new ApexCharts(
            document.querySelector("#chart-combined"),
            options777
        );
        chart777.render();
    })
</script>
@endsection
