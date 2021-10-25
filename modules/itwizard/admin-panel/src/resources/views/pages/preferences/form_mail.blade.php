@extends('Admin::layouts.master')
@section('content')
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
                <button class="btn mb-3 btn-outline-secondary"> {{ __('Copy generation code') }} </button>
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
                <ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li>

                                It provides a convenient function that allows you
                                to freely create form mail regardless of form.

                            </li>
                            <li>

                                skin location : /

                            </li>
                            <li>

                                Change the
                                form mail management
                                <b>

                                    [form mail number]

                                </b>

                                name to the <b>
                                    number
                                </b>
                                in the form mail list below.

                            </li>
                            <li>

                                The contents of the created form mail can be
                                checked in the Admin &gt; Form Mail Management menu.

                            </li>
                        </ul>
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
            <table class="table table-striped table-hover" id="BasicTable">

                <thead>
                    <tr>
                        <th> number</th>
                        <th> form mail name</th>
                        <th>function</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>Development Quote Inquiry</td>
                        <td>
                            <button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Personnel Outsourcing Inquiries</td>
                        <td><button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td> Project outsourcing inquiry</td>
                        <td><button class="btn btn-outline-secondary"> {{ __('Copy generation code') }} </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#code').text('include("layouts.blade.master")')
    </script>
@stop
