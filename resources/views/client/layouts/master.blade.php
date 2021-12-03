<!doctype html>
<html lang="{{Session::get('locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="reconnect" href="https://fonts.googleapis.com">
    <link rel="reconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @foreach($static['css'] as $css)
        <link rel="stylesheet" href="{{$css->file_absolute_path}}">
    @endforeach

    <title>DEVELOPING | ++-++ </title>
    <style>
        body {
            -ms-overflow-style: none; /* for Internet Explorer, Edge */
            scrollbar-width: none; /* for Firefox */
            overflow-y: scroll;

        }
        body::-webkit-scrollbar {
            display: none; /* for Chrome, Safari, and Opera */
        }
    </style>
</head>
    <body class="sections-page">
        @include('client.includes.header')
            <div class="wrapper">
                @yield('content')
            </div>
        @include('client.includes.footer')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{asset('/client/static/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('/client/static/js/core/popper.min.js')}}"></script>
        <script src="{{asset('/client/static/js/core/bootstrap.min.js')}}"></script>
        @yield('script')
    </body>
</html>
