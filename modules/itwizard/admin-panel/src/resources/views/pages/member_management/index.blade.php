@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Admin Home') }}
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


    <div class=" card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="card-title mb-3"> {{ __("Today's subscription status (individual)") }} </div>
            <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th> {{ __('ID') }} </th>
                        <th> {{ __('Name') }} </th>
                        <th> {{ __('Email') }} </th>
                        <th> {{ __('Action') }} </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                                <td></td>
                                <td> </td>
                                <td></td>

                                <td> </td>
                            </tr> --}}

                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">

            <div class="card-title mb-3"> {{ __("Today's Subscription Status (Business)") }} </div>
            <table style="width: 100%;" id="new_table_2" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th> {{ __('ID') }} </th>
                        <th> {{ __('Name') }} </th>
                        <th> {{ __('Email') }} </th>
                        <th> {{ __('Action') }} </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> --}}

                </tbody>
            </table>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">

            <div class="card-title mb-3"> {{ __("Today's Discount Coupon Usage Status") }} </div>
            <table style="width: 100%;" id="new_table_3" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th> {{ __('ID') }} </th>
                        <th> {{ __('Area') }} </th>
                        <th> {{ __('Business Name') }} </th>
                        <th> {{ __('Price') }} </th>
                        <th> {{ __('Date Of Use') }} </th>
                        <th> {{ __('Serial Number') }} </th>
                        <th> {{ __('Paid or not') }} </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> --}}

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#new_table').DataTable({})
        $('#new_table_2').DataTable({})
        $('#new_table_3').DataTable({})
    </script>
@endsection
