@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Bulletin Board Manage')}}
                    {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
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
    <div class="row">
        <div class="col-md-12 ">
            <div class="card-header-title fsize-2 text-capitalize fw-normal mb-2">
                {{__('Search Condition')}}
            </div>
            <div class="main-card mb-3 card">
                <div class="card-body card-btm-border card-shadow-primary border-primary">
                    <form action="/cms/noticeboard/search" method="GET">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Select Date Range')}}</h5>
                            <input name="daterange" class="form-control" readonly>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Board Type')}}</h5>
                            <select class="multiselect-dropdown form-control" name="board_type">
                                <option value="" selected disabled>{{__('Choose')}}</option>
                                @foreach($dataM['board_type'] as $type)
                                    <option value="{{$type->key}}">{{$type->key}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Search Word')}}</h5>
                            <input type="text" class="form-control" name="search">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <h5 class="card-title">{{__('Use or Not Unused')}}</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isEnabled" id="inlineRadio1" value="">
                                <label class="form-check-label" for="inlineRadio1">{{__('All')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isEnabled" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">{{__('Active')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isEnabled" id="inlineRadio3" value="1" >
                                <label class="form-check-label" for="inlineRadio3">{{__('InActive')}}</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary float-end mt-3">
                                <span class="btn-icon-wrapper pe-2 opacity-7">
                                    <i class="pe-7s-search"></i>
                                </span>
                                {{__('Search')}}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
{{--            <div class="card-header-title fsize-2 text-capitalize fw-normal mb-2">--}}
{{--                {{__('Search Condition')}}--}}
{{--                <button class="btn btn-info float-end">{{__('Search')}}</button>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="main-card mb-3 card mt-4">
        <div class="card-body card-btm-border card-shadow-primary border-primary">
            <table style="width: 100%;" id="BulletInBoard" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Board Name')}}</th>
                    <th>{{__('Board Type')}}</th>
                    <th>{{__('Use Comment')}}</th>
                    <th>{{__('Created At')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td></td>
                            <td>{{$result->board_name}}</td>
                            <td>{{$result->board_type}}</td>
                            <td>{{$result->isComment}}</td>
                            <td>{{$result->created_at}}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary EditModalShow editbtn" value="{{ $result->id }}">{{__('Edit')}}</button>
                                <button class="btn btn-sm btn-outline-danger DeleteBoard" key="{{ $result->id }}">{{__('Delete')}}</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>{{__('Board Name')}}</th>
                    <th>{{__('Board Type')}}</th>
                    <th>{{__('Use Comment')}}</th>
                    <th>{{__('Created At')}}</th>
                    <th>{{__('Action')}}</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('modal')
    <div id="CreateBoardModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                        <h5 class="modal-title card-title ">
{{--                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>--}}
                            {{__('Create Board')}}
                        </h5>
                </div>
                <div class="modal-body">
                    <form id="CrtBrd">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <h5 class="card-title">{{__('Name')}}</h5>
                                    <input name="" id="BoardName" placeholder="" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">{{__('Board Type')}}</h5>
                                <select id="BoardType" class="multiselect-dropdown form-control">
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    @foreach($dataM['board_type'] as $type)
                                        <option value="{{$type->key}}">{{$type->key}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Comment')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noComment" name="isComment" value="1" checked>
                                    <label class="form-check-label" for="noComment">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesComment" name="isComment" value="0">
                                    <label class="form-check-label" for="yesComment">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Comment Reply')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesReply" name="isReply" value="1" checked>
                                    <label class="form-check-label" for="yesReply">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noReply" name="isReply" value="0">
                                    <label class="form-check-label" for="noReply">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Register Button')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesRegister" name="isRegister" value="1">
                                    <label class="form-check-label" for="yesRegister">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noRegister" name="isRegister" value="0" checked>
                                    <label class="form-check-label" for="noRegister">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Rating')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesRating" name="isRating" value="1" checked>
                                    <label class="form-check-label" for="yesRating">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noRating" name="isRating" value="0">
                                    <label class="form-check-label" for="noRating">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use File Input')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesFile" name="isFile" value="1">
                                    <label class="form-check-label" for="yesFile">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noFile" name="isFile" value="0" checked>
                                    <label class="form-check-label" for="noFile">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Board')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesBoard" name="isBoard" value="1">
                                    <label class="form-check-label" for="yesBoard">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noBoard" name="isBoard" value="0" checked>
                                    <label class="form-check-label" for="noBoard">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Category')}}</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="yesCategory" name="isCategory" value="1">
                                    <label class="form-check-label" for="yesCategory">{{__('Yes')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="noCategory" name="isCategory" value="0" checked>
                                    <label class="form-check-label" for="noCategory">{{__('No')}}</label>
                                </div>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Is Used')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isEnabled" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="2">{{__('Active')}}</option>
                                    <option value="1">{{__('In Active')}}</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateBoard">{{__('Create')}}</button>
                </div>
            </div>
        </div>
    </div>

    <div id="EditBoardModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                        <h5 class="modal-title card-title ">
{{--                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>--}}
                            {{__('Edit Board')}}
                        </h5>
                </div>
                <div class="modal-body">
                    <form id="updateForm">
                        <input name="board_id" id="board_id"  type="hidden" class="form-control">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <h5 class="card-title">{{__('Name')}}</h5>
                                    <input name="board_name1" id="board_name1" placeholder="" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="card-title">{{__('Board Type')}}</h5>
                                <select id="board_type1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    @foreach($dataM['board_type'] as $type)
                                        <option value="{{$type->key}}">{{$type->key}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Comment')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isComment1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Comment Reply')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isReply1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Register Button')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isRegister1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Rating')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isRating1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use File Input')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isFile1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Board')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isBoard1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Use Category')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isCategory1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="1">{{__('Yes')}}</option>
                                    <option value="0">{{__('No')}}</option>
                                </select>
                            </div>
                        </div>
                        <hr class="text-primary">
                        <div class="row mt-2">
                            <div class="col-6">
                                <h5 class="card-title">{{__('Is Used')}}</h5>
                            </div>
                            <div class="col-6">
                                <select id="isEnabled1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                    <option value="" selected disabled>{{__('Choose')}}</option>
                                    <option value="2">{{__('Active')}}</option>
                                    <option value="1">{{__('In Active')}}</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success" id="update_board">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){

            const table = $('#BulletInBoard').DataTable( {
                retrieve: true,
                paging: false
            });
            table.on('order.dt search.dt', function () {
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            }).draw();

            $('.CreateModalShow').click(function (){
                $('#CreateBoardModal').modal('show');
            });
            $('.EditModalShow').click(function (){
                $('#EditBoardModal').modal('show');
            });
            $('.CreateBoard').on('click', function (){
               const data = {
                   board_name: $('#BoardName').val(),
                   board_type: $('#BoardType').val(),
                   isEnabled: $('#isEnabled').val(),
                   isComment: $('input[name="isComment"]:checked').val(),
                   isReply: $('input[name="isReply"]:checked').val(),
                   isRegister: $('input[name="isRegister"]:checked').val(),
                   isRating: $('input[name="isRating"]:checked').val(),
                   isFile: $('input[name="isFile"]:checked').val(),
                   isBoard: $('input[name="isBoard"]:checked').val(),
                   isCategory: $('input[name="isCategory"]:checked').val()
                   

               }
               Axios.post('/api/board/create', data).then((resp) => {
                   $('#CrtBrd')[0].reset();
                   $('#CreateBoardModal').modal('hide');
                   Toast.fire({
                       icon: 'success',
                       title: resp.data.msg
                   })
                   setTimeout(function() {
                        location.reload()
                    }, 2000);
               }).catch((err) => {
                   Toast.fire({
                       icon: 'error',
                       title: err.response.data.msg
                   })
               })
            });
            $('.DeleteBoard').on('click', function() {
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
                        Axios.post('/api/DeleteBoard/' + $(this).attr('key')).then((resp) => {
                            Swal.fire(
                                'Deleted!',
                                'Your notice board has been deleted.',
                                'success'
                            )
                            $(this).closest('tr').fadeOut();
                        });
                    }
                })
            });
            $(document).on('click', '.editbtn', function() {
                var board_id = $(this).val();
                //$('#editModal').modal('show');
                Axios.get('/api/editboard/' + board_id).then((resp) => {
                    $('#board_id').val(resp.data.id);
                    $('#board_name1').val(resp.data.board_name);
                    $('#board_type1').val(resp.data.board_type);
                    $('#isComment1').val(resp.data.isComment);
                    $('#isReply1').val(resp.data.isReply);
                    $('#isRegister1').val(resp.data.isRegister);
                    $('#isRating1').val(resp.data.isRating); 
                    $('#isFile1').val(resp.data.isFile);
                    $('#isBoard1').val(resp.data.isBoard);   
                    $('#isCategory1').val(resp.data.isCategory);
                    $('#isEnabled1').val(resp.data.isEnabled);              
                });
            });
            $('#update_board').on('click', function() {
                if ($('#updateForm').valid()) {
                    const data = {
                        board_id: $('#board_id').val(),
                        board_name1: $('#board_name1').val(),
                        board_type1: $('#board_type1').val(),
                        isComment1: $('#isComment1').val(),
                        isReply1: $('#isReply1').val(),
                        isRegister1: $('#isRegister1').val(),
                        isRating1: $('#isRating1').val(),
                        isFile1: $('#isFile1').val(),
                        isBoard1: $('#isBoard1').val(),
                        isCategory1: $('#isCategory1').val(),
                        isEnabled1: $('#isEnabled1').val(),
                    }
                    const headers = {
                        'Content-Type': 'multipart/form-data',
                        'Content-Type': 'Application/json'
                    }
                    Axios.post('/api/updateboard', data, {
                        headers: headers
                    }).then((resp) => {
                        Swal.fire(
                            'Updated!',
                            'Your board has been updated.',
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
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                startDate: moment().startOf("month"),
                endDate: moment().startOf("day").add(32, "day"),
                locale: {
                    format: "Y-M-DD hh:mm:ss",
                    applyLabel: "적용",
                    cancelLabel:"취소",
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
        });
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@endsection
