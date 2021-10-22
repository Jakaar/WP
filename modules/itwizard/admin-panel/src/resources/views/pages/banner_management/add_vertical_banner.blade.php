@extends('Admin::layouts.master')
@section('content')
<style>
    .ck-editor__editable {
        min-height: 100px;
    }
    iframe {
        width:  100%;
        height: 100%;
    }
</style>
<section>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Add Vertical Banner')}}

                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                   <div class="d-inline-block dropdown" onclick="window.location.href='/cms/banner_management/vertical_banner'">
                      <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow">
                      <span class="btn-icon-wrapper pe-2 opacity-7">
                      <i class="pe-7s-plus"></i>
                      </span>
                      {{__('Cancel')}}
                      </button>
                   </div>
            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">

            <h5 class="card-title">{{__('Add Vertical Banner')}}</h5>
                <form class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Design Method')}}</label>
                                <select name="select" id="exampleSelect" class="form-select form-control">
                                    <option>Image</option>
                                    <option>Html</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">{{__('Whether Or Not To Use')}}*</label>
                                <div class="position-relative">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Used')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Not Used')}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Banner Group')}}</label>
                                <select name="select" id="exampleSelect" class="form-select form-control">
                                    <option>MainBanner</option>
                                    <option selected>Vertical</option>
                                    <option>Horizontal</option>
                                    <option>leftBanner</option>
                                    <option>Left</option>
                                    <option>Right</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Priority')}}</label>
                                <select name="select" id="exampleSelect" class="form-select form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                                <label for="exampleEmail11" class="form-label">{{__('Link Address')}}</label>
                                <input name="title" placeholder="" type="text" class="form-control">

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            &nbsp;
                            <div class="position-relative mb-3">
                                <label for="exampleFile" class="form-label">File</label>
                                <input name="file" id="exampleFile" type="file" class="">
                            </div>
                        </div>
                    </div>




                    <button class="mt-2 btn btn-primary">{{__('Save')}}</button>
                </form>

        </div>
    </div>


</section>
@endsection