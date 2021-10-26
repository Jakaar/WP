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
    .daterangepicker {
        z-index: 10000;
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
            
            <h5 class="card-title">{{__('Manage Popups')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <td>{{__('Title')}}</td>
                        <td>{{__('Notice Period')}}</td>
                        <td>{{__('Registration Date')}}</td>
                        <td>{{__('Edit/Delete')}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
                        <td>The website doesn't show up. What is the cause?	</td>
                        <td>2021-07-26~2021-07-27</td>
                        <td>2021-07-26</td>
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
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Add Manage Popup')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Title')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Title')}}" name="title" id="title">
                        </div>
             
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Posting Period')}} </label>
                            <div class="input-group">
                                <div class="input-group-text datepicker-trigger">
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                                <input type="text" class="form-control" data-toggle="datepicker-icon" name="daterange" placeholder="{{__('Date range')}}">
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Popup')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('General Group')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Layer Pop-up')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="mb-3 col-lg-12">
                               &nbsp;
                            </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Location')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('X')}}" name="x" id="x">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> &nbsp; </label>
                            <input type="text" class="form-control" placeholder="{{__('And')}}" name="and" id="and">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Size')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Horizontal')}}" name="horizontal" id="horizontal">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> &nbsp; </label>
                            <input type="text" class="form-control" placeholder="{{__('Vertical')}}" name="vertical" id="vertical">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Link Address')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Link Address')}}" name="link_address" id="link_address">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Pop-up Content')}} </label>
                            <div id="SiteInfoeditor1" name="SiteInfoeditor1">
                               
                            </div>
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
                    <h5 class="modal-title" id="EditRoleModal">{{__('Edit Manage Popups')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="create_new_role" class="row">
                        <input type="hidden" id="u_id">
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Title')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Title')}}" name="title" id="title">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Posting Period')}} </label>
                            <div class="input-group">
                                <div class="input-group-text datepicker-trigger" >
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                                <input type="text" class="form-control" name="daterange" data-toggle="datepicker-icon">
                            </div>
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{__('Popup')}}</label>

                                <div class="position-relative">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('General Group')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            {{__('Layer Pop-up')}}
                                        </label>
                                    </div>


                                </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="mb-3 col-lg-12">
                               &nbsp;
                            </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Location')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('X')}}" name="x" id="x">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> &nbsp; </label>
                            <input type="text" class="form-control" placeholder="{{__('And')}}" name="and" id="and">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{__('Size')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Horizontal')}}" name="horizontal" id="horizontal">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> &nbsp; </label>
                            <input type="text" class="form-control" placeholder="{{__('Vertical')}}" name="vertical" id="vertical">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Link Address')}} </label>
                            <input type="text" class="form-control" placeholder="{{__('Link Address')}}" name="link_address" id="link_address">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{__('Pop-up Content')}} </label>
                            <div id="SiteInfoeditor2" name="SiteInfoeditor2">
                               
                            </div>
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
@section('script')
    <script>
        $('.ModalShow').click(function (){
            $('#AddRoleModal').modal('show')
        }),
        $('.ModalShowEdit').click(function (){
            $('#EditRoleModal').modal('show')
        }),
        
        $(document).ready(function(){
            $('input[name="daterange"]').daterangepicker({
                startDate: moment().startOf("month"),
                endDate: moment().startOf("day").add(32, "day"),
                locale: {
                    format: "M/DD hh:mm",
                    applyLabel: "적용",
                    cancelLabel:"취소",
                    daysOfWeek: [
                        "일",
                        "월",
                        "화",
                        "수",
                        "목",
                        "금",
                        "토"
                    ],
                    monthNames: [
                        "1 /",
                        "2 /",
                        "3 /",
                        "4 /",
                        "5 /",
                        "6 /",
                        "7 /",
                        "8 /",
                        "9 /",
                        "10 /",
                        "11 /",
                        "12 /"
                    ]
                },
            });
        }),
        
        $(document).ready(function() {
        let editor;
        ClassicEditor.create(document.querySelector('#SiteInfoeditor1'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
        let editor1;
        ClassicEditor.create(document.querySelector('#SiteInfoeditor2'))
            .then(newEditor => {
                editor1 = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
        });
    </script>
@endsection
