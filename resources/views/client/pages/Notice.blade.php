@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <section class="blogs-2">
        <div class="container-fluid mt-5">
            <div class="row mb-md-5">
                <div class="col-md-8 mx-auto">
                    <h3 class="display-3 text-center">{!! $t->translateText($title->name) !!}</h3>
                    <p class="lead text-center">{!! $t->translateText($title->description) !!}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt--5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    {{--                                <label for="">{{__('Search')}}</label>--}}
                                    <select name="type" id="" class="form-control">
                                        <option value="all" selected>{{__('All')}}</option>
                                        <option value="title">{{__('Title')}}</option>
                                        <option value="content">{{__('Content')}}</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="value" class="form-control" placeholder="{{__('Search')}}">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-outline-success">{{__('Search')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
{{--                    <div class="card-header">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1">--}}
{{--                                #--}}
{{--                            </div>--}}
{{--                            <div class="col-9">--}}
{{--                                {{__('Title')}}--}}
{{--                            </div>--}}
{{--                            <div class="col-2">--}}
{{--                                {{__('Date')}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card-body">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table text-left">
                                    <thead class="bg-gradient-lighter">
                                    <tr>
                                        <th scope="col" class="text-left text-dark">#</th>
                                        <th scope="col" class="text-left text-dark">{{__('Title')}}</th>
                                        <th scope="col" class="text-left text-dark">{{__('Date')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Notice as $key=>$item)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td class="col-10"><a href="/Notice/Single/{{$item->id}}" class="btn btn-link text-default btn-sm">{{$item->title}}</a></td>
                                                <td class="text-right">
                                                    {!! \Carbon\Carbon::make($item->created_at)->format('Y-m-d')!!}
                                                    <span class="small text-muted">{{\Carbon\Carbon::make($item->created_at)->diffForHumans()}}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="float-right">
                                    {{$Notice->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
