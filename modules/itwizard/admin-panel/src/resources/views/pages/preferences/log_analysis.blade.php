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
                            {{ __('Log Analysis') }}
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
                        <div class="card-title"> {{ __('Log Analysis') }} </div>
                    </div>
                    <div class="float-end">
                        <button class="btn mb-3 btn-secondary"> {{__('Copy generation code')}} </button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="bg-light p-3">
                        <code id="code"> </code>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title"> {{__('Application example')}} </div>

                    <div class=" p-3 border-left-kant">
                        Code should be added near the top of the &lt;head/&gt; tag and before any other scripts or CSS tags
                    </div>
                    <div class="p-3 border-left-kant">
                        <div class="card-title"> Checklist </div>
                        <ul>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">This is a function that analyzes the visitors of
                                        the website.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">This is the part that prepares information that
                                        is easy to lose and uses it for later site management.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Insert the above log analysis code into the first
                                        line of the website's first page (index.htm, index.html, index.jsp).</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The analysis details can be checked in Connection
                                        Statistics &gt; Visitor Analysis, Connection Path Analysis.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">For a framed site, insert it at the top of the
                                        frame page.</font>
                                </font>
                            </li>
                        </ul>
                    </div>
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
        $('#code').text(' <jsp:include page="/module/connect" flush="true" />')
    </script>
@stop
