@extends('client.layouts.master')
@section('content')
<style>
    .skew-separator.skew-mini:after {
        background-color: #7AA092!important;
    }
</style>
    <div class="section-shaped my-0 skew-separator skew-mini">
        <div class="page-header page-header-small header-filter">
            <div class="page-header-image" style="background-image: url('/client/static/img/pages/georgie.jpg');">
            </div>
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            {{-- <h1 class="text-white">{{__('Sign Up')}}</h1>
                            <p class="text-lead text-white">{{__('That’s the main thing people are controlled by! Thoughts - their
                                perception of themselves!')}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="upper">
        <div class="bg-secondary">
            <div class="col-lg-5 col-md-8 mx-auto bg-white card mb-0"
                style="position: relative;    top: -100px;    z-index: 2;">
                <div class="section">
                    <header>
                        <h2 class="text-uppercase text-center">{{__('General information')}}</h2>
                    </header>
                    <hr class="line-primary ">
                    <br>
                    <form method="POST" action="/post-registration" id="register">
                        @csrf
                        <div class="row ">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="firstname"> {{__('Full Name')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input id="firstname" name="firstname" class="form-control" type="text" required autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="#email">{{__('Email Adress')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control" type="email" required autocomplete="off">
                                    <small for="" id="email_error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="#phone">{{__('Phone Number')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input id="phone" name="phone" class="form-control" type="text" required autocomplete="off">
                                    <small for="" id="phone_error" class="text-danger"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels">{{__('Gender')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <select class="form-control" data-trigger="" name="sex" id="sex" required>
                                        <option value="male">{{__('Male')}}</option>
                                        <option value="female">{{__('Female')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="birthdate">{{__('Birthday')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="birthdate" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="#password">{{__('Password')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input id="password" name="password" class="form-control" type="password" required="required" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-md-2 col-md-2 align-self-center">
                                <label class="labels" for="#confirm_password">{{__('Confirm Password')}}</label>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="form-group">
                                    <input id="confirm_password" name="confirm_password" class="form-control" type="password" required="required" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary" type="button" id="r_changes">{{__('Sign Up Now')}}</button>
                        <button class="btn btn-outline-primary" type="reset">{{__('Cancel')}}</button>
                    </div>
                </div>
            </div>
    </section>
    <!--modal-->
    <div class='modal fade' id='myModal' data-bs-backdrop="static" data-bs-keyboard="false" tabindex='-1' role='dialog'
        aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg modal-dialog-scrollable' role='document'>
            <div class='modal-content'>
                <div class="modal-header " style="align-self: center">
                    <h3 class='modal-title text-center' id='exampleModalLabel'>{{__('Terms of Service, Privacy Policy Agree')}}</h3>
                </div>
                <div class='modal-body'>
                    <div class="tacbox options col-lg-12">
                        <input class="checkbox1" id="terms" type="checkbox" name="checkbox1" class="wizard-required"
                            value="0">
 <label for="terms"><a href="#">{{__('Terms and Conditions.')}}</a><span class="text-warning">({{__('required')}})</span></label>
                        <div
                            style="height:120px; width:100%; border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            {{ $site_info->terms_of_condition ?? '' }}
                        </div>
                    </div>
                    <div class="tacbox options mt-3 col-lg-12">
                        <input class="checkbox2" id="privacy" type="checkbox" name="checkbox2" class="wizard-required"
                            value="0">
                        <label for="privacy"> <a href="#">{{__('Privacy Policy.')}}</a><span
                                class="text-warning">({{__('required')}})</span></label>
                        <div
                            style="height:120px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                            {{ $site_info->privacy ?? '' }}
                        </div>
                    </div>

                    <button class="btn mt-3 btn-primary"  style="float: right" id="saveChanges">{{__('Confirm')}}</button>
                    <a class="btn mt-3 btn-danger btn-save-change mr-2" style="float: right" id="cancel" href="/">{{__('Cancel')}}</a>
                </div>

            </div>
        </div>
        <!--end modal-->
    @endsection
    @section('script')
        <link rel="stylesheet" href="/client/static/css/custom.css">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
                integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('#myModal').modal({
                    backdrop: 'static',
                    keyboard: false,
                    show: true
                });

                $('#register').validate({
                    rules: {
                        firstname: {
                            required:true,
                            maxlength:50
                    },
                        email: {
                            required:true
                        },
                        phone:{
                            required:true,
                            maxlength:20
                        },
                        gender:{
                            required:true
                        },
                        birthday:{
                            required:true
                        },
                        password:{
                            required:true,

                        },
                        confirm_password:{
                            required:true,
                            equalTo:"#password"
                        }
                    },
                    messages: {
                        firstname: {
                           required: "{{ __('Please enter your firstname') }}",
                           maxlength: "{{ __('Name is too long') }} "
                    },
                        email:{
                            required: "Please enter your email"
                    },
                        phone:{
                            required : "Please enter your phone",
                            maxlength: "Phone number is too long"
                    },
                        gender:{
                            required: "Please enter your gender"
                    },
                        birthday:{
                            required: "Please enter your birthday",

                    },
                        confirm_password:{
                            required: "Password must be filled",
                            equalTo: "Password not matching"
                        }

                },
                    errorElement: "em",
                    errorPlacement: function(error, element) {
                        // Add the `invalid-feedback` class to the error element
                        error.addClass("invalid-feedback");
                        if (element.prop("type") === "checkbox") {
                            error.insertAfter(element.next("label"));
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                });

                $('#r_changes').click(function() {
                    const check = $('#register').valid();
                    let data = {
                        phone: $('#phone').val(),
                        email: $('#email').val(),
                    }
                    $.ajax({
                        url: '/userCheck',
                        type: "get",
                        data: data,
                        success: function(response) {
                            $('#email_error').html('')
                            $('#phone_error').html('')
                            if(response.msg){
                                $('#register').submit()
                            }
                                $('#email_error').html(response.email_msg)
                                $('#phone_error').html(response.phone_msg)
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    })
                })

                $('#saveChanges').click(function() {
                    if (terms.checked == true && privacy.checked == true) {
                        $('#myModal').modal('hide')
                    }
                })

            });
        </script>
    @endsection
