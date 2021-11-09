@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('{{asset('/client/static/img/pages/nicolas-prieto.jpg')}}');">
        </div>
        <div class="content-center">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h1 class="title text-white">Team details & portfolios </h1>
                    <a href="#" class="btn btn-warning btn-round btn-icon-only">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-warning btn-round btn-icon-only">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="row">
                <div class="team-2">
                    <div class="container">
                        <div class="row">
                            @foreach($data['board'] as $i=>$val)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="card card-profile" data-image="profile-image">
                                        <div class="card-header">
                                            <div class="card-image">
                                                <a href="javascript:;">
                                                    <img class="img rounded" src="{{asset('/client/static/img/faces/team-5.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <h4 class="display-5 mb-0"> {{$val->content['employerName']}} </h4>
                                            <p class="lead">{{$val->content['employerProfession']}}</p>
                                            <div class="table-responsive">
                                                <ul class="list-unstyled ">
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-info mr-3">
                                                                    <i class="ni ni-atom"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">Dedicated entrepreneur</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-success mr-3">
                                                                    <i class="ni ni-user-run"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">Urban exploration</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-danger mr-3">
                                                                    <i class="ni ni-chart-bar-32"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1">Able to get good at everything</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-secondary">
        <div class="title text-center ">
            <h3 class="mb-0 pb-3 ">Show us some love</h3>
        </div>
    </div>
    <div class="section bg-secondary">
        <div class="social-line social-line-big-icons bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="javascript:;" class="btn btn-gradient-twitter btn-footer">
                            <i class="fab fa-twitter"></i>
                            <p class="title">twitter</p>
                            <p class="subtitle">@creativetim</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="javascript:" class="btn btn-gradient-facebook btn-footer">
                            <i class="fab fa-facebook-square"></i>
                            <p class="title">facebook</p>
                            <p class="subtitle">@creativetim</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="javascript:" class="btn btn-gradient-slack btn-footer">
                            <i class="fab fa-slack"></i>
                            <p class="title">slack</p>
                            <p class="subtitle">@creativetim</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="javascript:" class="btn btn-gradient-instagram btn-footer">
                            <i class="fab fa-instagram"></i>
                            <p class="title">instagram</p>
                            <p class="subtitle">@creativetim</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
