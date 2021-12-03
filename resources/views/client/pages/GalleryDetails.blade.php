@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <header class="header-1">
        <div class="page-header">
            <div class="page-header-image" style="background-image: url('{{asset('client/static/img/ill/p2.svg')}}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7 mr-auto text-left d-flex justify-content-center flex-column">
                        <h3 class="display-3">{!! $t->translateText($title->name )!!}</h3>
                        <p class="lead mt-0">{!! $t->translateText($title->description )!!}</p>
                        <br>
                        <div class="buttons">
                            <a href="#target" class="btn btn-danger">
                                {{__('Show')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container mb-5">
        <div class="row">
            <div id="target" class="mb-5">
                @if($Details)
                    {!! $t->translateText($Details->photos) ?? $Details->photos!!}
                @endif
            </div>
        </div>
    </div>
    @if(isset($datas['form_builded']))
        @include('client.includes.form')
    @endif
@endsection
