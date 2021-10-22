@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Content & Menu')}}
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
                        {{__('Quickly Create')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">{{__('Top 10 Viewed pages')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <td>{{__('Menu Name')}}</td>
                    <td>{{__('Title')}}</td>
                    <td>{{__('Created At')}}</td>
                    <td>{{__('Views')}}</td>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
