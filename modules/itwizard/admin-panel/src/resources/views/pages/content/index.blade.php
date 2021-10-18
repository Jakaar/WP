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
    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">{{__('Menu Details')}}</h5>
                    <canvas id="canvas"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">{{__('Menu Using')}}</h5>
                    <canvas id="chart-horiz-bar"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">{{__('Last 10 News')}}</h5>
                    <table id="noControlledTable" style="width: 100%;" class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <td>{{__('Board Name')}}</td>
                            <td>{{__('Title')}}</td>
                            <td>{{__('Created At')}}</td>
                            <td>{{__('Creator')}}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
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
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            const sendGetRequest = async (asd) => {
                try {
                    const resp = await Axios.post('/api/cM');
                    console.log(resp.data);
                } catch (err) {
                    // Handle Error Here
                    console.error(err);
                }
            };

            sendGetRequest('asd');

            const table = $('#AllContent').DataTable({
                retrieve: true,
                // paging: false
            });

        });
    </script>
@endsection
