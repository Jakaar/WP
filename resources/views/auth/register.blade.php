<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>wPanel | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">

        <link rel="stylesheet" href="{{asset('aPanel/css/admin.css')}}">
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 g-0 row">
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div class="app-logo"></div>
                                <h4>
                                    <div>{{__('Welcome')}}</div>
                                    <span>{{__('It only takes a')}}
                                        <span class="text-success">{{__('few seconds')}}</span>{{__('to create your account')}}</span>
                                </h4>
                                <div>
                                    <form class="" method="POST" action="{{ route('register') }}" autocomplete="off">
                                        @csrf
                                        <div class="">
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="email" class="form-label">
                                                        <span class="text-danger">*</span> {{__('Email')}}
                                                    </label>
                                                    <input name="email" id="email" value="{{ old('email') }}" 
                                                        placeholder="{{__('Email here')}}" type="email" class="form-control">
                                                </div>
                                                @error('email')
                                                    <div class="alert alert-danger fade show" role="alert">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="name" class="form-label">{{__('Name')}}</label>
                                                    <input name="text" id="name" name="name" value="{{ old('name') }}" 
                                                        placeholder="{{__('Name here')}}" type="text" class="form-control">
                                                </div>
                                                @error('name')
                                                    <div class="alert alert-danger fade show" role="alert">
                                                        {{-- {{__($message)}} --}}
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="password" class="form-label">
                                                        <span class="text-danger">*</span> {{__('Password')}}
                                                    </label>
                                                    <input name="password" id="password"
                                                        placeholder="{{__('Password here')}}" type="password" class="form-control">
                                                </div>
                                                @error('name')
                                                    <div class="alert alert-danger fade show" role="alert">
                                                        {{-- {{__($message)}} --}}
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative mb-3">
                                                    <label for="password-confirm" class="form-label">
                                                        <span class="text-danger">*</span> {{__('Repeat Password')}}
                                                    </label>
                                                    <input name="password_confirmation" id="password-confirm"
                                                        placeholder="{{__('Repeat Password here')}}" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 position-relative form-check">
                                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-label form-check-label">{{__('Terms and Conditions')}}
                                                <a href="">{{__('Accept our')}}</a>.
                                            </label>
                                        </div>
                                        <div class="mt-4 d-flex align-items-center">
                                            <h5 class="mb-0">{{__('Already have an account?')}}
                                                <a href="javascript:void(0);" class="text-primary">{{__('Sign in')}}</a>
                                            </h5>
                                            <div class="ms-auto">
                                                <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">{{__('Create Account')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xs-none col-lg-5">
                            <div class="slider-light">
                                <div class="slick-slider slick-initialized">
                                    <div>
                                        <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('images/originals/citynights.jpg');"></div>
                                            <div class="slider-content">
                                                <h3>Scalable, Modular, Consistent</h3>
                                                <p>
                                                    Easily exclude the components you don't require. Lightweight, consistent
                                                    Bootstrap based styles across all elements and components
                                                </p>
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
        <script type="text/javascript" src="{{asset('aPanel/js/main.js')}}"></script>
    </body>
</html>