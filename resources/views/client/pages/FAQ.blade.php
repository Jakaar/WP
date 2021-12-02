@extends('client.layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
{{--    <div class="main">--}}
        <section>
            <section class="blogs-4 mb--5">
                <div class="container mb--5">
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center">
                            <h2 class="title mb-3 mt-5">Frequently asked question</h2>
                        </div>
                    </div>
                </div>
            </section>
        </section>
{{--    </div>--}}
    <div class="cd-section" id="accordion">
        <div class="accordion-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ml-auto">
                        <div class="accordion" id="accordionExample">
                            @foreach($FAQ as $key=>$item)
                                <div class="card">
                                    <div class="card-header" id="heading{{$item->id}}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                                {!! $t->translateText($item->question) ?? $item->question !!}
                                                <i class="ni ni-bold-down float-right pt-1"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{$item->id}}" class="collapse @if($key === 0) show @endif" aria-labelledby="heading{{$item->id}}" data-parent="#accordionExample">
                                        <div class="card-body opacity-8">
                                            {!! $t->translateText($item->answer) ?? $item->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
