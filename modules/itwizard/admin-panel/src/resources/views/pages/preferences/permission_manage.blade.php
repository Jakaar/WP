@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Permission Management') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                        class="fa fa-plus"></i> {{ __('Create group') }} </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover" id="BasicTable">
                <thead>
                    <tr>
                        <th> {{ __('Group Name') }} </th>
                        <th> {{ __('Explanation') }} </th>
                        <th> {{ __('Affiliate Manager') }} </th>
                        <th> {{ __('Action') }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Skyline Group </td>
                        <td> Moderator Team </td>
                        <td> </td>
                        <td>
                            <button class="btn btn-outline-primary"> {{ __('Edit') }} </button>
                            <button class="btn btn-outline-danger"> {{ __('Delete') }} </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('script')
    <script>
        $('#reload_page').click(function () {
            location.reload(true);
        });
    </script>
@endsection
@section('modal')
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{__('Create group')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{__('Group Name')}} </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{__('Explanation')}} </label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <table class="table-striped table-hover table text-center">
                                <thead>
                                    <tr>
                                        <th> {{__('Level')}} </th>
                                        <th> {{__('Menu Name')}} </th>
                                        <th> {{__('All')}} </th>
                                        <th> {{__('Look up')}} </th>
                                        <th> {{__('Enrollment')}} </th>
                                        <th> {{__('Edit')}} / {{__('Delete')}} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i = 1; $i < 25; $i++)
                                    <tr>
                                        <td> {{$rand = rand(1,3)}} </td>
                                        <td> @if($rand == 1) @elseif($rand == 2) &nbsp;&nbsp;&nbsp;&nbsp; @else&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @endif {{__('Page')}} {{$i}} </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-primary">{{__('Save Changes')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
