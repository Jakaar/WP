@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                {{__('Banner')}}
                {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                    {{__('Create Banner')}}
                </button>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Group name</th>
                <th>Code</th>
                <th>Image</th>
                <th>Form</th>
                <th>NUMBER OF LINE-WRAPPED BANNERS	</th>
                <th>Whether ot not to use</th>
                <th>Function</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>mainBanner</td>
                <td>main</td>
                <td>2</td>
                <td>Vertical</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>vertical</td>
                <td>vertical</td>
                <td>1</td>
                <td>Vertical</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>horizontal</td>
                <td>horizontal</td>
                <td>1</td>
                <td>horizontal</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>leftbanner</td>
                <td>leftBanner</td>
                <td>3</td>
                <td>Vertical</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>left</td>
                <td>left</td>
                <td>2</td>
                <td>Vertical</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>right</td>
                <td>right</td>
                <td>2</td>
                <td>Vertical</td>
                <td>1</td>
                <td>Used</td>
                <td>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="">Banner management</i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
