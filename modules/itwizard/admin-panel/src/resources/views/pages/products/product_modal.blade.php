@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-tempting-azure"></i>
                </div>
                <div>
                    {{ __('Product Management') }}
                    {{-- <div class="page-title-subheading">{{ __('User edit & delete') }}</div> --}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info refresh-page">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i
                        class="pe-7s-plus"></i> {{ __('Create') }} </button>
            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary">
        <div class="card-body">

        </div>
    </div>
@endsection
@section('modal')

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productLabel">Create Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Category') }} </label>
                            <select name="product_category" id="" class="form-control form-select">
                                <option value="">  </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Code') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Product Code') }} " name="product_code">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="switcher" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked"> {{ __('Show') }} </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="float-end">
                            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }}
                            </button>
                            <button type="button" class="btn btn-success">{{ __('Save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#switcher').click(function() {
                if ($(this).is(':checked')) {
                    $(this).next('label').html('Show')
                }
                else{
                    $(this).next('label').html('Hide')
                }
            })
        })
    </script>
@endsection
