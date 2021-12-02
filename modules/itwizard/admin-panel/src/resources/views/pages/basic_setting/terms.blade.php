@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Terms of Use') }}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                    class="btn-shadow me-3 btn btn-info" id="reload_page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block">
                    <button id="termsData" type="button"
                        class="btn-wide btn-shadow btn btn-outline-success">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-lg-12">
            <div class="mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title  mb-3">{{__('Terms of Use')}}</div>
                        <div class="card-text  mb-3">URL: {{  url()->full() }}_of_use</div>
                        <div class="contentEditor">
                            <textarea name="editor1" id="editor1">{!! $site_info->terms_of_condition !!}</textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@section('script')
    <script src="{{ asset('aPanel/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let editors = [];
            CKEDITOR.replace('editor1');
            $('#termsData').click(function() {
                const data = {
                    termsdata: CKEDITOR.instances.editor1.getData()
                }

                console.log(data);
                Axios.post('/api/settings/siteinfo/termsUpdate', data).then((resp) => {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener("mouseenter", Swal.stopTimer);
                            toast.addEventListener("mouseleave", Swal.resumeTimer);
                        },
                    });
                    Toast.fire({
                        icon: "success",
                        title: resp.data.msg,
                    });
                     window.location.reload()
                }).catch((err) => {
                    console.log(err);
                });
            })
            $('#reload_page').click(function() {
                location.reload(true);
            });
        })
    </script>
@endsection
@endsection
