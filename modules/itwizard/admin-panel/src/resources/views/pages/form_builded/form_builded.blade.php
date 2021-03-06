@extends('Admin::layouts.master')
@section('title') {{ __('Form Create') }} @endsection

@section('content')
    <style>
        .form-wrap.form-builder .frmb {
            min-height: 520px !important;
        }

        .form-builder-dialog.data-dialog {
            z-index: 1070 !important;
        }

        .form-builder-dialog.positioned {
            z-index: 1072 !important;
        }

        .form-builder-overlay {
            z-index: 1070 !important;
        }

    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-mail-open icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Create a Form Mail') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow createform">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span>
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-btm-border border-primary">
        <div class="card-body">
            <table class="table table-striped table-hover" id="BasicTable">
                <thead>
                    <tr>
                        <th> {{ __('Number') }} </th>
                        <th> {{ __('Form Mail Name') }} </th>
                        <th> {{ __('Action') }} </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($form_builded as $form)
                        <tr>
                            <td> {{ $form->id }} </td>
                            <td>{{ $form->form_name }} </td>
                            <td>
                                <button class="btn-outline-primary btn edit" data-id="{{ $form->id }}"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                                    {{ 'Edit' }}
                                </button>
                                <button class="btn-outline-danger btn-link btn delete" data-id="{{ $form->id }}">
                                    {{ 'Delete' }}
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Create a Form Mail') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="validateCreate">
                        <div class="row">
                            <input type="hidden" id="hiddenId">
                            <div class="col-4">
                                <label for="form_name" class="form-check-label fw-bold mb-2">{{ __('Form Name') }}</label>
                                <input id="form_name" type="text" class="form-control" placeholder="Form name"
                                    data-msg-required="{{ __('This Field is Required') }}" required>
                            </div>

                            <div class="col-4">
                                <label class="form-label"> {{ __('Page URL:') }} </label>
                                <input type="text" class="form-control"
                                    placeholder="{{ __('http://localhost:8000/1/1') }}" name="url" id="url"
                                    data-msg-required="{{ __('This Field is Required') }}" required>
                            </div>
                            <div class="mb-3 col-2">
                                <label for="is_status" class="form-check-label fw-bold mb-2">
                                    {{ __('Status') }}
                                </label>
                                <div class="clearfix"></div>
                                <input type="checkbox" data-toggle="toggle" name="is_status" id="is_status" data-size="sm">
                            </div>
                            <div class="mb-3 col-2">
                                <label for="receive_email" class="form-check-label fw-bold mb-2">
                                    {{ __('Receive Email') }}
                                </label>
                                <div class="clearfix"></div>
                                <input type="checkbox" data-toggle="toggle" name="receive_email" id="receive_email"
                                    data-size="sm">
                            </div>

                        </div>
                    </form>

                    <div class="row bg-light">
                        <div class="divider"></div>
                        <h3>{{ __('Build the Form') }}</h3>
                        <div class="col-12">
                            <div class="">
                                <div id="fb-editor"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }}
                    </button>
                    <button type="button" class="btn btn-success Create"> {{ __('Create') }} </button>
                    <button type="button" class="btn btn-success Update d-none"> {{ __('Update') }} </button>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#validateCreate').validate({

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
            const options = {
                disabledActionButtons: ['save'],
                i18n: {
                    @if (session()->get('locale') === 'kr')
                        locale: 'ko-KR',
                    @elseif(session()->get('locale') === 'en')
                        locale: 'en-US',
                    @else
                        locale: 'en-US',
                    @endif
                    location: '{{ asset('aPanel/i18') }}',
                    extension: '.lang',
                    // override: {
                    //    'kr': {}
                    // }
                },
            };
            console.log(options)
            const formBuilder = $('#fb-editor').formBuilder(options);
            // $("#fb-editor").validate();
            $('.Create').on('click', function() {
                if ($('#validateCreate').valid()) {
                    const data = {
                        name: $('#form_name').val(),
                        url: $('#url').val(),
                        receive_email: $("input[name='receive_email']:checked").val(),
                        status: $("input[name='is_status']:checked").val(),
                        data: JSON.stringify(formBuilder.actions.getData()),

                    };
                    Axios.post('/api/form/create', data).then((resp) => {
                        Swal.fire({
                            icon: 'success',
                            title: "{{ __('Success') }}",
                            showConfirmButton : false,

                        });
                        $('#staticBackdrop').modal('hide')
                        setInterval(() => {
                            window.location.reload();
                        }, 1500);
                    }).catch((err) => {
                        Swal.fire({
                            icon: 'error',
                            title: err
                        });
                    });
                }
            });

            $('.CreateModalShow').on('click', function() {
                $('#staticBackdrop').modal('show')

                $('.modal-footer').removeClass('card-shadow-primary border-primary')
                $('.modal-footer').addClass('card-shadow-success border-success ')
                $('.Create').removeClass('d-none')
                $('.Update').addClass('d-none')
                $("#is_statusEdit").attr("id", "is_status");
                $("#form_nameEdit").attr("id", "form_name");
                $("#receive_emailEdit").attr("id", "receive_email");
                $('#is_status').val(' ')
                $('#form_name').val(' ')
                $('#receive_email').val(' ')
                $('#url').val('')

            })



            $('#reload_page').click(function() {
                location.reload(true);
            });



            $('.edit').click(function() {
                $('#staticBackdrop').modal('show')
                $('.Update').removeClass('d-none')
                $('.Create').addClass('d-none')
                $('.modal-footer').removeClass('card-shadow-success border-success')
                $('.modal-footer').addClass('card-shadow-primary border-primary')
                $("#url").attr("id", "urlEdit");
                $("#form_name").attr("id", "form_nameEdit");

                $("#is_status").attr("id", "is_statusEdit");
                $('#is_status').attr('name', 'is_statusEdit');

                $("#receive_email").attr("id", "receive_emailEdit");
                $('#receive_email').attr('name', 'receive_emailEdit');



                const edit_id = $(this).attr('data-id');
                const data = {
                    edit_id: edit_id,
                }
                Axios.post('/api/form/edit', data).then((resp) => {
                    // console.log(resp);
                    $('#hiddenId').val(resp.data.data.id)
                    $('#form_nameEdit').val(resp.data.data.form_name)
                    $('#urlEdit').val(resp.data.data.board_master_id + '/' + resp.data.data
                        .category_id)

                    formBuilder.actions.setData(JSON.parse(resp.data.data.data));
                    // $('#editCountryCode').val(resp.data.data.country_code)
                    if (resp.data.data.is_status == 0) {
                        $('#is_statusEdit').bootstrapToggle('off')
                        // $('#is_statusEdit').val('off')
                    } else {
                        $('#is_statusEdit').bootstrapToggle('on')
                        // $('#is_statusEdit').val('on')
                    }

                    if (resp.data.data.receive_email == 0) {
                        $('#receive_emailEdit').bootstrapToggle('off')
                        // $('#receive_emailEdit').val('off')

                    } else {
                        $('#receive_emailEdit').bootstrapToggle('on')
                        // $('#receive_emailEdit').val('on')

                    }
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
                //check checkbox value1
                $("#is_statusEdit").change(function() {
                    if (this.checked) {
                        $('#is_statusEdit').val('on')
                    } else {
                        $('#is_statusEdit').val('off')
                    }
                });
                $("#receive_emailEdit").change(function() {
                    if (this.checked) {
                        $('#receive_emailEdit').val('on')
                    } else {
                        $('#receive_emailEdit').val('off')
                    }
                });
            });

            $('.Update').click(function() {
                // check checkbox value2
                $("#is_statusEdit").change(function() {
                    if (this.checked) {
                        $('#is_statusEdit').val('on')
                    } else {
                        $('#is_statusEdit').val('off')
                    }
                });
                $("#receive_emailEdit").change(function() {
                    if (this.checked) {
                        $('#receive_emailEdit').val('on')
                    } else {
                        $('#receive_emailEdit').val('off')
                    }
                });

                const data = {
                    id: $('#hiddenId').val(),
                    name: $('#form_nameEdit').val(),
                    url: $('#urlEdit').val(),
                    data: JSON.stringify(formBuilder.actions.getData()),
                    receive_email: $('#receive_emailEdit').val(),
                    status: $('#is_statusEdit').val(),
                }

                Axios.post('/api/form/update', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                    window.location.reload()

                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            })

        });






        $(document).ready(function() {
            $('.delete').click(function() {
                const delete_id = $(this).attr('data-id')
                const data = {
                    delete_id: delete_id
                }
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
                        Axios.post('/api/form/delete', data).then((resp) => {
                                Swal.fire("{{ __('Deleted!') }}", '', 'success')
                                $('tr[key=' + delete_id + ']').remove()
                                setTimeout(function() {
                                    location.reload()
                                }, 2000);
                            })
                            .catch((err) => {
                                Swal.fire({
                                    icon: 'error',
                                    title: err
                                });
                            })
                    }
                })
            })
        })
    </script>
@endsection
