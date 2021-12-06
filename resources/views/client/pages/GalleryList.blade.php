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
            <div class="row">
                @foreach($Groups as $group)
                <div class="col-lg-3">
                    <div class="card card-blog card-background" data-animation="zooming">
                        <div class="full-background" style="background-image: url('{{$group->main_img}}')"></div>
                        <a href="/gllr/{{base64_encode(base64_encode($group->id))}}">
                            <div class="card-body">
                                <div class="content-bottom">
                                    <h6 class="card-category text-white opacity-8 text-truncate">{{$group->description}}</h6>
                                    <h5 class="card-title text-truncate">{{$group->name}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @if(isset($datas['form_builded']))
        @include('client.includes.form')
    @endif
@endsection
