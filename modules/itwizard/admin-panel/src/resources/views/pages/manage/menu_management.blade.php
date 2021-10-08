@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-menu icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
                Menu management
                <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block ">
                <button type="button" class="btn-shadow btn btn-primary">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Menu registration
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span> Inbox</span>
                                <div class="ms-auto badge rounded-pill bg-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span> Book</span>
                                <div class="ms-auto badge rounded-pill bg-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span> Picture</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span> File Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">

    <div class="card-body">
        <div class="card-title">Client users</div>

        <table id="UserPermissionTable" style="width: 100%;"  class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Level</th>
                <th>Menu name</th>
                <th>Explanation</th>
                <th>State</th>
                <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>3</td>
                <td><div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left me-3">
                                <img width="42" class="rounded-circle" src="images/avatars/5.jpg" alt="">
                            </div>
                            <div class="widget-content-left">
                                <div class="widget-heading">Eliot Huber</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="ms-auto badge rounded-pill bg-warning">43</div>
                            </div>
                        </div>
                    </div></td>
                <td>admin main page</td>
                <td>use</td>
                <td><a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-up btn-icon-wrapper"></i></a>
                    <a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-down btn-icon-wrapper"></i></a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>admin settings</td>
                <td>level 3</td>
                <td>use</td>
                <td><a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-up btn-icon-wrapper"></i></a>
                    <a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-down btn-icon-wrapper"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Preferences</td>
                <td>level 1</td>
                <td>use</td>
                <td><a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-up btn-icon-wrapper"></i></a>
                    <a class="btn-shadow btn btn-primary"><i class="pe-7s-angle-down btn-icon-wrapper"></i></a></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
