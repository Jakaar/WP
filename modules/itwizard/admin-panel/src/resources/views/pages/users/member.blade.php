@extends('Admin::layouts.master')
@section('title') {{__('Member Management')}} @endsection

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
                <th>{{ __('First Name') }}</th>
                <th>{{ __('Last Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{__('Phone')}}</th>

                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr key="{{ $user->id }}">
                    <td></td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{$user->phone}}</td>
                    <td>
                        <div class="">
                            <div class="widget-content-right widget-content-actions">
                                @permission('role-update')
                                <button class=" btn-transition btn btn-outline-primary edit-roles"
                                        data-bs-toggle="modal" data-bs-target="#editUserModal{{$user->id}}"
                                        data-id="{{ $user->id }}">
                                    {{ __('View') }}
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
                <form class="row" id="create_user_form">
                    <!-- <div class="col-lg-4">                                                                                                                                                                                                                                                          </div> -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('First name') }} </label>
                                <input type="text" class="form-control" name="firstname" id="c-firstname"
                                       name="firstname" placeholder="{{ __('First name') }}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Last name') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Last name') }}"
                                       name="lastname" id="c-lastname">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Email') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Email') }} "
                                       name="email" id="c-email" autocomplete="off">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Phone') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Phone') }} "
                                       name="phone" id="c-phone" autocomplete="off">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="birthdate" class="wizard-form-text-label">Birthdate</label>
                                <input type="date" class="form-control air-datepicker" name="birthdate" autocomplete="off" id="c-birthdate" >
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Password') }} </label>
                                <input type="password" class="form-control" placeholder="{{ __('Password') }} "
                                       name="password" id="c-password" autocomplete="off">
                                <input type="hidden" id="c-user_type" value="customer">

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
@foreach ($users as $key=>$user)
<div class="modal fade" id="editUserModal{{$user->id}}" tabindex="-1" role="dialog" data-bs-backdrop="static"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="z-index: 99;">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('View User') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">
                <form class="row" id="{{$user->id}}">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('First name') }} </label>
                                <input type="text" class="form-control" name="firstname" id="firstname"
                                       value="{{$user->firstname}}"
                                       name="firstname" placeholder="{{ __('First name') }}">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Last name') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Last name') }}"
                                       value="{{$user->lastname}}"
                                       name="lastname" id="lastname">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Email') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Email') }} "
                                       value="{{$user->email}}"
                                       name="email" id="email" autocomplete="off">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Phone') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Phone') }} "
                                       value="{{$user->phone}}"
                                       name="phone" id="phone" autocomplete="off">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label"> {{ __('Birthdate') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Birthdate') }} "
                                       value="{{$user->birthdate}}"
                                       name="birthdate" id="birthdate" autocomplete="off">
                            </div>

                            <!--                            <div class="col-lg-6 mb-3">-->
                            <!--                                <label class="form-label"> {{ __('Password') }} </label>-->
                            <!--                                <input type="password" class="form-control" placeholder="{{ __('Password') }} "-->
                            <!--                                       name="password" id="password" autocomplete="off">-->
                            <!--                                <small class="form-text text-muted">-->
                            <!--                                    {{ __('Leave empty to keep the same') }}-->
                            <!--                                </small>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </form>
                </p>
            </div>
            <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"
                        id="testgg">{{ __('Close') }}
                </button>
                <!--                <a class="btn btn-success" id="save_c">{{ __('Save changes') }}</a>-->
            </div>
        </div>
    </div>
</div>
@endforeach
<!--edit modal end-->
<script>
//    create customer
    $('#create_customer').click(function() {
        let data = {
            firstname: $('#c-firstname').val(),
            lastname: $('#c-lastname').val(),
            email: $('#c-email').val(),
            phone: $('#c-phone').val(),
            birthdate: $('#c-birthdate').val(),
            password: $('#c-password').val(),
            user_type : $('#c-user_type').val()
        }
        const check = $('#create_user_form').valid();

        if (check == true) {
            $('#staticBackdrop').modal('hide')
            Axios.post('/api/customer/create', data).then((resp) => {
                window.location.reload();
                Swal.fire({
                    icon: resp.data.icon,
                    title: '{{__('Success')}}',
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
// create customer end
// delete customer start

$('.delete_user').click(function() {
    const user_id = $(this).attr('data-id');
    Swal.fire({
        title: '{{__('Reason')}}',
        input: 'textarea',
        // inputLabel: 'Reason',
        inputPlaceholder: '{{__('Type your message here...')}}',
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
            }
            if (result.value) {
                Axios.post('/api/customer/delete', {
                    reason: result.value,
                    user_id: user_id
                });
            }
            Axios.post('/api/customer/delete', data).then((resp) => {
                $('tr[key=' + user_id + ']').remove()
                Swal.fire('{{__('Deleted!')}}', '', 'success')
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
            Swal.fire('{{__('Cancelled')}}', '', 'info')
        }
    })
})
// delete customer end
</script>

@endsection
