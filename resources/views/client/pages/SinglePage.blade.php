@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')


        @if(isset($mainbanners))
        <section class="section">
            <div class="container">
                <div class="row">
                    @foreach($mainbanners as $mainbanner)
                    <div class="col-md-12">
                        {!! $mainbanner->banner_content !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
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
                                                        <a href="javascript:;" >{{$iNews->name}}</a>
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
                                            @foreach($isComment->data as $comment)
                                                <div class="media media-comment">
                                                    <img alt="Image placeholder" class="media-comment-avatar rounded-circle"
                                                         src="@if($comment->avatar){{asset('storage/'.$comment->avatar)}}@else{{asset('aPanel/imgs/1.png')}}@endif">
                                                    <div class="media-body">
                                                        <div class="media-comment-text">
                                                            <h6 class="h5 mt-0">{{$comment->firstname ?? __('Guest')}}</h6>
                                                            <p class="text-sm lh-160">
                                                                {{$comment->comment}}
                                                            </p>
                                                            <div class="icon-actions">
                                                                <a href="javascript:;">
                                                                    <i class="ni ni-curved-next"></i>
                                                                    <span class="text-muted">{{__('Reply')}}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
        @if(isset($leftbanners))
        @foreach ($leftbanners as $leftbanner)

            <div id="banner_l" class="banner">
                {!! $leftbanner->banner_content !!}
            </div>

        @endforeach
        @endif
        @if(isset($rightbanners))
        @foreach ($rightbanners as $rightbanner)

            <div id="banner_r" class="banner">
                    {!! $leftbanner->banner_content !!}
            </div>

        @endforeach
        @endif
        @if(isset($SinglePageData->data))
            <div class="">
                {!! $t->translateText($SinglePageData->data) !!}
            </div>
        @endif
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
