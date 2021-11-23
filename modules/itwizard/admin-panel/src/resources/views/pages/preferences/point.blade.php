@extends('Admin::layouts.master')
@section('content')
    <style>
.text1{
    width: 137px;
}
.text2{
    width: 300px;
}
    </style>
<div class="app-main__inner p-0">
        <div class="app-inner-layout">

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <!-- <i class="pe-7s-graph3 icon-gradient bg-mixed-hopes"></i> -->
                            <!-- <i class="metismenu-icon pe-7s-diamond"></i> -->
                            <i class="pe-7s-menu icon-gradient bg-ripe-malin"></i>
                        </div>
                        <div>
                            {{ __('POINT Management') }}
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
            <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border ">
                <div class=" row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title-heading fsize-2 text-capitalize fw-normal">{{ __('POINT Management') }}</div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="d-inline-block float-end">
                            <button class=" btn btn-success d-none" id="save_menu"> {{ __('Save') }}
                            </button>
                            <button class=" btn btn-primary" id="edit_menu"> {{ __('Edit') }} </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="ContentData">
                <!-- <div class="card-header">
                    <div class="text-right">
                    {{__('This is the screen to set the reserve amount.')}}
                    </div>
                </div> -->
                <div class="card-body">
              
                    <form action=""  class="row">

                        <!-- <div class="col-lg-12 mb-3">
                            <h4><label for="" class="form-label fw-bold"> {{__('Basic deposit payment')}} </label></h4>
                            <div class="clearfix"></div>
                        </div> -->


                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-bold"> {{__('Member sign-up points')}}</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend text2">
                                    <span class="input-group-text ">{{__('Points earned when registering as a member')}}</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append text1">
                                    <span class="input-group-text ">{{__('Won payment')}}</span>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-bold">{{__('Reviews')}}</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend text2">
                                    <span class="input-group-text">{{__('Points earned when writing a review')}}</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append text1">
                                    <span class="input-group-text">{{__('Won payment')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <h4><label for="" class="form-label fw-bold"> {{__('Payment of purchase points')}} </label></h4>
                            <div class="clearfix"></div>
                        </div>


                        <div class="col-lg-12 mb-3">
                             <label for="" class="form-label fw-bold">   {{__('Purchase Point Policy')}}</label>
                             <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                   {{__(' No deposit payment')}}
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                               {{__('Payment of points set in membership level')}}
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-9 mb-3">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                  <input id="paymentDisabled" type="radio" name="flexRadioDisabled">
                                </span>
                                    <span class="input-group-text text1 ">{{__('of payment')}}</span>

                                    <input id="disabledInput1" type="number"  class="form-control" aria-label="Amount (to the nearest dollar)" disabled >

                                    <div class="input-group-append">
                                        <span class="input-group-text text1">{{__('% Payments')}}</span>
                                    </div>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                  <input id="saleDisabled" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" >
                                </span>
                                    <span class="input-group-text text1" id="basic-addon1">{{__('of sale price')}}</span>

                                    <input id="disabledInput2"  type="number"   class="form-control" aria-label="Amount (to the nearest dollar)" disabled >
                                    <div class="input-group-append">
                                        <span class="input-group-text text1">{{__('% Payments')}}</span>
                                    </div>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                  <input id="perDisabled" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" >
                                </span>
                                    <span class="input-group-text text1" id="basic-addon1">{{__('per rental day')}}</span>

                                    <input id="disabledInput3" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text text1">{{__('Won payment')}}</span>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <h4><label for="" class="form-label fw-bold">{{__('Setting up the use of points')}}</label></h4>
                             <div class="clearfix"></div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-bold"> {{__('Minimum Available Points')}}</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend text1">
                                    <span class="input-group-text">{{__('Reserves')}}</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append text1">
                                    <span class="input-group-text">{{__('use more than one')}}</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="" class="form-label fw-bold"> {{__('Maximum points available')}}</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend text1">
                                    <span class="input-group-text ">{{__('Reserves')}}</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append text1">
                                    <span class="input-group-text">{{__('use less than KRW')}}</span>
                                </div>
                            </div>

                        </div>


                        <!-- <div class="col-lg-12 mb-3">
                            <button class="btn btn-success CreateBoard">{{__('save')}} </button>
                            <button class="btn btn-outline-info"  data-bs-dismiss="modal">{{__('cancel')}}</button>
                        </div> -->



                    </form>

                </div>
            </div>

        </div>
</div>
@endsection

@section('script')
<script>
    $('#reload_page').click(function () {
        location.reload(true);
    });

    $('#ContentData input, #ContentData select').attr('disabled','disabled');
    $('#edit_menu').click(function() {
                    $('#save_menu').toggleClass('d-none')
                    $('#ContentData input, #ContentData select').attr('disabled',
                        function(index, attr) {
                            return attr === 'disabled' ? null : ''
                        })
                })

$(document).on('click', '#paymentDisabled', function() {
    $('#disabledInput1').removeAttr('disabled');
    $('#disabledInput2').attr('disabled','disabled');
    $('#disabledInput3').attr('disabled','disabled');
    $('#disabledInput2').val('');
    $('#disabledInput3').val('');

})

$(document).on('click', '#saleDisabled', function() {
    $('#disabledInput2').removeAttr('disabled');
    $('#disabledInput1').attr('disabled','disabled');
    $('#disabledInput3').attr('disabled','disabled');
    $('#disabledInput1').val('');
    $('#disabledInput3').val('');
});

$(document).on('click', '#perDisabled', function() {
    $('#disabledInput3').removeAttr('disabled');
    $('#disabledInput2').attr('disabled','disabled');
    $('#disabledInput1').attr('disabled','disabled');
    $('#disabledInput2').val('');
    $('#disabledInput1').val('');

});


</script>
@endsection
