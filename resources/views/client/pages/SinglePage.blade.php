@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    {!! $data['board']->content !!}
@endsection
