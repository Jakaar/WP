@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
                </div>
                <div class="">
                    {{__('Main Banner Management')}}
                    {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}"
                        class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                        {{__('Create Banner')}}
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{--    Header
            Selection section--}}

    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="container-fluid">
                <div class="form-group row">
                    <div class="col-md-2 text-center col-form-label"> {{__('Ad Classification')}}</div>
                    <div class="col-md-2 text-center col-form-label">
                        <div class="d-flex align-items-center">
                            <div class='custom-control custom-radio custom-control-inline  form-check-inline'><input type='radio'
                                                                                                                     class='custom-control-input'
                                                                                                                     id=''
                                                                                                                     name=''
                                                                                                                     value=''
                                                                                                                     title='{{__('Premium')}}'/>
                                <label
                                    class='custom-control-label' for=''>{{__('Premium')}}</label></div>
                            <div class='custom-control custom-radio custom-control-inline  form-check-inline'><input type='radio'
                                                                                                                     class='custom-control-input'
                                                                                                                     id=''
                                                                                                                     name='type'
                                                                                                                     value=''
                                                                                                                     title='{{__('Hot')}}'
                                                                                                                     class="form-control-input"/>
                                <label class='custom-control-label' for=''>{{__('Hot')}}</label></div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 text-center col-form-label">{{__('Ad Classification')}}</div>
                    <div class="col-md-10 text-center col-form-label">
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-radio custom-control-inline form-check-inline">
                                <input type="radio" class="custom-control-input" id="" name="" checked
                                       value="" title="{{__('Use')}}"> <label
                                    class="custom-control-label" for="statusAll">{{__('Entire')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline  form-check-inline">
                                <input type="radio" class="custom-control-input" id="statusU" name="status" value="U"
                                       title="{{__('Unused')}}"> <label
                                    class="custom-control-label" for="statusU">{{__('Processing')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline form-check-inline">
                                <input type="radio" class="custom-control-input" id="" name="" value=""
                                       title="{{__('Unused')}}"> <label class="custom-control-label"
                                                                        for="statusE">{{__('Stopped')}}</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline  form-check-inline">
                                <input type="radio" class="custom-control-input" id="statusD" name="status" value="D"
                                       title="{{__('Unused')}}"> <label
                                    class="custom-control-label" for="statusD">{{__('End')}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--

                Body section
                showing the table under here
    --}}


    <div class="card">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <label class="card-title"> {{__('Total menu')}} : 2</label>
                    </div>
                    <div class="col-sm-6 text-right ">
                        <div class="row">
                            <div class="col-sm-7 text-right pr-0">
                                <div class="input-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <select name="type1" class="form-control ">
                                            <option value="" selected="">{{__('Entire')}}</option>
                                            <option value="userId">{{__('Business Name')}}</option>
                                            <option value="id">{{__('ID')}}</option>
                                        </select>
                                    </div>
                                    <input type="text" name="searchWord" class="form-control searchWord" value="">
                                </div>
                            </div>
                            <div class="pr-0  mt-1 text-left col-sm-4">
                                <a id="btnSearch" onclick="" class="btn btn-sm btn-primary"
                                   style="cursor: pointer;">{{__('Search')}}</a> <a
                                    href=" "
                                    class="btn btn-sm btn-primary">{{__('Create Menu')}} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <colgroup>
                        <col width="5%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="7%">
                        <col width="10%">
                        <col width="7%">
                        <col width="7%">
                        <col width="*">
                        <col width="10%">
                    </colgroup>
                    <thead class="table-info">
                    <tr>
                        <th>{{__('Number')}}</th>
                        <th>{{__('Ad Classification')}}</th>
                        <th>{{__('Price')}}</th>
                        <th>{{__('Business Name')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Area')}}</th>
                        <th>{{__('Ad Title')}}</th>
                        <th>{{__('Ad Date')}}</th>
                        <th>{{__('Status Classification')}}</th>
                        <th>{{__('Availability')}}</th>
                        <th>{{__('Re-Register')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2</td>
                        <td>Hot</td>
                        <td>10000</td>
                        <td>tago2</td>
                        <td>testgbwer</td>
                        <td>부산 / 남구</td>
                        <td><a href=""><span title="hot">hot</span></a></td>
                        <td>2021-03-14 ~ 2021-03-27</td>
                        <td>종료</td>
                        <td><select name="useType" class="form-control" data-id="1">
                                <option value="Y" selected="">{{__('Use')}}</option>
                                <option value="N">{{__('Stopped')}}</option>
                            </select></td>
                        <td><a href="" class="btn btn-sm btn-info">{{__('Re-Register')}}</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>프리미엄</td>
                        <td>100023</td>
                        <td>tago2</td>
                        <td>testgbwer</td>
                        <td>대구 / 서구</td>
                        <td><a href=""><span title="premium">premium</span></a></td>
                        <td>2021-02-01 ~ 2021-03-27</td>
                        <td>종료</td>
                        <td><select name="useType" class="form-control" data-id="1">
                                <option value="Y" selected="">{{__('Use')}}</option>
                                <option value="N">{{__('Stopped')}}</option>
                            </select></td>
                        <td><a href="" class="btn btn-sm btn-info">{{__('Re-Register')}}</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer justify-content-center">
            <nav class="pagination-rounded">
                <ul class="pagination my-2 ">
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
