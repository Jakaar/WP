
<!doctype html>
<html lang="en">
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
                                <div class="img-fluid" style="width: 250px;">
                                    <img src="{{asset('aPanel/imgs/wpanel_colored.png')}}" class="img-fluid" alt="Logo">
                                    <hr>
                                </div>
                                <h4 class="mb-0">
                                    <span class="d-block">{{ __('Welcome back') }}, </span>
                                    <span>{{__('Please sign in to your account.')}}</span>
                                </h4>
                                <h6 class="mt-3">{{__('No account?') }}
                                    <a href="javascript:void(0);" class="text-primary">{{__('Sign up now')}}</a>
                                </h6>
                                <div class="divider row"></div>
                                <div>
                                    <form method="POST" action="{{ route('login') }}" class="" autocomplete="off">
                                        @csrf
                                        <div class="">
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                                    <input name="email" id="email" value="{{ old('email') }}"
                                                        placeholder="{{__('Email here')}}" type="email" class="form-control">

                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    <div class="alert alert-danger fade show" role="alert">
                                                        {{ __('Email is required') }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="password" class="form-label">{{__('Password')}}</label>
                                                    <input name="password" id="password"
                                                        placeholder="{{__('Password here')}}" type="password" class="form-control">
                                                </div>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ __($message) }}</strong>
                                                    </span>
                                                    <div class="alert alert-danger fade show" role="alert">
                                                        {{ __($message)}}
                                                    </div>
                                                @enderror
                                            </div>
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
