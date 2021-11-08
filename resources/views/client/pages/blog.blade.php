@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('/client/static/img/pages/nicolas-prieto.jpg');">
        </div>
        <div class="content-center">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h1 class="title text-white">A Place for Entrepreneurs to Share and Discover New Stories</h1>
                    <a href="#button" class="btn btn-warning btn-round btn-icon-only">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#button" class="btn btn-warning btn-round btn-icon-only">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <section class="blogs-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-md-8 mx-auto">
                                    <h2 class="title mb-5">Related Stories</h2>
                                    <div class="card card-blog card-plain blog-horizontal mb-5">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image shadow">
                                                    <a href="javascript:;">
                                                        <img class="img rounded" src="/client/static/img/faces/team-2.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <a href="javascript:;">Rover raised $65 million for pet sitting</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Finding temporary housing for your dog should be as easy as renting an Airbnb. That’s the idea behind Rover, which raised $65 million to expand its pet sitting and dog-walking businesses... <a href="javascript:;"> Read More </a>
                                                    </p>
                                                    <div class="author">
                                                        <img src="/client/static/img/faces/team-1.jpg" alt="..." class="avatar img-raised">
                                                        <div class="text">
                                                            <span class="name">Tom Hanks</span>
                                                            <div class="meta">Drawn on 23 Jan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-blog card-plain blog-horizontal mb-5">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image shadow">
                                                    <a href="javascript:;">
                                                        <img class="img rounded" src="/client/static/img/faces/team-3.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <a href="javascript:;">MateLabs mixes learning with IFTTT</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        If you’ve ever wanted to train a machine learning model and integrate it with IFTTT, you now can with a new offering from MateLabs. MateVerse, a platform where novices can spin out machine...<a href="javascript:;"> Read More </a>
                                                    </p>
                                                    <div class="author">
                                                        <img src="/client/static/img/faces/team-5.jpg" alt="..." class="avatar img-raised">
                                                        <div class="text">
                                                            <span class="name">Paul Smith</span>
                                                            <div class="meta">Drawn on 23 Jan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-blog card-plain blog-horizontal">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image shadow">
                                                    <a href="javascript:;">
                                                        <img class="img rounded" src="/client/static/img/faces/team-4.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <a href="javascript:;">US venture investment ticks up in Q2</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds in tech and healthcare.. <a href="javascript:;"> Read More </a>
                                                    </p>
                                                    <div class="author">
                                                        <img src="/client/static/img/faces/team-2.jpg" alt="..." class="avatar img-raised">
                                                        <div class="text">
                                                            <span class="name">Jasmine Tailor</span>
                                                            <div class="meta">Drawn on 23 Jan</div>
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
                </div>
            </div>
        </div>
    </section>
    <section>
        <section class="blogs-4">
            <div class="container-fluid">
                <h2 class="title mb-4">Latest Blogposts</h2>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/sections/athena.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">Stellar Partnership</h6>
                                        <h5 class="card-title">Climate Change</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/sections/thomas.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">Digital Currency</h6>
                                        <h5 class="card-title">Save the World</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/sections/odin.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">Blockchain Explained</h6>
                                        <h5 class="card-title">Applications Companies</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/sections/twk-tt.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">A Robot is Your Co-Worker</h6>
                                        <h5 class="card-title">ARFID microchips</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-below">
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/theme/kit-suman.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">Sales Leads</h6>
                                        <h5 class="card-title">Configure Blockchain Technology</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/sections/damian.jpg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">AI at the Edge</h6>
                                        <h5 class="card-title">Research Byte</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/ill/p2.svg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">Features</h6>
                                        <h5 class="card-title">FiftyThree Files For Paper</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('/client/static/img/ill/p8.svg"></div>
                            <a href="javascript:;">
                                <div class="card-body">
                                    <div class="content-bottom">
                                        <h6 class="card-category text-white opacity-8">News</h6>
                                        <h5 class="card-title">Focus on Your Employees</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
