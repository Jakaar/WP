@extends('Admin::layouts.master')
@section('title') {{__('Available Language')}} @endsection

@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">
            
                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                            <i class="pe-7s-global icon-gradient bg-strong-bliss"></i>
                            </div>
                            
                            <div>
                                {{__('Available Language')}}
                                <div class="page-title-subheading"></div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                                <i class="pe-7s-refresh-2"></i>
                            </button>
                            
                            <button type="button" class="search-icon btn-shadow btn btn-success" data-bs-toggle="modal"  data-bs-target="#staticBackdropAdd" >
                                <span class="btn-icon-wrapper pe-2 opacity-7">
                                    <i class="pe-7s-plus"></i>
                                </span>
                                {{ __('Add Language') }}
                            </button>
                        </div>
                    </div>
                </div>
           
            
                <div class="main-card card">
                    <div class="card-body">
                        <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> {{__('ID')}} </th>
                                    <th> {{__('Country')}} </th>
                                    <th> {{__('Country code')}} </th>
                                    <th> {{__('Add at')}} </th>
                                    <th> {{__('Action')}} </th>
                                </tr>
                            </thead>
                            <tbody>
                                   @foreach ($language as $language)
                                    <tr>
                                        <td>{{ $language-> id}}</td>
                                        <td>{{ $language-> country}}</td>
                                        <td>{{ $language-> country_code}}</td>
                                        <td>{{ $language-> created_at}}</td>
                                        <td>
                                            <button class="btn-outline-primary btn editLanguage" data-id="{{$language->id}}" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit">
                                                {{__('Edit')}}
                                            </button>
                                            <button class="btn-outline-danger btn-link btn deleteLanguage" data-id="{{$language->id}}">
                                                {{__('Delete')}}
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


@section('modal')
<!-- Modal -->
<div class="modal fade" id="staticBackdropAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title card-title " id="staticBackdropLabel">{{ __('Add Language') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" class="row" id="createForm">
                    <input type="hidden" id="hiddenIdLanguage">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="">{{__('Language name')}}</label>
                        <input id="country" name="country" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="">{{__('Language code')}}</label>
                        <input id="country_code" name="country_code" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>

                    </div>
                </form>
            </div>
            <div class="modal-footer card-btm-border card-shadow-success border-success">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }} </button>
                <button type="button" class="btn btn-success createLanguage"> {{ __('Confirm') }} </button>
            </div>
        </div>
    </div>
</div>
<!-- edit modal -->
<div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-white shadow shadow-sm">
                <h5 class="modal-title card-title" id="staticBackdropLabel">{{__('Edit Language')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row" id="updateForm">
                    <input type="hidden" id="hiddenIdLanguage">
                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="">{{__('Language name')}}</label>
                        <input id="editCountryName" name="country" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label class="form-label fw-bold" for="">{{__('Language code')}}</label>
                        <input id="editCountryCode" name="country_code" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                    </div>
                </form>
            </div>

            <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                <button type="button" class="btn btn-success updateLanguage">{{__('Save Changes')}}</button>
            </div>
           
        </div>
    </div>
</div>
@endsection



@section('script')
<script>
    $('#reload_page').click(function() {
        location.reload(true);
    });

     $('#new_table').DataTable({})
     
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
    });
     
</script>

<script>
    $(document).ready(function() {
        $('.deleteLanguage').click(function() {
            const delete_id = $(this).attr('data-id')
            const data = {
                delete_id: delete_id
            }
            // console.log(data);

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
                    Axios.post('/api/preferences/language/delete', data).then((resp) => {
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
<script>
    $(document).ready(function() {

        $('.createLanguage').click(function() {
            if ($('#createForm').valid()) {
                data = {
                    country: $('#country').val(),
                    country_code: $('#country_code').val(),
                };
                Axios.post('/api/preferences/language/create', data).then((resp) => {
                    window.location.reload();
                   
                    Swal.fire({
                        icon: 'success',
                        title: resp.data.msg
                    });
                   
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            }
        });


        $('.editLanguage').click(function() {
            const edit_language_id = $(this).attr('data-id');
            const data = {
                edit_language_id: edit_language_id,
            }

            Axios.post('/api/preferences/language/edit', data).then((resp) => {
                $('#hiddenIdLanguage').val(resp.data.data.id)
                $('#editCountryName').val(resp.data.data.country)
                $('#editCountryCode').val(resp.data.data.country_code)

            }).catch((err) => {
                Swal.fire({
                    icon: 'error',
                    title: err
                });
            });
        })

        $('.updateLanguage').click(function() {
            if ($('#updateForm').valid()) {
                let data = {
                    id: $('#hiddenIdLanguage').val(),
                    country: $('#editCountryName').val(),
                    country_code: $('#editCountryCode').val(),
                }
                Axios.post('/api/preferences/language/update', data).then((resp) => {
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
             }
        })



    })
</script>
@endsection