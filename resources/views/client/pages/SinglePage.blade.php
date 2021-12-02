@extends('client.layouts.master')
@inject('t','App\Helper\Helper')

@section('content')
        <div class="">
            {!! $t->translateText($SinglePageData->data) !!}
        </div>
@endsection
