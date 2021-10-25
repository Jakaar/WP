@extends('Admin::layouts.master')
@section('content')
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
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">This is a function that analyzes the visitors of
                                        the website.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">This is the part that prepares information that
                                        is easy to lose and uses it for later site management.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Insert the above log analysis code into the first
                                        line of the website's first page (index.htm, index.html, index.jsp).</font>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">The analysis details can be checked in Connection
                                        Statistics &gt; Visitor Analysis, Connection Path Analysis.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">For a framed site, insert it at the top of the
                                        frame page.</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
@endsection
@section('script')
    <script>
        $('#code').text(' <jsp:include page="/module/connect" flush="true" />')
    </script>
@stop
