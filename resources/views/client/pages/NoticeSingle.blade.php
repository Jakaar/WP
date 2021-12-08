@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/css/socializer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <section class="blogs-2">
        <div class="container-fluid mt-5">
            <div class="row mb-md-5">
                <div class="col-md-8 mx-auto">
                    <h3 class="display-3 text-center">{{$Details->title}}</h3>
                    <p class="lead text-center">{!! $t->translateText($title->description) !!}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt--5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="socializer" data-features="32px,opacity,bg-none,pad" data-sites="facebook,twitter,reddit,print,email,whatsapp,instagram"></div>
{{--                                <div id="fb-root"></div>--}}
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="i1YFmakE"></script>
                            </div>
                            <div class="col-6"><div class="float-right">
                                    <span class="text-muted small">{{$Details->created_at}} | {{\Carbon\Carbon::make($Details->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            {{$Details->content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/vaakash/socializer@2f749eb/js/socializer.min.js"></script>
    <script>
        (function(){
            socializer( '.socializer' );
        }());
    </script>
@endsection
