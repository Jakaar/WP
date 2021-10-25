@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Member registration setting') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="card-title"> {{__('Checklist')}} <span class="text-info">({{__('You can complete all member-related pages just by inserting the generation code.')}})</span></div>
            <div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul class="ml10">
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Skin location: /admin/member/skin.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">You can select basic items or add arbitrarily for
                                        membership registration items.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">ID/Password Search: ID and password search are
                                        displayed
                                        on one page.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">ID Search: Only ID search is displayed on the
                                        page.
                                    </span>
                                    <span style="vertical-align: inherit;">/ Forgot password: Only password search is
                                        displayed
                                        on
                                        the page. </span>
                                </span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> Join the membership </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('layout.membership')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('login page') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.login')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>

                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Find ID/Password') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.reset_password')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Find ID') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.find_id')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>

                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Find Password') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.password')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>

                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Edit member information') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.profile')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>

                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Withdrawal') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.Withdrawal')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>

                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Login Box') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.loginbox')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Membership page') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Member information page') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Login page') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('ID/Password page') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Go to page after logout') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="" class="text-danger justify-content-center d-flex align-items-center"
                        style="height: 100%;"> When using the intro page, the address of the moving page is set to prevent
                        the user from
                        going back to the intro after logging out.
                    </label>
                </div>
            </div>
            <div class="divider"></div>
            <div class="card-title"> {{__('top menu')}}</div>
            <small class="mb-3"> Image setting (If no image is set, it will be displayed as text.) </small>
            <div class="row mt-3">
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{__('Login/Logout')}} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('layout.membership')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Membership/My Page') }} </label>
                    <div class="input-group">
                        <input type="text" class="form-control disabled" value="@ include('pages.auth.membership')">
                        <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Login Image') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Logout Image') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('Signup Image') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="" class="form-label fw-bold"> {{ __('My Page Image') }} </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://localhost:8000/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="card-title"> Find ID/Password </div>
            <small> Select input information </small>
            <div class="row">
                <div class="my-3 col-lg-6">
                    <label for="" class="form-label fw-bold"> checking way </label>
                    <input id="chkToggle1" type="checkbox" data-toggle="toggle" checked>
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="" class="form-label"> Theme </label>
                    <select name="" id="" class="form-control">
                        <option value=""> Basic theme </option>
                    </select>
                </div>
                <div class="divider"></div>
                <table class="table table-striped table-hover text-center">
                    <tbody>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">ID</span>
                                </span>
                            </th>
                            <td class="text-left"><input type="hidden" name="iDFlag" value="1">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">used</span>
                                </span>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">password</span>
                                </span>
                            </th>
                            <td class="text-left"><input type="hidden" name="passwordFlag" value="1">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">used</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">name</span>
                                </span>
                            </th>
                            <td class="text-left"><input type="hidden" name="nameFlag" value="1">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">used</span>
                                </span>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">e-mail</span>
                                </span>
                            </th>
                            <td class="text-left"><input type="hidden" name="emailFlag" value="1">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">used</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Social Security Number</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="juminFlag" value="1" class="input_type_check">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;">used &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="juminFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">address</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="addrFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="addrFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Phone number</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="phoneFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="phoneFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">cellphone</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="mobileTelFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="mobileTelFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">company phone</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" class="input_type_check" id="comPhoneFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="comPhoneFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">recommender</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="recommendFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="recommendFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Whether to receive mail</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="emailReceiveFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="emailReceiveFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">SMS reception status</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="sMSReceiveFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="sMSReceiveFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">nickname</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" class="input_type_check" id="nickNameFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="nickNameFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">member icon</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="iconFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="iconFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Spam check</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="faxFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="faxFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">member photo</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="photoFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="photoFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">home page</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="homepageFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="homepageFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">date of birth</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="birthdayFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="birthdayFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">job</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="jobFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="jobFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Interests</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="interestFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="interestFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">hobby</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="hobbyFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="hobbyFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Education</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="educationFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="educationFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">About Me</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="selfIntroFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="selfIntroFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Marital Status</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="marriageFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="marriageFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">wedding anniversary</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="marriageDateFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="marriageDateFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">monthly average income</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="incomeFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="incomeFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">owning a car</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="carFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="carFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Additional item 01</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="etc1Flag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="etc1Flag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Additional item 02</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="etc2Flag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="etc2Flag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Additional item 03</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="etc3Flag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="etc3Flag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Additional item 04</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="etc4Flag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="etc4Flag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Additional item 05</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="etc5Flag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="etc5Flag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <!-- -------------------------------------------------------------------- -->
                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Store company name</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeNameFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeNameFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Business Number </span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeNumFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeNumFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>

                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Representative name</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeOwnerNameFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeOwnerNameFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Representative contact information</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeOwnerTelFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeOwnerTelFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>

                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Contact Name</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeStaffNameFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeStaffNameFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Contact person</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeStaffTelFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeStaffTelFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>

                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">mail order number</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeObNumFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeObNumFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">business condition</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeBTypeFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeBTypeFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>

                        </tr>
                        <tr>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Sectors</span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeBcTypeFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeBcTypeFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>
                            <th class="text-center ">
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">bill email </span>
                                </span>
                            </th>
                            <td class="text-left">
                                <label><input type="checkbox" id="officeTaxMailFlag" value="1">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> used&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </span>
                                </label>
                                <label><input type="checkbox" id="officeTaxMailFlag" value="2">
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;"> Required</span>
                                    </span>
                                </label>
                            </td>

                        </tr>
                    </tbody>
                </table>
                <div class="divider"></div>
                <div class="card-title">
                    Additional item
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th> Item Name </th>
                            <th> Item Attribute </th>
                            <th> Item Size </th>
                            <th> Item Number of detailed items </th>
                            <th> Details </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        @for($a = 0; $a < 5; $a++)
                        <tr>
                            <td> Additional item {{$a}} </td>
                            <td> <input type="text" class="form-control"> </td>
                            <td>
                                <select name="etc1Type" class="etcType form-control form-control-sm">
                                    <option value="text">text</option>
                                    <option value="select">select</option>
                                    <option value="radio">radio</option>
                                    <option value="checkbox">checkbox</option>
                                    <option value="textarea">textarea</option>
                                    <option value="file">file</option>
                                    <option value="datepicker">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">date (single force)</span>
                                        </span>
                                    </option>
                                    <option value="dtimepick">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">year month date</span>
                                        </span>
                                    </option>
                                    <option value="birthdate">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">date of birth</span>
                                        </span>
                                    </option>
                                    <option value="mobileno">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">Phone number</span>
                                        </span>
                                    </option>
                                    <option value="address">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">Find address</span>
                                        </span>
                                    </option>
                                    <option value="email">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">e-mail</span>
                                        </span>
                                    </option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" >
                            </td>
                            <td>
                                <select name="" id="" class="form-control">
                                    @for($i=1; $i < 21; $i++)
                                    <option value="{{$i}}"> {{$i}} </option>
                                    @endfor
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        @endfor
                    </tbody>
                    </tbody>
                </table>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="card-title">
                    {{__('Other')}}
                </div>
                <table class="table table-striped table-hover text-center">
                    <tr>
                        <td> {{__('Job')}} </td>
                        <td> <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> </td>
                    </tr>
                    <tr>
                        <td> {{__('Education')}} </td>
                        <td> <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> </td>
                    </tr>
                    <tr>
                        <td> {{__('Monthly average income')}} </td>
                        <td> <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> </td>
                    </tr>
                    <tr>
                        <td> {{__('Intrest')}} </td>
                        <td> <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> </td>
                    </tr>
                </table>
            </div>
            <div class="divider"></div>
            <div class="col-lg-12">
                <div class="text-center">
                    <button type="button" onclick="alert('Success')" class="btn btn-primary"> {{__('Save Changes')}} </button>
                    <button type="button" class="btn btn-secondary"> {{__('Close')}} </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.disabled').attr('disabled', 'true')
        })
    </script>
@endsection
