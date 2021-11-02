@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div>
                {{__('User Security Settings')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <button class="btn btn-success CreateBoard">
                {{__('Save')}}
            </button>
        </div>
    </div>
</div>

<div class="card mb-3">
    <h5 class="card-header">Enable Google reCAPTCHA</h5>

    <div class="card-body position-relative">

        <ul class="todo-list-wrapper list-group list-group-flush">
            <div class="todo-indicator bg-info"></div>

            <li class="list-group-item">You can set whether to use reCAPTCHA, which is used for user login.</li>
            <li class="list-group-item">If you do not use this feature, you may become very vulnerable to abnormal requests such as hacking and infinite login attempts. It is recommended to use the function.</li>
        </ul>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">User Login</h5>
        <form class="">
            <fieldset class="position-relative mb-3">
                <div class="position-relative form-check">
                    <label class="form-label form-check-label">
                        <input name="radio1" type="radio" class="form-check-input">
                        Use
                    </label>
                </div>
                <div class="position-relative form-check">
                    <label class="form-label form-check-label">
                        <input name="radio1" type="radio" class="form-check-input">
                        Not Used
                    </label>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
