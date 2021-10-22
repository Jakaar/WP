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
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <button type="button" class="btn me-2 mb-2 btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                {{__('Category Registration')}}
            </button>
        </div>
    </div>
</div>
<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3  card-btm-border card-shadow-primary border-primary card">
                <div class="card-body ">
                    <div class="row">
                        <div class="main-card mb-3 card">
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
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')

<script>
    $('#BulletInBoards').DataTable({});
    $('#allselect').click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    })
</script>
@endsection

@section('modal')
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Menu Registration</h3>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
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