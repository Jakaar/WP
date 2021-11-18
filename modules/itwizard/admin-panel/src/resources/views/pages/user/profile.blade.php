@extends('Admin::layouts.master')
@section('content')

<div class="">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-user icon-gradient bg-ripe-malin"></i>
                </div>
                <div>
                    {{__('Profile')}}
                    <div class="page-title-subheading">{{__('Change Profile Information & Password')}}</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info refresh-page" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-body">
                    <ul class="nav tabs-animated" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <a href="#profile-page" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#profile-page" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <i class="nav-link-icon  pe-7s-user"></i>
                                <span>{{__('Profile')}}</span>
                                <div class="ms-auto badge rounded-pill bg-info"></div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#change-password" class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#change-password" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <i class="nav-link-icon pe-7s-key"></i>
                                <span>{{__('Change Password')}}</span>
                                <div class="ms-auto badge rounded-pill bg-info"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile-settings" class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#profile-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <i class="nav-link-icon pe-7s-config"></i>
                                <span>{{__('Settings')}}</span>
                                <div class="ms-auto badge bg-success"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile-msg" class="nav-link" id="v-pills-msg-tab" data-bs-toggle="pill" data-bs-target="#profile-msg" type="button" role="tab" aria-controls="v-pills-msg" aria-selected="false">
                                <i class="nav-link-icon pe-7s-coffee"></i>
                                <span>{{__('Messages')}}</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="main-card mb-3 card border-primary card-btm-border ">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="profile-page" role="tabpanel" aria-labelledby="v-pills-home-tab">

                            <form class="col-md-12 mx-auto" method="post" action="" id="UpdateProfile">
                                <div class="row justify-content-center d-flex mb-3 rounded">
                                    <div class="col-lg-3">
                                        <div class="position-relative">
                                            <img src="{{ $user->avatar != null ? asset('/storage/'.$user->avatar) : asset('/aPanel/imgs/1.png')}}" alt=" Avatar 5" class="w-100 border" id="changeImage">
                                            <label for="file-upload" class="custom-file-upload">{{__('Upload Image')}}</label>
                                            <input type="file" name="avatar" id="file-upload" class="image-upload">
                                            <div class="loading" id="loading">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="firstname">{{__('First name')}}</label>
                                                <div>
                                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="{{__('First name')}}" value="{{$user->firstname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6  mb-3">
                                                <label class="form-label" for="lastname">{{__('Last name')}}</label>
                                                <div>
                                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{__('Last name')}}" value="{{$user->lastname}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="email">{{__('Email')}}</label>
                                                <div>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="{{__('Email')}}" value="{{$user->email}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="confirm_password">{{__('Confirm password')}}</label>
                                                <div>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="{{__('Confirm password')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <button type="button" class="btn btn-primary px-5" name="update_profile" id="update_profile">{{__('Update')}}</button>
                                        </div>
                                    </div>
                                </div>
                                @csrf

                            </form>
                        </div>
                        <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            
                            <form class="col-md-12 mx-auto" id="changePasswordValidation">
                                <div class="mb-3">
                                    <label class="form-label" for="current_password"> {{__('Current password')}} </label>
                                    <input type="password" class="form-control" name="current_password" id="current_password" placeholder="{{__('Current password')}}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="new_password"> {{__('New password')}} </label>
                                    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="{{__('New password')}}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="new_password_confirm"> {{__('New password confirm')}} </label>
                                    <input type="password" class="form-control" name="new_password_confirm" id="new_password_confirm" placeholder="{{__('New password confirm')}}">
                                </div>

                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary px-5" id="change_password">{{__('Change password')}}</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h5 class="card-title text-center mt-2">{{__('Profile Settings')}} </h5>
                        </div>

                        <div class="tab-pane fade" id="profile-msg" role="tabpanel" aria-labelledby="v-pills-msg-tab">
                            <h5 class="card-title text-center mt-2">{{__('Profile Message')}} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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