@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Pop-up management') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title"> {{ __('Pop-up management generation code') }} </div>
            </div>
            <div class="float-end">
                <button class="btn mb-3 btn-outline-secondary"> {{ __('Copy generation code') }} </button>
            </div>
            <div class="clearfix"></div>
            <div class="bg-light p-3">
                <code id="code"> </code>
            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary">
        <div class="card-body">
            <div class="card-title"> {{ __('Application example') }} </div>

            <div class="bg-light p-3 mb-3">
                <code id="code2"> </code>
            </div>
            <div class="p-3">
                <div class="card-title"> {{ __('Checklist') }} </div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li>
                               This is the function to manage the pop-up of the
                                        homepage.

                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Insert the above popup creation code into the
                                        first page of the website (master.blade.php).</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Pop-up contents can be written in Basic Settings
                                        &gt; Pop-up Management.</span>
                                </span>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#code').text(' @ include("layouts.popup_manage")')
        $('#code2').text('@ include("layouts.popup_manage")')
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@stop
