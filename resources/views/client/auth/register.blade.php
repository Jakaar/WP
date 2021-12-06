@extends('client.layouts.master')
@section('content')
<div class="section-shaped my-0 skew-separator skew-mini">
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('/client/static/img/mohamed.jpg');">
        </div>
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">{{__('Welcome')}}!</h1>
                        <span class="text-white">{{__('It only takes a')}}
                        <span class="text-success">{{__('few seconds')}}</span> {{__('to create your account')}}</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="upper bg-default">
    <div class="container ">
        <div class="col-lg-12 col-md-12 mx-auto p-3">
            <div class="card mt-3 mb-3">
                <div class="card-header text-center"><b>{{ __('Register') }}</b></div>

                <div class="card-body row">
                    <!--                    <div class="col-lg-4 col-md-5">-->
                    <!--                        <div class="wizard-content-left d-flex justify-content-center align-items-center">-->
                    <!--                            <h1>Create Your Customer Account</h1>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="col-lg-12 col-md-5">
                        <div class="form-wizard">
                            <form method="POST" action="/post-registration" id="customer_register">
                                <!--                                {{ csrf_field() }}-->
                                @csrf
                                <div class="form-wizard-header">
                                    <p>Fill all form field to go next step</p>
                                    <ul class="list-unstyled form-wizard-steps clearfix">
                                        <li class="active text-white"><span>1</span></li>
                                        <li><span>2</span></li>
                                        <li><span>3</span></li>
                                        <li><span>4</span></li>
                                    </ul>
                                </div>
                                <fieldset class="wizard-fieldset show">
                                    <div>
                                        <div class="tacbox options col-lg-12">
                                            <input class="checkbox1" id="terms" type="checkbox" class="wizard-required" value="0" onchange="checked(this, 'f_agree2')"/>
                                            <label for="checkbox"> I agree to these <a href="#">Terms and
                                                    Conditions</a><span class="text-warning">(required)</span></label>
                                            <div
                                                style="height:120px; width:100%; border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                                                {{$site_info->terms_of_service_login}}
                                            </div>
                                        </div>
                                        <div class="tacbox options mt-3 col-lg-12">
                                            <input class="checkbox2" id="privacy" type="checkbox" class="wizard-required" value="0" onchange="checked('f_agree', this)"/>
                                            <label for="checkbox"> I agree to these <a href="#">Privacy</a><span
                                                    class="text-warning">(required)</span></label>
                                            <div
                                                style="height:120px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                                                {{$site_info->privacy_policy_login}}
                                            </div>
                                        </div>
                                        <div class="tacbox options mt-3 col-lg-12">
                                            <input class="checkbox" id="" type="checkbox"
                                                   class="wizard-required"/>
                                            <label for="checkbox"> I agree to these <a href="#">{{ __('Location') }}</a></label>
                                            <div
                                                style="height:120px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                                                {{$site_info->location}}
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <button type="button" href="javascript:;" id="registerButton"
                                               class="delete form-wizard-next-btn float-right btn-shadow btn-wide float-end btn-pill btn-hover-shine btn btn-primary"
                                               disabled="disabled">
                                                {{ __('Next') }}
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <h5>{{ __('Personal Information') }}</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="firstname"
                                               name="firstname">
                                        <label for="firstname" class="wizard-form-text-label">{{ __('First Name') }}*</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="lastname"
                                               name="lastname">
                                        <label for="lastname" class="wizard-form-text-label">{{ __('Last Name') }}*</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control air-datepicker" name="birthdate" autocomplete="off" id="birthdate" >
                                        <label for="birthdate" class="wizard-form-text-label">{{ __('Birthdate') }}</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group">
                                        {{ __('Gender') }}
                                        <div class="wizard-form-radio">
                                            <input name="sex" id="radio1" type="radio" value="male">
                                            <label for="radio1">{{ __('Male') }}</label>
                                        </div>
                                        <div class="wizard-form-radio">
                                            <input name="sex" id="radio2" type="radio" value="female">
                                            <label for="radio2">{{ __('Female') }}</label>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;"
                                           class="form-wizard-previous-btn float-left btn-pill btn-hover-shine btn">{{ __('Previous') }}</a>
                                        <a href="javascript:;"
                                           class="form-wizard-next-btn float-right btn-pill btn-hover-shine btn btn-primary">{{ __('Next') }}</a>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <h5>{{ __('Account information') }}</h5>
                                    <div class="form-group">
                                        <input type="email" class="form-control wizard-required" id="email"
                                               name="email">
                                        <label for="email" class="wizard-form-text-label">{{ __('Email') }}</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control wizard-required" id="phone"
                                               name="phone">
                                        <label for="phone" class="wizard-form-text-label">{{ __('Phone') }}</label>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="password" name="password">
                                        <label for="pwd" class="wizard-form-text-label">{{ __('Password') }}*</label>
                                        <div class="wizard-form-error"></div>
                                        <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="confirm_password" name="confirm_password">
                                        <label for="confirm_password" class="wizard-form-text-label">{{__('Confirm Password *') }}</label>
                                        <div class="wizard-form-error"></div>
                                        <span class="mt-3" id='message'></span>
                                    </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;"
                                           class="form-wizard-previous-btn float-left btn-pill btn-hover-shine btn">{{ __('Previous') }}</a>
                                        <a href="javascript:;"
                                           class="form-wizard-next-btn float-right btn-pill btn-hover-shine btn btn-primary">{{ __('Next') }}</a>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <h5 class="text-center">{{__('Submit to finish your registration') }}</h5>
                                    <input type="hidden" id="user_type" name="user_type" value="customer">
                                    <a href="javascript:;"
                                       class="form-wizard-previous-btn float-left btn-pill btn-hover-shine btn btn-primary">{{ __('Previous') }}</a>
                                    <button type="submit" style="cursor:pointer"
                                            class="form-wizard-submit float-right btn-pill btn-hover-shine btn btn-primary">
                                        Submit
                                    </button>
                        </div>
                        </fieldset>
                        </form>
                    </div>
                </div>
                <!--                                <form method="POST" action="/post-registration">-->
                <!--                                    @csrf-->
                <!--                                    <div class="form-group">-->
                <!--                                        <label for="firstname">Firstname:</label>-->
                <!--                                        <input type="text" class="form-control" id="firstname" name="firstname">-->
                <!--                                    </div>-->
                <!--                                    <div class="form-group">-->
                <!--                                        <label for="lastname">Lastname:</label>-->
                <!--                                        <input type="text" class="form-control" id="lastname" name="lastname">-->
                <!--                                    </div>-->
                <!--                                    <div class="form-group">-->
                <!--                                        <label for="email">Email:</label>-->
                <!--                                        <input type="email" class="form-control" id="email" name="email">-->
                <!--                                    </div>-->
                <!---->
                <!--                                    <div class="form-group">-->
                <!--                                        <label for="password">Password:</label>-->
                <!--                                        <input type="password" class="form-control" id="password" name="password">-->
                <!--                                    </div>-->
                <!---->
                <!--                                    <div class="form-group text-center">-->
                <!--                                        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>-->
                <!--                                    </div>-->
                <!--                                </form>-->

            </div>

        </div>
    </div>
    </div>
</section>
<section class="wizard-section">
    <div class="row no-gutters">


    </div>
</section>
@endsection
@section('script')
<link rel="stylesheet" href="/client/static/css/custom.css">
<script>
    jQuery(document).ready(function () {
        //Password
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });



        //validation


        var  chk1 = document.getElementById('terms');

        chk1.addEventListener('click', checked, false);

        var  chk2 = document.getElementById('privacy');

        chk2.addEventListener('click', checked, false);

        function checked(){

            if(chk1.checked && chk2.checked) {
                document.getElementById('registerButton').removeAttribute('disabled');
            } else {
                document.getElementById('registerButton').setAttribute('disabled','disabled');
            }

        }

        // document.getElementById('registerButton').disabled = true;
        // click on next button
        jQuery('.form-wizard-next-btn').click(function () {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function () {
                var thisValue = jQuery(this).val();

                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if (nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show", "400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active', "400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                jQuery(document).find('.wizard-fieldset').each(function () {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function () {
                            if (jQuery(this).attr('data-attr') == formAtrr) {
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({
                                    "left": position.left,
                                    "width": innerWidth
                                });
                            } else {
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            }
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function () {
            var counter = parseInt(jQuery(".wizard-counter").text());
            var prev = jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show", "400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active', "400");
            jQuery(document).find('.wizard-fieldset').each(function () {
                if (jQuery(this).hasClass('show')) {
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function () {
                        if (jQuery(this).attr('data-attr') == formAtrr) {
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({
                                "left": position.left,
                                "width": innerWidth
                            });
                        } else {
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click", ".form-wizard .form-wizard-submit", function () {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function () {
                var thisValue = jQuery(this).val();
                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                } else {
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });

        jQuery(".form-control").on('focus', function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().addClass("focus-input");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function () {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });


    });
    jQuery('#customer_register').validate({
        rules: {
            firstname : {
                required:true,
                minlength:3,
                maxlength:30,
            },
        },
        messages: {
            firstname: {
                required:"enter firstname",
                minlength:"least 3",
                maxlength:"30"
            }
        }
    });
</script>
@endsection
