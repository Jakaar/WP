@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <section class="blogs-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h2 class="title mb-5">{{ __('Latest Posts') }}</h2>
                    <div class="row">
                        @foreach($List as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog card-plain">
                                    <div class="card-image shadow" style="height: 200px;">
                                        <a href="/dtlpgdt/{{base64_encode(base64_encode($item->id))}}">
                                            <img class="img rounded" src="{{$item->main_img}}" alt="" style="height: 100%; object-fit: cover">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title text-truncate">
                                            <a href="/dtlpgdt/{{base64_encode(base64_encode($item->id))}}">{{$item->name}}</a>
                                        </h4>
                                        <p class="card-description text-truncate">
                                            {{$item->description}}
                                        </p>
                                        <div class="card-footer">
{{--                                            <div class="author">--}}
{{--                                                <img src="{{asset('client/static/img/faces/team-3.jpg')}}" alt="..." class="avatar img-raised">--}}
{{--                                                <span>Mike John</span>--}}
{{--                                            </div>--}}
                                            <div class="stats stats-right opacity-8">
                                                <i class="ni ni-watch-time"></i>
                                                {{\Carbon\Carbon::parse(\Carbon\Carbon::make($item->created_at)->format('Y-m-d H:i:s'))->diffForHumans()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="float-right">
                        {{$List->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
