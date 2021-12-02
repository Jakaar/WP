@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
        @if(isset($banners))
        <div class="container"  style="padding-top:100px;">
            @foreach ($banners as $banner)
            @if ($banner->slug=='main-banner' and $banner->type=='Simple')
            <div class="row">
                <div class="col-md-12">
                    {!! $banner->banner_content !!}
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endif
        @if(isset($BlogDetails))
            <div class="page-header header-filter">
                <div class="page-header-image" style="background-image: url('{{$BlogDetails->main_img}}');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto text-center">
                            <h2 class="display-2 text-white">{{$BlogDetails->name}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="floating-box bg-default">
                            <div class="box text-center">
                                <div class="icon icon-shape bg-primary icon-xl rounded-circle text-white">
                                    <i class="ni ni-spaceship"></i>
                                </div>
                            </div>
                            <blockquote class="blockquote text-center mt-4">
                                <p class="mb-0 text-white">{{\Carbon\Carbon::parse($BlogDetails->created_at)->diffForHumans()}}</p>
{{--                                <footer class="blockquote-footer text-white">Someone famous in--}}
{{--                                    <cite title="Source Title">Source Title</cite>--}}
{{--                                </footer>--}}
                            </blockquote>
                            <h2 class="lead text-white p-5">{{$BlogDetails->description}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h6 class="category">{{\Carbon\Carbon::parse($BlogDetails->created_at)->diffForHumans()}}</h6>
                            {!! $t->translateText($BlogDetails->data) ?? $BlogDetails->data !!}
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <section class="blogs-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-8 mx-auto">
                                <h2 class="title mb-5">Related Stories</h2>
                                @foreach($InCategoryNews as $iNews)
                                    <div class="card card-blog card-plain blog-horizontal mb-5">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card-image shadow">
                                                    <a href="javascript:;">
                                                        <img class="img rounded" src="{{$iNews->main_img}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <a href="javascript:;">{{$iNews->name}}</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        {{$iNews->description}}
                                                        <a href="/dtlpgdt/{{base64_encode(base64_encode($iNews->id))}}"> {{__('Read More')}} </a>
                                                    </p>
                                                    <div class="author">
                                                        <div class="text">
                                                            <div class="meta">{{\Carbon\Carbon::parse($iNews->created_at)->diffForHumans()}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        @endif

        @if(isset($SinglePageData->data))
            <div class="">
                {!! $t->translateText($SinglePageData->data) !!}
            </div>
        @endif

        @if(isset($datas['form_builded']))
            @include('client.includes.form')
        @endif
@endsection
