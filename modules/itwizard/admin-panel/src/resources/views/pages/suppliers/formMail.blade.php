@extends('Admin::layouts.master')
@section('content')

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
            <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#staticBackdropAdd">
                <i class="fa fa-plus"></i>
                {{ __('Create a Form Mail') }}
            </button>
        </div>
    </div>
</div>

<div class="card card-btm-border border-primary">
    <div class="card-body">
        <table class="table table-striped table-hover" id="BasicTable">
            <thead>
                <th> {{ __('Number') }} </th>
                <th> {{ __('Form Mail Name') }} </th>
                <!-- <th> {{ __('Date Created') }} </th> -->
                <!-- <th> {{ __('Send') }} </th> -->
                <th> {{ __('Action') }} </th>
            </thead>
            <tbody>
           
               @foreach ($maildatas as $maildata)
               <tr>
                    <td>{{$maildata->id}}</td>
                    <td>{{$maildata->title}}</td>
                
                
                    <td>
                       
                        <button class="btn-outline-primary btn ModalShowEdit editbtn"
                            value="{{ $maildata->id }}">
                            {{ __('Edit') }}
                        </button>
                        <button class="btn-outline-danger btn-link btn deleteFormMail" data-id="2">
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

<div class="modal fade" id="EditRoleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="createForm">
                    <input type="hidden" id="hidden_id">
                    <div class="container" id="dynamicForm">
                        <div class="row">
                            <div class="mb-3 col-lg-12">
                            
                                <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Mail title')}}</label>
                                <input id="title" name="title" type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="mb-3 col-lg-6">
                            
                                <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Name')}}</label>
                                <input  name="display_name" id="display_name" type="text" class="form-control" required="" data-msg-required=" This Field is Required">
                            </div>
                            <div class="mb-3 col-lg-6">
                                
                                <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Size')}}</label>
                                <input name="size" id="size" type="text" class="form-control" required="" data-msg-required=" This Field is Required">
                            </div>
                            <div class="mb-3 col-lg-6">
                                
                                <label class="form-label fw-bold" for="flexSwitchCheckChecked">{{__('Type')}}</label>
                                <select name="type" id="type" class="form-control form-select" required="" data-msg-required=" This Field is Required">
                                    <option value="">Choose Type</option>
                                    <option value="text"> Input </option>
                                    <option value="text_area"> Text Area </option>
                                    <option value="rich_text_box"> Editor </option>
                                    <option value="checkbox"> Check Box </option>
                                    <option value="radio_btn"> Radio Button </option>
                                    <option value="select_dropdown"> Select Dropdown </option>
                                    <option value="file"> File </option>
                                </select>
                            </div>
                            <div class="mb-3 col-lg-6">
                                
                                <label class="form-label fw-bold" for="flexSwitchCheckChecked">&nbsp;</label>
                                <textarea class="form-control" name="details" id="details" cols="30" rows="2" placeholder="Enter your input's options, example: { { options: { 'key' : 'value' } } }"  ></textarea>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <button type="button" name="add" id="add_new_form" class="btn btn-success">Add More</button>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                 
                    
                  
                </form>
            </div>

            <div class="modal-footer  card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success UpdateFormMail" id="add_form">{{__('Save Changes')}}</button>
            </div>

           
        </div>
    </div>
</div>
@endsection
@section('script')


    

    <script>
        
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

            $(document).on('click', '.editbtn', function() {
                var id = $(this).val();
                Axios.get('/api/formmailview/' + id).then((resp) => {
                    $('#title').val(resp.data.title);
                    $('#hidden_id').val(resp.data.id);   
                });
            });
            let theEditor = [];
            $('#add_new_form').on('click', function() {
                if ($('#createForm').valid()) {
                    const newForm=[];
                    const data = {
                        group_id: $('#hidden_id').val(),
                        display_name: $('#display_name').val(),
                        size: $('#size').val(),
                        type: $('#type').val(),
                        details: $('#details').val(),
                    }
                   // console.log(data);
                    window.localStorage.setItem(newForm,JSON.stringify(data)); 
                    
                    
                   
                }
            })
                
        
        


        })
    </script>
@endsection




  
   