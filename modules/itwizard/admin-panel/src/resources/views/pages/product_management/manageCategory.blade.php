@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div>
                {{__('Category Management')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{__('Category Registration')}}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="main-card mb-3 card card-btm-border border-primary card">
            <div class="card-body">
                <table style="width: 100%;" id="BulletInBoards" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>{{__('LEVEL')}}</th>
                            <th>{{__('CATEGORY NAME')}}</th>
                            <th>{{__('REGISTERED PRODUCT')}}</th>
                            <th>{{__('EXPLANATION')}}</th>
                            <th>{{__('STATE')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>SMS</td>
                            <td>0</td>
                            <td>TEXT SOLUTION</td>
                            <td>USE</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>SMS</td>
                            <td>0</td>
                            <td>TEST SOLUTION</td>
                            <td>USE</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>SMS</td>
                            <td>0</td>
                            <td>SOLUTION</td>
                            <td>USE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script>
    $('#BulletInBoards').DataTable({});
    $('#allselect').click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    })
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection

@section('modal')
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Menu Registration')}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="selector_form">
                <label>{{__('Parent Category')}}</label>
                <select class="form-select form-control-sm form-control">
                    <option>Choose</option>
                </select>
            </div>
            <div class="selector_form">
                <label>{{__('Classification of use')}}</label>
                <select class="form-select form-control-sm form-control">
                    <option>use</option>
                </select>
            </div>
            <div class="selector_form">
                <label>{{__('Category name')}}</label>
                <input type="text" class="form-control">
            </div>
            <div class="selector_form">
                <label for="exampleText" class="form-label">{{__('Explanation')}}</label>
                <textarea name="text" id="exampleText" class="form-control"></textarea>
            </div>
            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
            </div>
        </div>
    </div>
</div>

<style>
    .selector_form {
        position: relative;
        padding: 1.5rem;
        flex: 1 1 auto;
    }
</style>
@stop
