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
                   {{__('Menu Management')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>

                <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                <span class="btn-icon-wrapper pe-2 opacity-7">
                <i class="pe-7s-plus"></i>
                </span>
                {{__('Create')}}
                </button>
            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">

        <div class="card-body">
            <h5 class="card-title">{{__('Menu Management')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <td>{{__('Level')}}</td>
                        <td>{{__('Menu Name')}}</td>
                        <td>{{__('Explanation')}}</td>
                        <td>{{__('State')}}</td>
                        <td>{{__('Edit/Delete')}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Main</td>
                        <td>2</td>

                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>Main</td>
                        <td>2</td>

                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1</td>
                        <td>Main</td>
                        <td>2</td>

                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1</td>
                        <td>Main</td>
                        <td>2</td>

                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>2</td>
                        <td>  &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;  Main</td>

                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>3</td>
                        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; Main</td>

                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>3</td>
                        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; Main</td>

                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>3</td>
                        <td> &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; &nbsp; Main</td>

                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</section>
@endsection
@section('script')
    <script>
        $('.ModalShow').click(function (){
            $('#AddRoleModal').modal('show')
        })
        $('.ModalShowEdit').click(function (){
            $('#EditRoleModal').modal('show')
        })
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@endsection
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{__('Add New Menu')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Top Menu')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Preferences')}}</option>
                                <option>{{__('Basic Setting')}}</option>
                                <option>{{__('Member Management')}}</option>
                                <option>{{__('Page Management')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Menu Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Menu Name')}}" name="name" id="name">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Status Classification')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Use')}}</option>
                                <option>{{__('Unset')}}</option>
                                <option>{{__('Delete')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Menu Window')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Current Window')}}</option>
                                <option>{{__('New Window')}}</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label for="exampleCity" class="form-label">{{__('Menu Type')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Select')}}</option>
                                <option>{{__('Board')}}</option>
                                <option>{{__('Page')}}</option>
                                <option>{{__('Direct Link')}}</option>
                                <option>{{__('Form')}}</option>
                                <option>{{__('Product')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="exampleCity" class="form-label">{{__('Explanation')}}</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success update-role">{{__('Save Changes')}}</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Create role --}}
    <div class="modal fade" id="EditRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title card-title" id="EditRoleModal">{{__('Edit Menu')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Top Menu')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Preferences')}}</option>
                                <option>{{__('Basic Setting')}}</option>
                                <option>{{__('Member Management')}}</option>
                                <option>{{__('Page Management')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Menu Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Menu Name')}}" name="name" id="name">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Status Classification')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Use')}}</option>
                                <option>{{__('Unset')}}</option>
                                <option>{{__('Delete')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Menu Window')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Current Window')}}</option>
                                <option>{{__('New Window')}}</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label for="exampleCity" class="form-label">{{__('Menu Type')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Select')}}</option>
                                <option>{{__('Board')}}</option>
                                <option>{{__('Page')}}</option>
                                <option>{{__('Direct Link')}}</option>
                                <option>{{__('Form')}}</option>
                                <option>{{__('Product')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="exampleCity" class="form-label">{{__('Explanation')}}</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success" id="create_role">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
