@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <section>
        {!! $data['board']->content !!}
    </section>
@endsection
