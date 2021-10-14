@extends('Admin::layouts.master')
@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-tempting-azure"></i>
            </div>
            <div>
                {{__('Member Management')}}
                <div class="page-title-subheading">{{__('User edit & delete')}}</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="Example Tooltip" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info">
                <i class="pe-7s-refresh-2"></i>
            </button>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{__('Admin')}}</h5>
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
                <h5 class="card-title">{{__('Moderator')}}</h5>
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
                <h5 class="card-title">{{__('User')}}</h5>
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
                    <th>{{__('ID')}}</th>
                    <th>{{__('User')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('User Name')}}</th>
                    <th>{{__('Role')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['users'] as $user)
                <tr key="{{$user->id}}">
                    <td></td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <span class="badge bg-success">{{__('Super Admin')}}</span>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <div class="widget-content-right widget-content-actions">
                                <button class="border-0 btn-transition btn btn-outline-success edituser" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                    <i class="fa fa-edit"></i>
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
            <!-- <tfoot>
                <tr>
                    <th>{{__('ID')}}</th>
                    <th>{{__('User')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('User Name')}}</th>
                    <th>{{__('Role')}}</th>
                    <th>{{__('Status')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
            </tfoot> -->
        </table>
    </div>

</div>
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="z-index: 99;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('Edit Profile')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">
                <form class="row">
                    <div class="col-lg-4">
                        <div class="position-relative">
                            <img src="" alt=" Avatar 5" class="w-100 border" id="changeImage">
                            <label for="file-upload" class="custom-file-upload">{{__('Upload Image')}}</label>
                            <input type="file" name="avatar" id="file-upload" class="image-upload">
                            <div class="loading" id="loading">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('First name')}} </label>
                                <input type="text" class="form-control" name="firstname" placeholder="{{__('First name')}}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Last name')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Last name')}}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Email')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Email')}} ">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Password')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Password')}} ">
                                <small class="form-text text-muted">
                                    Leave empty to keep the same
                                </small>
                            </div>
                        </div>
                    </div>

                </form>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-primary" id="EditProfileChanges" >{{__('Save changes')}}</button>
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
