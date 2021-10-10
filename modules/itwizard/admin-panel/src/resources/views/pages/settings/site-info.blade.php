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
    {{--    <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                    {{__('Create Banner')}}
                </button>
            </div>
        </div> --}}
    </div>
</div>
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">{{ __('Company Information Setting') }}</div>
</div>
        <form id="signupForm" class="col-md-12 mx-auto" method="post" action="">
            <fieldset >
            <div class="row">
                <div class="col-md-4 col-lg-6">
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content">
                                <div class="widget-title opacity-5 text-uppercase mb-3">Company Name</div>
                                <div>
                                    <input type="text" class="form-control" id="sitename" name="sitename">
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
                                    <input type="text" class="form-control"
                                           id="companyname" name="companyname" >
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
                                    <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                        <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                    <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                        <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                    <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                    <input type="text" class="form-control" id="companyname" name="companyname" >
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
                                    <input type="text" class="form-control" id="companyname" name="companyname" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="row">
                    <div class="position-relative row mb-5 mt-3">
                        <label for="headerlogo" class="form-label col-sm-2 col-form-label"><strong>Logo file</strong></label>
                        <div class="col-sm-10">
<!--                            <input name="file" id="exampleFile" type="file" class="">-->
<!--                                                <small class="form-text text-muted">Click browse to choose logo-->
<!--                                                </small>-->
<!--                            <label for="formFilesm" class="form-label">Default file input example</label>-->
                            <input class="form-control" type="file" id="formFile" accept="image/png, image/gif, image/jpeg" >
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
        <div class="tab-content">
            <div class="tab-pane active" id="tab-eg115-0" role="tabpanel">
                <div class="mb-3 mt-3">
<!--                    <label class="form-label" for="terms"><strong>Terms of Use</strong></label>-->
                    <div id="SiteInfoeditor1" >
                        <textarea  name="terms" class="form-control mt-3" id="SiteInfoeditor"  rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-eg115-1" role="tabpanel">
                <div class="mb-3 mt-3">
<!--                    <label class="form-label" for="privacy"><strong>Privacy statement</strong></label>-->
                    <div id="SiteInfoeditor2">
                        <textarea  class="form-control mt-3"  id="SiteInfoeditor" name="privacy"  rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-eg115-2" role="tabpanel">
                <div class="mb-3 mt-3">
<!--                    <label class="form-label" for="rejection"><strong>Rejection of unauthorized collection of e-mail addresses</strong></label>-->
                    <div id="SiteInfoeditor3">
                        <textarea class="form-control mt-3" id="SiteInfoeditor"  name="rejection"  rows="6"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </fieldset>
            <div class="mb-3 text-center">
                <button type="submit" class="ladda-button mb-2 btn btn-primary" name="save" value="save" data-style="expand-left">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-diskette icon-gradient bg-heavy-rain"></i>
                    </span>
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
