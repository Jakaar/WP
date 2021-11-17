
<!doctype html>
<html lang="{{Session::get('locale')}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{{env('APP_NAME').' | '.env('ORG_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:500">
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
        <link rel="stylesheet" href="{{asset('aPanel/css/admin.css')}}">
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
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-arielle-smile" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{asset('aPanel/imgs/login3.jpg')}}');"></div>
                                            <div class="slider-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{asset('aPanel/imgs/citydark.jpg')}}');"></div>
                                            <div class="slider-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-arielle-smile" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{asset('aPanel/imgs/login2.jpg')}}');"></div>
                                            <div class="slider-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{asset('aPanel/imgs/citynights.jpg')}}');"></div>
                                            <div class="slider-content">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('{{asset('aPanel/imgs/login1.jpg')}}');"></div>
                                            <div class="slider-content">
{{--                                                <h3>Scalable, Modular, Consistent</h3>--}}
{{--                                                <p>--}}
{{--                                                    Easily exclude the components you don't require. Lightweight, consistent--}}
{{--                                                    Bootstrap based styles across all elements and components--}}
{{--                                                </p>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9 card p-5 card-btm-border card-shadow-primary border-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="img-fluid" style="width: 250px;">
                                         <img src="{{asset('aPanel/imgs/logo.png')}}" class="img-fluid" alt="Logo">
                                        <hr>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rm-pointers">
                                            @if(session()->get('locale') == 'en')
                                                <a href="/lang/mn" type="button" class="float-right" style="float:right">
                                                    <span class="icon-wrapper icon-wrapper-alt">
                                                        <span class="icon-wrapper-bg "></span>
                                                        <span class="language-icon opacity-8 flag large  US "></span>
                                                    </span>
                                                </a>
                                            @elseif(session()->get('locale') == 'kr')
                                                 <a href="/lang/en" type="button" class="float-right" style="float:right">
                                                    <span class="icon-wrapper icon-wrapper-alt">
                                                        <span class="icon-wrapper-bg "></span>
                                                        <span class="language-icon opacity-8 flag large  KR "></span>
                                                    </span>
                                                 </a>
                                            @elseif(session()->get('locale') == 'mn')
                                                <a href="/lang/kr" type="button" class="float-right" style="float:right">
                                                    <span class="icon-wrapper icon-wrapper-alt">
                                                        <span class="icon-wrapper-bg "></span>
                                                        <span class="language-icon opacity-8 flag large  MN "></span>
                                                    </span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="d-block">{{ __('Welcome back') }}, </span>
                                    <span>{{__('Please sign in to your account.')}}</span>
                                </h4>
                                <h6 class="mt-3">{{__('No account?') }}
                                    <a href="javascript:void(0);" class="text-primary">{{__('Sign up now')}}</a>
                                </h6>
                                <div class="divider row"></div>

                                <div class="row">
                                    <div class="col-6">
                                        <form method="POST" action="{{ route('login') }}" class="" autocomplete="off">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="position-relative mb-3">
                                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                                    <input name="email" id="email" value="{{ old('email') }}"
                                                           placeholder="{{__('Email here')}}" type="email" class="form-control @error('email') is-invalid @enderror">
                                                </div>
                                                @error('email')
                                                <div class="card p-2 mb-2 alert-danger fade show" role="alert">
                                                    <b>{{ __('Authentication Failed') }}</b>
                                                </div>
                                                @enderror

                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative mb-3">
                                                    <label for="password" class="form-label">{{__('Password')}}</label>
                                                    <input name="password" id="password"
                                                           placeholder="{{__('Password here')}}" type="password" class="form-control @error('password') is-invalid @enderror">
                                                </div>
                                                @error('password')
                                                <div class="card p-2 mb-2 alert-danger fade show" role="alert">
                                                    <b>{{ __($message)}}</b>
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="position-relative form-check mb-3">
                                                <input name="remember" id="remember" type="checkbox" class="form-check-input">
                                                <label for="remember" class="form-label form-check-label">{{__('Keep me logged in')}}</label>
                                            </div>
                                            <div class="divider row"></div>
                                            <div class="d-flex align-items-center">
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0);" class="btn-lg btn btn-link">{{__('Recover Password')}}</a>
                                                    <button class="btn btn-outline-info btn-lg" type="submit">{{__('Login')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-md-12">
                                            @if($errors->all())
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                    </button>
                                                    {{__('You Not Have Access')}}
                                                </div>
                                            @endif
                                            <h5 class="card-title text-center">{{__('Social Login')}}</h5>
                                            <div class="row">
                                                <div class="col-md-8 offset-md-2">
                                                <div class="" href="">
                                                    <a class="w-100  me-2 btn-shadow btn btn-google" href="">
                                                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                                                        <b  class="btn-text roboto">{{__('Sign in with Google')}}</b>
                                                    </a>
                                                </div>
                                                </div>
                                                <div class="col-md-8 offset-md-2">
                                                <div class="">
                                                <a class="h-42 w-100 btn-icon btn btn-shadow btn-success mt-3">
                                                    <img class="naver-icon" width="100" src="{{asset('aPanel/imgs/vectorpaint.svg')}}" alt=""/>
                                                    <b class="naver roboto">{{__('Sign in with Naver')}}</b>
                                                </a>
                                                </div>
                                                </div>
                                                <div class="col-md-8 offset-md-2">
                                                <a class="w-100 mt-3 me-2 btn-icon btn-shadow btn btn-warning">
                                                    <img class="" width="25" src="{{asset('aPanel/imgs/KakaoTalk_logo.svg')}}" alt=""/>
                                                    <b style="color: black roboto">{{__('Sign in with Kakao')}}</b>
                                                </a>
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
        <div class="app-drawer-overlay d-none animated fadeIn"></div>
        <script type="text/javascript" src="{{asset('aPanel/js/main.js')}}"></script>
    </body>
</html>
