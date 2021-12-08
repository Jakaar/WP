<!doctype html>
<html lang="{{ Session::get('locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}

    @foreach ($static['css'] as $css)
        <link rel="stylesheet" href="{{ $css->file_absolute_path }}">
    @endforeach

    <title>DEVELOPING | ++-++ </title>
    <style>
        body {
            -ms-overflow-style: none;
            /* for Internet Explorer, Edge */
            scrollbar-width: none;
            /* for Firefox */
            overflow-y: scroll;

        }

        body::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }

    </style>
</head>

<body class="sections-page">
    @include('client.includes.header')
    <div class="wrapper">
        @yield('content')
    </div>
    @include('client.includes.footer')


    <script src="{{ asset('/client/static/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/client/static/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/client/static/js/core/bootstrap.min.js') }}"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <style>
        .gg {
            position: relative;
        }

        .gg:hover .dropdown-menu {
            display: block;
            opacity: 1 !important;
            pointer-events: auto;
            visibility: visible;
            transform: translate(0);
            animation: none;
        }

        .gg .dropdown-menu:before {
                background: #fff;
                box-shadow: none;
                content: "";
                display: block;
                height: 16px;
                width: 16px;
                left: 5px;
                position: absolute;
                bottom: 100%;
                transform: rotate(-45deg) translateY(1rem);
                z-index: -5;
                border-radius: 0.2rem;

        }
        .gg:hover .dropdown-menu a{
            transition: .2s;

        }
        .gg:hover .dropdown-menu  a:hover{
            transform: scale(1.1, 1.1);
            transition: .2s;
            border-radius: 5px;
        }

    </style>
    @yield('script')
    <script>
        $(document).ready(function (){
            $(document).bind('keypress', function(event) {
                if( event.which === 65 && event.shiftKey ) {
                    location.href = '/cms'
                }
            });
        })
    </script>
</body>

</html>
