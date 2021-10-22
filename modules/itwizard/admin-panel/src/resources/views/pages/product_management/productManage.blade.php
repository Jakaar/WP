@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div>
                {{__('Product Management')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
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
                                    <button type="button" class="btn me-2 mb-2 btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">
                                        {{__('Add Product')}}
                                    </button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Add Product
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="allselect"></th>
                                            <th>{{__('NUMBER')}}</th>
                                            <th>{{__('CATEGORY')}}</th>
                                            <th>{{__('PRODUCT NAME')}}</th>
                                            <th>{{__('PRODUCT CODE')}}</th>
                                            <th>{{__('SKIN')}}</th>
                                            <th>{{__('PRODUCT SUMMARY')}}</th>
                                            <th>{{__('FUNCTION')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                                            <td>User Detail</td>
                                            <td>1.0</td>
                                            <td>10/21/2021</td>
                                            <td>SuperAdmin</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                                </button>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                                            <td>User Detail</td>
                                            <td>2.0</td>
                                            <td>10/21/2021</td>
                                            <td>SuperAdmin</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                                </button>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                                            <td>User Detail</td>
                                            <td>3.0</td>
                                            <td>10/21/2021</td>
                                            <td>SuperAdmin</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                                                    <i class="pe-7s-pen btn-icon-wrapper"></i>
                                                </button>
                                                <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                                    <i class="pe-7s-trash btn-icon-wrapper"></i>
                                                </button>
                                            </td>
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