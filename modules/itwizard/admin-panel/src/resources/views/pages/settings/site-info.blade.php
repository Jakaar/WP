@extends('Admin::layouts.master')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Company information setting</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="">
            <div class="mb-3">
                <label class="form-label" for="firstname">Site name</label>
                <div>
                    <input type="text" class="form-control"
                           id="firstname" name="firstname" placeholder="First name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="lastname">Company Name</label>
                <div>
                    <input type="text" class="form-control"
                           id="lastname" name="lastname" placeholder="Last name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Business addresss</label>
                <div>
                    <input type="text" class="form-control"
                           id="username" name="username" placeholder="Username">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <div>
                    <input type="text" class="form-control"
                           id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control"
                       id="password" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label class="form-label" for="confirm_password">Confirm password</label>
                <div>
                    <input type="password" class="form-control" id="confirm_password"
                           name="confirm_password" placeholder="Confirm password">
                </div>
            </div>
            <div class="mb-3">
                <div>
                    <div class="form-check">
                        <input type="checkbox" id="agree" name="agree"
                               value="agree"  class="form-check-input">
                        <label class="form-label form-check-label">Please agree to our policy</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
            </div>
        </form>
    </div>
</div>
@endsection
