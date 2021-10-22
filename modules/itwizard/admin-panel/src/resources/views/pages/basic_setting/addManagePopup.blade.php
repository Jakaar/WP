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
                    {{__('Add Manage Popups')}}

                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                   <div class="d-inline-block dropdown" onclick="window.location.href='/cms/basic_setting/managePopup'">
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

            <h5 class="card-title">{{__('Add Popup Manage')}}</h5>
                <form class="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Title')}}</label>
                                <input name="title" placeholder="Title" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">{{__('Posting Period')}} *</label>

                                <div class="input-group">
                                    <div class="input-group-text datepicker-trigger">
                                        <i class="fa fa-calendar-alt"></i>
                                    </div>
                                    <input type="text" placeholder="Start date" class="form-control" data-toggle="datepicker-icon">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">&nbsp;</label>

                                <div class="input-group">
                                    <div class="input-group-text datepicker-trigger">
                                        <i class="fa fa-calendar-alt"></i>
                                    </div>
                                    <input type="text" placeholder="End date" class="form-control" data-toggle="datepicker-icon">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">{{__('Popup')}}*</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('General Group')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Layer Pop-up')}}
                                        </label>
                                    </div>


                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-3">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">{{__('Location')}} *</label>

                                <div class="input-group">

                                    <input type="number" placeholder="X" class="form-control">
                                </div>


                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">&nbsp;</label>
                                <div class="input-group">
                                    <input type="number" placeholder="AND" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">{{__('Size')}}*</label>
                                <div class="input-group">
                                    <input type="number" placeholder="HORIZONTAL" class="form-control" >
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative mb-3">
                                <label for="exampleCity" class="form-label">&nbsp;</label>
                                <div class="input-group">
                                    <input type="number" placeholder="VERTICAL" class="form-control" >
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Link Address')}}</label>
                                <input name="link" placeholder="Link" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="position-relative mb-3">
                                <label for="exampleEmail11" class="form-label">{{__('Popup Content')}}</label>
                                <input name="link" placeholder="Link" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="text" id="exampleText" class="form-control"></textarea>
                        </div>
                    </div>
                    <button class="mt-2 btn btn-primary">{{__('Save')}}</button>
                </form>

        </div>
    </div>


</section>
@endsection
