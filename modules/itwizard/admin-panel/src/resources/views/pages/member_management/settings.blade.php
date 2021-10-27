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
                    </div>
                </div>
            </div>


            <div class="main-card card card-btm-border border-primary mb-4">
                <div class="card-body">
                    <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{__('ID')}} </th>
                                <th> {{__('Name')}} </th>
                                <th> {{__('Display name')}} </th>
                                <th> {{__('Description')}} </th>
                                <th> {{__('Linked Menu')}} </th>
                                <th> {{__('Action')}} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i < 25; $i++)
                                <tr>
                                    <td> {{ $i }} </td>
                                    <td>page-{{ $i }}</td>
                                    <td>page Display {{ $i }}</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>cms/permission/{{ $i }}</td>
                                    <td>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="btn-outline-primary btn" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                {{__('Edit')}}
                                            </button>
                                            <button class="btn-outline-danger btn-link btn">
                                                {{__('Delete')}}
                                            </button>
                                            {{-- <button class="border-0 btn-transition btn btn-outline-primary role-switcher" data-id="1">
                                                <i class="fa fa-lock"> </i>
                                            </button> --}}

                                            {{-- <button class="border-0 btn-transition btn btn-outline-danger delete_user" data-id="1">
                                                <i class="fa fa-trash-alt"></i>
                                            </button> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endfor
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
@endsection
@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Permission Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Role name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Role name') }}" name="u_role_name"
                                id="u_role_name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Display Name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Display Name') }}"
                                name="u_display_name" id="u_display_name">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{ __('Description') }} </label>
                            <textarea name="description" id="u_description" cols="30" rows="10"
                                placeholder="{{ __('Description') }}" class="form-control"></textarea>
                        </div>
                        <h6 class="card-title"> {{ __('Permissions') }} </h6>
                        {{-- @foreach ($data['permission'] as $permission)
                            <div class="mb-3 col-lg-3 text-center ">
                                <label class="form-label form-check-label" for="input{{$permission->id}}">
                                    <input type="checkbox" class="form-check-input" name="permission" id="input{{$permission->id}}" value="{{$permission->id}}">
                                    {{ $permission->display_name }}
                                </label>
                            </div>
                        @endforeach --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-primary">{{ __('Save Changes') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
