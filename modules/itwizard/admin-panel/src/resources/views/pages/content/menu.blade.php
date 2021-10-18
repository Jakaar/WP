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
                        {{__('Menu Create')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-title">Menus</div>
            <div class="main-card mb-3 p-2 card">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <div id="menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-8 col-lg-9">
            <div class="card-title">{{__('Content')}}</div>
            <div class="main-card mb-3 card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            Axios.post('/api/MenuGetData').then((resp) => {
                console.log(resp)
            })
        })
    </script>
@endsection
