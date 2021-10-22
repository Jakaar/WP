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
                            {{ __('Form Mail') }}
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
                            {{ __('Form mail management generation code
                            ') }} </div>
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
                                    <font style="vertical-align: inherit;">It provides a convenient function that allows you
                                        to freely create form mail regardless of form.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">skin location : /</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Change the </font>
                                    <font style="vertical-align: inherit;">form mail management </font>
                                </font><b>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">[form mail number]</font>
                                    </font>
                                </b>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> name to the </font><b>
                                        <font style="vertical-align: inherit;">number</font>
                                    </b>
                                    <font style="vertical-align: inherit;"> in the form mail list below.</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The contents of the created form mail can be
                                        checked in the Admin &gt; Form Mail Management menu.</font>
                                </font>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Total number of form mails: 3
                    </div>
                    <table class="table table-bordered text-center">

                        <thead>
                            <tr>
                                <th>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">number</font>
                                    </font>
                                </th>
                                <th>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">form mail name</font>
                                    </font>
                                </th>
                                <th>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">function</font>
                                    </font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Development Quote Inquiry</font>
                                    </font>
                                </td>
                                <td>
                                    <span id="spanCode_6" class="d-none">
                                        &lt;jsp:include page="/module/form" flush="true"&gt;
                                        &lt;jsp:param name="fseq" value="6" /&gt;
                                        &lt;/jsp:include&gt;
                                    </span>
                                    <button class="btn btn-secondary"> {{ __('Copy generation code') }} </button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Personnel Outsourcing Inquiries</font>
                                    </font>
                                </td>
                                <td>
                                    <span id="spanCode_7" class="d-none">
                                        &lt;jsp:include page="/module/form" flush="true"&gt;
                                        &lt;jsp:param name="fseq" value="7" /&gt;
                                        &lt;/jsp:include&gt;
                                    </span>
                                    <button class="btn btn-secondary"> {{ __('Copy generation code') }} </button>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Project outsourcing inquiry</font>
                                    </font>
                                </td>
                                <td>
                                    <span id="spanCode_8" class="d-none">
                                        &lt;jsp:include page="/module/form" flush="true"&gt;
                                        &lt;jsp:param name="fseq" value="8" /&gt;
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
            ' <jsp:include page="/module/form" flush="true"><jsp:param name="fseq" value="[폼메일번호]" /></jsp:include>')
        $('#code2').text('<body><jsp:include page="/module/popup" flush="true" /></body>')
    </script>
@stop
