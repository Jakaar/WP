@extends('Admin::layouts.master')
<style>
    .image {
        display: none;
    }

    .editor {
        display: none;
    }

</style>
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Banner Management') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{ __('Create') }}
                </button>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class=" card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Main Banner') }} </div>
                    <table style="width: 100%;" id="new_table_1" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Code') }} </th>
                                <th> {{ __('Banner') }} </th>
                                <th> {{ __('Design Method') }} </th>
                                <th> {{ __('Priority') }} </th>
                                <th> {{ __('Active') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mainbanners as $mainbanner)
                                <tr>
                                    <td>{{ $mainbanner->code }} </td>
                                    <td>
                                        @if ($mainbanner->design_method == 'html')
                                            {{ __('html') }}
                                        @else
                                            {{ __('code') }}
                                        @endif
                                    </td>
                                    <td>{{ $mainbanner->design_method }}</td>
                                    <td>{{ $mainbanner->priority }}</td>
                                    <td>{{ $mainbanner->active }}</td>
                                    <td>
                                        <button class="btn-outline-primary btn ModalShowEdit editbtn" value="{{$mainbanner->id}}">
                                            {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn DeleteBanner" key="{{ $mainbanner->id }}">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Vertical Banner') }} </div>
                    <table style="width: 100%;" id="new_table_2" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Code') }} </th>
                                <th> {{ __('Banner') }} </th>
                                <th> {{ __('Design Method') }} </th>
                                <th> {{ __('Priority') }} </th>
                                <th> {{ __('Active') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($verticalbanners as $verticalbanner)
                                <tr>
                                    <td>{{ $verticalbanner->code }} </td>
                                    <td>
                                        @if ($verticalbanner->design_method == 'html')
                                            {{ __('html') }}
                                        @else
                                            {{ __('code') }}
                                        @endif
                                    </td>
                                    <td>{{ $verticalbanner->design_method }}</td>
                                    <td>{{ $verticalbanner->priority }}</td>
                                    <td>{{ $verticalbanner->active }}</td>
                                    <td>
                                        <button class="btn-outline-primary btn ModalShowEdit editbtn" value="{{$verticalbanner->id}}">
                                            {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn DeleteBanner" key="{{ $verticalbanner->id }}">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Horizontal Banner') }} </div>
                    <table style="width: 100%;" id="new_table_3" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Code') }} </th>
                                <th> {{ __('Banner') }} </th>
                                <th> {{ __('Design Method') }} </th>
                                <th> {{ __('Priority') }} </th>
                                <th> {{ __('Active') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($horizontalbanners as $horizontalbanner)
                                <tr>
                                    <td>{{ $horizontalbanner->code }} </td>
                                    <td>
                                        @if ($horizontalbanner->design_method == 'html')
                                            {{ __('html') }}
                                        @else
                                            {{ __('code') }}
                                        @endif
                                    </td>
                                    <td>{{ $horizontalbanner->design_method }}</td>
                                    <td>{{ $horizontalbanner->priority }}</td>
                                    <td>{{ $horizontalbanner->active }}</td>
                                    <td>
                                        <button class="btn-outline-primary btn ModalShowEdit editbtn" value="{{$horizontalbanner->id}}">
                                            {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn DeleteBanner" key="{{ $horizontalbanner->id }}">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Left Banner') }} </div>
                    <table style="width: 100%;" id="new_table_4" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Code') }} </th>
                                <th> {{ __('Banner') }} </th>
                                <th> {{ __('Design Method') }} </th>
                                <th> {{ __('Priority') }} </th>
                                <th> {{ __('Active') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leftbanners as $leftbanner)
                                <tr>
                                    <td>{{ $leftbanner->code }} </td>
                                    <td>
                                        @if ($leftbanner->design_method == 'html')
                                            {{ __('html') }}
                                        @else
                                            {{ __('code') }}
                                        @endif
                                    </td>
                                    <td>{{ $leftbanner->design_method }}</td>
                                    <td>{{ $leftbanner->priority }}</td>
                                    <td>{{ $leftbanner->active }}</td>
                                    <td>
                                        <button class="btn-outline-primary btn ModalShowEdit editbtn" value="{{$leftbanner->id}}">
                                            {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn DeleteBanner" key="{{ $leftbanner->id }}">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Right Banner') }} </div>
                    <table style="width: 100%;" id="new_table_5" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Code') }} </th>
                                <th> {{ __('Banner') }} </th>
                                <th> {{ __('Design Method') }} </th>
                                <th> {{ __('Priority') }} </th>
                                <th> {{ __('Active') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rightbanners as $rightbanner)
                                <tr>
                                    <td>{{ $rightbanner->code }} </td>
                                    <td>
                                        @if ($rightbanner->design_method == 'html')
                                            {{ __('html') }}
                                        @else
                                            {{ __('code') }}
                                        @endif
                                    </td>
                                    <td>{{ $rightbanner->design_method }}</td>
                                    <td>{{ $rightbanner->priority }}</td>
                                    <td>{{ $rightbanner->active }}</td>
                                    <td>
                                        <button class="btn-outline-primary btn ModalShowEdit editbtn" value="{{$rightbanner->id}}">
                                            {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn DeleteBanner" key="{{ $rightbanner->id }}">
                                            {{ __('Delete') }}
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
        $('#new_table_1').DataTable({})
        $('#new_table_2').DataTable({})
        $('#new_table_3').DataTable({})
        $('#new_table_4').DataTable({})
        $('#new_table_5').DataTable({})
        $('.ModalShow').click(function() {
            $('#AddRoleModal').modal('show')
        })
        $('.ModalShowEdit').click(function() {
            $('#EditRoleModal').modal('show')
        })


        function showDiv(select) {
            if (select.value == 'image') {
                document.getElementById('image').style.display = "block";
                document.getElementById('editor').style.display = "none";
            } else if (select.value == 'html') {
                document.getElementById('editor').style.display = "block";
                document.getElementById('image').style.display = "none";
            } else {
                document.getElementById('image').style.display = "none";
                document.getElementById('editor').style.display = "none";
            }
        }

        function showDivEdit(select) {
            if (select.value == 'image') {
                document.getElementById('image1').style.display = "block";
                document.getElementById('editor1').style.display = "none";
            } else if (select.value == 'html') {
                document.getElementById('editor1').style.display = "block";
                document.getElementById('image1').style.display = "none";
            } else {
                document.getElementById('image1').style.display = "none";
                document.getElementById('editor1').style.display = "none";
            }
        }


        $(document).ready(function() {
            $("#AddBanner").validate({
                rules: {
                    group_name: "required",
                    code: "required",
                    banner_content: false,
                    design_method: "required",
                    priority: "required",
                    link_address: "required",
                    active: "required",
                    banner: {
                        required: false,
                        extension: "png|jpg|svg",
                    },
                },
                messages: {
                    group_name: "Please select your group name",
                    code: "Please enter your code",
                    banner_content: "Please enter your banner content",
                    design_method: "Please select your design method",
                    priority: "Please select your priority",
                    link_address: "Please enter your link address",
                    active: "Please select your is use",
                    banner: {
                        extension: "Please upload only image file",
                    },
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });

            $('#add_banner').on('click',function() {
                const data = {
                    banner:$('#file-upload')[0].files[0],
                    group_name:$('#group_name').val(),
                    code: $('#code').val(),
                    banner_content: $('#banner_content').val(),
                    // design_method: $('#design_method').val(),
                    priority: $('#priority').val(),
                    link_address: $('#link_address').val(),
                    active: $('#active').val(),
                }
                console.log(data)
                // $("#AddBanner").valid();
                // const check = $("#AddBanner").valid();
                const headers = {
                    'Content-Type': 'multipart/form-data',
                    'Content-Type': 'Application/json'
                }
                // if (check == true) {
                    Axios.post('/api/addbanner', data, {
                        headers: headers
                    }).then((resp) => {
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
                // }
            })


            $('.DeleteBanner').on('click', function () {
                Swal.fire({
                    title: '{{__('Are you sure?')}}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: '{{__('Cancel')}}',
                    confirmButtonText: '{{__('Yes Delete It!')}}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/DeleteBanner/' + $(this).attr('key')).then((resp) => {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            setTimeout(function (){
                                location.reload()
                            },2000);
                        });
                    }
                })
            });

            $(document).on('click','.editbtn', function(){
                var banner_id=$(this).val();
                //$('#editModal').modal('show');
                Axios.get('/api/editbanner/' + banner_id).then((resp) => {
                    console.log(resp)
                    $('#banner_id').val(resp.data.id);
                    $('#code1').val(resp.data.code);
                    $('#banner1').val(resp.data.image);
                    $('#group_name1').val(resp.data.group_name);
                    $('#active1').val(resp.data.active);
                    $('#priority1').val(resp.data.priority);
                    $('#link_address1').val(resp.data.link_address);
                    $('#design_method1').val(resp.data.design_method);
                    $('#banner_content1').val(resp.data.banner_content);
                    console.log(resp);
                });
            });



            $("#UpdateBanner").validate({
                rules: {
                    group_name1: "required",
                    code1: "required",
                    banner_content1: false,
                    design_method1: "required",
                    priority1: "required",
                    link_address1: "required",
                    active1: "required",
                    banner1: {
                        required: false,
                        extension: "png|jpg|svg",
                    },
                },
                messages: {
                    group_name1: "Please select your group name",
                    code1: "Please enter your code",
                    banner_content1: "Please enter your banner content",
                    design_method1: "Please select your design method",
                    priority1: "Please select your priority",
                    link_address1: "Please enter your link address",
                    active1: "Please select your is use",
                    banner1: {
                        extension: "Please upload only image file",
                    },
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });

            $('#update_banner').click(function() {
                const data = new FormData();
                data.append('banner1',$('#file-upload1').prop('files')[0]);
                data.append('group_name1', $('#group_name1').val());
                data.append('code1', $('#code1').val());
                data.append('banner_content1', $('#banner_content1').val());
                data.append('design_method1', $('#design_method1').val());
                data.append('priority1', $('#priority1').val());
                data.append('link_address1', $('#link_address1').val());
                data.append('active1', $('#active1').val());

                $("#UpdateBanner").valid();
                const check = $("#AddBanner").valid();
                const headers = {
                    'Content-Type': 'multipart/form-data'
                }
                if (check == true) {
                    Axios.post('/api/updatebanner', data, {
                        headers: headers
                    }).then((resp) => {

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
                }
            })


            


        })


    </script>
@endsection
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Add Banner') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="AddBanner" class="row">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Code') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Code') }}" name="code"
                                id="code">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                            <select name="active" id="active" class="form-select form-control">
                                <option value="">{{ __('Select') }}</option>
                                <option value="{{ __('Used') }}">{{ __('Used') }}</option>
                                <option value="{{ __('Not Used') }}">{{ __('Not Used') }}</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Banner Group') }} </label>
                            <select name="group_name" id="group_name" class="form-select form-control">
                                <option value="">{{ __('Select') }}</option>
                                <option value="{{ __('Main Banner') }}">{{ __('Main Banner') }}</option>
                                <option value="{{ __('Vertical Banner') }}">{{ __('Vertical Banner') }}</option>
                                <option value="{{ __('Horizontal Banner') }}">{{ __('Horizontal Banner') }}</option>
                                <option value="{{ __('Left Banner') }}">{{ __('Left Banner') }}</option>
                                <option value="{{ __('Right Banner') }}">{{ __('Right Banner') }}</option>

                            </select>
                        </div>


                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Priority') }} </label>
                            <select name="priority" id="priority" class="form-select form-control">
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
                            <label class="form-label"> {{ __('Link Address') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Link Address') }}"
                                name="link_address" id="link_address">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Design Method') }} </label>
                            <select name="design_method" class="form-select form-control" onchange="showDiv(this)">
                                <option value="">{{ __('Select') }}</option>
                                <option value="image">{{ __('Image') }}</option>
                                <option value="html">{{ __('Html') }}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-12 image" id="image">
                            <label class="form-label"> {{ __('File') }} </label>
                            <input type="file" name="banner"  id="file-upload"  class="form-control" />
                            <div class="loading" id="loading"></div>
                        </div>
                        <div class="mb-3 col-lg-12 editor" id="editor">
                            <label class="form-label"> {{ __('Html Content') }} </label>
                            <textarea name="banner_content" cols="30" rows="10" class="form-control"
                                name="banner_content"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="add_banner">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    <div class="modal fade" id="EditRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Edit Banner') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="UpdateBanner" class="row">
                        <input type="hidden" id="banner_id" name="banner_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Code') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Code') }}" name="code" id="code1">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                            <select name="active1" id="active1" class="form-select form-control">
                                <option value="">{{ __('Select') }}</option>
                                <option value="Used">{{ __('Used') }}</option>
                                <option value="Not Used">{{ __('Not Used') }}</option>
                            </select>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Banner Group') }} </label>
                            <select name="group_name1" id="group_name1" class="form-select form-control">
                                <option value="">{{ __('Select') }}</option>
                                <option value="{{ __('Main Banner') }}">{{ __('Main Banner') }}</option>
                                <option value="{{ __('Vertical Banner') }}">{{ __('Vertical Banner') }}</option>
                                <option value="{{ __('Horizontal Banner') }}">{{ __('Horizontal Banner') }}</option>
                                <option value="{{ __('Left Banner') }}">{{ __('Left Banner') }}</option>
                                <option value="{{ __('Right Banner') }}">{{ __('Right Banner') }}</option>
                            </select>
                        </div>


                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Priority') }} </label>
                            <select name="priority1" id="priority1" class="form-select form-control">
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
                            <label class="form-label"> {{ __('Link Address') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Link Address') }}" name="link_address1" id="link_address1">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('Design Method') }} </label>
                            <select name="design_method1" id="design_method1" class="form-select form-control" onchange="showDivEdit(this)">
                                <option value="">{{ __('Select') }}</option>
                                <option value="image">{{ __('Image') }}</option>
                                <option value="html">{{ __('Html') }}</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-12 image" id="image1">
                            <label class="form-label"> {{ __('File') }} </label>
                            <input type="file" name="banner1" id="file-upload1" class="form-control" />
                        </div>
                        <div class="mb-3 col-lg-12 editor" id="editor1">
                            <label class="form-label"> {{ __('Html Content') }} </label>
                            <textarea name="banner_content1" id="banner_content1" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="update_banner">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
    @endsection
