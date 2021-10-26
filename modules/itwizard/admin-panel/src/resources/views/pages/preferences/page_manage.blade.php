@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Page Management') }}
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

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title">
                    {{ __('Page management generation code') }} </div>
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
                                    <span style="vertical-align: inherit;">Provides the ability to modify the
                                        contents of
                                        the homepage by the administrator.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">If you want to edit the page directly
                                        from the
                                        administrator after production is complete, use the page management
                                        function.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">You can add/edit/delete pages in the page
                                        management menu.</span>
                                </span>
                            </li>
                            <li>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;">Page Management </span>
                                    <span style="vertical-align: inherit;">Change the name of </span>
                                </span><b>
                                    <span style="vertical-align: inherit;">
                                        <span style="vertical-align: inherit;">[Page Number] to</span>
                                    </span>
                                </b>
                                <span style="vertical-align: inherit;">
                                    <span style="vertical-align: inherit;"> the order number in the page list below.
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </li>

            </div>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="card-title">
                Total number of pages: 7

            </div>
            <table class="table table-striped table-hover text-center" id="BasicTable">
                <thead>
                    <tr>
                        <th>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">number</span>
                            </span>
                        </th>
                        <th>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Page</span>
                            </span>
                        </th>
                        <th>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">page URL</span>
                            </span>
                        </th>
                        <th>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">function</span>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>56</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Mongolia manpower outsourcing &gt; Key skills
                                </span>
                            </span>
                        </td>
                        <td>/technology</td>
                        <td>
                            <span id="spanCode_56" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="56" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Mongolia Manpower Outsourcing &gt; Manpower
                                    Outsourcing System</span>
                            </span>
                        </td>
                        <td>/outsourcing_system</td>
                        <td>
                            <span id="spanCode_57" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="57" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Mongolia manpower outsourcing &gt; Manpower
                                    composition and operation plan</span>
                            </span>
                        </td>
                        <td>/operation_plan</td>
                        <td>
                            <span id="spanCode_58" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="58" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Mongolia Manpower Outsourcing &gt; Business
                                    Introduction</span>
                            </span>
                        </td>
                        <td>/introduction</td>
                        <td>
                            <span id="spanCode_60" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="60" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">Mongolia Manpower Outsourcing &gt; About
                                    Employees</span>
                            </span>
                        </td>
                        <td>/staff</td>
                        <td>
                            <span id="spanCode_65" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="65" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>66</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">About Us &gt; About Us</span>
                            </span>
                        </td>
                        <td>/about_us</td>
                        <td>
                            <span id="spanCode_66" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="66" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button>

                        </td>
                    </tr>
                    <tr>
                        <td>67</td>
                        <td>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">About us &gt; Directions</span>
                            </span>
                        </td>
                        <td>/location</td>
                        <td>
                            <span id="spanCode_67" class="d-none">
                                &lt;jsp:include page="/module/page" flush="true"&gt;
                                &lt;jsp:param name="pseq" value="67" /&gt;
                                &lt;/jsp:include&gt;
                            </span>
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
        $('#code').text('@ include("page_manage")')
        $('#code2').text('<body><jsp:include page="/module/popup" flush="true" /></body>')
    </script>
@stop
