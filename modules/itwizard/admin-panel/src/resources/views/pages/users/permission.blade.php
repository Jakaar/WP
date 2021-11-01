@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                </div>
                <div>
                    {{ __('Permission Manage') }}
                    <div class="page-title-subheading">{{ __('User roles manage') }}</div>
                </div>
            </div>
            <div class="page-title-actions">
                <a href="javascript:;" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i
                        class="fa fa-plus"></i> Create new role </a>
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info refresh-page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                {{-- <div class="d-inline-block">
                           <button type="button" class="btn-shadow dropdown-toggle btn btn-info">
                               <span class="btn-icon-wrapper pe-2 opacity-7">
                                   <i class="fa fa-business-time fa-w-20"></i>
                               </span>
                               Buttons
                           </button>
                       </div> --}}
            </div>
        </div>
    </div>
    <!-- <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="main-card mb-3 card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ __('Admin') }}</h5>
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
                                                            <h5 class="card-title">{{ __('Moderator') }}</h5>
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
                                                            <h5 class="card-title">{{ __('User') }}</h5>
                                                            <div class="text-center">
                                                                <h3>
                                                                    <small><i class="lnr-user icon-gradient bg-happy-fisher"></i></small>
                                                                    <span class="count-up-wrapper">150</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="UserPermissionTable" class="table table-hover table-striped ">
                <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Role Name') }}</th>
                        <th>{{ __('Display Name') }}</th>
                        <th>{{ __('Description') }}</th>


                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['roles'] as $role)
                        <tr key="{{$role->id}}">
                            <td></td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->display_name }}</td>
                            <td>{{ $role->description }}</td>

                            <td>
                                <div class="">
                                    <div class="widget-content-right widget-content-actions">
                                        <button class=" btn-transition btn btn-outline-primary edit-roles"
                                            data-bs-toggle="modal" data-bs-target="#EditRoleModal" data-id="{{$role->id}}">
                                            {{__("Edit")}}
                                        </button>
                                        <button class="btn-transition btn btn-outline-danger delete-role" data-id="{{$role->id}}">
                                            {{__("Delete")}}
                                        </button>
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

@section('script')
    <script>
        $(document).ready(function() {
            $('#create_role').click(function() {
                data = {
                    role_name: $("#role_name").val(),
                    display_name: $('#display_name').val(),
                    description: $('#description').val(),
                };
                let permission = [];

                $('input:checkbox[name=c_permission]:checked').each(function(){
                    permission.push($(this).val())
                })

                permission = Object.assign({permission});
                data = $.extend({}, data, permission)

                Axios.post('/api/permission/create', data).then((resp) => {
                    Toast.fire({
                        icon: resp.data.icon,
                        title: resp.data.msg
                    });

                    if(resp.data.icon == 'success'){
                        $("#staticBackdrop").modal('hide')
                        window.location.reload();
                    }

                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.header-check').change(function() {
                console.log($(this).prop('checked'))
                let checkStatus = this.checked;
                $(this).parent().parent().parent().find(':checkbox').prop('checked', checkStatus)

            })
        })
    </script>

    <script>
        $(document).ready(function(){
            $('.delete-role').click(function(){
               const role_id = $(this).attr('data-id')
               const data = {
                   role_id : role_id
               }
               Swal.fire({
                    title: 'Do you want to delete this row?',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "{{__('Delete')}}",
                    denyButtonText: `{{__('Cancel')}}`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/permission/delete', data).then((resp) => {
                            Swal.fire('Deleted!', '', 'success')
                            $('tr[key=' + role_id + ']').remove()
                            }).catch((err) => {
                                Toast.fire({
                                    icon: 'error',
                                    title: err
                                });
                            })
                        }else if (result.isDenied) {
                            Swal.fire('{{__("Changes are not saved")}}', '', 'info')
                        }
                        })

                })
        })
    </script>

    <script>
        $(document).ready(function(){

            $('.edit-roles').click(function(){
                const role_id = $(this).attr('data-id');
                const data = {
                    role_id : role_id,
                }

                Axios.post('/api/role/single', data).then((resp) => {

                    $('#u_id').val(resp.data.data.id)
                    $('#u_display_name').val(resp.data.data.display_name)
                    $('#u_role_name').val(resp.data.data.name)
                    $('#u_description').html(resp.data.data.description)

                    $('input:checkbox[name=permission]').each(function(){
                        $(this).prop('checked',false)
                    })

                    $('input:checkbox[name=permission]').each(function(){
                        let checkbox = $(this)
                        $.each(resp.data.data.permissions, function(i, item){

                          if(item.id == checkbox.val()){
                                checkbox.prop('checked',true);
                            }
                        })
                    })

                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });

            })

            $('.update-role').click(function(){
                let permission = [];
                let data = {
                    id : $('#u_id').val(),
                    display_name : $('#u_display_name').val(),
                    role_name : $('#u_role_name').val(),
                    description : $('#u_description').val(),
                }
                $('input:checkbox[name=permission]:checked').each(function(){
                    permission.push($(this).val())
                })

                permission = Object.assign({permission});
                data = $.extend({}, data, permission)

                Axios.post('/api/permission/update', data).then((resp) => {
                    // $("#EditRoleModal").modal('hide')
                    $('#EditRoleModal').modal('hide')
                    Toast.fire({
                        icon: resp.data.icon,
                        title: resp.data.msg
                    });
                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });
                console.log(data)
            })
        })
    </script>

@endsection

@section('modal')
    <div class="modal fade" id="EditRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Edit role')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Role name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Role name')}}" name="u_role_name"
                                id="u_role_name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Display Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Display Name')}}" name="u_display_name"
                                id="u_display_name">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Description')}} </label>
                            <textarea name="description" id="u_description" cols="30" rows="10" placeholder="{{__('Description')}}"
                                class="form-control"></textarea>
                        </div>
                        <h6 class="card-title">  {{__('Permissions')}} </h6>
                        @foreach ($data['permission'] as $permission)
                            <div class="mb-3 col-lg-3 text-center ">
                                <label class="form-label form-check-label" for="input{{$permission->id}}">
                                    <input type="checkbox" class="form-check-input" name="permission" id="input{{$permission->id}}" value="{{$permission->id}}">
                                    {{ $permission->display_name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success update-role">{{__('Save Changes')}}</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Create role --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Create new role')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Role name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Role name')}}" name="role_name"
                                id="role_name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Display Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Display Name')}}" name="display_name"
                                id="display_name">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Description')}} </label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="{{__('Description')}}"
                                class="form-control"></textarea>
                        </div>
                        <h6 class="card-title mb-3"> {{__('Permissions')}} </h6>
                        @foreach ($data['permission'] as $permission)
                            <div class="col-lg-3 ">
                                <label class="form-label form-check-label" for="cinput{{$permission->id}}">
                                    <input type="checkbox" class="form-check-input" name="c_permission" id="cinput{{$permission->id}}" value="{{$permission->id}}">
                                    {{ $permission->display_name }}
                                </label>
                            </div>
                        @endforeach
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success" id="create_role">{{__('Create role')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
