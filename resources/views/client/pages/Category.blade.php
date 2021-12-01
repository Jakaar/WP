@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <section>
        <section class="blogs-4">
            <div class="container-fluid">
                <h2 class="title mb-4">Latest Blogposts</h2>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-blog card-background" data-animation="zooming">
                            <div class="full-background" style="background-image: url('../assets/img/sections/athena.jpg"></div>
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
                </div>
            </div>
        </section>
    </section>
@endsection
