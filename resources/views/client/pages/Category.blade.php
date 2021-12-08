@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
<section class="blogs-2">
    <div class="container-fluid mt-5">
        <div class="row mb-md-5">
            <div class="col-md-8 mx-auto">
                <h3 class="display-3 text-center">{!! $t->translateText($title->name) !!}</h3>
                <p class="lead text-center">{!! $t->translateText($title->description) !!}</p>
            </div>
        </div>
    </div>
</section>
<section class="blogs-4 mt--5">
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
<section class="blogs-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2 class="title mb-5">{{ __('Latest Posts') }}</h2>
                <div class="row">
                    @foreach($latest as $last)
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-blog card-plain">
                            <div class="card-image shadow">
                                <a href="{{'/dtlpgdt/'.base64_encode(base64_encode($last->id))}}">
                                    <img class="img rounded" src="{{asset('client/static/img/sections/mark-harrison.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title text-truncate">
                                    <a href="{{'/dtlpgdt/'.base64_encode(base64_encode($last->id))}}">{{$last->name}}</a>
                                </h4>
                                <p class="card-description text-truncate">
                                    {{$last->description}}
                                </p>
                                <div class="card-footer">
                                    <div class="stats stats-right opacity-8">
                                        <i class="ni ni-watch-time"></i> {{\Carbon\Carbon::parse($last->created_at)->diffForHumans()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @if(isset($datas['form_builded']))
        @include('client.includes.form')
    @endif
</section>
@endsection
