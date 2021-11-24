@extends('Admin::layouts.master')
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
                    <tr>
                        <td> 1 </td>
                        <td> Development Quote Inquiry </td>
                        <td>
                            <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditMail">
                                {{ 'Edit' }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ 'Delete' }}
                            </button>
                        </td>
                    </tr>
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
                        <div class="col-4">
                            <label for="form_name" class="form-check-label fw-bold mb-2">{{__('Form Name')}}</label>
                            <input id="form_name" type="text" class="form-control" placeholder="Form name">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="is_status" class="form-check-label fw-bold mb-2">
                                {{__('Status')}}
                            </label>
                            <div class="clearfix"></div>
                            <input type="checkbox" data-toggle="toggle" name="is_status" id="is_status" data-size="sm">
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-check-label fw-bold mb-2">
                                {{__('Receive Email')}}
                            </label>
                            <div class="clearfix"></div>
                            <input type="checkbox" data-toggle="toggle" name="receive_email" id="receive_email" data-size="sm">
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
       $('.CreateModalShow').on('click', function (){
           $('#staticBackdrop').modal('show')
       })
        const formBuilder = $('#fb-editor').formBuilder({
            disabledActionButtons: ['save']
        });
        $('.Create').on('click', function (){
            Axios.post('/api/form/create', {
                name:$('#form_name').val(),
                status:$("input[name='receive_email']:checked").val(),
                receive_email:$("input[name='is_status']:checked").val(),
                data: formBuilder.actions.getData(),
            }).then((resp)=>{
                console.log(resp)
            }).catch((err) => {
                console.log(err)
            })
        });


    });
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
