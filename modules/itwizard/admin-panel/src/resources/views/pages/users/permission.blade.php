@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
                Permission Manage
                <div class="page-title-subheading">Give to user Role & Permissions</div>
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
    <div class="col-lg-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Admin's</h5>
                <div class="text-center">
                    <h3>
                        <small><i class="lnr-user icon-gradient bg-grow-early"></i></small>
                        <span class="count-up-wrapper">2</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Moderator's</h5>
                <div class="text-center">
                    <h3>
                        <small><i class="lnr-user icon-gradient bg-strong-bliss"></i></small>
                        <span class="count-up-wrapper">5</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">User's</h5>
                <div class="text-center">
                    <h3>
                        <small><i class="lnr-user icon-gradient bg-happy-fisher"></i></small>
                        <span class="count-up-wrapper">150</span>
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
                @foreach($data['users'] as $user)
                    <tr key="{{$user->id}}">
                        <td></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email}}</td>
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
                @endforeach
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
