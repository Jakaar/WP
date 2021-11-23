@extends('Admin::layouts.master')
@section('content')
<style>
    .ck-editor__editable {
        min-height: 200px;
    }
    .select2-container--default .select2-selection--multiple{
        width: 691px;
    }

    .select2-container--default.select2-container--focus .select2-selection--multiple{

        border: solid #ced4da 1px  !important;
        outline: 0  !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice{
    background-color: #e0f3ff  !important;
        border: 1px solid #94d5ff  !important;
    }

</style>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-mail icon-gradient bg-mixed-hopes"></i>
            </div>
            <div>
                {{ __('Mail list') }} {{Config::get('setting.Mail Form_mail')}}
                <div class="page-title-subheading"></div>
            </div>
        </div>
        <div class="page-title-actions">
            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa fa-plus"></i>
                {{ __('Create a Form Mail') }}
            </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div id="fb-editor"></div>

    </div>
</div>
<div class="card card-btm-border border-primary">
    <div class="card-body">
        <table class="table table-striped table-hover" id="BasicTable">
            <thead>
                <th> {{ __('Number') }} </th>
                <th> {{ __('Title') }} </th>
                <th> {{ __('Date Created') }} </th>
                <th> {{ __('Send') }} </th>
                <th> {{ __('Action') }} </th>
            </thead>
            <tbody>

                @foreach ($datas['mailData'] as $data_mail)
                <tr>
                    <td>{{ $data_mail-> id}}</td>
                    <td>{{ $data_mail-> title}}</td>
                    <td>{{ $data_mail-> created_at}}</td>
                    <td>
                        <button class="btn-outline-primary btn getSendData" data-id="{{$data_mail->id}}" data-bs-toggle="modal" data-bs-target="#staticBackdropSent">
                            {{ ('Send') }}
                        </button>
                    </td>
                    <td>
                        <button class="btn-outline-primary btn editMail" data-id="{{$data_mail->id}}" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                            {{ ('Edit') }}
                        </button>
                        <button class="btn-outline-danger btn-link btn deleteMail" data-id="{{$data_mail->id}}">
                            {{ ('Delete') }}
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <input type="hidden" id="idMail">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail title')}}</label>
                        <input id="mailTitle" name="mailTitle" type="text" class="form-control">
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
</div>
<!-- edit modal -->
<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row">
                    <input type="hidden" id="idMail">

                    <div class="mb-3 col-lg-12">

                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail title')}}</label>
                        <input id="editMailTitle" name="editMailTitle" type="text" class="form-control">
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail content')}}</label>
                        <textarea  name="ckeditor1" id="ckeditor1" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer  card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success updateMail">{{__('Save Changes')}}</button>
            </div>


        </div>
    </div>
</div>
<!-- send modal -->
<div class="modal fade staticBackdropSent " id="staticBackdropSent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content  ">
            <div class="modal-header">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form action="" class="row">



                    <input type="hidden" id="idMail">
                    <div class="mb-3 col-lg-1">
                            <div class="form-check d-inline-block  fw-bold">
                            <input type="checkbox" value="all_checked" id="all_name"  class="form-check-input" checked>
                            <label for="all_name" class="form-check-label"> {{__('All')}} </label></div>
                    </div>


                    <div class=" mb-3 col-lg-11 form-check">
                        <div class="form-group">
                            <label for="roleMultiSelect" class="fw-bold">{{__('Multiple select email')}}</label>
                            <select multiple="multiple" class="form-control select2 w-100 roleMultiSelect " id="roleMultiSelect" disabled>
                                            @foreach ($datas['roles'] as $item)
                                                <optgroup label={{$item->name}}>
                                                    @foreach($item->roles as $user)
                                                        <option value="{{$user->email}}">{{$user->email ?? ''}}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">{{__('Email')}}</label>
                        <input id="inputEmail" type="email" class="form-control" placeholder="example@example.com">
                    </div>

                    <!-- subsribe -->
                    <div class="mb-3 col-lg-12">
                        <label class="form-check-label fw-bold" for="flexSwitchCheckChecked">{{__('Mailing')}}</label>
                            <select class="form-select" aria-label="Default " id="subscribe" disabled>
                                <option value="1">Only members who have agreed to receive</option>
                                <option value="2">All</option>
                            </select>

                    </div>


                </form>
            </div>

            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success sendMail1  " >{{__('Send')}}</button>
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
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                dropdownParent: $('#staticBackdropSent')
            });
            CKEDITOR.replace('ckeditor', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });
            CKEDITOR.replace('ckeditor1', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });


           $(document.getElementById('fb-editor')).formBuilder();
        });

        $(document).ready(function() {

            $('.create_mail').click(function() {
                data = {
                    title: $("#mailTitle").val(),
                    content: CKEDITOR.instances.ckeditor.getData(),
                };
                Axios.post('/api/mail/create', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                    $('#adminAddModal').modal('hide').removeAttr('key');
                    setTimeout(function() {
                        location.reload()
                    }, 2000);
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            })
        });
    </script>

    <script>
        $(document).ready(function() {

            var data_id = 0;
            var allMail= $('#all_name').val() ; // 0s ylgaatai utga opj ipwel buh mail hayg ru ywna
            var subscribe = 0;
            $('.getSendData').click(function() {
                data_id = $(this).data('id'); //form mail id
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
            $(".select2").on('select2:unselect',function(){
                $('#all_name').removeAttr('disabled');
                $('#subscribe').removeAttr('disabled');
                subscribe = $('#subscribe').val();
            })
            $('.select2').on('select2:select', function () {
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
                    subscribe:  subscribe,

                    select_email: $('#roleMultiSelect').val(), //multiselect
                };
                Axios.post('/api/mail/send', data).then((resp) => {
                    Swal.fire({
                        icon: 'success',
                        title: resp.data.msg,
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
            $('.deleteMail').click(function() {
                const delete_id = $(this).attr('data-id')
                const data = {
                    delete_id: delete_id
                }
                Swal.fire({
                    title: 'Are you sure?',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "{{__('Ok')}}",
                    denyButtonText: `{{__('Cancel')}}`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/mail/delete', data).then((resp) => {
                            Swal.fire('Deleted!', '', 'success')
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
    <script>
        $(document).ready(function() {


            $('.editMail').click(function() {
                const main_edit_id = $(this).attr('data-id');
                const data = {
                    main_edit_id: main_edit_id,
                }
                Axios.post('/api/mail/edit', data).then((resp) => {
                    $('#idMail').val(resp.data.data.id)
                    $('#editMailTitle').val(resp.data.data.title)
                    CKEDITOR.instances.ckeditor1.setData(resp.data.data.content);

                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            })

            $('.updateMail').click(function() {
                let data = {
                    id: $('#idMail').val(),
                    title: $('#editMailTitle').val(),
                    content: CKEDITOR.instances.ckeditor1.getData(),

                }
                Axios.post('/api/mail/update', data).then((resp) => {
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



        })
    </script>
@endsection
