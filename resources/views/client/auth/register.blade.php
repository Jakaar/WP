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
@endsection
@section('script')
<link rel="stylesheet" href="/client/static/css/custom.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js"
        type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet"
      type="text/css"/>
<script>
    $(document).ready(function () {
        $('#smartwizard').smartWizard({
            selected: 0, // Initial selected step, 0 = first step
            theme: 'arrows', // theme for the wizard, related css need to include for other than default theme
            justified: true, // Nav menu justification. true/false
            darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
            autoAdjustHeight: true, // Automatically adjust content height
            cycleSteps: false, // Allows to cycle the navigation of steps
            backButtonSupport: true, // Enable the back button support
            enableURLhash: true, // Enable selection of the step based on url hash
            transition: {
                animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                speed: '400', // Transion animation speed
                easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
            },
            toolbarSettings: {
                toolbarPosition: 'bottom', // none, top, bottom, both
                toolbarButtonPosition: 'right', // left, right, center
                showNextButton: true, // show/hide a Next button
                showPreviousButton: true, // show/hide a Previous button
                toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
            },
            anchorSettings: {
                anchorClickable: true, // Enable/Disable anchor navigation
                enableAllAnchors: false, // Activates all anchors clickable all times
                markDoneStep: true, // Add done state on navigation
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            },
            keyboardSettings: {
                keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
                keyLeft: [37], // Left key code
                keyRight: [39] // Right key code
            },
            lang: { // Language variables for button
                next: 'Next',
                previous: 'Previous'
            },
            disabledSteps: [], // Array Steps disabled
            errorSteps: [], // Highlight step with errors
            hiddenSteps: [] // Hidden steps
        });
    });
</script>
<script>
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
