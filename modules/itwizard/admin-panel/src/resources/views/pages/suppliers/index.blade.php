@extends('Admin::layouts.master')
@section('title') {{ __('Q&A') }} @endsection

@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }

        .select2-container--default .select2-selection--multiple {
            width: 625px;
        }

        @media only screen and (max-width: 600px) {
            .select2-container--default .select2-selection--multiple {
                width: 308px;
            }
        }

        @media only screen and (min-width: 600px) {
            .select2-container--default .select2-selection--multiple {
                width: 308px;
            }
        }

        @media only screen and (min-width: 768px) {
            .select2-container--default .select2-selection--multiple {
                width: 457px;
            }
        }

        @media only screen and (min-width: 992px) {
            .select2-container--default .select2-selection--multiple {
                width: 476px;
            }
        }

        @media only screen and (min-width: 1200px) {
            .select2-container--default .select2-selection--multiple {
                width: 625px;
            }
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {

            border: solid #ced4da 1px !important;
            outline: 0 !important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #e0f3ff !important;
            border: 1px solid #94d5ff !important;
        }

    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-question-circle icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Q&A') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>

                {{-- @permission('mail-create')
            <button type="button" class="search-icon btn-shadow btn btn-success" data-bs-toggle="modal"  data-bs-target="#staticBackdrop" >
                <span class="btn-icon-wrapper pe-2 opacity-7">
                    <i class="pe-7s-plus"></i>
                </span>
                {{ __('Create a Form Mail') }}
            </button>
            @endpermission --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="fb-editor"></div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <ul class="body-tabs body-tabs-layout tabs-animated nav" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                @php
                    $counter = 0;
                @endphp
                @foreach ($datas['group'] as $key => $group)

                    <li class="nav-item   text-uppercase" role="presentation">
                        <a class="nav-link pt-2 pb-2 @if ($counter == 0) active @endif" id="t-{{ $group[0]->form_id }}-tab"
                            data-bs-toggle="tab" data-bs-target="#t-{{ $group[0]->form_id }}" type="button" role="tab"
                            aria-controls="t-{{ $group[0]->form_id }}" @if ($counter == 0) aria-selected="true" @else aria-selected="false" @endif
                            style="font-weight: 500;">{{ $key }}</a>
                    </li>
                    @php
                        $counter++;
                    @endphp
                @endforeach
            </ul>
        </div>
    </div>
    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">

            <div class="tab-content mt-4" id="navcontent">
                @php
                    $counter = 0;
                @endphp
                @foreach ($datas['group'] as $key => $group)
                    <div class="tab-pane fade @if ($counter == 0) active show @endif" id="t-{{ $group[0]->form_id }}" role="tabpanel"
                        aria-labelledby="t-{{ $group[0]->form_id }}-tab">
                        <table class="table table-striped table-hover BasicTable" id="">
                            <thead>
                                <th> {{ __('Number') }} </th>
                                <th> {{ __('Form id') }} </th>

                                <th> {{ __('Submited date') }} </th>
                                <th> {{ __('Status') }} </th>
                                <th> {{ __('Action') }} </th>

                            </thead>
                            <tbody>
                                
                                    @foreach ($datas['client_data'][$key] as $c_data)
                                        <tr>
                                            <td>{{ $c_data->id }}</td>
                                            <td>{{ $c_data->builder->form_name ?? '' }}</td>
                                            <td>{{ $c_data->submited_at }}</td>
                                            <td>
                                                @switch($c_data->is_active)
                                                    @case('waiting')
                                                        <span class="badge text-warning"> {{ __($c_data->is_active) }}
                                                        </span>
                                                    @break
                                                    @case('process')
                                                        <span class="badge text-info"> {{ __($c_data->is_active) }} </span>

                                                    @break
                                                    @case('complete')
                                                        <span class="badge text-success"> {{ __($c_data->is_active) }}
                                                        </span>

                                                    @break
                                                    @default
                                                        <span class="badge text-warning"> {{ __('In Waiting') }} </span>
                                                @endswitch
                                            </td>
                                            <td>
                                                {{-- @permission('mail-edit') --}}
                                                <button class="btn-outline-primary btn view" data-id="{{ $c_data->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                                                    {{ __('view') }}
                                                </button>
                                                {{-- @endpermission --}}
                                                {{-- @permission('mail-delete') --}}
                                                <button class="btn-outline-danger btn-link btn client_data_delete"
                                                    data-id="{{ $c_data->id }}">
                                                    {{ __('Delete') }}
                                                </button>
                                                {{-- @endpermission --}}
                                            </td>


                                        </tr>
                                    @endforeach
                                
                            </tbody>
                        </table>
                        @php
                            $counter++;
                        @endphp
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <!--create Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" class="row" id="validateForm">
                    <input type="hidden" id="idMail">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail title')}}</label>
                        <input id="mailTitle" name="mailTitle" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail content')}}</label>
                        <textarea  name="ckeditor" id="ckeditor" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }} </button>
                <button type="button" class="btn btn-success create_mail"> {{ __('Confirm') }} </button>
            </div>
        </div>
    </div>
</div> --}}

    {{-- view modal --}}
    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="row">
                        <input type="hidden" id="mid">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" class="card-title"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                            {{ __('User Question') }} <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                        </button>

                        <div class="collapse" id="collapseExample">
                            <div class="w-100  p-3  overflow-auto ">
                                <fieldset disabled="disabled">
                                    <div id="fb_editor"></div>
                                </fieldset>
                                <div id="downloadBtn"></div>
                            </div>

                        </div>
                        <div class="divider"></div>
                        <div class="mb-3">
                            <div for="" class="card-title"> {{ __('Answer') }} </div>
                            <textarea name="answer" id="answer" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="card-title"> {{ __('Status') }} </div>
                            <select name="status" id="status" class="form-control form-select">
                                <option value="waiting"> {{ __('Waiting') }} </option>
                                <option value="process"> {{ __('In Process') }} </option>
                                <option value="complete"> {{ __('Completed') }} </option>
                            </select>
                        </div>
                        {{-- <pre><code id="markup"></code></pre> --}}
                    </form>
                </div>

                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <div class="float-start">
                        <p class="text-danger m-0 p-0">
                            Save the answer first if you send a email
                        </p>
                    </div>
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success" id="saveAnswer"> {{ __('Save') }} </button>

                    <button class="btn-primary btn getSendData px-4" data-bs-toggle="modal"
                        data-bs-target="#staticBackdropSent">
                        {{ __('Send E-Mail') }}
                    </button>


                    {{-- <button type="button" class="btn btn-success updateMail">{{__('Save Changes')}}</button> --}}
                </div>

            </div>
        </div>
    </div>

    <!-- edit modal -->
    {{-- <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row" id="validateForm">
                    <input type="hidden" id="idMail">

                    <div class="mb-3 col-lg-12">

                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail title')}}</label>
                        <input id="editMailTitle" name="editMailTitle" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail content')}}</label>
                        <textarea  name="ckeditor1" id="ckeditor1" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success updateMail">{{__('Save Changes')}}</button>
            </div>


        </div>
    </div>
</div> --}}
    <!-- send modal -->
    <div class="modal fade staticBackdropSent " id="staticBackdropSent" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content  ">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" class="row" id="validateForm">

                        <input type="hidden" id="idMail">
                        {{-- <div class="mb-3 col-lg-2">
                            <div class="form-check d-inline-block  fw-bold">
                                <input type="checkbox" value="all_checked" id="all_name" class="form-check-input" checked
                                    data-msg-required="{{ __('This Field is Required') }}" required>
                                <label for="all_name" class="form-check-label"> {{ __('All') }} </label>
                            </div>
                        </div> --}}

                        {{-- <div class=" mb-3 col-lg-10 form-check">
                            <div class="form-group">
                                <label for="roleMultiSelect"
                                    class="fw-bold">{{ __('Multiple select email') }}</label>
                                <select multiple="multiple" class="form-control select2 w-100 roleMultiSelect "
                                    id="roleMultiSelect" disabled>
                                    @foreach ($datas['roles'] as $item)
                                        <optgroup label={{ $item->name }}>
                                            @foreach ($item->roles as $user)
                                                <option value="{{ $user->email }}">{{ $user->email ?? '' }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="mb-3 col-lg-12">
                            <label class="form-check-label fw-bold"
                                for="flexSwitchCheckChecked">{{ __('Email') }}</label>
                            <input id="inputEmail" type="email" class="form-control" placeholder="example@example.com"
                                data-msg-required="{{ __('This Field is Required') }}" required>
                        </div>

                        <!-- subsribe -->
                        {{-- <div class="mb-3 col-lg-12">
                            <label class="form-check-label fw-bold"
                                for="flexSwitchCheckChecked">{{ __('Mailing') }}</label>
                            <select class="form-select" aria-label="Default " id="subscribe" disabled>
                                <option value="1">{{ __('Only members who have agreed to receive') }}</option>
                                <option value="2">{{ __('All') }}</option>
                            </select>
                        </div> --}}
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" class="btn btn-success sendMail1  ">{{ __('Send') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

    <script>
        $('#reload_page').click(function() {
            location.reload(true);
        });

        $(document).ready(function() {
            $('#validateForm').validate({

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
        });

        $(document).ready(function() {
            $('.select2').select2({
                dropdownParent: $('#staticBackdropSent')
            });
            // CKEDITOR.replace('ckeditor', {
            //     filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            // });
            // CKEDITOR.replace('ckeditor1', {
            //     filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            // });
            CKEDITOR.replace('answer', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });

        });

        // $(document).ready(function() {

        //     $('.create_mail').click(function() {
        //     if ($('#validateForm').valid()) {

        //         data = {
        //             title: $("#mailTitle").val(),
        //             content: CKEDITOR.instances.ckeditor.getData(),
        //         };
        //         Axios.post('/api/mail/create', data).then((resp) => {
        //             Swal.fire({
        //                 icon: 'success',
        //                 title:'{{ __('Success') }}',
        //                 showConfirmButton: false
        //             });
        //             $('#adminAddModal').modal('hide').removeAttr('key');
        //             setTimeout(function() {
        //                 location.reload()
        //             }, 2000);
        //         }).catch((err) => {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: err
        //             });
        //         });
        //     }
        //     })
        // });
    </script>

    <script>
        $(document).ready(function() {

            var data_id = 0;
            var allMail = $('#all_name').val(); // 0s ylgaatai utga opj ipwel buh mail hayg ru ywna
            var subscribe = 0;
            $('.getSendData').click(function() {
                data_id = $(this).data('id'); //form mail id
                data_email = $(this).data('email')
                $('#inputEmail').val(data_email)
            })

            // all checked selected and unchecked
            $(document).on('click', '#all_name', function() {

                if ($('#all_name').is(':checked')) {
                    allMail = $('#all_name').val();
                    $('#roleMultiSelect').attr('disabled', 'disabled');
                    $('.roleMultiSelect').val(null).trigger("change");
                    $('#subscribe').attr('disabled', 'disabled');
                    subscribe = 0;
                } else {
                    allMail = 0;
                    $('#roleMultiSelect').removeAttr('disabled');
                    $('#subscribe').removeAttr('disabled');
                    subscribe = $('#subscribe').val();

                }
            });

            // multiple selected and unselected
            $(".select2").on('select2:unselect', function() {
                $('#all_name').removeAttr('disabled');
                $('#subscribe').removeAttr('disabled');
                subscribe = $('#subscribe').val();
            })
            $('.select2').on('select2:select', function() {
                $('#all_name').attr('disabled', 'disabled');
                allMail = 0;
                $('#subscribe').attr('disabled', 'disabled');
                subscribe = 0;
            });

            // subscribe and unsubscribe
            $(document).on('click', '#subscribe', function() {
                subscribe = $(this).val();
            });

            $('.sendMail1').click(function() {
                $.blockUI.defaults = {
                    //  timeout: 2000,
                    fadeIn: 200,
                    fadeOut: 400,
                };
                $(".modal-content").block({
                    message: $(
                        "" +
                        '<div class="loader mx-auto">\n' +
                        '                            <div class="line-scale-pulse-out">\n' +
                        '                                <div class="bg-success"></div>\n' +
                        '                                <div class="bg-success"></div>\n' +
                        '                                <div class="bg-success"></div>\n' +
                        '                                <div class="bg-success"></div>\n' +
                        '                                <div class="bg-success"></div>\n' +
                        "                            </div>\n" +
                        "                        </div>"
                    ),
                });
                data = {
                    all_mail: allMail,
                    send_id: data_id,
                    input_email: $('#inputEmail').val(),
                    subscribe: subscribe,

                    select_email: $('#roleMultiSelect').val(), //multiselect
                };
                Axios.post('/api/mail/send', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __('Success') }}',
                        showConfirmButton: false
                    });
                    setTimeout(function() {
                        location.reload()
                    }, 2000);
                    $(".modal-content").unblock();
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                    $(".modal-content").unblock();
                });
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.client_data_delete').click(function() {
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
                        Axios.post('/api/client_data_delete', data).then((resp) => {
                                Swal.fire({
                                    icon: 'success',
                                    title: '{{ __('Deleted!') }}',
                                    showConfirmButton: false
                                })
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

    {{-- <script>
        $(document).ready(function() {
            $('.deleteMail').click(function() {
                const delete_id = $(this).attr('data-id')
                const data = {
                    delete_id: delete_id
                }
                Swal.fire({
                    title: '{{__('Are you sure?')}}',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "{{__('Ok')}}",
                    denyButtonText: `{{__('Cancel')}}`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/mail/delete', data).then((resp) => {
                            Swal.fire({
                                icon: 'success',
                                title: '{{__('Deleted!')}}',
                                showConfirmButton: false})
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
    </script> --}}
    <script>
        $(document).ready(function() {
            // const formBuilder = $('#fb_editor').formBuilder();
            $('.view').click(function() {
                const view_id = $(this).attr('data-id');
                $('.getSendData').attr('data-id', view_id)

                console.log(view_id)
                $('#mid').val(view_id)
                CKEDITOR.instances.answer.setData()
                $('#status').val('').change()

                Axios.get('/api/client_view/' + view_id).then((resp) => {

                    const builder = JSON.parse(resp.data.builder.data);
                    let datas = JSON.parse(resp.data.content);
                    let files = resp.data.files;
                    $.each(datas, function(i, v) {
                        builder.filter(function(item) {
                            if (item.name == i) {
                                item.value = v;
                            }

                        })
                    })
                    $('#downloadBtn').html('')
                    $.each(files, function(index, data) {
                        $('#downloadBtn').append('<a href="' + data.file_path +
                            '" class="btn btn-info btn-sm"> {{ __('Download File') }}</a>'
                            )

                    })
                    const reata = builder;
                    $('.getSendData').attr('data-email', resp.data.email)

                    CKEDITOR.instances.answer.setData(resp.data.answer)
                    $('#status').val(resp.data.is_active).change()

                    var formRenderOptions = {
                        formData: reata,
                    }
                    $('#fb_editor').formRender(formRenderOptions)

                    // if (resp.data.data.file_path) {
                    //     const html = `<a href="/cms/file/download/` + resp.data.data.file_path +
                    //         `" class="btn btn-sm btn-info">Download File</a>`;
                    //     $('#downloadBtn').html(html)
                    // }

                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            });
        })

        // $(document).ready(function() {
        // $('.editMail').click(function() {
        //     const main_edit_id = $(this).attr('data-id');
        //     const data = {
        //         main_edit_id: main_edit_id,
        //     }
        //     Axios.post('/api/mail/edit', data).then((resp) => {
        //                            // Swal.fire({

        //         $('#editMailTitle').val(resp.data.data.title)
        //         CKEDITOR.instances.ckeditor1.setData(resp.data.data.content);

        //     }).catch((err) => {
        //         Swal.fire({
        //             icon: 'error',
        //             title: err
        //         });
        //     });
        // })

        // $('.updateMail').click(function() {
        //     if ($('#validateForm').valid()) {

        //         let data = {
        //             id: $('#idMail').val(),
        //             title: $('#editMailTitle').val(),
        //             content: CKEDITOR.instances.ckeditor1.getData(),

        //         }
        //         Axios.post('/api/mail/update', data).then((resp) => {
        //             Swal.fire({
        //                 icon: 'success',
        //                 title: '{{ __('Success') }}',
        //                 showConfirmButton: false
        //             });
        //             window.location.reload()

        //         }).catch((err) => {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: err
        //             });

        //         });
        //     }
        // })

        //     })
    </script>
    {{-- Answer save Action --}}
    <script>
        $(document).ready(function() {
            $('#saveAnswer').click(function() {
                let answer = CKEDITOR.instances.answer.getData()
                let status = $('#status').val()
                const data = {
                    answer: answer,
                    status: status,
                    id: $('#mid').val()
                }

                Axios.post('/api/question/answer', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __('Success') }}',
                        showConfirmButton: false
                    });
                    setInterval(() => {
                        window.location.reload()
                    }, 1500);
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err,
                        showConfirmButton: false
                    });
                });
            })
        })
    </script>
    <script>
        $('.BasicTable').DataTable({});
    </script>
@endsection
