@extends('client.layouts.master')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
      type="text/css"/>
@endsection
@section('content')
<div class="section-shaped my-0 skew-separator skew-mini">
    <div class="page-header page-header-small header-filter">
        <div class="page-header-image" style="background-image: url('/client/static/img/pages/georgie.jpg');">
        </div>
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Register</h1>
                        <p class="text-lead text-white">That’s the main thing people are controlled by! Thoughts - their
                            perception of themselves!</p>
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
                    <h2 class="text-uppercase text-center">General information</h2>
                </header>
                <hr class="line-primary ">
                <br>
                <form method="POST" action="/post-registration" id="register">
                    @csrf
                    <div class="row ">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="firstname"> Name</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input id="firstname" name="firstname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="#email">Email</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input id="email" name="email" class="form-control" type="email"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="#phone">Phone</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input id="phone" name="phone" class="form-control" type="email"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels">Gender</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <select class="form-control" data-trigger="" name="sex" id="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="birthdate">Birthday</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input type="date" class="form-control" id="birthdate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="#password">Password</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input id="password" name="password" class="form-control" type="password"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-md-2 col-md-2 align-self-center">
                            <label class="labels" for="#confirm_password">Confirm Password</label>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="form-group">
                                <input id="confirm_password" name="confirm_password" class="form-control"
                                       type="password" required="required">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                    <button class="btn btn-outline-primary" type="reset">Cancel</button>
                </div>
            </div>
            </form>
        </div>
</section>
<!--modal-->
<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
     aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-scrollable' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h3 class='modal-title' id='exampleModalLabel'>Supplier information</h3>
            </div>
            <div class='modal-body'>
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

                <button class='btn btn-primary btn-save-change'  type='submit'>Save changes</button>
            </div>

        </div>
    </div>
<!--end modal-->
@endsection
@section('script')
<link rel="stylesheet" href="/client/static/css/custom.css">
<script>
    $(document).ready(function(){
        $('#myModal').modal('toggle');
    });

    jQuery(document).ready(function () {
        //Password

    $('#register').validate({
        rules: {
            firstname: "required",
        },
        messages: {
            firstname: "Please enter your firstname",
        },

        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `invalid-feedback` class to the error element
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                // error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        },
    })
</script>
@endsection
