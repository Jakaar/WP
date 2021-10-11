@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Site Information')}}
{{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
               <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
               <i class="pe-7s-refresh-2"></i>
               </button>
{{--               <div class="d-inline-block dropdown">--}}
{{--                  <button type="button" class="btn-shadow btn btn-success">--}}
{{--                  <span class="btn-icon-wrapper pe-2 opacity-7">--}}
{{--                  <i class="pe-7s-plus"></i>--}}
{{--                  </span>--}}
{{--                  {{__('Create Banner')}}--}}
{{--                  </button>--}}
{{--               </div>--}}
            </div>
        </div>
    </div>
    <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border ">
        <div class=" row">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title-heading fsize-2 text-capitalize fw-normal">{{ __('Company Information Setting') }}</div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="d-inline-block float-end">
                    <button id="siteInfoEditBtn" type="button" class="mt-2 btn btn-primary disabler">{{__('Edit')}}</button>
                    <button id="siteInfoSaveBtn" type="button" class="mt-2 btn btn-success siteInfoSubmit invisible">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
    <form id="siteInfoForm" class="col-md-12 mx-auto" method="post" action="" disabled="disabled">
        <fieldset disabled>
            <div class="row">
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Company Name</div>
                                <div>
                                    <input type="text" class="form-control" id="siteName" name="siteName">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Site Name</div>
                                <div>
                                    <input type="text" class="form-control" id="companyName" name="companyName" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-success border-success card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Fax Number</div>
                                <div>
                                    <input type="text" class="form-control" id="fax" name="fax" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-success card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Company Registration Number</div>
                                <div>
                                    <input type="text" class="form-control" id="companyRegister" name="companyRegister" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-success card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Personal Information Manager</div>
                                <div>
                                    <input type="text" class="form-control" id="personalInformation" name="personalInformation" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-warning card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Bussiness Address</div>
                                <div>
                                    <input type="text" class="form-control" id="address" name="address" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-warning card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Phone Number</div>
                                <div>
                                    <input type="text" class="form-control" id="phone" name="phone" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-danger card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Representative Email</div>
                                <div>
                                    <input type="text" class="form-control" id="email" name="email" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-danger card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Copyright</div>
                                <div>
                                    <input type="text" class="form-control" id="copyright" name="copyright" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative mb-5 mt-3">
                        <input type="hidden" name="logo" id="logo-photo">
                        <button type="button" class="btn btn-outline-info" onclick="filemanager.selectFile('logo-photo')">
                            {{__('Logo Select')}}</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-danger card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">{{__('Logo')}}</div>
                                <div>
                                    <img class="w-100" src="" id="logo-photo-preview" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header card-header-tab-animation">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab-eg115-0" class="active nav-link">Terms of Use</a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab-eg115-1" class="nav-link">Privacy statement</a>
                            </li>
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab-eg115-2" class="nav-link">Rejection of unauthorized collection of e-mail addresses</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-5">
                        <div class="tab-pane active" id="tab-eg115-0" role="tabpanel">
                            <div class="mb-3 mt-3">
                                <!--                    <label class="form-label" for="terms"><strong>Terms of Use</strong></label>-->
                                <div id="SiteInfoeditor1" >
                                    <textarea  name="terms" class="form-control mt-3" id="terms" name="terms"  rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-eg115-1" role="tabpanel">
                            <div class="mb-3 mt-3">
                                <!--                    <label class="form-label" for="privacy"><strong>Privacy statement</strong></label>-->
                                <div id="SiteInfoeditor2">
                                    <textarea  class="form-control mt-3" id="privacy" name="privacy"  rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-eg115-2" role="tabpanel">
                            <div class="mb-3 mt-3">
                                <!--                    <label class="form-label" for="rejection"><strong>Rejection of unauthorized collection of e-mail addresses</strong></label>-->
                                <div id="SiteInfoeditor3">
                                    <textarea class="form-control mt-3" id="rejection"  name="rejection"  rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
