@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div class="mb-3">
                {{__('SEO Management')}}
            </div>
        </div>
        <div class="page-title-actions">

            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{__('Title Registration')}}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table style="width: 100%;" id="BulletInBoards" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>{{__('NUMBER')}}</th>
                    <th>{{__('TITLE')}}</th>
                    <th>{{__('PAGE ADDRESS')}}</th>
                    <th>{{__('PAGE TITLE')}}</th>
                    <th>{{__('WHETHER OR NOT TO USE')}}</th>
                    <th>{{__('REGISTRATION DATE')}}</th>
                    <th>{{__('EDIT/DELETE')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5</td>
                    <td>Mongolia IT</td>
                    <td>/pages/1</td>
                    <td>Itwizard</td>
                    <td>Use</td>
                    <td>2021/10/25</td>
                    <td>
                        <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                            {{ ('Edit') }}
                        </button>
                        <button class="btn-outline-danger btn-link btn">
                            {{ ('Delete') }}
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Itwizard,</td>
                    <td>/pages/2</td>
                    <td>Nulearn</td>
                    <td>Not Use</td>
                    <td>2021/10/24</td>
                    <td>
                        <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                            {{ ('Edit') }}
                        </button>
                        <button class="btn-outline-danger btn-link btn">
                            {{ ('Delete') }}
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>the No. 1 global IT outsourcing company</td>
                    <td>/pages/3</td>
                    <td>ItwizardTest</td>
                    <td>Use</td>
                    <td>2021/10/25</td>
                    <td>
                        <button class="btn-outline-primary btn " data-bs-toggle="modal" data-bs-target="#EditPostModal">
                            {{ ('Edit') }}
                        </button>
                        <button class="btn-outline-danger btn-link btn">
                            {{ ('Delete') }}
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@section('script')

<script>
    $('#BulletInBoards').DataTable({});
    $('#allselect').click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    })
</script>
@endsection
@endsection

@section('modal')

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">{{__('SEO Management')}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="" action="" method="">
                        <input type="hidden" name="useFlag" value="u">
                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Name')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="pageName" class="form-control " value="" maxlength="200">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Address')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="pageLink" class="form-control " value="" maxlength="200">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Title')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaTitle" class="form-control " value="" maxlength="1000">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Keywords')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaKeywords" class="form-control " value="" maxlength="1000">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Subject')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaSubject" class="form-control " value="" maxlength="1000">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Description')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaDescription" class="form-control " value="" maxlength="1000">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Edit Seo --}}

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="EditPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">{{__(('Edit SEO Management'))}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="" action="" method="">
                        <input type="hidden" name="useFlag" value="u">
                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Name')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="pageName" class="form-control " value="" maxlength="200">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Address')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="pageLink" class="form-control " value="" maxlength="200">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Title')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaTitle" class="form-control " value="" maxlength="1000">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Keywords')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaKeywords" class="form-control " value="" maxlength="1000">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Subject')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaSubject" class="form-control " value="" maxlength="1000">
                            </div>
                            <div class="col-md-2 col-form-label mb-3">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;" class="fw-bold">{{__('Page Description')}}</span>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="metaDescription" class="form-control " value="" maxlength="1000">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection