@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Privacy Policy') }}
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-lg-6">
            <div class="mb-3 mt-3">
                {{-- {{ dd(env('APP_URL')) }} --}}
                <div class="card-title mb-3">Privacy Policy</div>
                <div class="card-text mb-3">
                   <div> URL: {{  url()->full() }}/policy </div> 
                </div>
                <div class="contentEditor">
                    <textarea name="editor2" id="editor2">{!! $site_info->privacy !!}</textarea>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="float-end">
                <button id="policyData" type="button"
                    class="btn-wide btn-shadow btn btn-outline-success mt-2">{{ __('Save') }}</button>
            </div>
        </div>
    </div>

@section('script')
    <script src="{{ asset('aPanel/js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let editors = [];
            CKEDITOR.replace('editor2');
            $('#policyData').click(function() {
                const data = {
                    privacydata: CKEDITOR.instances.editor2.getData()
                }
                console.log(data);
                Axios.post('/api/settings/siteinfo/privacyUpdate', data).then((resp) => {
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
                    //  window.location.reload()
                }).catch((err) => {
                    console.log(err);
                });
            })
        })
    </script>
@endsection
@endsection
