@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-th-large icon-gradient bg-malibu-beach"></i>
                </div>
                <div>
                    {{__('Category')}}
                    {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="btn-shadow btn btn-success">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                        {{__('Create News')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
