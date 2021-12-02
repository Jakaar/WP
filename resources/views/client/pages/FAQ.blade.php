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
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link w-100 text-primary text-left" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                How do I order?
                                                <i class="ni ni-bold-down float-right pt-1"></i>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse{{$item->id}}" class="collapse @if($key === 0) show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body opacity-8">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
