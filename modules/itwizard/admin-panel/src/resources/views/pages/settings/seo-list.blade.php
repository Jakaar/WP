@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
            </div>
            <div>
                {{__('Seo management')}}
                {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
            </div>
        </div>
        {{--    <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                    {{__('Create SEO management')}}
                </button>
            </div>
        </div> --}}
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Page address</th>
                <th>Page title</th>
                <th>Whether or not to use</th>
                <th>Registration date</th>
                <th>Edit/Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Home Solution</td>
                <td>/main</td>
                <td>Home Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Login Page</td>
                <td>/login</td>
                <td>Login Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Board Management</td>
                <td>/pages/boaard/board.html</td>
                <td>homepage</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Consult</td>
                <td>/pages/consulting.html</td>
                <td>Consulting Page</td>
                <td>use</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>test,test,test</td>
                <td>/mgr/front</td>
                <td>1</td>
                <td>use/28</td>
                <td>2018-11-21 PM 06:28</td>
                <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary">
                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                    </button>
                    <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                    </button></td>
            </tr>

            </tfoot>
        </table>
    </div>
</div>
@endsection
