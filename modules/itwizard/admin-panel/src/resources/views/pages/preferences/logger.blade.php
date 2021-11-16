@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display2 icon-gradient bg-tempting-azure"></i>
                </div>
                <div>
                    {{ __('Logger') }}
                    <div class="page-title-subheading">{{ __('Administrator logger') }}</div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info refresh-page">
                    <i class="pe-7s-refresh-2"></i>
                </button>

            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary">
        <div class="card-body">
            <table class="table table-striped table-hover" id="BasicTable">
                <thead>
                    <tr>
                        <td> № </td>
                        <td> {{ __('Subject') }} </td>
                        {{-- <td> {{ __('URL') }} </td> --}}
                        <td> {{ __('Method') }} </td>
                        <td> {{ __('IP') }} </td>
                        <td> {{ __('User Agent') }} </td>
                        <td> {{ __('User') }} </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $key => $log)
                    <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$log->subject}} </td>
                        {{-- <td> {{$log->url}} </td> --}}
                        <td>
                            @switch($log->method)
                                @case('POST')
                                <div class="badge bg-primary"> {{$log->method}} </div>  
                                    @break
                                @case('GET')
                                <div class="badge bg-info"> {{$log->method}} </div>  
                                    @break
                                @default
                                  <div class="badge bg-primary"> {{$log->method}} </div>  
                            @endswitch 
                           
                        </td>
                        <td> {{$log->ip}} </td>
                        <td> {{$log->agent}} </td>
                        <td> {{$log->user->firstname}}  {{$log->user->lastname}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
