@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
<div class="main">
    <section>
        <section class="blogs-4">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-10 mx-auto">
                        <h2 class="title mb-5">{{ __('Categories') }}</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    @foreach($Categories as $category)
                        <div class="col-lg-3">
                            <div class="card card-blog card-background" data-animation="zooming">
                                <div class="full-background" style="background-image: url('{{$category->main_img}}')"></div>
                                <a href="{{url()->full().'/'.base64_encode(base64_encode($category->id))}}">
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h6 class="card-category text-white opacity-8 text-truncate">{{$category->description}}</h6>
                                            <h5 class="card-title">{{$category->name}}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
</div>
<section class="blogs-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="title mb-5">{{ __('Latest Posts') }}</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/mark-harrison.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">That’s One Way To Ditch Your Passenger</a>
                                </h4>
                                <p class="card-description">
                                    As near as we can tell, this guy must have thought he was going over backwards and tapped the rear...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-3.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Mike John</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-watch-time"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/twk-tt.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">Shark Week: How to Watch It Scientist</a>
                                </h4>
                                <p class="card-description">
                                    Just when you thought it was safe to turn on your television, the Discovery Channel's "Shark Week"...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-2.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Jona Zmud</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-watch-time"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/pawel-nolbert.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">Who's Afraid of the Self-Driving Car?</a>
                                </h4>
                                <p class="card-description">
                                    It's been 60 years since the cover of Popular Mechanics magazine gave us the promise of flying cars...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-5.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Marc Oliver</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-favourite-28"></i> 2.4K
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/mark-harrison.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">That’s One Way To Ditch Your Passenger</a>
                                </h4>
                                <p class="card-description">
                                    As near as we can tell, this guy must have thought he was going over backwards and tapped the rear...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-3.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Mike John</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-watch-time"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/pawel-nolbert.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">Who's Afraid of the Self-Driving Car?</a>
                                </h4>
                                <p class="card-description">
                                    It's been 60 years since the cover of Popular Mechanics magazine gave us the promise of flying cars...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-5.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Marc Oliver</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-favourite-28"></i> 2.4K
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="javascript:;">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/pawel-nolbert.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="javascript:;">Who's Afraid of the Self-Driving Car?</a>
                                </h4>
                                <p class="card-description">
                                    It's been 60 years since the cover of Popular Mechanics magazine gave us the promise of flying cars...
                                </p>
                                <div class="card-footer">
                                    <div class="author">
                                        <img src="{{asset('client/static/img/faces/team-5.jpg')}}" alt="..." class="avatar img-raised">
                                        <span>Marc Oliver</span>
                                    </div>
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-favourite-28"></i> 2.4K
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
