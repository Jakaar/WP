<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="/client/product/style.css">
    <link rel="stylesheet" href="/client/static/css/main.css">
    <title>SOCOMO</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@200;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+KR:wght@200;400&family=Poppins:wght@600&display=swap');

        .product {
            margin-bottom: 30px;

        }
        .slick-prev {

            position: absolute;
            z-index: 99;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background: none;
            border: 0;
            color: white;
            content: "<";
            top:0;
            left:0;
        }

        .slick-next {

            position: absolute;
            z-index: 99;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background: none;
            border: 0;
            color: white;
            top:0;
            right:0;

        }
        .slick-arrow{
            font-size: 32px;
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

     
    </style>
</head>
<style>


</style>

<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="p-logo d-inline-block">
                        <img class="" src="/client/static/img/img.png" width="24" height="25" alt="">
                        <a href="/customer/product" class="logo-text">SOCOMO</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @php
            $data = $model->other_photos;
            $search = ['"', '[', ']', "'"];
            $parsed = explode(',', str_replace($search, '', $data));
        @endphp

        <div class="row product_img">
            <div class="col-lg-5 p-0">

                <div class=" sliders">
                    <img class="product-img rounded" src="{{ $model->main_img }}" alt=""
                        style="height: 550px; object-fit:cover">
                    @for ($i = 0; $i < count($parsed); $i++)
                        <img class="rounded" src="{{ $parsed[$i] }}" alt=""
                            style="height: 550px; object-fit:cover; object-position: center">
                    @endfor
                </div>

            </div>
            <div class="col-lg-7 p-0">
                <div class="product_detail">
                    <p class="p_title">{{ $model->name }}</p>
                    <div class="d-inline">
                        <p> <b> {{ __('Category') }} </b> : {{ $model->category->name }} </p>
                        <p> <b> {{ __('Manufacturer') }} </b> : {{ $model->manufacturer }} </p>
                        <p> <b> {{ __('Country of Origin') }} </b> : {{ $model->created_county }} </p>
                        <p> <b> {{ __('Brand') }} </b> : {{ $model->brand_name }} </p>
                        <p> <b> {{ __('Model') }} </b> : {{ $model->model_name }} </p>

                    </div>
                    <p class="p_price">₩ {{ number_format($model->price) }}</p>
                    {{-- <div class="custom_select mb-100">
                            <div class="select_item selected plus"><img src="/client/product/upload/circle_yellow.png" alt=""> Hues of
                                Orange</div>
                        </div>
                        <div class="custom_select_box">
                            <div class="select_item"><img src="/client/product/upload/circle_yellow.png" alt="">Hues of Orange
                            </div>
                            <div class="select_item"><img src="/client/product/upload/circle_pink.png" alt="">Modern White</div>
                            <div class="select_item"><img src="/client/product/upload/circle_black.png" alt="">Monochrome Black
                            </div>
                        </div> --}}
                    <button class="buy_btn">{{ __('BUY NOW') }}</button>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12 p-0">
                <div class="custom_line">
                    <img src="/client/product/upload/v.png" alt="">
                    {{ __('Details') }}
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-150">
            <div class="col-lg-12 ">
                {!! $model->description !!}
            </div>
         
            {{-- @for ($i = 0; $i < count($parsed); $i++)
                <div class="col-12">
                    <img class="w-100 mb-3" src="{{ $parsed[$i] }}" alt="" style="object-fit: cover;">
                </div>
            @endfor --}}
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
        $(".custom_select").on("click", function() {
            $(".custom_select_box").toggle();
            $(this).find(".select_item").toggleClass("minus plus");
        });
        $(".custom_select_box .select_item").on("click", function() {
            $(".custom_select .selected").html($(this).html());
        });
    </script>
    <script>
        $('.sliders').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 1000,
            fade: true,
            autoplay : true,
            autoplaySpeed : 2000,
            cssEase: 'linear',
            prevArrow : '<button type="button" class="slick-prev"> < </button>',
            nextArrow: '<button type="button" class="slick-next"> > </button>'
        });
    </script>
</body>

</html>
