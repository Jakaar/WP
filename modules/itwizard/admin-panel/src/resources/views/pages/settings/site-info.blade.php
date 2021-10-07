@extends('Admin::layouts.master')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Company information setting</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="">
            <div class="mb-3">
                <label class="form-label" for="sitename"><strong>Site name</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="sitename" name="sitename" placeholder="Site name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="companyname"><strong>Company Name</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="companyname" name="companyname" placeholder="Company name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="address"><strong>Business address</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="address" name="address" placeholder="Bussiness address">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="personalmanager"><strong>Personal information manager</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="personalmanager" name="personalmanager" placeholder="Personal information">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="registernumber"><strong>Company Regitration number</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="registernumber" name="registernumber" placeholder="Registration number">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="phonenumber"><strong>Phone number</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="phonenumber" name="phonenumber" placeholder="Phone">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="fax"><strong>Fax number</strong></label>
                <div>
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email"><strong>Representative email</strong></label>
                <div>
                    <input type="text" class="form-control"
                           id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="copyright"><strong>Copyright</strong></label>
                <input type="" class="form-control" id="copyright" name="copyright" placeholder="Copyright © wpanel. All rights reserved.">
            </div>
            <div class="position-relative row mb-3">
                <label for="headerlogo" class="form-label col-sm-2 col-form-label"><strong>Header logo file</strong></label>
                <div class="col-sm-10">
                    <input name="file" id="exampleFile" type="file" class="">
                    <!--                    <small class="form-text text-muted">Click browse to choose logo-->
                    <!--                    </small>-->
                </div>
            </div>
            <div class="position-relative row mb-3">
                <label for="footerlogo" class="form-label col-sm-2 col-form-label"><strong>Footer logo file</strong></label>
                <div class="col-sm-10">
                    <input name="file" id="exampleFile" type="file" class="">
                    <!--                    <small class="form-text text-muted">Click browse to choose logo-->
                    <!--                    </small>-->
                </div>
            </div><div class="position-relative row mb-3">
                <label for="adminlogo" class="form-label col-sm-2 col-form-label"><strong>Admin header logo</strong></label>
                <div class="col-sm-10">
                    <input name="file" id="exampleFile" type="file" class="">
                    <!--                    <small class="form-text text-muted">Click browse to choose logo-->
                    <!--                    </small>-->
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="terms"><strong>Terms of Use</strong></label>
                <div>
                   <textarea  name="address" class="form-control" placeholder=""  rows="6"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="privacy"><strong>Privacy statement</strong></label>
                <div>
                    <textarea  class="form-control" id="confirm_password" name="confirm_password" placeholder="" rows="6"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="rejection"><strong>Rejection of unauthorized collection of e-mail addresses</strong></label>
                <div>
                    <textarea type="" class="form-control" id="confirm_password" name="confirm_password" placeholder="" rows="6"></textarea>
                </div>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary" name="save" value="save">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
