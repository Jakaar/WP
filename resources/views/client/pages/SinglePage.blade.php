@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
{{--        @if(isset($banners))--}}
{{--        <div class="container"  style="padding-top:100px;">--}}
{{--            @foreach ($banners as $banner)--}}
{{--                @if ( $banner->slug=='main-banner' and $banner->type=='Simple')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        {!! $banner->banner_content !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        @endif--}}
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
            @if($isComment)
                <section class="mt--5 section-blog-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="h3 mb-0">{{__('Comment')}}</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Comments -->
                                        <div class="mb-1">
                                            <div class="media media-comment">
                                                <img alt="Image placeholder" class="media-comment-avatar rounded-circle" src="../assets/img/faces/team-2.jpg">
                                                <div class="media-body">
                                                    <div class="media-comment-text">
                                                        <h6 class="h5 mt-0">Jessica Stones</h6>
                                                        <p class="text-sm lh-160">I always felt like I could do anything. That’s the main thing people are controlled by! Thoughts- their perception of themselves! They're slowed down.</p>
                                                        <div class="icon-actions">
                                                            <a href="javascript:;" class="like active">
                                                                <i class="ni ni-like-2"></i>
                                                                <span class="text-muted">10 likes</span>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <i class="ni ni-curved-next"></i>
                                                                <span class="text-muted">1 share</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @auth
                                                <div class="media align-items-center mt-5">
                                                    <img alt="Image placeholder" class="avatar avatar-lg rounded-circle mb-4" src="{{asset('storage/'.auth()->user()->avatar)}}">
                                                    <div class="media-body">
                                                        <form>
                                                            <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endif

        @if(isset($SinglePageData->data))
            <section class="blogs-2 mb--5">
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h3 class="display-3 text-center">{{$t->translateText($title->name)}}</h3>
                            <p class="lead text-center">{{$t->translateText($title->description)}}</p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="">
                {!! $t->translateText($SinglePageData->data) !!}
            </div>
        @endif

        @if(isset($datas['form_builded']))
            @include('client.includes.form')
        @endif
@endsection
