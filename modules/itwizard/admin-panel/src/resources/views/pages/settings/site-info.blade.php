@extends('Admin::layouts.master')
@section('content')
<style>
    .ck-editor__editable {
        min-height: 200px;
    }
</style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Site Information')}}
{{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
               <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
               <i class="pe-7s-refresh-2"></i>
               </button>
{{--               <div class="d-inline-block dropdown">--}}
{{--                  <button type="button" class="btn-shadow btn btn-success">--}}
{{--                  <span class="btn-icon-wrapper pe-2 opacity-7">--}}
{{--                  <i class="pe-7s-plus"></i>--}}
{{--                  </span>--}}
{{--                  {{__('Create Banner')}}--}}
{{--                  </button>--}}
{{--               </div>--}}
            </div>
        </div>
    </div>
    <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border ">
        <div class=" row">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title-heading fsize-2 text-capitalize fw-normal">{{ __('Company Information Setting') }}</div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="d-inline-block float-end">
                    <button id="siteInfoSaveBtn" type="button" class="mt-2 btn btn-success siteInfoSubmit invisible">{{__('Save')}}</button>
                    <button id="siteInfoEditBtn" type="button" class="mt-2 btn btn-primary disabler">{{__('Edit')}}</button>

                </div>
            </div>
        </div>
    </div>
    <form id="siteInfoForm" class="col-md-12 mx-auto" method="post" action="" disabled="disabled">
        <fieldset disabled>

            <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="row">
                            <div class="col-md-4 col-lg-6">
                                <div class="card-title opacity-5 text-uppercase ">{{__('Company Name')}}</div>
                                <div >
                                    <input type="text" class="form-control mb-3" id="companyName" name="companyName" maxlength="110">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Site Name')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="siteName" name="siteName" maxlength="110">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Fax Number')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="fax" name="fax" maxlength="50">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Personal Information Manager')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="personalInformation" name="personalInformation" maxlength="50">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Bussiness Address')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="address" name="address" maxlength="110">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Fax Number')}}</div>
                                <div>
                                    <input type="text" class="form-control" id="fax" name="fax" maxlength="50">
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="card-title opacity-5 text-uppercase">{{__('Company Registration Number')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="companyRegister" name="companyRegister" maxlength="50">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Phone Number')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="phone" name="phone" maxlength="110">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Representative Email')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="email" name="email" maxlength="110">
                                </div>
                                <div class="card-title opacity-5 text-uppercase">{{__('Copyright')}}</div>
                                <div>
                                    <input type="text" class="form-control mb-3" id="copyright" name="copyright" maxlength="110">
                                </div>
                                    <div class="row">
                                        <div class="text-center card-title opacity-5 text-uppercase my-auto">{{__('Logo')}}</div>
                                            <div class="text-center">
                                                <img class="mw-100 " style="max-height: 150px" id="logo-photo-preview" alt="">
                                                <input type="hidden" name="logo" id="logo-photo">
                                                <button type="button" class="btn btn-outline-info w-75 mt-2" onclick="filemanager.selectFile('logo-photo')">{{__('Logo Select')}}</button>
                                            </div>

                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 mt-3">
                                    <div class="card-title opacity-5 text-uppercase mb-3">Terms of use</div>
                                    <div id="SiteInfoeditor1" name="SiteInfoeditor1">
                                        <textarea name="editor1" id="editor1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 mt-3">
                                    <div class="card-title opacity-5 text-uppercase mb-3">Privacy statement</div>
                                    <div id="SiteInfoeditor2" name="SiteInfoeditor2">
                                        <textarea name="editor2" id="editor2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>
@endsection
@section('script')
<script>
    $(document).ready(function (){
        let editor;
        ClassicEditor.create( document.querySelector( '#SiteInfoeditor1' ), {
            placeholder: 'Terms of use'
        })
            .then( newEditor => {
                editor = newEditor;
            } )
            .catch( error => {
                console.error( error );
            } );
        let editor1;
        ClassicEditor.create( document.querySelector( '#SiteInfoeditor2' ), {
            placeholder:'Privacy statement'
        } )
            .then( newEditor => {
                editor1 = newEditor;
            } )
            .catch( error => {
                console.error( error );
            } );
    });
        $('.siteInfoSubmit').on('click', function(){
            const data = {
                companyName : $('#companyName').val(),
                siteName: $('#siteName').val(),
                fax : $('#fax').val(),
                companyRegister : $('#companyRegister').val(),
                personalInformation : $('#personalInformation').val(),
                address : $('#address').val(),
                phone : $('#phone').val(),
                email : $('#email').val(),
                copyright : $('#copyright').val(),
                logo : $('#logo-photo').val(),
                SiteInfoeditor1 : editor.getData(),
                SiteInfoeditor2 : editor1.getData(),
            };
            Axios.post('/api/settings/siteinfo/update', data).then((resp) =>{
                $('#siteInfoSaveBtn').addClass('invisible');
                Toast.fire({
                    icon: 'success',
                    title: 'Successfully save'
                });
            }).catch((err)=>{
                console.log(err);
            });
        });
</script>
@endsection
