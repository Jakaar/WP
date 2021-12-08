<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <link rel="stylesheet" href="{{ asset('client/static/css/main.css') }}">
    <title>SOCOMO</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@200;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@200;400&family=Poppins:wght@600&display=swap');

        .product {
            margin-bottom: 30px;

        }

        .product .product_img {
            margin-bottom: 10px;
            height: 357px;
            width: 357px;

        }

        .product .product_img img {
            height: 357px;
            width: 357px;
            object-fit: cover;
        }

        .product .product_title {
            color: #000;

            font-family: IBM Plex Sans KR;
            line-height: 35px;
            font-size: 20px;
            font-weight: normal;
            letter-spacing: -0.01em;
        }

        .product .product_price {
            color: darkgray;
            font-size: 14px;
            font-family: IBM Plex Sans KR;
        }

        .footer {
            width: 100%;
            background-color: #333333;
            padding: 60px;
        }

        .footer_title {
            color: #BDBDBD;
            font-weight: bold;
            font-size: 14px;
            line-height: 28px;
            /* font-family: Poppins; */
            font-style: normal;
            font-weight: 600;
            margin-bottom: 18px;
            font-family: 'Poppins';
        }

        .footer_content {
            /* font-family: Spoqa Han Sans Neo; */
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 30px;
            /* or 214% */
            letter-spacing: -0.03em;
            color: #888888;
        }

        .footer_content p {
            padding: 0;
            margin: 0;
        }

        .footer_content .footer_right {
            text-align: right;
        }

        .footer_content .footer_right a {
            text-decoration: none;
        }

        .footer_content .footer_right img {
            margin-left: 10px;
            margin-top: 30px;
        }

        .footer_content .phone {
            font-size: 24px;
            line-height: 28px;
        }

        .product_pagination {
            text-align: center;
            margin-bottom: 120px;
            margin-top: 140px;
            font-size: 20px;
            color: #000;
            font-weight: normal;
            line-height: 26px;

            font-family: IBM Plex Sans KR;
        }

        .product_pagination a {
            color: #000;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="p-logo d-inline-block">
                        <img class="" src="{{ asset('client/static/img/img.png') }}" width="24"
                            height="25" alt="">
                        <a href="" class="logo-text">SOCOMO</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="sliders" style="margin-top: 17px;">
        <div>
            <div class="" style="background-image: url('{{ asset('client/static/img/banner.png') }}');">
                <div class="slider-content" style="height: 585px">
                    <h1 class="slider-text">Product</h1>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        incidunt minus mollitia saepe ut velit voluptatibus!</p>
                </div>
            </div>
        </div>
        <div>
            <div class="" style="background-image: url('{{ asset('client/static/img/banner.png') }}');">
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
                            <img src="{{ asset('client/static/img/img_1.png') }}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="content">
                            <img src="{{ asset('client/static/img/img_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                <div class="search-section">
                    <form>
                        <span class="text-muted">{{ __('Category') }}</span>

                        <div class="d-flex mt-2">
                            <div class="">
                                <form action="">
                                    <select name="category" id="">
                                        <option value=""> All </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if($category->id == Request::input('category')) selected @endif >{{ $category->name }}</option>
                                            @include('client.pages.products._category', ['subcategories' =>
                                            $category->childs,
                                            'parent' => $category->name])

                                        @endforeach
                                    </select>

                                </form>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            @if($products->count() == 0)
                <h5> Product not found  </h5>
            @endif
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="product">
                        <div class="product_img">
                            <a href="/customer/product/{{ $product->sku }}">
                                <img src="{!! $product->main_img !!}">
                            </a>
                        </div>
                        <div class="product_title">
                            {{ $product->name }}
                        </div>
                        <div class="product_price">
                            $ {{ $product->price }}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product_pagination">
                    page <a href="">1</a> of <a href="">20</a> <a href=""> &nbsp; ＞</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_title">
                        Company
                    </div>
                    <div class="footer_content">
                        <p>(주)소코모</p>
                        <p>대표이사 : 소모모 사업자정보확인
                            서울특별시 강남구 봉은사로 207, 7층 (논현동)</p>
                        <p>통신판매업신고번호 : 제2014-서울강남-00395호</p>
                        <p>사업자등록번호 : 105-87-47183</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_title">
                        Customer
                    </div>
                    <div class="footer_content">
                        <p class="phone">1544-9899</p>
                        <p>
                            AM 09:30 - PM 18:30
                        </p>
                        <p>Fax : 02-6499-1221</p>
                        <p>E-mail : service@sibizi.com</p>

                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <div class="footer_content">
                        <p class="footer_right">
                            이용약관
                        </p>
                        <p class="footer_right">
                            개인정보처리방침
                        </p>
                        <p class="footer_right">
                            이메일무단수집거부.
                        </p>
                        <p class="footer_right">
                            <a href=""><img src="{{ url('/apanel/imgs/facebook.png') }}" alt="Image" /></a>
                            <a href=""><img src="{{ url('/apanel/imgs/instagram.png') }}" alt="Image" /> </a>
                            <a href=""><img src="{{ url('/apanel/imgs/youtube.png') }}" alt="Image" /> </a>
                            <a href=""><img src="{{ url('/apanel/imgs/ch.png') }}" alt="Image" /></a>
                        </p>
                        <p class="footer_right">
                            © 2021 Socomo Corp. All rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('select').change(function() {
            $('form').submit()
        })
    </script>
    <script>
        $(function() {
            $('.sliders').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                fade: true,
                cssEase: 'linear'
            });
            $('.sliders-2').slick({
                dots: false,
                arrows: false,
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
