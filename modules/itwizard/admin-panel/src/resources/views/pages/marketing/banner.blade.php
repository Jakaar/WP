@extends('Admin::layouts.master')
@section('content')
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
