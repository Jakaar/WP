@extends('Admin::layouts.blank')
@section('content')
<div class="container" style="background-color:rgba(192,192,192,0.3);"> 
    <div class="card-body" style="width:800px; margin:0 auto;">
        <h1> {{ __('Privacy Policy') }} </h1>
        <div>
            {!! $site_info->privacy !!}
        </div>
    </div>
</div>


@endsection
