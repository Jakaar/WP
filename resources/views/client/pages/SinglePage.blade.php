@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
        <div class="">
            {!! $data['board']->content !!}
        </div>
@endsection
