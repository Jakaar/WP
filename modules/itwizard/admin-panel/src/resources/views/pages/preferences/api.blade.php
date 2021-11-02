@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('API Management') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button type="button" class="btn btn-primary px-5" id="edit"><i class="fa fa-cog"></i> Edit </button>
                <button type="button" class="btn btn-success d-none px-5" id="save"> <i class="fa fa-save"></i> Save Changes </button>
            </div>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-header">
            <div class="text-right">
                It is automatically executed when you enter the information of Naver Log, Google Analytics, Identity
                Verification, and IPIN Verification.
            </div>
        </div>
        <div class="card-body">
            <form action="" class="row">
                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Map </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="a" value="option1">
                        <label class="form-check-label" for="a">Naver</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="b" value="option2">
                        <label class="form-check-label" for="b">Google map</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="c" value="option3">
                        <label class="form-check-label" for="c">Next Map</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Editor </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="d" value="option1">
                        <label class="form-check-label" for="d">CKeditor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="e" value="option2">
                        <label class="form-check-label" for="e">Tiny Editor</label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">Naver log analysis ID</label>
                    <input type="text" class="form-control" placeholder="Naver log analysis ID">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">conversion value</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">join the membership </span>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Put in a shopping cart</span>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Application/Reservation </span>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Posting </span>
                        <input type="text" class="form-control" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="col-lg-12 mb-3">
                    <label for="" class="fw-bold form-label">Google Analytics ID</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">VIEW ID</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">UA</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">identity verification code</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">IPIN verification code</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="" class="fw-bold form-label">IPIN authentication password</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Facebook </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="f" value="option1">
                        <label class="form-check-label" for="f">use</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="g" value="option2">
                        <label class="form-check-label" for="g">not use</label>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Twitter </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="h" value="option1">
                        <label class="form-check-label" for="f">use</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="i" value="option2">
                        <label class="form-check-label" for="g">not use</label>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Kakao </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="j" value="option1">
                        <label class="form-check-label" for="f">use</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="k" value="option2">
                        <label class="form-check-label" for="g">not use</label>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="" class="form-label fw-bold"> Naver Blog </label>
                    <div class="clearfix"></div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="l" value="option1">
                        <label class="form-check-label" for="f">use</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="m" value="option2">
                        <label class="form-check-label" for="g">not use</label>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="col-lg-12 text-center">

                </div>

            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('input').attr('disabled', true)
            $('#edit').click(function() {
                $(this).addClass('d-none')
                $('#save').removeClass('d-none')
                $('input').removeAttr('disabled')
            })
            $('#save').click(function() {
                $(this).addClass('d-none')
                $('#save').addClass('d-none')
                $('#edit').removeClass('d-none')
                $('input').attr('disabled', true)
                alert('success')
            })
        })
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@endsection
