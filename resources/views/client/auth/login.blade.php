
@extends('client.layouts.master')
@section('content')
<div class="section-shaped my-0 skew-separator skew-mini">
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('/client/static/img/unsplashs.jpg');">
        </div>
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="upper bg-default">
    <div class="container ">
        <div class="col-lg-5 col-md-8 mx-auto p-3">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center mb-3"><small>Login with</small></div>
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="/client/static/img/kakao.png"></span>
                            <span class="btn-inner--text">Kakao</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="/client/static/img/google.svg"></span>
                            <span class="btn-inner--text">Google</span>
                        </a>
                    </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <small>Or login with credentials</small>
                    </div>
                    <form method="POST" action="{{route('customers.login')}}">
<!--                        {{ csrf_field() }}-->
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" name="password">
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin2"><span class="text-default opacity-5">Remember me</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Login</button>
                        </div>
                    </form>
                    <div class="text-center text-muted mb-4">
                        <small><b>Do you have an account ?
                            <a href="{{route('register.form')}}">Sign up now</a></b>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
