@extends('Admin::layouts.master')
@section('content')
<section>
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
        .ck-editor__editable {
            max-height: 400px;
        }
    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Staff Introduction')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" id="reload_page" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card mt-4 card-btm-border card-shadow-primary border-primary">
        <div class="card-header-title fsize-2 text-capitalize fw-normal px-3 py-3">
            {{__('Page Create')}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="position-relative mb-3">
                        <label for="exampleSelect" class="form-label">Menu*</label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="input-group">
                        <select name="select" id="exampleSelect" class="form-select form-control">
                            <option>Solution</option>
                            <option>Mongolia manpower outsourcing</option>
                            <option>Portfolio</option>
                            <option>Service center</option>
                            <option>About us</option>
                        </select>
                        <div class="input-group-text">
                            <span class="">{{ ('Group Management') }}</span>
                        </div>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-text">
                            <span class="">Priority</span>
                        </div>
                        <select name="select" id="exampleSelect" class="form-select form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="position-relative p-2">
                        <label for="exampleSelect" class="form-label">Page Name*</label>
                    </div>
                    <div class="position-relative p-2">
                        <label for="exampleSelect" class="form-label">Jsp Connection</label>
                    </div>
                    <div class="position-relative p-2 mt-3">
                        <label for="exampleSelect" class="form-label">Page Url</label>
                    </div>
                    <div class="position-relative p-2 mt-2">
                        <label for="exampleSelect" class="form-label">Page Code</label>
                    </div>
                    <div class="position-relative p-2 mt-2">
                        <label for="exampleSelect" class="form-label">Page Content</label>
                    </div>
                </div>
                <div class="col-md-10">
                    <input value="직원소개" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    <div class="jsp-connection p-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Use</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Not Used</label>
                        </div>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-text">
                            <span class="">{{ config('app.url') }}</span>
                        </div>
                        <input value="/staff" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <input value="staff" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="position-relative mb-3" id="PageContent4" name="PageContent">
                    </div>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <button class="btn-wide mb-2 me-2 btn btn-outline-primary btn-lg">Save</button>
                    <button class="btn-wide mb-2 me-2 btn btn-outline-dark btn-lg">List</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        let editor;
        ClassicEditor.create(document.querySelector('#PageContent4'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
