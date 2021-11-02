@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Banner Management') }}
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
                <div class="card-title">
                    {{ __('Banner management generation code') }} </div>
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

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            {{-- <div class="card-title"> {{__('Application example')}} </div> --}}

            {{-- <div class="bg-light p-3 mb-3">
                        <code id="code2"> </code>
                    </div> --}}
            <div class="p-3 border-left-kant">
                <div class="card-title"> {{ __('Checklist') }} </div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Provides the ability to manage the main
                                        image or
                                        banner of the homepage by the administrator.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">If you want to edit/delete a specific
                                        image on
                                        the site or add an image, use banner management.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">You can add/modify/delete banners in the
                                        banner
                                        management menu.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Change the </span>
                                    <span style="vertical-align: inherit;">banner management </span>
                                </span><b>
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;">[banner number]</span>
                                    </span>
                                </b>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;"> name to the number in the banner list
                                        below.
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </li>

            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">
            <div class="card-title">
                Number of banners: 1

            </div>
            <table class="table table-striped table-hover text-center" id="BasicTable">

                <thead>
                    <tr>
                        <th><span style="vertical-align: inherit;"><span
                                    style="vertical-align: inherit;">number</span></span></th>
                        <th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">master
                                    code</span></span></th>
                        <th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">group
                                    name</span></span></th>
                        <th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">banner
                                    form</span></span></th>
                        <th><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Whether or
                                    not to use</span></span></th>
                        <th><span style="vertical-align: inherit;"><span
                                    style="vertical-align: inherit;">function</span></span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>mainBanner</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">mainBanner</span>
                            </span>
                        </td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Vertical</span>
                            </span>
                        </td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">used</span>
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#code').text('@ include("layouts.blade")')
        $('#code2').text('<body><jsp:include page="/module/popup" flush="true" /></body>')
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@stop
