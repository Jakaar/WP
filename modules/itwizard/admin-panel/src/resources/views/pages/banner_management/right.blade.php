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
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                   {{__('Right')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" onclick="window.location.href='/cms/banner_management/add_right'">
                <span class="btn-icon-wrapper pe-2 opacity-7">
                <i class="pe-7s-plus"></i>
                </span>
                {{__('Create')}}
                </button>
            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>{{__('Number')}}</th>
                    <th>{{__('Design Method')}}</th>
                    <th>{{__('Image')}}</th>
                    <th>{{__('Link Address')}}</th>
                    <th>{{__('Priority')}}</th>
                    <th>{{__('Wheter Or Not To Use')}}</th>
                    <th>{{__('Edit/Delete')}}</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>{{__('Image')}}</td>
                        <td></td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/edit_right'">
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


</section>
@endsection