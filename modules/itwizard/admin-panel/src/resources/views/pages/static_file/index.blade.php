@extends('Admin::layouts.master')
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

    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Static File') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                    class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>

                <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{ __('Add File') }}
                </button>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="card mb-3 card-btm-border border-primary">
                <div class="card-body">
                    <div class="card-title mb-3"> {{ __('Static File') }} </div>
                    <table style="width: 100%;" id="new_table_1" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> {{ __('Type') }} </th>
                                <th> {{ __('File Absolute Path') }} </th>
                                <th> {{ __('Status') }} </th>
                                <th> {{ __('Created Date') }} </th>
                                <th> {{ __('Updated Date') }} </th>
                                <th>{{ __('Edit/Delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($static_files as $static_file)
                                <tr>
                                    <td>{{ $static_file->type_name }} </td>
                                    <td>client/static/{{ $static_file->type_name }}/{{ $static_file->file_absolute_path }}
                                    </td>
                                    <td>
                                        @if ($static_file->status == '2')
                                            {{ __('Used') }}
                                        @elseif($static_file->status=='1')
                                            {{ __('Not Used') }}
                                        @endif
                                    </td>
                                    <td>{{ $static_file->created_at }}</td>
                                    <td>{{ $static_file->updated_at }}</td>
                                    <td>

                                        <button class="btn-outline-primary btn ModalShowEdit editbtn"
                                            value="{{ $static_file->id }}">{{ __('Edit') }}</button>


                                        <button class="btn-outline-danger btn-link btn DeleteFile"
                                            key="{{ $static_file->id }}">
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

        $('.ModalShow').click(function() {
            $('#AddRoleModal').modal('show')
        })
        $('.ModalShowEdit').click(function() {
            $('#EditRoleModal').modal('show')
        })
        $(document).ready(function() {

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
            $('#add_file').on('click', function() {
                if ($('#createForm').valid()) {

                    const data = new FormData();
                    data.append('upload_file', $('#upload_file').prop('files')[0]);
                    data.append('status', $('#status').val());
                    const headers = {
                        'Content-Type': 'multipart/form-data',
                        'Content-Type': 'Application/json'
                    }

                    Axios.post('/api/addfile', data, {
                        headers: headers
                    }).then((resp) => {
                        Swal.fire(
                            '{{__('Added!')}}',
                            '',
                            'success'
                        )
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

            $('#update_file').on('click', function() {
                if ($('#updateForm').valid()) {

                    const data = new FormData();
                    data.append('upload_file1', $('#upload_file1').prop('files')[0]);
                    data.append('status1', $('#status1').val());
                    data.append('file_id', $('#file_id').val());
                    const headers = {
                        'Content-Type': 'multipart/form-data',
                        'Content-Type': 'Application/json'
                    }

                    Axios.post('/api/updatefile', data, {
                        headers: headers
                    }).then((resp) => {
                        Swal.fire(
                            '{{__('Success')}}',
                            '{{__('Your file has been updated.')}}',
                            'success'
                        )
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

            $('.DeleteFile').on('click', function() {
                Swal.fire({
                    title: '{{ __('Are you sure?') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: '{{ __('Cancel') }}',
                    confirmButtonText: '{{ __('Confirm') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/DeleteFile/' + $(this).attr('key')).then((resp) => {
                            Swal.fire(
                                '{{__('Deleted!')}}',
                                '',
                                'success'
                            )
                            $(this).closest('tr').fadeOut();
                            setTimeout(function() {
                                location.reload()
                            }, 4000);
                        });
                    }
                })
            });

            $(document).on('click', '.editbtn', function() {
                var file_id = $(this).val();
                //$('#editModal').modal('show');
                Axios.get('/api/editfile/' + file_id).then((resp) => {
                    $('#file_id').val(resp.data.id);
                    $('#status1').val(resp.data.status);
                    $('#upload_file1').val(resp.data.file_absolute_path);
                });
            });



            $('#reload_page').click(function() {
                location.reload(true);
            });


        })
    </script>
@endsection
@section('modal')
    <div class="modal fade" id="AddRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Add Static File') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <form action="#" id="createForm" class="row">

                            <div class="mb-3 col-lg-6">
                                <label class="form-label"> {{ __('File') }} </label>
                                <input type="file" class="form-control" name="upload_file" id="upload_file"
                                    data-msg-required="{{ __('This Field is Required') }}" required>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                                <select name="status" id="status" class="form-select form-control"
                                    data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="">{{ __('Select') }}</option>
                                    <option value="2">{{ __('Used') }}</option>
                                    <option value="1">{{ __('Not Used') }}</option>
                                </select>
                            </div>



                        </form>
                    </div>

                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="add_file">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    <div class="modal fade" id="EditRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title">{{ __('Edit Static File') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="updateForm" class="row">
                        <input type="hidden" id="file_id" name="file_id">
                        <div class="mb-3 col-lg-6">
                            <label class="form-label"> {{ __('File') }} </label>
                            <input type="file" class="form-control" name="upload_file1" id="upload_file1"
                                data-msg-required="{{ __('This Field is Required') }}">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleCity" class="form-label">{{ __('Is Used') }}</label>
                            <select name="status1" id="status1" class="form-select form-control"
                                data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="">{{ __('Select') }}</option>
                                <option value="2">{{ __('Used') }}</option>
                                <option value="1">{{ __('Not Used') }}</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success update-role" id="update_file">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
