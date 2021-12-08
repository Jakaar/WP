@extends('Admin::layouts.master')
@section('title') {{ __('Member Management') }} @endsection

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-way icon-gradient bg-tempting-azure"></i>
                </div>
                <div>
                    {{ __('Member Management') }}
                    <div class="page-title-subheading">{{ __('Manage your users') }}</div>
                </div>
            </div>
            <div class="page-title-actions">

                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info refresh-page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                @permission('role-create')
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span> {{ __('Create new user') }}
                    </button>
                    @endpermission
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card card-btm-border border-primary">
            <div class="card-body">
                <table style="width: 100%;" id="UserPermissionTable" class="table table-hover table-striped ">
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('Name') }}</th>
                            {{-- <th>{{ __('Last Name') }}</th> --}}
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Phone') }}</th>

                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr key="{{ $user->id }}">
                                <td></td>
                                <td>{{ $user->firstname }}</td>
                                {{-- <td>{{ $user->lastname }}</td> --}}
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <div class="">
                                        <div class="widget-content-right widget-content-actions">
                                            @permission('role-update')
                                                <button class=" btn-transition btn btn-outline-primary editUser"
                                                    data-id="{{ $user->id }}">
                                                    {{ __('Edit') }}
                                                </button>
                                                @endpermission
                                                @permission('role-delete')
                                                    <button class="btn-transition btn btn-outline-danger delete_user"
                                                        data-id="{{ $user->id }}">
                                                        {{ __('Delete') }}
                                                    </button>
                                                    @endpermission
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endsection
            @section('modal')
                <!--create modal-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-white shadow shadow-sm">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ __('Create new user') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row create_user_form" id="create_user_form">
                                    <!-- <div class="col-lg-4">                                                                                                                                                                                                                                                          </div> -->
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label"> {{ __('Name') }} </label>
                                                <input type="text" class="form-control" name="c_firstname" id="c_firstname"
                                                    placeholder="{{ __('Name') }}" required>
                                            </div>
                                            {{-- <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Last name') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Last name') }}"
                                                    name="c_lastname" id="c_lastname" required>
                                            </div> --}}
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Email') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Email') }} "
                                                    name="c_email" id="c_email" autocomplete="off" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Phone number') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Phone') }} "
                                                    name="c_phone" id="c_phone" autocomplete="off"
                                                    data-inputmask="'mask': '[999-]9999-9999'" required>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="birthdate" class="form-label">{{__('Birthdate')}}</label>
                                                <input type="date" class="form-control air-datepicker" name="c_birthdate"
                                                    autocomplete="off" id="c_birthdate">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Password') }} </label>
                                                <input type="password" class="form-control" placeholder="{{ __('Password') }} "
                                                    name="c_password" id="c_password" autocomplete="off" required>
                                                <input type="hidden" id="c_user_type" value="customer">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer card-btm-border card-shadow-success border-success">
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                <button type="button" class="btn btn-success" id="create_customer">{{ __('Create member') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--create modal end-->
                <!--edit modal-->
                <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" data-bs-backdrop="static"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document" style="z-index: 99;">
                        <div class="modal-content">
                            <div class="modal-header bg-white shadow shadow-sm">
                                <h5 class="modal-title" id="exampleModalLabel">{{ __('View User') }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="row view_user_form" id="view_user_form">
                                    <input type="hidden" id="v_id">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label"> {{ __('Name') }} </label>
                                                <input type="text" class="form-control" name="v_firstname" id="v_firstname"
                                                    placeholder="{{ __('Name') }}">
                                            </div>
                                            {{-- <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Last name') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Last name') }}"
                                                    name="v_lastname" id="v_lastname">
                                            </div> --}}
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Email') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Email') }} "
                                                    name="v_email" id="v_email" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Phone') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Phone') }} "
                                                    name="v_phone" id="v_phone" data-inputmask="'mask': '[999-]9999-9999'" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Birthdate') }} </label>
                                                <input type="text" class="form-control" placeholder="{{ __('Birthdate') }} "
                                                    name="v_birthdate" id="v_birthdate" autocomplete="off">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label"> {{ __('Password') }} </label>
                                                <input type="password" class="form-control" placeholder="{{ __('Password') }} "
                                                    name="v_password" id="v_password" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"
                                    id="testgg">{{ __('Close') }}
                                </button>
                                <a class="btn btn-success v_save" id="v_save">{{ __('Save changes') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--edit modal end-->
                <script>
                    $(document).ready(function() {

                        //create validate
                        $('#create_user_form').validate({
                            rules: {
                                c_firstname: "required",
                                c_lastname: "required",
                                c_email: {
                                    email: true,
                                    required: true,
                                },
                                c_phone: {
                                    maxlength: 13,
                                    required: true
                                },
                                c_birthdate: "required",
                                c_password: "required",
                            },
                            messages: {
                                c_firstname: "Please enter your firstname",
                                c_lastname: "Please enter your lastname",
                                c_email: "Please enter your email",
                                c_phone: "Please enter your phone",
                                c_birthdate: "Please enter your birthdate",
                                c_password: "Please enter your password",
                            },
                            errorElement: "em",
                            errorPlacement: function(error, element) {
                                // Add the `invalid-feedback` class to the error element
                                error.addClass("invalid-feedback");
                                if (element.prop("type") === "checkbox") {
                                    error.insertAfter(element.next("label"));
                                } else {
                                    // error.insertAfter(element);
                                }
                            },
                            highlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-invalid").removeClass("is-valid");
                            },
                            unhighlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-valid").removeClass("is-invalid");
                            },
                        });

                        //view validate

                        $('#view_user_form').validate({
                            rules: {
                                v_firstname: "required",
                                v_lastname: "required",
                                v_email: {
                                    email: true,
                                    required: true,
                                },
                                v_phone: {
                                    maxlength: 13,
                                    required: true
                                },
                                v_birthdate: "required",
                            },
                            messages: {
                                v_firstname: "Please enter your firstname",
                                v_lastname: "Please enter your lastname",
                                v_email: "Please enter your email",
                                v_phone: "Please enter your phone",
                                v_birthdate: "Please enter your birthdate",
                            },
                            errorElement: "em",
                            errorPlacement: function(error, element) {
                                // Add the `invalid-feedback` class to the error element
                                error.addClass("invalid-feedback");
                                if (element.prop("type") === "checkbox") {
                                    error.insertAfter(element.next("label"));
                                } else {
                                    // error.insertAfter(element);
                                }
                            },
                            highlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-invalid").removeClass("is-valid");
                            },
                            unhighlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-valid").removeClass("is-invalid");
                            },
                        });

                        // Single User Data

                        $('.editUser').click(function() {
                            const user_id = $(this).data('id');
                            $('#editUserModal').modal('show')
                            const data = {
                                id: user_id
                            }
                            Axios.post('/api/single/user/data', data).then((resp) => {
                                $('#v_id').val(resp.data.data.id),
                                    $('#v_firstname').val(resp.data.data.firstname),
                                    $('#v_lastname').val(resp.data.data.lastname),
                                    $('#v_email').val(resp.data.data.email),
                                    $('#v_phone').val(resp.data.data.phone),
                                    $('#v_birthdate').val(resp.data.data.birthdate)
                            })
                        })


                        //    create customer
                        $('#create_customer').click(function() {
                            let data = {
                                firstname: $('#c_firstname').val(),
                                lastname: $('#c_lastname').val(),
                                email: $('#c_email').val(),
                                phone: $('#c_phone').val(),
                                birthdate: $('#c_birthdate').val(),
                                password: $('#c_password').val(),
                                user_type: $('#c_user_type').val()
                            }
                            const check = $('#create_user_form').valid();
                            console.log(check)
                            if (check == true) {

                                $('#staticBackdrop').modal('hide')
                                Axios.post('/api/customer/create', data).then((resp) => {
                                    window.location.reload();
                                    Swal.fire({
                                        icon: resp.data.icon,
                                        title: '{{ __('Success') }}',
                                        showConfirmButton: false,
                                        timer: 4000
                                    });
                                }).catch((err) => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: err,
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                });
                            }


                        })

                        $('.v_save').click(function() {
                            const checker = $('#view_user_form').valid();

                            if (checker == true) {
                                let vData = {
                                    id: $('#v_id').val(),
                                    firstname: $('#v_firstname').val(),
                                    lastname: $('#v_lastname').val(),
                                    email: $('#v_email').val(),
                                    phone: $('#v_phone').val(),
                                    birthdate: $('#v_birthdate').val(),
                                    password: $('#v_password').val(),
                                    user_type: $('#c_user_type').val()
                                }
                                Axios.post('/api/customer/member_update', vData).then((resp) => {
                                    Swal.fire({
                                        title: "{{ __('Updated!') }}",
                                        icon: 'success',
                                        showConfirmButton: false,
                                    })

                                    setInterval(() => {
                                        window.location.reload()
                                    }, 1000);
                                }).catch((err) => {
                                    console.log(err);
                                });
                            }
                        })

                        $('.delete_user').click(function() {
                            const user_id = $(this).attr('data-id');
                            Swal.fire({
                                title: '{{ __('Reason') }}',
                                input: 'textarea',
                                // inputLabel: 'Reason',
                                inputPlaceholder: '{{ __('Type your message here...') }}',
                                inputAttributes: {
                                    'aria-label': 'Type your message here'
                                },
                                showDenyButton: true,
                                showCancelButton: false,
                                confirmButtonText: "{{ __('Ok') }}",
                                denyButtonText: `{{ __('Cancel') }}`,
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    const data = {
                                        user_id: user_id,
                                        reason : result.value
                                    }
                                    Axios.post('/api/customer/delete', data).then((resp) => {
                                        $('tr[key=' + user_id + ']').remove()
                                        Swal.fire({
                                            title: "{{ __('Deleted') }}",
                                            icon: 'success',
                                            showConfirmButton: false,
                                        })
                                        setTimeout(function() {
                                            location.reload()
                                        }, 3000);
                                    }).catch((err) => {
                                        Swal.fire({
                                            icon: 'error',
                                            title: err,
                                            showConfirmButton: false,
                                            timer: 2000
                                        });
                                    });

                                } else if (result.isDenied) {
                                    Swal.fire('{{ __('Cancelled') }}', '', 'info')
                                }
                            })
                        })
                        // delete customer end
                    })
                </script>
                <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
                <script>
                    $(document).ready(function() {
                        $(":input").inputmask();
                    })
                </script>

            @endsection
