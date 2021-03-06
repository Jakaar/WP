@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
                </div>
                <div class="">
                    {{__('Main post')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}"
                        class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>{{__('Create Main Notice Board')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3  card-btm-border border-primary class">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title"> {{__('Main Notice Board Creation Code')}} </div>
            </div>
            <div class="clearfix"></div>
            <div class="bg-light p-2">
                <code id="code">
                    @ include
                </code>
            </div>
        </div>
    </div>
    <div class="card mb-3  card-btm-border border-primary class">
        <div class="card-body">
            <div class="">
                <div class="card-title">{{__('Check Points')}}</div>
                <ul class="todo-list-wrapper list-group list-group-flush ">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li>?????? ???????????? ????????? ??? ????????????.</li>
                            <li>??????????????? ?????? ????????? ?????? ????????? ?????? ????????? ???????????????.</li>
                            <li>rbseq <b>[?????????????????????]</b>??? ?????? ??????????????? ????????? ???????????? ???????????????.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card mb-3 card-btm-border border-primary class">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <label class="card-title"> {{__('Main Notice Board Number')}} : 11</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="NewsTable">
                    <thead>
                    <tr>
                        <th>{{__('Number')}}</th>
                        <th>{{__('Notice Board Code')}}</th>
                        <th>{{__('Notice Board Name')}}</th>
                        <th>{{__('Notice Board Number')}}</th>
                        <th>{{__('Number of letters')}}</th>
                        <th>{{__('Category')}}</th>
                        <th>{{__('Function')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>notice</td>
                        <td>????????????</td>
                        <td>3</td>
                        <td>20</td>
                        <td>????????????</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-secondary">{{__('Creation Code Copy')}}</a>
                            <a href="" class="btn btn-sm btn-info">{{__('Preview')}}</a>
                            <a href="" class="btn btn-sm btn-primary">{{__('Edit')}}</a>
                            <a href="" class="btn btn-sm btn-danger">{{__('Delete')}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@section('modal')
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{__('Main post')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="" action="" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label fw-bold">???????????????</label>
                                <div class="col">
                                    <select class="form-control" id="" name="">
                                        <option value="">= ????????? ?????? =</option>
                                        <option value="">formlist</option>
                                        <option value="">portfolio</option>
                                        <option value="">staff</option>
                                        <option value="">?????????</option>
                                        <option value="">????????????</option>
                                        <option value="">?????? ?????? ITwizard TV ?????????</option>
                                        <option value="">???????????????</option>
                                        <option value="">????????????</option>
                                        <option value="">???????????????</option>
                                        <option value="">????????????</option>
                                        <option value="">?????? ?????? ??????</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label fw-bold">????????? ????????????</label>
                                <div class="col">
                                    <select name="" class="form-control">
                                        <option value="">=????????????=</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">?????? ?????????</label>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">{{env('APP_URL')}}</span>
                                    </div>
                                    <select class="form-control" id="" name="">
                                        <option value="">= ?????? =</option>
                                        <option value="">?????? ?????? ??????</option>
                                        <option value="">????????????</option>
                                        <option value="">?????? ?????????</option>
                                        <option value="">?????? ?????????</option>
                                        <option value="">?????????</option>
                                        <option value="">SMS Enterprise Reseller</option>
                                        <option value="">????????????</option>
                                        <option value="">????????? ??? ???</option>
                                    </select>
                                </div>
                                <small class="form-text text-danger">??? ?????? ???????????? ??? ????????? ???????????? ????????? ???????????? ????????????.</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label fw-bold">?????? ?????? ???</label>
                                <div class="col">
                                    <input type="text" name="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label fw-bold">?????? ????????? ???</label>
                                <div class="col">
                                    <input type="text" name="" class="form-control" value="">
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold col-sm-2">?????? ?????? ??????</label>
                            <div class="col">
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="save">
                                    <label class="custom-control-label" for="rdoExample1">????????????</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input "
                                           value="default">
                                    <label class="custom-control-label" for="rdoExample2">?????????</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="image">
                                    <label class="custom-control-label" for="rdoExample3">?????????</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="thumb">
                                    <label class="custom-control-label" for="rdoExample4">?????????</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">?????? ??????</label>
                            <div class="col">
                                <textarea name="" cols="120" rows="1"
                                          class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">?????? ??????</label>
                            <div class="col"><textarea name="codingLoop" cols="120" rows="5"
                                                       class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">?????? ??????</label>
                            <div class="col"><textarea name="codingEnd" cols="120" rows="1"
                                                       class="coding form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="card mb-3 card-body">
                        <div class="card-title">{{__('Check Points')}}</div>
                        <ul class="todo-list-wrapper list-group list-group-flush ">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <ul>
                                    <li>?????????????????? ???????????? ????????? [?????? ??????] ????????? ???????????????.</li>
                                    <li>CSS ???????????? ????????? ????????? ?????? [?????? ??????] ????????? class??? ???????????????.</li>
                                    <li>?????? : ??????????????? ?????? CSS ????????? ???????????? ??????????????? ????????? ?????? ??? ????????????.</li>
                                    <li> #{SUBJECT} : ??????, #{DATE} : ??????(SNS??????), #{LINK} : ??????([?????? ?????????]??? ????????? URL??? ??????),
                                        #{NEW} : ??? ??? ?????????
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center w-100">
                        <button class="btn btn-success">{{__('Save')}}</button>
                        <button type="button" class="btn btn-outline-info"
                                data-bs-dismiss="modal">{{__('Cancel')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
