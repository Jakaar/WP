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
                    <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-success card">
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
                    <div class="position-relative row mb-3">
                        <label for="headerlogo" class="form-label col-sm-2 col-form-label"><strong>Header logo file</strong></label>
                        <div class="col-sm-10">
<!--                            <input name="file" id="exampleFile" type="file" class="">-->
<!--                                                <small class="form-text text-muted">Click browse to choose logo-->
<!--                                                </small>-->
                            <label for="formFilesm" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
    </div>
    <div class="col-md-12">
        <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-c1-0"
                   data-bs-toggle="tab" href="#tab-animated1-0">
                    <span class="nav-text">Tab 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-c1-1"
                   data-bs-toggle="tab"  href="#tab-animated1-1">
                    <span class="nav-text">Tab 2</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-c1-2"
                   data-bs-toggle="tab" href="#tab-animated1-2">
                    <span class="nav-text">Tab 3</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                <div class="mb-3">
                    <label class="form-label" for="terms"><strong>Terms of Use</strong></label>
                    <div>
                        <textarea  name="terms" class="form-control" id="editor"  rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                <div class="mb-3">
                    <label class="form-label" for="privacy"><strong>Privacy statement</strong></label>
                    <div>
                        <textarea  class="form-control"  id="editor" name="privacy"  rows="6"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                <div class="mb-3">
                    <label class="form-label" for="rejection"><strong>Rejection of unauthorized collection of e-mail addresses</strong></label>
                    <div>
                        <textarea class="form-control" id="editor"  name="rejection"  rows="6"></textarea>
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
