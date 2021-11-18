<!doctype html>
<html lang="{{ Session::get('locale') }}">

<head>
    <meta charset="utf-8">
    <!-- Primary Meta Tags -->
    <title>wPanel | Sibizi</title>
    <meta name="title" content="wPanel | Sibizi">
    <meta name="description" content="sibizi developing CMS">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ asset('/login') }}">
    <meta property="og:title" content="wPanel | Sibizi">
    <meta property="og:description" content="sibizi developing CMS">
    <meta property="og:image" content="{{ asset('aPanel/imgs/login_desc.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ asset('/login') }}">
    <meta property="twitter:title" content="wPanel | Sibizi">
    <meta property="twitter:description" content="sibizi developing CMS">
    <meta property="twitter:image" content="{{ asset('aPanel/imgs/login_desc.png') }}">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ env('APP_NAME') . ' | ' . env('ORG_NAME') }}</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500">
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
    <link rel="stylesheet" href="{{ asset('aPanel/css/admin.css') }}">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 g-0 row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-arielle-smile"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{ asset('aPanel/imgs/login3.jpg') }}');">
                                        </div>
                                        <div class="slider-content">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{ asset('aPanel/imgs/citydark.jpg') }}');">
                                        </div>
                                        <div class="slider-content">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-arielle-smile"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{ asset('aPanel/imgs/login2.jpg') }}');">
                                        </div>
                                        <div class="slider-content">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{ asset('aPanel/imgs/citynights.jpg') }}');">
                                        </div>
                                        <div class="slider-content">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark"
                                        tabindex="-1">
                                        <div class="slide-img-bg"
                                            style="background-image: url('{{ asset('aPanel/imgs/login1.jpg') }}');">
                                        </div>
                                        <div class="slider-content">
                                            {{-- <h3>Scalable, Modular, Consistent</h3> --}}
                                            {{-- <p> --}}
                                            {{-- Easily exclude the components you don't require. Lightweight, consistent --}}
                                            {{-- Bootstrap based styles across all elements and components --}}
                                            {{-- </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex justify-content-center align-items-center col-md-12 col-lg-8">
                        <div
                            class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9 card p-5 card-btm-border card-shadow-primary border-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img-fluid" style="width: 250px;">
                                        <img src="{{ asset('aPanel/imgs/logo.png') }}" class="img-fluid"
                                            alt="Logo">
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="dropdown d-flex justify-content-end">
                                        <a class="dot-btn-wrapper dropstart" aria-haspopup="true" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="rm-pointers dropdown-menu dropdown-menu-right " data-popper-placement="top-start"
                                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -46px);">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                                    <div class="menu-header-image opacity-05"
                                                        style="background-image: url('images/dropdown-header/city2.jpg');">
                                                    </div>
                                                    <div class="menu-header-content text-center text-white">
                                                        <h6 class="menu-header-subtitle mt-0">
                                                            {{ __('Choose Language') }} </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            @foreach ($data['langs'] as $langs)
                                                <button type="button" tabindex="0" class="dropdown-item">
                                                    <span
                                                        class="me-3 opacity-8 flag large @if ($langs->country_code == 'en') US @else {{ strtoupper($langs->country_code) }} @endif "></span>
                                                    {{ $langs->country }}
                                                </button>
                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h4 class="mb-0">
                                <span class="d-block">{{ __('Welcome back') }}, </span>
                                <span>{{ __('Please sign in to your account.') }}</span>
                            </h4>
                            <h6 class="mt-3">{{ __('No account?') }}
                                <a href="javascript:void(0);" class="text-primary">{{ __('Sign up now') }}</a>
                            </h6>
                            <div class="divider row"></div>

                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12">
                                    <form method="POST" action="{{ route('login') }}" class=""
                                        autocomplete="off">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="position-relative mb-3">
                                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                                <input name="email" id="email" value="{{ old('email') }}"
                                                    placeholder="{{ __('Email here') }}" type="email"
                                                    class="form-control @error('email') is-invalid @enderror">
                                            </div>
                                            @error('email')
                                                <div class="card p-2 mb-2 alert-danger fade show" role="alert">
                                                    <b>{{ __('Authentication Failed') }}</b>
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative mb-3">
                                                <label for="password"
                                                    class="form-label">{{ __('Password') }}</label>
                                                <input name="password" id="password"
                                                    placeholder="{{ __('Password here') }}" type="password"
                                                    class="form-control @error('password') is-invalid @enderror">
                                            </div>
                                            @error('password')
                                                <div class="card p-2 mb-2 alert-danger fade show" role="alert">
                                                    <b>{{ __($message) }}</b>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="position-relative form-check mb-3">
                                            <input name="remember" id="remember" type="checkbox"
                                                class="form-check-input">
                                            <label for="remember"
                                                class="form-label form-check-label">{{ __('Keep me logged in') }}</label>
                                        </div>
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn-lg btn btn-link">{{ __('Recover Password') }}</a>
                                                <button class="btn btn-outline-info btn-lg"
                                                    type="submit">{{ __('Login') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 col-12 col-md-12 col-sm-12">
                                    <div class="col-md-12">
                                        @if ($errors->all())
                                            <!--                                            <button data-swal-template="#my-template">-->
                                            <!--                                                Trigger modal-->
                                            <!--                                            </button>-->
                                        @endif
                                        <h5 class="card-title text-center">{{ __('Social Login') }}</h5>
                                        <div class="row mt-3 justify-content-md-center">
                                            <div class="col-lg-12 col-xl-6 col-12 mb-3">
                                                <div class="google-btn bg-google">
                                                    <div class="google-icon-wrapper ">
                                                        <img class="google-icon"
                                                            src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                                                            alt="" />
                                                    </div>
                                                    <a href="{{ route('google.login') }}"
                                                        class="btn-text "><b>Sign in with Google</b></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-xl-6 col-12 mb-3">
                                                <div class="google-btn bg-naver">
                                                    <div class="google-icon-wrapper ">
                                                        <img class="google-icon"
                                                            src="{{ asset('aPanel/imgs/naver_green.svg') }}"
                                                            alt="" />
                                                    </div>
                                                    <a href="#" class="btn-text"><b
                                                            class="roboto">{{ __('Sign in with Naver') }}</b></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-xl-12 col-12 mb-3">
                                                <div class="google-btn bg-kakao">
                                                    <div class="google-icon-wrapper ">
                                                        <img class="google-icon "
                                                            src="{{ asset('aPanel/imgs/KakaoTalk_logo.svg') }}"
                                                            alt="" />
                                                    </div>
                                                    <a href="javascript:kakaoLogin();" class="btn-text text-dark"><b
                                                            class="roboto">{{ __('Sign in with Kakao') }}</b></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" id="kakao">
        <input type="hidden" id="email" name="email">
        <input type="hidden" id="name" name="name">
        <input type="hidden" id="avatar" name="avatar">
    </form>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{ asset('aPanel/js/main.js') }}"></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
    <script>
        window.Kakao.init("1266f5594789e7ea0dfc2bc963ac71c7")

        function kakaoLogin() {
            window.Kakao.Auth.login({
                scope: 'profile_image,account_email,gender',
                success: function(authObj) {
                    window.Kakao.API.request({
                        url: '/v2/user/me',
                        success: res => {
                            const kakao_account = res.kakao_account;
                            const test = kakao_account
                            Axios.post('/loginKakao', test)
                                .then((resp) => {
                                    location.replace("/cms");
                                }).catch((err) => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: '{{ __('Oops...') }}',
                                        text: '{{ __('You are not registered user') }}'
                                    })
                                })
                        }
                    });
                }
            });
        }
    </script>

    @if (session('msg'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ __('Oops...') }}',
                text: '{{ __('You are not registered user') }}'
            })
        </script>
    @endif

</body>

</html>
