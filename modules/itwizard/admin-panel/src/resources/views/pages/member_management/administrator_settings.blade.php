@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display2 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Administrator Settings') }}
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
            <div class="card-title mb-3"> {{ __('Admin Management') }} </div>
            <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th> {{ __('ID') }} </th>
                        <th> {{ __('Name') }} </th>
                        <th> {{ __('Email') }} </th>
                        <th> {{ __('REGISTRATION DATE') }} </th>
                    </tr>
                </thead>
                {{-- <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Admin </td>
                                <td> admin@admin.com </td>
                                <td> {{now()->format('Y-m-d')}} </td>
                            </tr>

                        </tbody> --}}
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
