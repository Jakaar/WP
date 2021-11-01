@extends('Admin::layouts.master') @section('content') 
<style>
    .ck-editor__editable {
        min-height: 200px;
    }
    .ck-editor__editable{
        max-height: 500px;
    }
    .ck-editor__editable{
        max-width: 1700px;
    }
</style>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-monitor icon-gradient bg-mean-fruit"></i>
            </div>
            <div>{{__('Personal outsource')}}</div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" id="reload_page" data-bs-original-title="Refresh">
                <i class="pe-7s-refresh-2"></i>
            </button>
        </div>
    </div>
</div>
<div class="main-card mb-3 card mt-4 card-btm-border car-shadow-primary border-primary">
    <div class="card-header-title fsize-2 text-capitalize fw-normal px-3 py-3">{{__('Mainpower outsourcing system')}}</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Menu')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group">
                    <select name="select" id="exampleSelect" class="form-select form-control">
                        <option>Mongolia manpower</option>
                        <option>Solution</option>
                        <option>Portfolio</option>
                        <option>Service center</option>
                        <option>About us</option>
                    </select>
                    <div class="input-group-text">
                        <span class>Group Management</span>
                    </div>
                </div>
                <div class="input-group mb-3 mt-3">
                    <div class="input-group-text"><span class="">Priority</span></div>
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
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Page name')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Page name')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                    <label class="form-check-label" for="inlineRadio1">{{__('use')}}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                    <label class="form-check-label" for="inlineRadio2">{{__('not used')}}</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Page URL')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Page code')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="position-relative mb-3">
                    <label for="exampleselect" class="form-label">{{__('Page content')}}</label>
                </div>
            </div>
            <div class="col-md-10">
                    <div class="position-relative mb-3" id="PageContent2" name="PageContent"></div>
            </div>
            <div class="col-md-12">
                <div class="position-relative mt-3 mb-3 pt-3 border-top">
                    <div class="d-flex justify-content-center">
                        <button class="mb-2 me-2 btn-transition btn btn-outline-primary">{{__('Save')}}</button>
                        <button class="mb-2 me-2 btn-transition btn btn-outline-secondary">{{__('Cancel')}}</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection @section('script')
<script>
    // $(document).ready(function(){
    //     $.blockUI.defaults = {
    //         // timeout: 2000,
    //         fadeIn: 200,
    //         fadeOut: 400,
    //     };
    //     $.blockUI({ message: $(".body-block-example-1") });
    // })
</script>
<script>
    $(document).ready(function () {
        let editor;
        ClassicEditor.create(document.querySelector("#PageContent2"))
            .then((newEditor) => {
                editor = newEditor;
            })
            .catch((error) => {
                console.error(error);
            });
    });
</script>
@endsection
