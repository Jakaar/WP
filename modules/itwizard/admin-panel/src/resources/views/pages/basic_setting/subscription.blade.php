@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user"></i>
            </div>
            <div>
                {{__('Subscription Security Settings')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6">
                <h5 class="card-title">{{__('Subscription Security Settings')}}</h5>
            </div>

            <table style="width: 100%;" id="BulletInBoards" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{__('NUMBER')}}</th>
                        <th>{{__('TITLE')}}</th>
                        <th>{{__('VERSION')}}</th>
                        <th>{{__('REGISTRATION DATE')}}</th>
                        <th>{{__('REGISTRANT')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>User Detail</td>
                        <td>1.0</td>
                        <td>10/21/2021</td>
                        <td>SuperAdmin</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Subscription Detail</td>
                        <td>1.0</td>
                        <td>10/21/2021</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Administrator Detail</td>
                        <td>1.0</td>
                        <td>10/21/2021</td>
                        <td>Admin</td>
                    </tr>
                </tbody>
            </table>
            <!-- <nav class="" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link">1</a>
                    </li>
                    <li class="page-item active">
                        <a href="javascript:void(0);" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link">5</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </li>
                </ul>
            </nav> -->

        </div>
    </div>
</div>


@section('script')

<script>
    $('#BulletInBoards').DataTable({})
</script>

@endsection

@endsection