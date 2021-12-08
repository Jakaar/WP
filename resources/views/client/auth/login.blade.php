
@extends('client.layouts.master')
@section('content')
<style>
    .skew-separator.skew-mini:after {
        background-color: #7AA092!important;
    }
</style>
<div class="section-shaped my-0 skew-separator skew-mini">
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('/client/static/img/sections/unsplashs.jpg');">
        </div>
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">{{__('Welcome!')}}</h1>
                        {{-- <p class="text-lead text-white">{{__('Use these awesome forms to login or create new account in your project for free.')}}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="upper"  style="background-color: #7AA092!important;">
    <div class="container ">
        <div class="col-lg-5 col-md-8 mx-auto p-3" style="top: -200px; z-index: 2" >
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-5">
                    <div class="text-muted text-center mb-3"><small>{{__('Login with')}}</small></div>
                    <div class="btn-wrapper text-center">
<!--                        <a href="#" class="btn btn-neutral btn-icon">-->
<!--                            <span class="btn-inner--icon"><img src="/client/static/img/kakao.png"></span>-->
<!--                            <span class="btn-inner--text">Kakao</span>-->
<!--                        </a>-->
                        <a href="javascript:kakaoLogin();" class="btn-text text-dark btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="/client/static/img/kakao.png"></span>
                            <span class="btn-inner--text">{{__('Kakao')}}</span>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="/client/static/img/google.svg"></span>
                            <span class="btn-inner--text">{{__('Google')}}</span>
                        </a>
                    </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        {{-- <small>Or login with credentials</small> --}}
                    </div>
                    <form method="POST" action="{{route('customers.login')}}">
<!--                        {{ csrf_field() }}-->
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{__('Email')}}" type="email" name="email" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="{{__('Password')}}" type="password" name="password" autocomplete="off">
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin2"><span class="text-default opacity-5">{{__('Remember me')}}</span></label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{__('Login')}}</button>
                        </div>
                    </form>
                    <div class="text-center text-muted mb-4">
                        <small><b>{{__('Do you have an account ?')}}
                            <a href="{{route('register.form')}}">{{__('Sign up now')}}</a></b>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.Kakao.init("1266f5594789e7ea0dfc2bc963ac71c7");
    // const axios = require('axios');
    // window.axios = require('axios');
    function kakaoLogin() {
        window.Kakao.Auth.login({
            scope: 'profile_image,account_email,gender',
            success: function(authObj) {
                window.Kakao.API.request({
                    url: '/v2/user/me',
                    success: res => {
                        const kakao_account = res.kakao_account;
                        const test = kakao_account
                        $.ajax({
                            url : '/loginKakao',
                            type: "get",
                            data: test ,
                            success: function (response) {
                                Swal.fire({
                                    title: '{{__('Success!')}}',
                                    text: '{{__('Successfully logged in')}}',
                                    icon: 'success',
                                    showConfirmButton:false,
                                });
                                setInterval(function (){
                                    location.href = '/'
                                }, 1000);

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }
                        })
                    }
                });
            }
        });
    }
</script>
@endsection
