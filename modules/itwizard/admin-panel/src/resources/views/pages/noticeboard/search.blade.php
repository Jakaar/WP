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
                            {{-- <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="isEnabled" id="inlineRadio1" value="">
                                <label class="form-check-label" for="inlineRadio1">{{__('All')}}</label>
                            </div> --}}
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
                                <input name="BoardName" id="BoardName" placeholder="" type="text" class="form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">{{__('Board Type')}}</h5>
                            <select id="BoardType" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
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
                            <select id="isComment" name="isComment" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1" selected>{{__('Yes')}}</option>
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
                            <select id="isReply" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1" selected>{{__('Yes')}}</option>
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
                            <select id="isRegister" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1">{{__('Yes')}}</option>
                                <option value="0" selected>{{__('No')}}</option>
                            </select>
                        </div>
                    </div>
                    <hr class="text-primary">
                    <div class="row mt-2">
                        <div class="col-6">
                            <h5 class="card-title">{{__('Use Rating')}}</h5>
                        </div>
                        <div class="col-6">
                            <select id="isRating" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1" selected>{{__('Yes')}}</option>
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
                            <select id="isFile" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1">{{__('Yes')}}</option>
                                <option value="0" selected>{{__('No')}}</option>
                            </select>
                        </div>
                    </div>
                    <hr class="text-primary">
                    <div class="row mt-2">
                        <div class="col-6">
                            <h5 class="card-title">{{__('Use Board')}}</h5>
                        </div>
                        <div class="col-6">
                            <select id="isBoard" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1">{{__('Yes')}}</option>
                                <option value="0" selected>{{__('No')}}</option>
                            </select>
                        </div>
                    </div>
                    <hr class="text-primary">
                    <div class="row mt-2">
                        <div class="col-6">
                            <h5 class="card-title">{{__('Use Category')}}</h5>
                        </div>
                        <div class="col-6">
                            <select id="isCategory" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1">{{__('Yes')}}</option>
                                <option value="0" selected>{{__('No')}}</option>
                            </select>
                        </div>
                    </div>
                    <hr class="text-primary">
                    <div class="row mt-2">
                        <div class="col-6">
                            <h5 class="card-title">{{__('Is Used')}}</h5>
                        </div>
                        <div class="col-6">
                            <select id="isEnabled" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
                                <option value="" disabled>{{__('Choose')}}</option>
                                <option value="1" selected>{{__('Active')}}</option>
                                <option value="0">{{__('In Active')}}</option>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <select id="board_type1" name="board_type1" class="multiselect-dropdown form-control" data-msg-required="{{ __('This Field is Required') }}" required>
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
                                <input class="form-check-input" type="radio" id="yesComment1" name="isComment1" value="1">
                                <label class="form-check-label" for="noComment">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noComment1" name="isComment1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesReply1" name="isReply1" value="1">
                                <label class="form-check-label" for="yesReply">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noReply1" name="isReply1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesRegister1" name="isRegister1" value="1">
                                <label class="form-check-label" for="yesRegister">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noRegister1" name="isRegister1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesRating1" name="isRating1" value="1">
                                <label class="form-check-label" for="yesRating">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noRating1" name="isRating1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesFile1" name="isFile1" value="1">
                                <label class="form-check-label" for="yesFile">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noFile1" name="isFile1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesBoard1" name="isBoard1" value="1">
                                <label class="form-check-label" for="yesBoard">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noBoard1" name="isBoard1" value="0">
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
                                <input class="form-check-input" type="radio" id="yesCategory1" name="isCategory1" value="1">
                                <label class="form-check-label" for="yesCategory">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noCategory1" name="isCategory1" value="0">
                                <label class="form-check-label" for="noCategory">{{__('No')}}</label>
                            </div>
                        </div>
                    </div>
                    <hr class="text-primary">
                    <div class="row mt-2">
                        <div class="col-6">
                            <h5 class="card-title">{{__('Is Enabled')}}</h5>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="yesEnabled1" name="isEnabled1" value="2">
                                <label class="form-check-label" for="yesEnabled">{{__('Yes')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noEnabled1" name="isEnabled1" value="1">
                                <label class="form-check-label" for="noEnabled">{{__('No')}}</label>
                            </div>
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
                if ($('#CrtBrd').valid()) {

               const data = {
                    BoardName: $('#BoardName').val(),
                    BoardType: $('#BoardType').val(),
                    isComment: $('input[name="isComment"]:checked').val(),
                    isReply: $('input[name="isReply"]:checked').val(),
                    isRegister: $('input[name="isRegister"]:checked').val(),
                    isRating: $('input[name="isRating"]:checked').val(),
                    isFile: $('input[name="isFile"]:checked').val(),
                    isBoard: $('input[name="isBoard"]:checked').val(),
                    isCategory: $('input[name="isCategory"]:checked').val(), 
                    isEnabled: $('input[name="isEnabled"]:checked').val()                
                              

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
                }
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
                   if(resp.data.isComment==1)
                    {$('#yesComment1').prop('checked', true);}
                    else
                    {$('#noComment1').prop('checked', true);}
                    if(resp.data.isReply==1)
                    {$('#yesReply1').prop('checked', true);}
                    else
                    {$('#noReply1').prop('checked', true);}
                    if(resp.data.isRegister==1)
                    {$('#yesRegister1').prop('checked', true);}
                    else
                    {$('#noRegister1').prop('checked', true);}
                    if(resp.data.isRating==1)
                    {$('#yesRating1').prop('checked', true);}
                    else
                    {$('#noRating1').prop('checked', true);}
                    if(resp.data.isFile==1)
                    {$('#yesFile1').prop('checked', true);}
                    else
                    {$('#noFile1').prop('checked', true);}
                    if(resp.data.isBoard==1)
                    {$('#yesBoard1').prop('checked', true);}
                    else
                    {$('#noBoard1').prop('checked', true);}
                    if(resp.data.isCategory==1)
                    {$('#yesCategory1').prop('checked', true);}
                    else
                    {$('#noCategory1').prop('checked', true);}
                    if(resp.data.isEnabled==2)
                    {$('#yesEnabled1').prop('checked', true);}
                    else
                    {$('#noEnabled1').prop('checked', true);}       
                         
                });
            });
            $('#update_board').on('click', function() {
                if ($('#updateForm').valid()) {
                    const data = {
                        board_id: $('#board_id').val(),
                        board_name1: $('#board_name1').val(),
                        board_type1: $('#board_type1').val(),
                        isComment1: $('input[name="isComment1"]:checked').val(),
                        isReply1: $('input[name="isReply1"]:checked').val(),
                        isRegister1: $('input[name="isRegister1"]:checked').val(),
                        isRating1: $('input[name="isRating1"]:checked').val(),
                        isFile1: $('input[name="isFile1"]:checked').val(),
                        isBoard1: $('input[name="isBoard1"]:checked').val(),
                        isCategory1: $('input[name="isCategory1"]:checked').val(), 
                        isEnabled1: $('input[name="isEnabled1"]:checked').val() 
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
            $('#CrtBrd').validate({
                
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
