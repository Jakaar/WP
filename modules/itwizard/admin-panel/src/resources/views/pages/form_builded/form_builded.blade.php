@extends('Admin::layouts.master')
@section('title') {{__('Form Create')}} @endsection

@section('content')
    <style>
        .form-wrap.form-builder .frmb{
            min-height: 520px !important;
        }
        .form-builder-dialog.data-dialog{
            z-index: 1070 !important;
        }
        .form-builder-dialog.positioned
        {
            z-index: 1072 !important;
        }
        .form-builder-overlay{
            z-index: 1070!important;
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
                        {{__('Create')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-btm-border card-primary">
        <div class="card-body">
            <div class="card-title"> Total number of form mails: 3</div>
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
                            <td> {{ $form-> id}} </td>
                            <td>{{ $form-> form_name}} </td>
                            <td>
                                <button class="btn-outline-primary btn edit" data-id="{{$form->id}}"  data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                                    {{ 'Edit' }}
                                </button>
                                <button class="btn-outline-danger btn-link btn delete" data-id="{{$form->id}}">
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
                    <div class="row">
                          <input type="hidden" id="hiddenId">
                        <div class="col-4">
                            <label for="form_name" class="form-check-label fw-bold mb-2">{{__('Form Name')}}</label>
                            <input id="form_name" type="text" class="form-control" placeholder="Form name">
                        </div>
                        <div class="mb-3 col-2">
                            <label for="is_status" class="form-check-label fw-bold mb-2">
                                {{__('Status')}}
                            </label>
                            <div class="clearfix"></div>
                            <input type="checkbox" data-toggle="toggle" name="is_status" id="is_status" data-size="sm">
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-check-label fw-bold mb-2">
                                {{__('Receive Email')}}
                            </label>
                            <div class="clearfix"></div>
                            <input type="checkbox" data-toggle="toggle" name="receive_email" id="receive_email" data-size="sm">
                        </div>
                        <div class="col-4">
                            <label for="form_name" class="form-check-label fw-bold mb-2">{{__('Categories')}}</label>
                            <input id="categories" type="text" class="form-control" placeholder="input categories">

                            {{-- <select class="form-select" aria-label="Default select example"> --}}
                                {{-- <option selected value="0" >Open this select menu</option> --}}
                                {{-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> --}}
                                    {{-- @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->id}}</option>
                                    @endforeach --}}
                              {{-- </select> --}}
                        </div>
                    </div>

                    <div class="row bg-light">
                        <div class="divider"></div>
                        <h3>{{__('Build the Form')}}</h3>
                        <div class="col-12">
                            <div class="">
                                <div id="fb-editor"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }} </button>
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
    $(document).ready(function (){

        const formBuilder = $('#fb-editor').formBuilder({
            disabledActionButtons: ['save']
        });
        $('.Create').on('click', function (){

            data = {
                    name:$('#form_name').val(),
                    categories:$('#categories').val(),
                    receive_email:$("input[name='receive_email']:checked").val(),
                    status:$("input[name='is_status']:checked").val(),
                    data: JSON.stringify(formBuilder.actions.getData()),

                };
                Axios.post('/api/form/create', data).then((resp) => {
                    // window.location.reload();

                    // Swal.fire({
                    //     icon: 'success',
                    //     title: resp.data.msg
                    // });

                }).catch((err) => {
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: err
                    // });
                });
        });

        $('.CreateModalShow').on('click', function (){
           $('#staticBackdrop').modal('show')

            // $('.modal-footer').removeClass('card-shadow-primary border-primary')
            // $('.modal-footer').addClass('card-shadow-success border-success ')
            // $('.Create').removeClass('d-none')
            // $('.Update').addClass('d-none')
            // $("#is_statusEdit").attr("id", "is_status");
            // $("#form_nameEdit").attr("id", "form_name");
            // $("#receive_emailEdit").attr("id", "receive_email");
            // $('#is_status').val(' ')
            // $('#form_name').val(' ')
            // $('#receive_email').val(' ')


        })



        $('#reload_page').click(function () {
            location.reload(true);
        });



        // $('.edit').click(function() {
        //     $('#staticBackdrop').modal('show')
        //         $('.Update').removeClass('d-none')
        //         $('.Create').addClass('d-none')
        //         $('.modal-footer').removeClass('card-shadow-success border-success')
        //         $('.modal-footer').addClass('card-shadow-primary border-primary')

        //         $("#form_name").attr("id", "form_nameEdit");
        //         $("#is_status").attr("id", "is_statusEdit");
        //         $("#receive_email").attr("id", "receive_emailEdit");


        //     const edit_id = $(this).attr('data-id');
        //     const data = {
        //         edit_id: edit_id,
        //     }
        //     Axios.post('/api/form/edit', data).then((resp) => {
        //         // console.log(resp);
        //         $('#hiddenId').val(resp.data.data.id)
        //         $('#form_nameEdit').val(resp.data.data.form_name)
                // formBuilder.actions.setData(JSON.parse(resp.data.data.data));
        //         // $('#editCountryCode').val(resp.data.data.country_code)
        //         if (resp.data.data.is_status == 0) {
        //                 $('#is_statusEdit').bootstrapToggle('off')
        //             } else {
        //                 $('#is_statusEdit').bootstrapToggle('on')
        //         }

        //         if (resp.data.data.receive_email == 0) {
        //                 $('#receive_emailEdit').bootstrapToggle('off')
        //             } else {
        //                 $('#receive_emailEdit').bootstrapToggle('on')
        //         }
        //     }).catch((err) => {
        //         Swal.fire({
        //             icon: 'error',
        //             title: err
        //         });
        //     });

        // });

        // $('.update').click(function() {
        //     // if ($('#validateUpdate').valid()) {
        //         let data = {
        //             id: $('#hiddenId').val(),
        //             name: $('#form_nameEdit').val(),
        //             data: JSON.stringify(formBuilderEdit.actions.getData()),

        //             receive_email:$("input[name='receive_emailEdit']:checked").val(),
        //             status:$("input[name='is_statusEdit']:checked").val(),
        //         }
        //         Axios.post('/api/form/update', data).then((resp) => {
        //             Swal.fire({
        //                 icon: 'success',
        //                 title: resp.data.msg
        //             });
        //             window.location.reload()

        //         }).catch((err) => {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: err
        //             });
        //         });
        //     //  }
        // })

    });






    $(document).ready(function() {
        $('.delete').click(function() {
            const delete_id = $(this).attr('data-id')
            const data = {
                delete_id: delete_id
            }
            Swal.fire({
                title: "{{__('Are you sure?')}}",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "{{__('Ok')}}",
                denyButtonText: `{{__('Cancel')}}`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/form/delete', data).then((resp) => {
                        Swal.fire("{{__('Deleted!')}}", '', 'success')
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
