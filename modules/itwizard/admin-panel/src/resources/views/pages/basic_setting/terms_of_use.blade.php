@extends('Admin::layouts.blank')
@section('content')
<div class="container" style="background-color:rgba(192,192,192,0.3);"> 
    <div class="card-body" style="width:800px; margin:0 auto;">
        <h1> {{ __('Terms of Use') }} </h1>
        <div>
            {!! $site_info->terms_of_condition !!}    
        </div>
    </div>
</div>
@endsection
