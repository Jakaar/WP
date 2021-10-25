@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user"></i>
            </div>
            <div>
                {{__('Administrator Information')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
        </div>
    </div>
</div>


<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
    <div class="main-card mb-3  card-btm-border card-shadow-primary border-primary card">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <h5 class="card-title">{{__('Company Information Setting')}}</h5>
                </div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <div class="list-group-item"></div>
                    <li class="list-group-item">When connecting from an allowed IP when setting up a secure connection, you can access only by logging in.</li>
                    <li class="list-group-item">In IPs other than allowed IPs, you must go through SMS authentication to access the admin page. (When text authentication is used)</li>
                    <li class="list-group-item">The SMS verification code will be sent to the phone number registered in the logged-in administrator (cell phone number stored in the administrator account).</li>
                    <li class="list-group-item">If the host's network is a dynamic IP and you do not set a mobile phone number, you may not be able to access the administrator, so be sure to enter the administrator's mobile phone number.</li>
                    <li class="list-group-item">SMS authentication is sent to the administrator ID and the fee is 0Cash. However, you will be charged when you pay the actual carrier fee.</li>
                    <div class="list-group-item"></div>
                </ul>
            </div>
        </div>

        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>Use secure connection</td>
                        <td>User Detail</td>
                        <td rowspan="2">
                            <button class="mb-2 me-2 btn-icon btn btn-primary">
                                <i>Save</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Use text authentication</td>
                        <td>Subscription Detail</td>
                    </tr>
                    <tr>
                        <td>Allowed IP</td>
                        <td><input name="email" class="form-control text-lowercase"></td>
                        <td>
                            <button class="mb-2 me-2 btn-icon btn btn-primary">
                                <i>IP address storage</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <tbody>
                    <tr>
                        <td>NO</td>
                        <td>ALLOWED IP</td>
                        <td>REGISTRANT</td>
                        <td>REGISTRATION DATE</td>
                        <td>LAST ACCESS DATE</td>
                        <td>EDIT/DELETE</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>192.168.0.2</td>
                        <td>day</td>
                        <td>2021-02-24 17:55</td>
                        <td></td>
                        <td>
                            <button class="btn-outline-primary btn">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>192.168.0.1</td>
                        <td>day</td>
                        <td>2021-02-24 17:53</td>
                        <td></td>
                        <td>
                            <button class="btn-outline-primary btn">
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
</div>
@endsection