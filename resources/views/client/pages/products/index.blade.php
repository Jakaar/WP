<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <link rel="stylesheet" href="{{asset('client/static/css/main.css')}}">
    <title>SOCOMO</title>
</head>
<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="p-logo d-inline-block">
                        <img class="" src="{{asset('client/static/img/img.png')}}" width="24" height="25" alt="">
                        <a href="" class="logo-text">SOCOMO</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="sliders" style="margin-top: 17px;">
        <div>
            <div class="" style="background-image: url('{{asset('client/static/img/banner.png')}}');" >
                <div class="slider-content" style="height: 585px">
                    <h1 class="slider-text">Product</h1>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        incidunt minus mollitia saepe ut velit voluptatibus!</p>
                </div>
            </div>
        </div>
        <div>
            <div class="" style="background-image: url('{{asset('client/static/img/banner.png')}}');" >
                <div class="" style="height: 585px">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid section-2">
        <div class="row">
            <div class="col-12">
                <h1 class="title">Chair & sofa</h1>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="sliders-2">
                    <div>
                        <div class="content">
                            <img src="{{asset('client/static/img/img_1.png')}}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="content">
                            <img src="{{asset('client/static/img/img_2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="search-section">
                    <form>
                        <span class="text-muted">Category</span>
                        <div class="d-flex mt-2">
                            <div class="">
                                <select name="" id="" class="form-control-custom">
                                    <option value="" selected>All</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="" style="margin-left: 25px;">
                                <select name="" id="" class="form-control-custom">
                                    <option value="" selected>Interior chair</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                    </form>
{{--                    <form class="pro-filter">--}}
{{--                        <div class="d-flex justify-content-between align-items-end">--}}
{{--                            <div class="select-form d-flex mt-4">--}}
{{--                                --}}
{{--                                <div class="form-group mr-4">--}}
{{--                                    <label for="usr">category</label>--}}
{{--                                    <select class="form-control" id="sel1">--}}
{{--                                        <option>All</option>--}}
{{--                                        <option>2</option>--}}
{{--                                        <option>3</option>--}}
{{--                                        <option>4</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                                <div class="form-group mr-4">--}}
{{--                                    <label for="usr"></label>--}}
{{--                                    <select class="form-control" id="sel2">--}}
{{--                                        <option>Korea, Republic of</option>--}}
{{--                                        <option>2</option>--}}
{{--                                        <option>3</option>--}}
{{--                                        <option>4</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="usr"></label>--}}
{{--                                <select class="form-control" id="sel3">--}}
{{--                                    <option>Seoul</option>--}}
{{--                                    <option>2</option>--}}
{{--                                    <option>3</option>--}}
{{--                                    <option>4</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.sliders').slick({
                dots: false,
                arrows : false,
                infinite: true,
                speed: 1000,
                fade: true,
                cssEase: 'linear'
            });
            $('.sliders-2').slick({
                dots: false,
                arrows : false,
                infinite: true,
                speed: 1000,
                fade: true,
                cssEase: 'linear'
            });


            /*   $('.slider2').slick({
                   slidesToShow: 3,
                   slidesToScroll: 1,
                   dots: false,
                   arrows : false,
                   infinite: true,
                   speed: 1000,
                   fade: true,
                   cssEase: 'linear',
                   responsive: [
                       {
                           breakpoint: 1199,
                           settings: {
                               slidesToShow: 2,
                               slidesToScroll: 1
                           }
                       },
                       {
                           breakpoint: 768,
                           settings: {
                               slidesToShow: 1,
                               slidesToScroll: 1
                           }
                       }
                   ]

               });

               */
        });
    </script>
</body>
</html>
