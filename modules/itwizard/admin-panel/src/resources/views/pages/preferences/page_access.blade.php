@extends('Admin::layouts.master')
@section('content')

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

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title"> {{ __('Page access right generation code') }} </div>
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

    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">

            {{-- <div class="bg-light p-3 mb-3">
                        <code id="code2"> </code>
                    </div> --}}
            <div class="p-3 border-left-kant">
                <div class="card-title"> {{ __('Checklist') }} </div>
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul class="ml10">
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Insert
                                        the code at the top of the page you want to grant permission (the line
                                        following &lt;%@ include
                                        file=""%&gt;).</span></span></li>
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">In
                                        addition to access rights by user level, it can also be used as a login
                                        verification function.</span></span></li>
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">If you
                                        don't need permission, we recommend removing the generating code
                                        itself.</span></span></li>
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">level
                                        : The user's membership level. </span><span style="vertical-align: inherit;">Manager
                                        is always 1. </span><span style="vertical-align: inherit;">(The smaller the number,
                                        the higher the
                                        privilege.) If the user's level is greater than the level, he does not have
                                        the privilege.</span></span></li>
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">msg :
                                        This is a message to be output if there is no permission. </span><span
                                        style="vertical-align: inherit;">(Default: "You do not have
                                        permission.")</span></span></li>
                            <li><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">ru :
                                        The URL to return to if there is no permission. </span><span
                                        style="vertical-align: inherit;">(default:
                                        javascript:history.back();)</span></span></li>
                        </ul>
                    </li>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#code').text('@ include("layouts.master.blade")')
    </script>
@stop
