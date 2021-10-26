@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                        <i class="pe-7s-hourglass icon-gradient bg-love-kiss"></i>
                        </div>
                        <div>
                            {{ __('SNS settings ') }}
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

            <div class="card">
                <!-- <div class="card-header">
                    <div class="text-right">
                        It is automatically executed when you enter the information of Naver Log, Google Analytics, Identity
                        Verification, and IPIN Verification.
                    </div>
                </div> -->
                <div class="card-body">
                    <form action="" class="row">
                        <div class="col-lg-12 mb-3">
                            <h4><label for="" class="form-label fw-bold"> {{__('SNS settings')}} </label></h4>
                            <div class="clearfix"></div>
                        </div>

                            <div class="col-lg-12 mb-3">
                                <label for="" class="form-label fw-bold"> {{__('Naver login')}}</label>
                            </div>
                            <div class="col-lg-1 mb-3">
                                        <div class="form-check form-switch">
                                            <input onclick="hideFunction1()" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                                        </div>
                            </div>
                            <div class="col-lg-11 mb-3">
                                        <input id="hideInput1" type="text" class="form-control">
                            </div>


                            <div class="col-lg-12 mb-3">
                                  <label for="" class="form-label fw-bold"> {{__('Google login')}}</label>
                            </div>
                            <div class="col-lg-1 mb-3">
                                    <div class="form-check form-switch">
                                        <input onclick="hideFunction2()" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                                    </div>
                            </div>
                            <div class="col-lg-11 mb-3">
                                    <input id="hideInput2" type="text" class="form-control">
                            </div>

                            <div class="col-lg-12 mb-3">
                                  <label for="" class="form-label fw-bold"> {{__('Kakao Login')}}</label>
                            </div>
                            <div class="col-lg-1 mb-3">
                                    <div class="form-check form-switch">
                                        <input onclick="hideFunction3()" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked >
                                        <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                                    </div>
                            </div>
                            <div class="col-lg-11 mb-3">
                                    <input id="hideInput3" type="text" class="form-control">
                            </div>


                            <div class="col-lg-12 mb-3">
                                <label for="" class="form-label fw-bold"> {{__('Facebook login')}}</label>
                            </div>
                            <div class="col-lg-1 mb-3">
                                    <div class="form-check form-switch">
                                        <input onclick="hideFunction4()" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <!-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> -->
                                    </div>
                            </div>
                            <div class="col-lg-11 mb-3">
                                    <input id="hideInput4" type="text" class="form-control">
                            </div>
                        
                        <div class="col-lg-12 mb-3">
                        <div class="col-lg-12 mb-3">
                            <button class="btn btn-success CreateBoard">{{__('save')}} </button>   
                            <button class="btn btn-secondary" data-bs-dismiss="modal">{{__('cancel')}}</button>      
                        </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    
@endsection
@section('script')
<script>
        var x1;
        var x2;
        var x3;
        var x4;
        function hideFunction1() {
           
          if ( x1== 1) {
                document.getElementById("hideInput1").style.display = "inline";
                return x1=0;
               
             } else {
                document.getElementById("hideInput1").style.display = "none";
                return x1=1;
            }
        }

        function hideFunction2() {
          if ( x2== 1) {
                 document.getElementById("hideInput2").style.display = "inline";
                return x2=0;
             } else {
                document.getElementById("hideInput2").style.display = "none";
                return x2=1;
                
            }
        }

        function hideFunction3() {
          if ( x3== 1) {
                 document.getElementById("hideInput3").style.display = "inline";
                return x3=0;
               
             } else {
               
                document.getElementById("hideInput3").style.display = "none";
                return x3=1;
            }
        }

        function hideFunction4() {
          if ( x4== 1) {
               document.getElementById("hideInput4").style.display = "inline";
                return x4=0;
               
             } else {
               
                document.getElementById("hideInput4").style.display = "none";
                return x4=1;
            }
        }
    </script>
@endsection
