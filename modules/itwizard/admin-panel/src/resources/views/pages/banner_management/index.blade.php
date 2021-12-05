@extends('Admin::layouts.master')
@section('title') {{__('Banner Management')}} @endsection
@section('content')
    <style>
        .image {
            display: none;
        }

        .editor {
            display: none;
        }

        .daterangepicker {
            z-index: 10000;
        }

        .ck-editor__editable {
            min-height: 200px;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #fff !important; 
            opacity: 1;
        }
        .swal2-confirm{
            background-color: rgb(221, 51, 51) !important;
            border:none !important;
        }
        .swal2-cancel{
            background-color: #6c757d !important;
        }
    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Banner Management') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                    class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                @permission('banner-create')
                <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{ __('Create') }}
                </button>
                @endpermission
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($groups as $key => $group)
            <div class="col-md-6">
                <div class="card mb-3 card-btm-border border-primary">
                    <div class="card-body">
                        <div class="card-title mb-3"> {{ $group->group_name }} </div>
                        <table style="width: 100%;" id="new_table_{{ $key + 1 }}" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> {{ __('Code') }} </th>
                                    <th> {{ __('Priority') }} </th>
                                    <th> {{ __('Active') }} </th>
                                    <th>{{ __('Edit/Delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    @if ($group->group_name == $banner->group_name)
                                        <tr>
                                            <td>{{ $banner->code }} </td>
                                            <td>{{ $banner->priority }}</td>
                                            <td>{{ $banner->isEnabled }}</td>
                                            <td>
                                                @permission('banner-update')
                                                <button class="btn-outline-primary btn ModalShowEdit editbtn"
                                                    value="{{ $banner->id }}">
                                                    {{ __('Edit') }}
                                                </button>
                                                @endpermission
                                                @permission('banner-delete')
                                                <button class="btn-outline-danger btn-link btn DeleteBanner"
                                                    key="{{ $banner->id }}">
                                                    {{ __('Delete') }}
                                                </button>
                                                @endpermission
                                                
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-focus="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Add Banner') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <form action="#" id="createForm" class="row">

                            <div class="mb-3 col-lg-6">
                                <label class="form-label"> {{ __('Code') }} </label>
                                <input type="text" class="form-control" placeholder="{{ __('Code') }}" name="code" id="code" data-msg-required="{{ __('This Field is Required') }}" required>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                                <select name="isEnabled" id="isEnabled" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" >{{ __('Select') }}</option>
                                    <option value="{{ __('Used') }}" >{{ __('Used') }}</option>
                                    <option value="{{ __('Not Used') }}">{{ __('Not Used') }}</option>
                                </select>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label class="form-label"> {{ __('Banner Location') }} </label>
                                <select name="group_name" id="group_name" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="">{{ __('Select') }}</option>
                                    <option value="Main Banner">{{ __('Main Banner') }}</option>
                                    <option value="Vertical Banner">{{ __('Vertical Banner') }}</option>
                                    <option value="Horizontal Banner">{{ __('Horizontal Banner') }}</option>
                                    <option value="Left Banner">{{ __('Left Banner') }}</option>
                                    <option value="Right Banner">{{ __('Right Banner') }}</option>
                                    <option value="Pop Up">{{ __('Pop Up') }}</option>
                                </select>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label class="form-label"> {{ __('Priority') }} </label>
                                <select name="priority" id="priority" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="">{{ __('Select') }}</option>
                                    <option value="1">{{ __('1') }}</option>
                                    <option value="2">{{ __('2') }}</option>
                                    <option value="3">{{ __('3') }}</option>
                                    <option value="4">{{ __('4') }}</option>
                                    <option value="5">{{ __('5') }}</option>
                                    <option value="6">{{ __('6') }}</option>
                                    <option value="7">{{ __('7') }}</option>
                                    <option value="8">{{ __('8') }}</option>
                                    <option value="9">{{ __('9') }}</option>
                                    <option value="10">{{ __('10') }}</option>
                                </select>
                            </div>

                           
                         
                            
                            <div class="mb-3 col-lg-6">
                                <label class="form-label"> {{ __('Posting Period') }} </label>
                                <div class="input-group">
                                    <div class="input-group-text datepicker-trigger">
                                        <i class="fa fa-calendar-alt"></i>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="datepicker-icon" name="daterange" id="daterange" placeholder="{{ __('Date Range') }}"  data-msg-required="{{ __('This Field is Required') }}" required readonly >
                                </div>
                            </div>
        
                            <div class="mb-3 col-lg-12">
                                <label class="form-label"> {{ __('Banner Content') }} </label>
                                <textarea  name="ckeditor" id="ckeditor" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required></textarea>
                            </div>
                    
                        </form>
                    </div>

                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="add_banner">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    <div class="modal fade" id="EditRoleModal"  data-bs-focus="false" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title">{{ __('Edit Banner') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="updateForm" class="row">
                        <input type="hidden" id="banner_id" name="banner_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Code') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Code') }}" name="code1" id="code1" data-msg-required="{{ __('This Field is Required') }}" required>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                            <select name="isEnabled1" id="isEnabled1" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="">{{ __('Select') }}</option>
                                <option value="Used">{{ __('Used') }}</option>
                                <option value="Not Used">{{ __('Not Used') }}</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Banner Location') }} </label>
                            <select name="group_name1" id="group_name1" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="">{{ __('Select') }}</option>
                                <option value="Main Banner">{{ __('Main Banner') }}</option>
                                <option value="Vertical Banner">{{ __('Vertical Banner') }}</option>
                                <option value="Horizontal Banner">{{ __('Horizontal Banner') }}</option>
                                <option value="Left Banner">{{ __('Left Banner') }}</option>
                                <option value="Right Banner">{{ __('Right Banner') }}</option>
                                <option value="Pop Up">{{ __('Pop Up Banner') }}</option>
                            </select>
                        </div>


                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Priority') }} </label>
                            <select name="priority1" id="priority1" class="form-select form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="">{{ __('Select') }}</option>
                                <option value="1">{{ __('1') }}</option>
                                <option value="2">{{ __('2') }}</option>
                                <option value="3">{{ __('3') }}</option>
                                <option value="4">{{ __('4') }}</option>
                                <option value="5">{{ __('5') }}</option>
                                <option value="6">{{ __('6') }}</option>
                                <option value="7">{{ __('7') }}</option>
                                <option value="8">{{ __('8') }}</option>
                                <option value="9">{{ __('9') }}</option>
                                <option value="10">{{ __('10') }}</option>
                            </select>
                        </div>
                        
                     
                   

                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Posting Period') }} </label>
                            <div class="input-group">
                                <div class="input-group-text datepicker-trigger">
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                                <input type="text" class="form-control" data-toggle="datepicker-icon" name="daterange" id="daterange" placeholder="{{ __('Date Range') }}"  data-msg-required="{{ __('This Field is Required') }}" required readonly>
                            </div>
                        </div>
                   
                        <div class="mb-3 col-lg-12">
                            <label class="form-label"> {{ __('Banner Content') }} </label>
                            <textarea  name="ckeditor1" id="ckeditor1" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="update_banner">{{ __('Update') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>

    <script>
        $('#new_table_1').DataTable({})
        $('#new_table_2').DataTable({})
        $('#new_table_3').DataTable({})
        $('#new_table_4').DataTable({})
        $('#new_table_5').DataTable({})
        $('#new_table_6').DataTable({})
        $('.ModalShow').click(function() {
            $('#AddRoleModal').modal('show')
        })
        $('.ModalShowEdit').click(function() {
            $('#EditRoleModal').modal('show')
        })
        $(document).ready(function() {

            CKEDITOR.replace('ckeditor', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            }); 
            CKEDITOR.replace('ckeditor1', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });   
                                
            $('#createForm').validate({
                
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        // error.insertAfter(element.next("label"));
                    } else {
                        // error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                    const parantId = $(element).attr('data-parent-id');
                    $('#' + parantId).addClass("text-danger").removeClass("text-success");
                },
                unhighlight: function(element, errorClass, validClass) {
                    const parantId = $(element).attr('data-parent-id');
                    $('#' + parantId).addClass("text-success").removeClass("text-danger");
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });
            $('#updateForm').validate({
              
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        // error.insertAfter(element.next("label"));
                    } else {
                        // error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                    const parantId = $(element).attr('data-parent-id');
                    $('#' + parantId).addClass("text-danger").removeClass("text-success");
                },
                unhighlight: function(element, errorClass, validClass) {
                    const parantId = $(element).attr('data-parent-id');
                    $('#' + parantId).addClass("text-success").removeClass("text-danger");
                    $(element).addClass("is-valid").removeClass("is-invalid");

                },
            });
            $('#add_banner').on('click', function() {
                if ($('#createForm').valid()) {
                    const data = {
                        group_name: $('#group_name').val(),
                        code: $('#code').val(),
                        editor: CKEDITOR.instances.ckeditor.getData(),
                        priority: $('#priority').val(),
                        isEnabled: $('#isEnabled').val(),
                        daterange: $('#daterange').val(),
                    }

                    const headers = {
                        'Content-Type': 'multipart/form-data',
                        'Content-Type': 'Application/json'
                    }
                    Axios.post('/api/addbanner', data, {
                        headers: headers
                        
                    }).then((resp) => {
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('Added')}}',
                            showConfirmButton: false
                            
                        })
                        $('#AddRoleModal').modal('hide');
                        setTimeout(function() {
                            location.reload()
                        }, 2000);
                        
                    }).catch((err) => {
                        Toast.fire({
                            icon: 'error',
                            title: err
                        });
                    });
                }
            })

            $('.DeleteBanner').on('click', function() {
                Swal.fire({
                    title: '{{ __('Are you sure?') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: '{{ __('Cancel') }}',
                    confirmButtonText: '{{ __('Yes Delete It!') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/DeleteBanner/' + $(this).attr('key')).then((resp) => {
                            Swal.fire({
                                icon: 'success',
                                title: '{{__('Deleted!')}}',
                                showConfirmButton: false
                            })
                            setTimeout(function (){
                                location.reload()
                            },2000);
                        });
                    }
                })
            });

            $(document).on('click', '.editbtn', function() {
                var banner_id = $(this).val();
                //$('#editModal').modal('show');
                Axios.get('/api/editbanner/' + banner_id).then((resp) => {
                    $('#banner_id').val(resp.data.id);
                    $('#code1').val(resp.data.code);
                    $('#group_name1').val(resp.data.group_name);
                    $('#isEnabled1').val(resp.data.isEnabled);
                    $('#priority1').val(resp.data.priority);
                    $('#daterange').val(resp.data.daterange);
                    CKEDITOR.instances.ckeditor1.setData(resp.data.banner_content);                
                });
            });

            $('#update_banner').on('click', function() {
                if ($('#updateForm').valid()) {
                    const data = {
                        banner_id: $('#banner_id').val(),
                        group_name1: $('#group_name1').val(),
                        code1: $('#code1').val(),
                        ckeditor1: CKEDITOR.instances.ckeditor1.getData(),
                        priority1: $('#priority1').val(),
                        isEnabled1: $('#isEnabled1').val(),
                        daterange: $('#daterange').val(),
                    }
                    const headers = {
                        'Content-Type': 'multipart/form-data',
                        'Content-Type': 'Application/json'
                    }
                    Axios.post('/api/updatebanner', data, {
                        headers: headers
                    }).then((resp) => {
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('Updated')}}',
                            showConfirmButton: false
                        })
                        setTimeout(function() {
                            location.reload()
                        }, 2000);
                    }).catch((err) => {
                        Toast.fire({
                            icon: 'error',
                            title: err
                        });
                    });
                }
            })

            $('#reload_page').click(function() {
                location.reload(true);
            });
         
            $('input[name="daterange"]').daterangepicker({
                startDate: moment().startOf("month"),
                endDate: moment().startOf("day").add(32, "day"),
                locale: {
                    format: "Y/M/DD hh:mm",
                    applyLabel: "적용",
                    cancelLabel: "취소",
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


        })
    </script>
@endsection
