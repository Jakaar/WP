@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-unlock icon-gradient bg-mixed-hopes"></i>
                        </div>
                        <div>
                            {{ __('Permission Settings') }}
                            <div class="page-title-subheading"> </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                            <i class="pe-7s-refresh-2"></i>
                        </button>
                        @permission('permission-create')
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createPermission">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>  {{__('Create New Permission')}}
                        </button>
                        @endpermission
                    </div>
                </div>
            </div>


            <div class="main-card card card-btm-border border-primary mb-3">
                <div class="card-body">
                    <table style="width: 100%;" id="new_table" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th> {{ __('ID') }} </th>
                                <th> {{ __('Name') }} </th>
                                <th> {{ __('Display name') }} </th>
                                <th> {{ __('Description') }} </th>

                                <th> {{ __('Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permission as $key => $permissions)
                                <tr>
                                    <td> {{ $key + 1 }} </td>
                                    <td>{{ $permissions->name }}</td>
                                    <td>{{ $permissions->display_name }}</td>
                                    <td>{{ $permissions->description }}</td>

                                    <td>
                                        <div class="widget-content-right widget-content-actions">
                                            @permission('permission-update')
                                            <button class="btn-outline-primary btn editPermission" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop" data-id="{{ $permissions->id }}">
                                                {{ 'Edit' }}
                                            </button>
                                            @endpermission
                                            @permission('permission-delete')
                                            <button class="btn-outline-danger btn-link btn deletePermission"
                                                data-id="{{ $permissions->id }}">
                                                {{ 'Delete' }}
                                            </button>
                                            @endpermission
                                            {{-- <button class="border-0 btn-transition btn btn-outline-primary role-switcher" data-id="1">
                                                <i class="fa fa-lock"> </i>
                                            </button> --}}

                                            {{-- <button class="border-0 btn-transition btn btn-outline-danger delete_user" data-id="1">
                                                <i class="fa fa-trash-alt"></i>
                                            </button> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#new_table').DataTable({})
    </script>
    <script>
        $(document).ready(function() {
            $('.editPermission').click(function() {
                let id = $(this).data('id');
                const data = {
                    id: id,
                }

                Axios.post('/api/permission/get', data).then((resp) => {
                    let user = resp.data.data;

                    $('#u_role_name').val(user.name)
                    $('#u_display_name').val(user.display_name)
                    $('#u_description').text(user.description)
                    // $('#u_menu_url').val(user.url)
                    $('#u_id').val(user.id)

                }).catch((err) => {
                    console.log(err);
                });
            })

            $('#permission_update').click(function() {
                const data = {
                    id: $('#u_id').val(),
                    name: $('#u_role_name').val(),
                    display_name: $('#u_display_name').val(),
                    description: $('#u_description').val(),
                    // url: $('#u_menu_url').val()
                }

                Axios.post('/api/permission/settings/update', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title:'{{__('Success')}}',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#staticBackdrop').modal('hide')

                    setInterval(() => {
                        window.location.reload()
                    }, 2000);

                }).catch((err) => {
                    console.log(err);
                });
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#permission_save').click(function() {
                const data = {
                    id: $('#id').val(),
                    name: $('#role_name').val(),
                    display_name: $('#display_name').val(),
                    description: $('#description').val(),
                    url: $('#menu_url').val()
                }
                Axios.post('/api/permission/settings/create', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title:'{{__('Success')}}',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#createPermission').modal('hide')

                    setInterval(() => {
                        window.location.reload()
                    }, 2000);

                }).catch((err) => {
                    console.log(err);
                });
            })
            $('.deletePermission').click(function() {
                const dd = $(this)
                const data = {
                    id: $(this).data('id')
                }
                Axios.post('/api/permission/settings/delete', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title:'{{__('Success')}}',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    dd.parent().parent().parent().remove()
                    setInterval(() => {
                       
                    }, 1500);

                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err,
                        showConfirmButton: false,
                        timer: 1500
                    })
                });


            })
        })
    </script>
@endsection
@section('modal')

    <div class="modal fade" id="createPermission" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title" id="staticBackdropLabel"> {{__('Create New Permission')}} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_permission" class="row">
                        <input type="hidden" id="id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Permission name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Role name') }}"
                                name="role_name" id="role_name" >
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Display Name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Display Name') }}"
                                name="display_name" id="display_name">
                        </div>
                        {{-- <div class="mb-3 col-12">
                            <label class="form-label"> {{ __('Menu Url') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Menu Url') }}" name="menu_url"
                                id="menu_url">
                        </div> --}}
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{ __('Description') }} </label>
                            <textarea name="description" id="description" cols="10" rows="5"
                                placeholder="{{ __('Description') }}" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success" id="permission_save">{{ __('Create') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title" id="staticBackdropLabel"> {{ __('Edit Permission Settings') }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="edit_permission" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Role name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Role name') }}"
                                name="u_role_name" id="u_role_name" readonly="true">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Display Name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Display Name') }}"
                                name="u_display_name" id="u_display_name">
                        </div>
                       
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{ __('Description') }} </label>
                            <textarea name="description" id="u_description" cols="10" rows="5"
                                placeholder="{{ __('Description') }}" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success" id="permission_update">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
