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
                            {{ __('Page Access Rights') }}
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
                        <div class="card-title"> {{__('Page acess right generation code')}} </div>
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
                    
                    {{-- <div class="bg-light p-3 mb-3">
                        <code id="code2"> </code>
                    </div> --}}
                    <div class="p-3 border-left-kant">
                        <div class="card-title"> {{__('Checklist')}} </div>
                        <ul class="ml10">
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Insert the code at the top of the page you want to grant permission (the line following &lt;%@ include file="/WEB-INF/jsp/common/tags.jsp"%&gt;).</font></font></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">In addition to access rights by user level, it can also be used as a login verification function.</font></font></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">If you don't need permission, we recommend removing the generating code itself.</font></font></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">level : The user's membership level. </font><font style="vertical-align: inherit;">Manager is always 1. </font><font style="vertical-align: inherit;">(The smaller the number, the higher the privilege.) If the user's level is greater than the level, he does not have the privilege.</font></font></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">msg : This is a message to be output if there is no permission. </font><font style="vertical-align: inherit;">(Default: "You do not have permission.")</font></font></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ru : The URL to return to if there is no permission. </font><font style="vertical-align: inherit;">(default: javascript:history.back();)</font></font></li>
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
        $('#code').text('<jsp:include page="/module/check_auth" flush="true"><jsp:param name="level" value="[레벨]" /><jsp:param name="msg" value="[권한 부족 시 메시지]" /><jsp:param name="ru" value="[돌아갈 페이지]" /></jsp:include>')
    </script>
@stop
