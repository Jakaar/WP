@extends('client.layouts.master')
@section('content')
    <div class="page-header error-page">
        <div class="page-header-image" style="background-image: url('/client/static/img/ill/404.svg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="title">404</h1>
                    <p class="lead">{{__('Page not found')}} :(</p>
                    <a href="{{ URL::previous() }}">{{__('Go To Previous Page')}}</a>
                    <h4 class="description text-default">{{__('Ooooups! Looks like you got lost.')}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
