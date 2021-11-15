@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

                <div class="app-page-title">
                    <div class="page-title-wrapper">
                        <div class="page-title-heading">
                            <div class="page-title-icon">
                                <i class="pe-7s-plug icon-gradient bg-mixed-hopes"></i>
                            </div>
                            <div>
                                {{__('Secessionist')}}
                                <div class="page-title-subheading"></div>
                            </div>
                        </div>
                        <div class="page-title-actions">
                            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                                class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                                <i class="pe-7s-refresh-2"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="main-card card card-btm-border border-primary mb-3">
                    <div class="card-body">
                        <table style="width: 100%;" id="new_table" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> {{__('ID')}} </th>
                                    <th> {{__('Name')}} </th>
                                    <th> {{__('Reason')}} </th>
                                    <th> {{__('Date')}} </th>
                                    <!-- <th> {{__('Action')}} </th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data_admin)
                                <tr>
                                 
                                    <td>{{ $data_admin-> id}}</td>
                                    <td>{{ $data_admin-> firstname}}</td>
                                    <td>{{ $data_admin-> reason}}</td>
                                    <td>{{ $data_admin-> date}}</td>
                                </tr>
                            
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </div>

        </div>
    </div>


@endsection
@section('script')
<script>
     $('#new_table').DataTable({})
     $('#reload_page').click(function () {
         location.reload(true);
     });
</script>
@endsection
