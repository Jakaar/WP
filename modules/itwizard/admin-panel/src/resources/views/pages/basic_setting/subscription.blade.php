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

<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3  card-btm-border card-shadow-primary border-primary card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-sm-6">
                            <h5 class="card-title">{{__('Subscription Security Settings')}}</h5>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
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
                                    <tfoot>
                                        <tr>
                                            <th>NUMBER</th>
                                            <th>TITLE</th>
                                            <th>VERSION</th>
                                            <th>REGISTRATION DATE</th>
                                            <th>REGISTRANT</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <nav class="" aria-label="Page navigation example">
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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection