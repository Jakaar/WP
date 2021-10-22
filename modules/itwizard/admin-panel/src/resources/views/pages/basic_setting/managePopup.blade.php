@extends('Admin::layouts.master')

@section('content')
<style>
    .ck-editor__editable {
        min-height: 100px;
    }
    iframe {
        width:  100%;
        height: 100%;
    }
</style>
<section>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                   {{__('Manage Popups')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                   <div class="d-inline-block dropdown ModalShow">
                      <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow">
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
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <td>{{__('Menu Name')}}</td>
                    <td>{{__('Title')}}</td>
                    <td>{{__('Created At')}}</td>
                    <td>{{__('Views')}}</td>
                </tr>
                </thead>
            </table>
        </div>
    </div>


</section>
@endsection
@section('script')
    <script>
        $('.ModalShow').click(function (){
            $('#EditRoleModal').modal('show')
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
