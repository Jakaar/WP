@extends('client.layouts.master')
@section('content')
<style>
    .banner{
	position: absolute;
	width: 120px;
	height: 300px;
	background:url(ads.gif);
	bottom: 200px;
    }
    #banner_l{
        left: 5px;
    }
    #banner_r{
        right: 5px;
    }

</style>
    <header class="header-4 skew-separator">
        <div class="header-wrapper">
            <div class="page-header header-video">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="{{asset('client/static/media/header-video.mp4')}}" type="video/mp4">
                </video>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            {{--                        <h1 class="video-text">People stories</h1>--}}
                            <img class="video-text w-50" src="{{asset('/client/static/img/logo.png')}}" alt="">
                            {{--                        <h1 class="display-3 text-white">Боломжоо нээ!</h1>--}}
                            {{--                        <a href="" class="btn btn-warning btn-icon mt-3 mb-sm-0">--}}
                            {{--                            <span class="btn-inner--icon">--}}
                            {{--                                <i class="ni ni-button-play"></i>--}}
                            {{--                            </span>--}}
                            {{--                        </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="section features-4">
        <div class="container">
            @foreach ($banners as $banner)
                @if ($banner->slug=='main-banner' and $banner->type=='Simple')
                    <div class="row">
                        <div class="col-md-12">
                            {!! $banner->banner_content !!}
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="row">
                <div class="col-md-8 text-center mx-auto">
                    <h3 class="display-3">Now is our time <small>(지금은 우리의 시간입니다)</small></h3>
                    <p class="lead">The time is now to be okay to be the greatest you. Would you believe in what you believe in, if you were the only one who believed it?</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 mr-auto text-left mt-4">
                    <div class="card bg-default shadow border-0">
                        <img src="{{asset('/client/static/img/theme/img-1-1200x1000.jpg')}}" class="card-img-top" alt="">
                        <blockquote class="card-blockquote">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                                <polygon points="0,52 583,95 0,95" class="fill-default"></polygon>
                                <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon>
                            </svg>
                            <h4 class="display-4 text-white">Design System</h4>
                            <p class="lead text-italic text-white">That’s my skill. I’m not really specifically talented at anything except for the ability to learn. </p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-lg-7 p-sm-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info info-hover-warning">
                                <div class="icon icon-shape bg-warning shadow rounded-circle text-primary">
                                    <i class="ni ni-satisfied text-white"></i>
                                </div>
                                <h5 class="info-title">Best Quality</h5>
                                <p class="description opacity-8">It becomes harder for us to give others a hand. We get our heart broken by people we love.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info info-hover-info">
                                <div class="icon icon-shape bg-info shadow rounded-circle text-primary">
                                    <i class="ni ni-palette text-white"></i>
                                </div>
                                <h5 class="info-title">Awesome Design</h5>
                                <p class="description opacity-8">As we live, our hearts turn colder. Cause pain is what we go through as we become older.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-lg-4">
                        <div class="col-md-6">
                            <div class="info info-hover-danger">
                                <div class="icon icon-shape bg-danger shadow rounded-circle text-primary">
                                    <i class="ni ni-user-run text-white"></i>
                                </div>
                                <h5 class="info-title">Fast Development</h5>
                                <p class="description opacity-8">We’re not always in the position that we want to be at. We’re constantly growing.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info info-hover-success">
                                <div class="icon icon-shape bg-success shadow rounded-circle text-primary">
                                    <i class="ni ni-glasses-2 text-white"></i>
                                </div>
                                <h5 class="info-title">Super Fresh</h5>
                                <p class="description opacity-8">When we lose family over time. What else could rust the heart more over time? Blackgold.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($banners as $banner)
                @if ($banner->slug=='vertical-banner' and $banner->type=='Simple')

                    <div class="col-md-3">
                        <a href="{{$banner->link}}" target="{{$banner->target_type}}">{!! $banner->banner_content !!}</a>
                    </div>

                @endif
                @endforeach
            </div>
            <div class="row">
                @foreach ($banners as $banner)
                @if ($banner->slug=='horizontal-banner' and $banner->type=='Simple')

                    <div class="col-md-12">
                        <a href="{{$banner->link}}" target="{{$banner->target_type}}">{!! $banner->banner_content !!}</a>
                    </div>

                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="section bg-secondary" id="blogs">
        <section class="blogs-1">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8">
                        <h3 class="display-3">We Have a Best teams <small>(최고의 팀이 있습니다)</small></h3>
                        <p class="lead mt-1">The time is now for it to be okay to be great. People in this world shun people for being great. </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/theme/josh-appel.jpg"></div>
                            <a href="/teamDetails">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">it's JAVA Team</h6>
                                        <h5 class="card-title">Tago Plus</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('./client/static/img/theme/john-hoang.jpg"></div>
                            <a href="">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">it's JAVA Team</h6>
                                        <h5 class="card-title">Moren</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/theme/kit-suman.jpg"></div>
                            <a href="/teamDetails">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">It's PHP Team</h6>
                                        <h5 class="card-title">Sibizi</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('./client/static/img/sections/damian.jpg"></div>
                            <a href="/teamDetails">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">it's JAVA Team</h6>
                                        <h5 class="card-title">OK TOMATO</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('./client/static/img/sections/ashim.jpg"></div>
                            <a href="/teamDetails">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">it's PYTHON Team</h6>
                                        <h5 class="card-title">DIDIM</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('./client/static/img/sections/odin.jpg"></div>
                            <a href="/teamDetails">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">it's PHP Team</h6>
                                        <h5 class="card-title">New Learn</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{--                <button class="btn btn-icon btn-primary mt-4" type="button">--}}
                {{--                    <span class="btn-inner--text">Show more</span>--}}
                {{--                    <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>--}}
                {{--                </button>--}}
            </div>
        </section>
    </div>
    <div class="section" id="projects">
        <div class="project-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mr-auto ml-auto text-center mb-5">
                        <h3 class="diaplay-3">Some of Our Awesome Projects</h3>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-transparent mb-5">
                <div class="container">
                    <div class="navbar-translate">
                        <p>52 projects found</p>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-basket d-inline text-info"></i>
                                    <p class="d-inline">H-23</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/slack.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">Slack</h4>
                                <p class="card-description">We are happy to work at such a great project.</p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="/client/static/img//faces/team-4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-button-power d-inline text-success"></i>
                                    <p class="d-inline">F-43</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/spotify.jpeg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">Spotify</h4>
                                <p class="card-description">We strive to embrace and drive change in our industry.</p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="/client/static/img//faces/team-4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-building d-inline text-danger"></i>
                                    <p class="d-inline">J-11</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/dribbble.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">Dribbble</h4>
                                <p class="card-description">The time has come to bring our plans and ideas to life.</p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="/client/static/img//faces/team-4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-spaceship d-inline text-warning"></i>
                                    <p class="d-inline">A-11</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/tim.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">CreativeTim</h4>
                                <p class="card-description">We are developing the best design projects. </p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="/client/static/img//faces/team-4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-umbrella-13 d-inline text-primary"></i>
                                    <p class="d-inline">A-11</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/dropbox.png" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">DropBox</h4>
                                <p class="card-description">It is important to save every project safely with our app.</p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                                        <img alt="Image placeholder" src="/client/static/img/faces/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                                        <img alt="Image placeholder" src="/client/static/img//faces/team-4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-header mt-2">
                                <div class="float-left">
                                    <i class="ni ni-bus-front-12 d-inline"></i>
                                    <p class="d-inline">E-28</p>
                                </div>
                                <div class="float-right">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-link btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="ni ni-settings-gear-65"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                            <a class="dropdown-item" href="javascript:;">Action</a>
                                            <a class="dropdown-item" href="javascript:;">Another action</a>
                                            <a class="dropdown-item" href="javascript:;">Something else</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-4">
                                <a href="javascript:;">
                                    <img src="/client/static/img/unass.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 100px;">
                                </a>
                                <h4 class="card-title mt-3 mb-0">Unassigned</h4>
                                <p class="card-description">Here you can add your description and bellow add your members. </p>
                                <h5 class="card-title mt-4">Members</h5>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Add memberss">
                                        <i class="ni ni-key-25"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mt-5">
                    <ul class="pagination float-left">
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Previous">
                                <span aria-hidden="true"><i class="ni ni-bold-left" aria-hidden="true"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:;">...</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:;">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Next">
                                <span aria-hidden="true"><i class="ni ni-bold-right" aria-hidden="true"></i></span>
                            </a>
                        </li>
                    </ul>
                    <div class="text-right">
                        <p>Showing 6 out of 36</p>
                        <div>
                        </div></div></footer>
            </div>
        </div>
    </div>
    <div class="section" id="emps">
        <section class="team-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h3 class="display-3">Our Awesome Employers</h3>
                        <p class="lead">People in this world shun people for being great. For being a bright color. For standing out. But the time is now to be okay to be the greatest you. Would you believe in what you believe in?</p>
                    </div>
                </div>
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide carousel-team">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 p-5">
                                            <div class="p-4">
                                                <img class="rounded shadow transform-perspective-left" src="/client/static/img/theme/kareya-saleh.jpg" alt="First slide">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="wrapper p-md-0">
                                                <h3 class="card-title display-3">Charlie Watson</h3>
                                                <div class="lead">
                                                    Artist is a term applied to a person who engages in an activity deemed to be an art. An artist also may be defined unofficially as "a person should is one who expresses him- or herself through a medium". He is should a descriptive term applied to a person who engages in an activity deemed to be an art.
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-info mr-3">
                                                                    <i class="ni ni-atom"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="mb-1">Dedicated entrepreneur</p>
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
                                                                <p class="mb-1">Urban exploration</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="footer text-left">
                                                    <a href="javascript:;" class="btn btn-twitter btn-sm rounded-circle"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:;" class="btn btn-facebook btn-sm rounded-circle"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="javascript:;" class="btn btn-dribbble btn-sm rounded-circle"><i class="fab fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 p-5">
                                            <div class="p-4">
                                                <img class="rounded shadow transform-perspective-left" src="/client/static/img/theme/lucy.jpg" alt="First slide">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="wrapper p-md-0">
                                                <h1 class="card-title">Quavo Austen</h1>
                                                <div class="lead">
                                                    Artist is a term applied to a person who engages in an activity deemed to be an art. An artist also may be defined unofficially as "a person should is one who expresses him- or herself through a medium". He is should a descriptive term applied to a person who engages in an activity deemed to be an art."
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-info mr-3">
                                                                    <i class="ni ni-atom"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="mb-1">Dedicated entrepreneur</p>
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
                                                                <p class="mb-1">Urban exploration</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="footer text-left">
                                                    <a href="javascript:;" class="btn btn-twitter btn-sm rounded-circle"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:;" class="btn btn-facebook btn-sm rounded-circle"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="javascript:;" class="btn btn-dribbble btn-sm rounded-circle"><i class="fab fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 p-5">
                                            <div class="p-4">
                                                <img class="rounded shadow transform-perspective-left" src="/client/static/img/theme/willy-dade.jpg" alt="First slide">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="wrapper p-md-0">
                                                <h1 class="card-title">Lucy Thomson</h1>
                                                <div class="lead">
                                                    Artist is a term applied to a person who engages in an activity deemed to be an art. An artist also may be defined unofficially as "a person should is one who expresses him- or herself through a medium". He is should a descriptive term applied to a person who engages in an activity deemed to be an art."
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="py-1">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <div class="badge badge-circle badge-info mr-3">
                                                                    <i class="ni ni-atom"></i>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <p class="mb-1">Dedicated entrepreneur</p>
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
                                                                <p class="mb-1">Urban exploration</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="footer text-left">
                                                    <a href="javascript:;" class="btn btn-twitter btn-sm rounded-circle"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:;" class="btn btn-facebook btn-sm rounded-circle"><i class="fab fa-facebook-square"></i></a>
                                                    <a href="javascript:;" class="btn btn-dribbble btn-sm rounded-circle"><i class="fab fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="ni ni-bold-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="ni ni-bold-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @foreach ($banners as $banner)
                @if ($banner->slug=='left-banner' and $banner->type=='Simple')
                <div id="banner_l" class="banner">
                    {!! $banner->banner_content !!}
                </div>
                @endif
            @endforeach
            @foreach ($banners as $banner)
                @if ($banner->slug=='right-banner' and $banner->type=='Simple')
                <div id="banner_r" class="banner">
                        <a href="{{$banner->link}}" target="{{$banner->target_type}}">{!! $banner->banner_content !!}</a>
                </div>
                @endif
            @endforeach
@endsection
@section('script')

<script type="text/javascript">
	$(function(){
		var $banner = $('.banner'), $window = $(window);
		var $topDefault = parseFloat( $banner.css('bottom'), 10 );
		$window.on('scroll', function(){
			var $top = $(this).scrollTop();
			$banner.stop().animate( { bottom: -( $top - $topDefault) }, 1000, 'easeOutBack' );
		});

		var $wiBanner = $banner.outerWidth() * 2;
		zindex($('#wrapper').outerWidth());
		$window.on('resize', function(){
			zindex($('#wrapper').outerWidth());
		});
		function zindex(maxWidth){
			if( $window.width() <= maxWidth + $wiBanner ) {
				$banner.addClass('zindex');
			}else{
				$banner.removeClass('zindex');
			}
		}
	});
</script>
@endsection
