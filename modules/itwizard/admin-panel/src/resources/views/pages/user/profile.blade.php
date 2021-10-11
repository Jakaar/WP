@extends('Admin::layouts.master')
@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div class="card-shadow-primary card-border mb-3 card">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner bg-dark">
                        <div class="menu-header-content">
                            <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                <div class="avatar-icon">
                                    @if($data['user']->avatar != null)
                                    <img src="/storage/{{Auth::user()->avatar}}" alt="Avatar 5">
                                    @else
                                    <img src="/aPanel/imgs/1.png" alt="Avatar 5">
                                    @endif
                                </div>
                            </div>
                            <div>
                                <h5 class="menu-header-title">{{$data['user']->firstname}} {{$data['user']->lastname}}</h5>
                                <h6 class="menu-header-subtitle">Security Officer</h6>
                            </div>
                            <div class="menu-header-btn-pane pt-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center d-block card-footer">
                    <ul class="nav flex-column a-side">
                        <ul class="nav flex-column">
                            <li class="nav-item-header nav-item">My Account</li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link active">
                                    <i class="nav-link-icon  pe-7s-user"></i>
                                    <span>Profile</span>
                                    <div class="ms-auto badge rounded-pill bg-info"></div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon pe-7s-key"></i>
                                    <span>Change Password</span>
                                    <div class="ms-auto badge rounded-pill bg-info"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon pe-7s-config"></i>
                                    <span>Settings</span>
                                    <div class="ms-auto badge bg-success"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon pe-7s-coffee"></i>
                                    <span>Messages</span>
                                    <div class="ms-auto badge bg-danger">2</div>
                                </a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title text-center mt-2">Update Profile </h5>
                    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="">
                        <div class="row justify-content-center d-flex mb-3 rounded">
                            <div class="col-lg-5">
                                <div class="position-relative">
                                    <img src="/aPanel/imgs/1.png" alt="Avatar 5" class="w-100 border" id="changeImage">
                                    <label for="file-upload" class="custom-file-upload">Upload Image</label>
                                    <input type="file" id="file-upload" class="image-upload">
                                    <div class="loading" id="loading">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="firstname">First name</label>
                            <div>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" value="{{$data['user']->firstname}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="lastname">Last name</label>
                            <div>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" value="{{$data['user']->lastname}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <div>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$data['user']->email}}" readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="confirm_password">Confirm password</label>
                            <div>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-primary px-5" name="update_profile" id="update_profile">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .a-side .nav-item .nav-link.active {
        color: #3f6ad8;
        background: #e0f3ff;
        font-weight: bold;
    }

    .custom-file-upload {
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        position: absolute;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 1);
        width: 100%;
        text-align: center;
        color: white
    }

    .image-upload {
        display: none;
    }

    .loading {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.5);
        display: none;
    }
</style>
@endsection
