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
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa fa-plus"></i> Create new member </a>
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info refresh-page">
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
                        <span class="count-up-wrapper">{{$data['users']->count()}}</span>
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
                                <button class="border-0 btn-transition btn btn-outline-success edituser" data-id="{{$user->id}}" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="border-0 btn-transition btn btn-outline-danger delete_user" data-id="{{$user->id}}">
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
@section('modal')

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="staticBackdropLabel">{{__('Create new member')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row" id="singleuserupdate">
                    <div class="col-lg-4">
                        <div class="w-100 border" style="height:200px;">
                            <img src="" alt="" id="logo-photo-preview">
                        </div>
                        <input type="file" class="d-none" name="avatar" id="c-avatar">
                        <button type="button" class=" btn btn-secondary btn-block w-100" onclick="filemanager.selectFile('avatar')"> {{__('Upload image')}} </button>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('First name')}} </label>
                                <input type="text" class="form-control" name="firstname" id="c-firstname" name="firstname" placeholder="{{__('First name')}}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Last name')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Last name')}}" name="lastname" id="c-lastname">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Email')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Email')}} " name="email" id="c-email">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Password')}} </label>
                                <input type="password" class="form-control" placeholder="{{__('Password')}} " name="c-password" id="password">
                                <small class="form-text text-muted">
                                    {{__('Leave empty to keep the same')}}
                                </small>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success">{{__('Create member')}}</button>
            </div>
        </div>
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
                <form class="row" id="singleuserupdate">
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
                                <input type="text" class="form-control" name="firstname" id="firstname" name="firstname" placeholder="{{__('First name')}}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Last name')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Last name')}}" name="lastname" id="lastname">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Email')}} </label>
                                <input type="text" class="form-control" placeholder="{{__('Email')}} " name="email" id="email">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{__('Password')}} </label>
                                <input type="password" class="form-control" placeholder="{{__('Password')}} " name="password" id="password">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="testgg">{{__('Close')}}</button>
                <a class="btn btn-primary" id="save_c">{{__('Save changes')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    // -- User Edit --
    $('.edituser').click(function() {
        var id = $(this).attr('data-id');
        const data = {
            id: id,
        };
        Axios.post('/api/single/user/data', data).then((resp) => {
            let user = resp.data.data;
            console.log(user)
            $('#changeImage').attr('src', '/storage/' + user.avatar)
            if (user.avatar == null) {
                user.avatar = '/aPanel/imgs/1.png';
                $('#changeImage').attr('src', user.avatar)
            }
            $('#firstname').val(user.firstname)
            $('#lastname').val(user.lastname)
            $('#email').val(user.email)


        }).catch((err) => {
            console.log(err);
        });
    })

    $(document).ready(function() {
        $('#save_c').click(function() {

            $("#singleuserupdate").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    password: {
                        required: false,
                        minlength: 6,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long",
                    },
                    email: "Please enter a valid email address",
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });


            const data = new FormData();
            data.append('avatar', $('#file-upload').prop('files')[0]);
            data.append('firstname', $('#firstname').val());
            data.append('lastname', $('#lastname').val());
            data.append('email', $('#email').val());
            data.append('password', $('#password').val());
            const headers = {
                'Content-Type': 'multipart/form-data'
            }

            let check = $("#singleuserupdate").valid();
            if (check == true) {
                Axios.post('/api/member/update', data, {
                    headers: headers
                }).then((resp) => {
                    console.log(resp)
                    Toast.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });
                $('#editUserModal').modal('hide');
            }
        })
    })

    $('.delete_user').click(function() {
        const user_id = $(this).attr('data-id');
        Swal.fire({
            title: 'Do you want to delete a user?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "{{__('Delete')}}",
            denyButtonText: `{{__('Cancel')}}`,
        }).then((result) => {
            if (result.isConfirmed) {
                const data = {
                    user_id: user_id,
                }
                Axios.post('/api/user/delete', data).then((resp) => {
                    $('tr[key=' + user_id + ']').remove()
                    Swal.fire('Deleted!', '', 'success')
                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });

            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    })
    //--  User Edit End --
</script>
@endsection