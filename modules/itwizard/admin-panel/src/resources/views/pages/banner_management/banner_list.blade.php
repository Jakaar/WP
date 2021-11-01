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
                   {{__('Banner List')}}
                </div>
            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">
        
        <div class="card-body">
            <h5 class="card-title">{{__('Banner List')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <td>{{__('Group Name')}}</td>
                        <td>{{__('Code')}}</td>
                        <td>{{__('Image')}}</td>
                        <td>{{__('Form')}}</td>
                        <td>{{__('Number Of Line-Wrapped Banners')}}</td>
                        <td>{{__('Is Used')}}</td>
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
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
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
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
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
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
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
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
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
                                {{__('Edit') }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{__('Delete') }}
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
                            <input type="text" class="form-control" placeholder="{{__('Title')}}" name="code" id="code">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Group Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Group Name')}}" name="group_name" id="group_name">
                        </div>
                
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Banner Form')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Vertical')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Horizontal')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">  
                                {{__('Is Used')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Used')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Not Used')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                       
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Banner Spacing')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Banner Spacing')}}" name="banner_spacing" id="banner_spacing">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Number Of Line-Wrapped Banners')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
        
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
                            <input type="text" class="form-control" placeholder="{{__('Title')}}" name="code" id="code">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Group Name')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Group Name')}}" name="group_name" id="group_name">
                        </div>
                
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Banner Form')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Vertical')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Horizontal')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Is Used')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Used')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault1" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Not Used')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                       
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Banner Spacing')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Banner Spacing')}}" name="banner_spacing" id="banner_spacing">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Number Of Line-Wrapped Banners')}} </label>
                            <select name="select" id="exampleSelect" class="form-select form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
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
