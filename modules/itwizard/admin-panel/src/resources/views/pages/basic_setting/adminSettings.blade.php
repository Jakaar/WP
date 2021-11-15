@extends('Admin::layouts.master')
@section('content')
<div class="app-main__inner p-0 ">
    <div class="app-inner-layout ">


        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        {{__('Administrator Settings')}}
                    </div>
                </div>

              


                <div class="page-title-actions">
                    <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"  class="btn-shadow me-3 btn btn-info">
                        <i class="pe-7s-refresh-2"></i>
                    </button>

                    <div class="d-inline-block dropdown">
                        <button type="button" class="search-icon btn-shadow btn btn-success ModalShow" >
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                            {{__('Create')}}
                        </button>
                    </div>

                </div>




            </div>
        </div>


        <div class="main-card mb-3 card">

            <div class="card-body">
                <h5 class="card-title">{{__('Administrator Settings')}}</h5>
                <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <td>{{__('Firstname')}}</td>
                            <td>{{__('Lastname')}}</td>
                            <td>{{__('Email')}}</td>
                            <td>{{__('Registration Date')}}</td>
                            <td>{{__('Edit/Delete')}}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data_admin)
                        <tr>
                            <td>{{ $data_admin-> id}}</td>
                            <td>{{ $data_admin-> firstname}}</td>
                            <td>{{ $data_admin-> lastname}}</td>
                            
                            <td>{{ $data_admin-> email}}</td>
                            <td>{{ $data_admin-> created_at}}</td>

                            <td>
                                <button class="btn-outline-primary btn ModalEdit edit_admin" data-id="{{$data_admin->id}}">
                                    {{ ('Edit') }}
                                </button>
                                <button class="btn-outline-danger btn-link btn delete_admin" data-id="{{$data_admin->id}}">
                                    {{ ('Delete') }}
                                </button>
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
    $(document).ready(function() {
        $('.ModalShow').click(function() {
            $('#adminAddModal').modal('show')
        })
        $('.ModalEdit').click(function() {
            $('#adminEditModal').modal('show')
        })

        $('.create_admin').click(function() {
            data = {
                firstname: $("#adminFirstName").val(),
                lastname: $("#adminLastName").val(),
                password: $('#adminPassword').val(),
                email: $('#adminEmail').val(),
            };
            Axios.post('/api/permission/settingsCreate', data).then((resp) => {
                // console.log(data);
                Toast.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                   
                    $('#adminAddModal').modal('hide').removeAttr('key');
                        setTimeout(function (){
                            location.reload()
                        },2000);
            }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });
        })


    });
</script>
<script>
        $(document).ready(function(){
            $('.delete_admin').click(function(){
               const delete_id = $(this).attr('data-id')
               const data = {
                   delete_id : delete_id
               }
               Swal.fire({
                    title: 'Reason',
                    input: 'textarea',
                    // inputLabel: 'Reason',
                    inputPlaceholder: 'Type your message here...',
                    inputAttributes: {
                        'aria-label': 'Type your message here'
                    },
           
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "{{__('Ok')}}",
                    denyButtonText: `{{__('Cancel')}}`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (result.value) {
                            Axios.post('/api/permission/adminUpdate', {reason: result.value, id : delete_id});
                        }
                        Axios.post('/api/permission/settingsDelete', data).then((resp) => {
                        //  console.log(delete_id);
                            Swal.fire('Deleted!', '', 'success')
                            $('tr[key=' + delete_id+ ']').remove()
                                setTimeout(function (){
                                    location.reload()
                                },2000);
                            })
                            .catch((err) => {
                                Toast.fire({
                                    icon: 'error',
                                    title: err
                                });
                            })
                        }
                        })

                })
        })
    </script>
      <script>
        $(document).ready(function(){

            $('.edit_admin').click(function(){
                const admin_edit_id = $(this).attr('data-id');
                const data = {
                    admin_edit_id : admin_edit_id,
                }

                Axios.post('/api/permission/adminEdit', data).then((resp) => {

                    $('#editIdAdmin').val(resp.data.data.id)
                    $('#editAdminFirstName').val(resp.data.data.firstname)
                    $('#editAdminLastName').val(resp.data.data.lastname)
                    $('#editAdminPassword').val()
                    $('#editAdminEmail').val(resp.data.data.email)

                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                });

            })

            $('.adminUpdate').click(function(){

                let data = {
                   id : $('#editIdAdmin').val(),
                    firstname : $('#editAdminFirstName').val(),
                    lastname : $('#editAdminLastName').val(),
                    password : $('#editAdminPassword').val(),
                    email : $('#editAdminEmail').val(),
                }
                
                Axios.post('/api/permission/adminUpdate', data).then((resp) => {
                    $('#EditRoleModal').modal('hide')
                    Toast.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                    window.location.reload()

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
<div class="modal fade" id="adminAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Admin Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row">
                <input type="hidden"  id="editIdAdmin">

                   
                    <div class="col-lg-12 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Firstname')}}</label>
                        <input type="text" class="form-control" name="firstname" id="adminFirstName" placeholder="firstname">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Lastname')}}</label>
                        <input type="text" class="form-control" name="Lastname" id="adminLastName" placeholder="lastname">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Password')}}</label>
                        <input type="password" class="form-control" name="password" id="adminPassword" placeholder="password">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Email')}}</label>
                        <input type="email" class="form-control" name="email" id="adminEmail" placeholder="email">
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success create_admin" >{{__('Save Changes')}}</button>
            </div>
        </div>
    </div>
</div>

<!-- ModalEdit -->
<div class="modal fade" id="adminEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Admin Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row">
                    
                    <!-- <input type="hidden"  id="editIdAdmin"> -->

                    <div class="col-lg-12 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Firstname')}}</label>
                        <input type="text" class="form-control" id="editAdminFirstName" placeholder="firstname">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Lastname')}}</label>
                        <input type="text" class="form-control" id="editAdminLastName" placeholder="lastname">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Password')}}</label>
                        <input type="password" class="form-control" id="editAdminPassword" placeholder="password">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Email')}}</label>
                        <input type="email" class="form-control" id="editAdminEmail" placeholder="email">
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success adminUpdate" >{{__('Save Changes')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
