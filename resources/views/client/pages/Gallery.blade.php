@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')


    @if(isset($datas['form_builded']))
        @include('client.includes.form')
    @endif
@endsection
