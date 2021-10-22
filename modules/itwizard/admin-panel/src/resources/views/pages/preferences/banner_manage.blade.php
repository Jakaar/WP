@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

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
                        <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                            <i class="pe-7s-refresh-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="float-start">
                        <div class="card-title">
                            {{ __('Banner management generation code') }} </div>
                    </div>
                    <div class="float-end">
                        <button class="btn mb-3 btn-secondary"> {{ __('Copy generation code') }} </button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="bg-light p-3">
                        <code id="code"> </code>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    {{-- <div class="card-title"> {{__('Application example')}} </div> --}}

                    {{-- <div class="bg-light p-3 mb-3">
                        <code id="code2"> </code>
                    </div> --}}
                    <div class="p-3 border-left-kant">
                        <div class="card-title"> {{ __('Checklist') }} </div>
                        <ul>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Provides the ability to manage the main image or
                                        banner of the homepage by the administrator.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">If you want to edit/delete a specific image on
                                        the site or add an image, use banner management.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">You can add/modify/delete banners in the banner
                                        management menu.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Change the </font>
                                    <font style="vertical-align: inherit;">banner management </font>
                                </font><b>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">[banner number]</font>
                                    </font>
                                </b>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> name to the number in the banner list below.
                                    </font>
                                </font>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Number of banners: 1

                    </div>
                    <table class="table table-bordered text-center">

                        <thead >
                            <tr>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">number</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">master code</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">group name</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">banner form</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Whether or not to use</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">function</font></font></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>mainBanner</td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">mainBanner</font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Vertical</font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">used</font>
                                    </font>
                                </td>
                                <td>
                                    <span id="spanCode_2" class="d-none">
                                        &lt;jsp:include page="/module/banner" flush="true"&gt;
                                        &lt;jsp:param name="bseq" value="2" /&gt;
                                        &lt;/jsp:include&gt;
                                    </span>
                                    <button class="btn btn-secondary"> {{ __('Copy generation code') }} </button>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        .border-left-kant {
            padding: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #eee;
            border-left-width: .25rem;
            border-radius: .25rem;
            border-left-color: #e92626;
            background-color: white;
            position: relative;
            z-index: 1;
        }

    </style>
@endsection
@section('script')
    <script>
        $('#code').text(
            '<jsp:include page="/module/banner" flush="true"><jsp:param name="bseq" value="[배너번호]" /></jsp:include>')
        $('#code2').text('<body><jsp:include page="/module/popup" flush="true" /></body>')
    </script>
@stop
