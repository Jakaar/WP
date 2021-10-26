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
                   {{__('Main Banner')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
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
            <h5 class="card-title">{{__('Main Banner')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <td>{{__('Group Name')}}</td>
                        <td>{{__('Code')}}</td>
                        <td>{{__('Image')}}</td>
                        <td>{{__('Form')}}</td>
                        <td>{{__('Number Of Line-Wrapped Banners')}}</td>
                        <td>{{__('Wheter Or Not To Use')}}</td>
                        <td>{{__('Edit/Delete')}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>MainBanner</td>
                        <td>Main</td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-outline-primary btn ModalShowEdit">
                                {{ ('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ ('Delete') }}
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
    </script>
@endsection
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Add Main Banner')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Code (English)')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>Image</option>
                                <option>Html</option>
                            </select>
                        </div>
                
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Whether Or Not To Use*')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Used')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Not used')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Banner Group')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Main Banner')}}</option>
                                <option>{{__('Vertical')}}</option>
                                <option>{{__('Horizontal')}}</option>
                                <option>{{__('Left Banner')}}</option>
                                <option>{{__('Left')}}</option>
                                <option>{{__('Right')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Priority')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('1')}}</option>
                                <option>{{__('2')}}</option>
                                <option>{{__('3')}}</option>
                                <option>{{__('4')}}</option>
                                <option>{{__('5')}}</option>
                                <option>{{__('6')}}</option>
                            </select>
                        </div>
                       
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Link Address')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Link Address')}}" name="banner_spacing" id="banner_spacing">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('File')}} </label>
                            <input type="file" name="file" class="form-control" />
                        </div>
        
                    </form>
                </div>
                <div class="modal-footer">
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
                    <h5 class="modal-title" id="EditRoleModal">{{__('Edit Main Banner')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Code (English)')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>Image</option>
                                <option>Html</option>
                            </select>
                        </div>
                
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Whether Or Not To Use*')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Used')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Not used')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Banner Group')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('Main Banner')}}</option>
                                <option>{{__('Vertical')}}</option>
                                <option>{{__('Horizontal')}}</option>
                                <option>{{__('Left Banner')}}</option>
                                <option>{{__('Left')}}</option>
                                <option>{{__('Right')}}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Priority')}}</label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>{{__('1')}}</option>
                                <option>{{__('2')}}</option>
                                <option>{{__('3')}}</option>
                                <option>{{__('4')}}</option>
                                <option>{{__('5')}}</option>
                                <option>{{__('6')}}</option>
                            </select>
                        </div>
                       
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Link Address')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Link Address')}}" name="banner_spacing" id="banner_spacing">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('File')}} </label>
                            <input type="file" name="file" class="form-control" />
                        </div>
        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success" id="create_role">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
