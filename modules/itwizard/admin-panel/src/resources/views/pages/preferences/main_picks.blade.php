@extends('Admin::layouts.master')
@section('content')
<div class="app-main__inner p-0">
    <div class="app-inner-layout">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drawer"></i>
                    </div>
                    <div>
                        {{ __('Main Product creation code') }}
                        <div class="page-title-subheading"></div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                        <i class="pe-7s-refresh-2"></i>
                    </button>
                </div>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span>
                        {{__('Create Main Post')}}
                    </button>
                </div>
            </div>
        </div>

        <div class="card mb-3 card-btm-border border-primary card">
            <div class="card-body">
                <div class="card-body">
                    <div class="card-title"> {{__('Main Product creation code')}} </div>
                    <div class="input-group">
                        <input type="text" class="form-control" id="myInput1" value="Text to copy!">
                        <div class="input-group-text">
                            <button onclick="Copycode1()" data-title="Secondary" data-toggle="popover-main-product" data-bs-toggle="text-ligth bg-secondary" data-bs-content="Copied!" id="my-button" type="button" data-clipboard-target="myInput1" class="btn btn-outline-secondary clipboard-trigger">
                                <i class="fa fa-copy"></i>
                            </button>
                        </div>
                    </div>
                   </div>
            </div>
        </div>

        <div class="card card-btm-border border-primary card">
            <div class="card-body">
                <div class="card-title"> {{__('Checklist')}} </div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li> You can bring the check item.</li>
                            <li>Add the same block as the example code at the location you want to print</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="card mb-3 card-btm-border border-primary card mt-3">
            <div class="card-body">
                <div class="main-card mb-3">
                    <table style="width: 100%;" id="BulletInBoards" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('TURN')}}</th>
                                <th>{{__('OUTPUT CLASSIFICATION')}}</th>
                                <th>{{__('PRODUCT IMPRESSIONS')}}</th>
                                <th>{{__('NUMBER OF TITLE CHARACTERS')}}</th>
                                <th>{{__('NUMBER OF DETAILED CHARACTERS')}}</th>
                                <th>{{__('FUNCTION')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Last Registration</td>
                                <td>12</td>
                                <td>10</td>
                                <td>10</td>
                                <td>

                                    <button class="btn-outline-info btn">
                                        {{ ('Preview') }}
                                    </button>
                                    <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                        {{ ('Edit') }}
                                    </button>
                                    <button class="btn-outline-danger btn-link btn">
                                        {{ ('Delete') }}
                                    </button>
                                    <button id="" type="button" data-clipboard-target="" class="btn btn-outline-secondary clipboard-trigger">
                                        <i class="fa fa-copy"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Second Register</td>
                                <td>13</td>
                                <td>12</td>
                                <td>15</td>
                                <td>

                                    <button class="btn-outline-info btn">
                                        {{ ('Preview') }}
                                    </button>
                                    <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                        {{ ('Edit') }}
                                    </button>
                                    <button class="btn-outline-danger btn-link btn">
                                        {{ ('Delete') }}
                                    </button>
                                    <button id="" type="button" data-clipboard-target="" class="btn btn-outline-secondary clipboard-trigger">
                                        <i class="fa fa-copy"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Third Register</td>
                                <td>16</td>
                                <td>4</td>
                                <td>8</td>
                                <td>

                                    <button class="btn-outline-info btn">
                                        {{ ('Preview') }}
                                    </button>
                                    <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                        {{ ('Edit') }}
                                    </button>
                                    <button class="btn-outline-danger btn-link btn">
                                        {{ ('Delete') }}
                                    </button>
                                    <button id="" type="button" data-clipboard-target="" class="btn btn-outline-secondary clipboard-trigger">
                                        <i class="fa fa-copy"></i>
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

<style>
    .border-left-kant {
        padding: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #eee;
        border-left-width: .25rem;
        border-radius: .25rem;
        border-left-color: #e92626;
        background-color: white;
        position: relative;
        z-index: 1;
    }
</style>
@endsection

@section('modal')
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="CreatePostModal">
    <div class="modal-dialog modal-lg" style="max-width: 960px;">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title card-title">
                    {{__('Create Main Post')}}
                </h5>
            </div>

            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class=" fw-bold form-label">
                                    {{__('Output Classification')}}
                                </label>
                                <select class="form-select form-control-sm form-control">
                                    <option>Category 1</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number Of Impressions')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Connection Page')}}
                                </label>
                                <div class="col-lg-6 mb-3 input-group mb-3">
                                    <span class="input-group-text px-2">{{env('APP_URL')}}</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number of Title Characters')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number of Short Description Characters')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Start Coding')}}
                                </label>
                                <textarea name="startCode" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Coding Repetition')}}
                                </label>
                                <textarea name="codeLoop" cols="120" rows="10" class="coding form-control"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('End Coding')}}
                                </label>
                                <textarea name="startCode" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="EditPostModal">
    <div class="modal-dialog modal-lg" style="max-width: 960px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title card-title">
                    {{__('Edit Main Post')}}
                </h5>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class=" fw-bold form-label">
                                    {{__('Output Classification')}}
                                </label>
                                <select class="form-select form-control-sm form-control">
                                    <option>Category 1</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number Of Impressions')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Connection Page')}}
                                </label>
                                <div class="col-lg-6 mb-3 input-group mb-3">
                                    <span class="input-group-text px-2">http://192.168.0.147</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number of Title Characters')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Number of Short Description Characters')}}
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Start Coding')}}
                                </label>
                                <textarea name="startCode" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('Coding Repetition')}}
                                </label>
                                <textarea name="codeLoop" cols="120" rows="10" class="coding form-control"></textarea>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="fw-bold form-label">
                                    {{__('End Coding')}}
                                </label>
                                <textarea name="startCode" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
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
</script>
<script>
    $('#code').text('@ include("header")')
</script>
<script>
    $('#code').text('@ include footer ')
</script>
<script>
    function Copycode1() {
    var copyText = document.getElementById('myInput1')
    copyText.select();
    document.execCommand('copy')
    console.log('Copied Text')
  }
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover-main-product"]').popover({
        placement: 'top',
        delay: {
            "show": 300,
            "hide": 100
        }
    });

    $('[data-toggle="popover-main-product"]').click(function () {

        setTimeout(function () {
            $('.popover').fadeOut('slow');
        }, 2000);

    });
    })
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
