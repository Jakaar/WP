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
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                    class="btn-shadow me-3 btn btn-info" id="reload_page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block">
                    <button id="policyData" type="button"
                        class="btn btn-success">{{ __('Save') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="col-lg-12">
                <div class="mb-3 mt-3">
                    {{-- {{ dd(env('APP_URL')) }} --}}
                    <div class="card-title mb-3">{{__('Privacy Policy')}}</div>
                    <div class="contentEditor">
                        <textarea name="editor2" id="editor2">{!! $site_info->privacy !!}</textarea>
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
            CKEDITOR.replace('editor2', {
                height: '500px',
            });
            $('#policyData').click(function() {
                const data = {
                    privacydata: CKEDITOR.instances.editor2.getData()
                }
                console.log(data);
                Axios.post('/api/settings/siteinfo/privacyUpdate', data).then((resp) => {
                    Swal.fire({
                            title: "{{ __('Success') }}",
                            icon: 'success',
                            showConfirmButton: false,
                        })

                        setInterval(() => {
                            window.location.reload()
                        }, 1000);
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
