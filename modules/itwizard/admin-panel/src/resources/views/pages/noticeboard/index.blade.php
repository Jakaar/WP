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
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
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
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Select Date Range')}}</h5>
                            <input name="daterange" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Board Type')}}</h5>
                            <select class="multiselect-dropdown form-control">
                                <option value="" selected disabled>{{__('Choose')}}</option>
                                @foreach($data['board_type'] as $type)
                                <option value="{{$type->key}}">{{$type->key}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <h5 class="card-title">{{__('Search Word')}}</h5>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <h5 class="card-title">{{__('Use or Not Unused')}}</h5>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">{{__('All')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">{{__('Active')}}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                <label class="form-check-label" for="inlineRadio3">{{__('InActive')}}</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-primary float-end mt-3"><i class="pe-7s-search"></i> {{__('Search')}}</button>
                        </div>
                    </div>
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
                    @foreach($data['board_master'] as $board)
                        <tr>
                            <td></td>
                            <td>{{$board->board_name}}</td>
                            <td>{{$board->board_type}}</td>
                            <td>{{$board->isComment}}</td>
                            <td>{{$board->board_type}}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">{{__('Edit')}}</button>
                                <button class="btn btn-sm btn-outline-danger">{{__('Delete')}}</button>
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
                <div class="mb-3 card">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
{{--                            <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>--}}
                            {{__('Create Board')}}
                        </div>
                    </div>
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
                                    @foreach($data['board_type'] as $type)
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success CreateBoard">{{__('Create')}}</button>
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

            $('.CreateBoard').on('click', function (){
               const data = {
                   board_name: $('#BoardName').val(),
                   board_type: $('#BoardType').val(),
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
               }).catch((err) => {
                   Toast.fire({
                       icon: 'error',
                       title: err.response.data.msg
                   })
               })
            });
        });
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                startDate: moment().startOf("month"),
                endDate: moment().startOf("day").add(32, "day"),
                locale: {
                    format: "M/DD hh:mm",
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
    </script>
@endsection
