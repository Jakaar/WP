@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <div class="cd-section" id="contact-us">
        <div class="contactus-3">
            <div class="page-header">
                <img class="bg-image" src="{{asset('client/static/img/ill/img.png')}}" alt="">
            </div>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h1 class="display-1">Got a question?</h1>
                        <button class="btn btn-icon btn-primary mt-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-chat-round"></i></span>
                            <span class="btn-inner--text">Chat with us</span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="info info-hover">
                            <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                                <i class="ni ni-square-pin"></i>
                            </div>
                            <h4 class="info-title">Address</h4>
                            <p class="description px-0">12124 First Street, nr 54</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="info info-hover">
                            <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                                <i class="ni ni-email-83"></i>
                            </div>
                            <h4 class="info-title">Email</h4>
                            <p class="description px-0">hello@email.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="info info-hover">
                            <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                                <i class="ni ni-mobile-button"></i>
                            </div>
                            <h4 class="info-title">Phone</h4>
                            <p class="description px-0">+1(424) 535 3523</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="info info-hover">
                            <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                                <i class="ni ni-circle-08"></i>
                            </div>
                            <h4 class="info-title">Contact</h4>
                            <p class="description px-0">Andrew Samian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="main">--}}
        <section>
            <section class="blogs-4 mb--5">
                <div class="container mb--5">
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center">
                            <h2 class="title mb-3">Frequently asked question</h2>


                        </div>
                    </div>
                </div>
            </section>
        </section>
{{--    </div>--}}
    <div class="cd-section" id="accordion">
        <div class="accordion-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="accordion" id="accordionExample">
                            @foreach($FAQ as $key=>$item)
                                <div class="card">
                                    <div class="card-header" id="heading{{$item->id}}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                                {!! $t->translateText($item->question) ?? $item->question !!}
                                                <i class="ni ni-bold-down float-right pt-1"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{$item->id}}" class="collapse @if($key === 0) show @endif" aria-labelledby="heading{{$item->id}}" data-parent="#accordionExample">
                                        <div class="card-body opacity-8">
                                            {!! $t->translateText($item->answer) ?? $item->answer !!}
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
@endsection
