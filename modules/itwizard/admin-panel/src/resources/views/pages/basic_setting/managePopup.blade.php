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
                   {{__('Manage Popups')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                   <div class="d-inline-block dropdown" onclick="window.location.href='/cms/basic_setting/addManagePopup'">
                      <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow">
                      <span class="btn-icon-wrapper pe-2 opacity-7">
                      <i class="pe-7s-plus"></i>
                      </span>
                      {{__('Create')}}
                      </button>
                   </div>
            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>{{__('Number')}}</th>
                    <th>{{__('Title')}}</th>
                    <th>{{__('Notice Period')}}</th>
                    <th>{{__('Registration Date')}}</th>
                    <th>{{__('Edit/Delete')}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Home Solution</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/basic_setting/editManagePopup'">
                            <i class="pe-7s-pen btn-icon-wrapper"></i>
                        </button>
                        <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"></i>
                        </button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Login Page</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/basic_setting/editManagePopup'">
                            <i class="pe-7s-pen btn-icon-wrapper"></i>
                        </button>
                        <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"></i>
                        </button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Board Management</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/basic_setting/editManagePopup'">
                            <i class="pe-7s-pen btn-icon-wrapper"></i>
                        </button>
                        <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"></i>
                        </button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Consult</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/basic_setting/editManagePopup'">
                            <i class="pe-7s-pen btn-icon-wrapper"></i>
                        </button>
                        <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"></i>
                        </button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>test,test,test</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td>2018-11-21 PM 06:28</td>
                    <td><button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/basic_setting/editManagePopup'">
                            <i class="pe-7s-pen btn-icon-wrapper"></i>
                        </button>
                        <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                            <i class="pe-7s-trash btn-icon-wrapper"></i>
                        </button></td>
                </tr>

                </tfoot>
            </table>
            <nav>
                <ul class="pagination mb-5">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


</section>
@endsection