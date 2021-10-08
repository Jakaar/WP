@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
                Data Tables
                <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="Example Tooltip"
                data-bs-placement="bottom" class="btn-shadow me-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
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
<div class="row">
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Basic</h5>
                <h3>
                    <span class="count-up-wrapper"></span>
                </h3>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Numbers</h5>
                <div class="text-center">
                    <h3>
                        <span class="count-up-wrapper-4"></span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <table style="width: 100%;" id="UserPermissionTable" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Super Admin</td>
                    <td>Admin@admin.com</td>
                    <td>admin</td>
                    <td>
                        <span class="badge bg-success">Super Admin</span>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                          </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="widget-content-right widget-content-actions">
                                <button class="border-0 btn-transition btn btn-outline-success">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button class="border-0 btn-transition btn btn-outline-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection