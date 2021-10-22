@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">
            <div class="app-inner-layout__header bg-heavy-rain">
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-unlock icon-gradient bg-mixed-hopes"></i>
                            </div>
                            <div>
                                {{__('Permission Settings')}}
                                <div class="page-title-subheading">  </div>
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
            </div>
            
                <div class="main-card card">
                    <div class="card-body">
                        <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name</th>
                                    <th> Display name</th>
                                    <th>Description</th>
                                    <th>Linked Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 1; $i < 25; $i++)
                                <tr>
                                    <td> {{$i}} </td>
                                    <td>page-{{$i}}</td>
                                    <td>page Display {{$i}}</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>cms/permission/{{$i}}</td>
                                    <td> 
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-primary" data-id="1" data-bs-toggle="modal" data-bs-target="#editUserModal">
                                                <i class="fa fa-edit"></i>
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