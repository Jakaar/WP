@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
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
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block">
                <button id="siteInfoEditBtn" type="button" class="btn btn-primary disabler">{{__('Edit')}}</button>
                <button id="siteInfoSaveBtn" type="button" class="btn btn-success siteInfoSubmit invisible d-none">{{__('Save')}}</button>
                
            </div>
                
        </div>
    </div>
</div>
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border ">
    <div class=" row">
{{--        <div class="col-lg-6 col-sm-6 mt-3">--}}
{{--            <div class="page-title-heading fsize-2 text-capitalize fw-normal">{{ __('Company Information Setting') }}</div>--}}
{{--        </div>--}}
        <div class="col-lg-6 col-sm-6">
            <ul class="nav tabs-animated body-tabs body-tabs-layout body-tabs-animated nav">
                @foreach ($data['langs'] as $key => $lang)
                    <li class="nav-item">
                        <a role="tab" class="nav-link @if ($key === 0) active @endif" id="c_tab-c1-{{ $lang->id }}" data-bs-toggle="tab" href="#c_tab-animated1-{{ $lang->id }}">
                            <span class="nav-text"><b>{{ $lang->country }}</b></span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<form id="siteInfoForm" class="col-md-12 mx-auto" method="post" action="" disabled="disabled">
    <fieldset id="fldst" disabled="disabled">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="tab-content">

                                @foreach($data['langs'] as $key => $lang)
                                    <div class="tab-pane fade @if($key === 0) active show @endif" id="c_tab-animated1-{{$lang->id}}">
                                        <div class="card-title text-uppercase ">{{__('Company Name')}}</div>
                                        <div>
                                            <input type="text" class="form-control mb-3" id="companyName{{$lang->country_code}}" data-parent-id="tab-c1-{{$lang->id}}" name="companyName" maxlength="110" value="{{json_decode($site_info->company_name, TRUE)[$lang->country_code]}}">
                                        </div>
                                        <div class="card-title text-uppercase">{{__('Site Name')}}</div>
                                        <div>
                                            <input type="text" class="form-control mb-3" id="siteName{{$lang->country_code}}" data-parent-id="tab-c1-{{$lang->id}}" name="siteName" maxlength="110" value="{{json_decode($site_info->site_name, TRUE)[$lang->country_code]}}">
                                        </div>
                                        <div class="card-title text-uppercase">{{__('Copyright')}}</div>
                                        <div>
                                            <input type="text" class="form-control mb-3" id="copyright{{$lang->country_code}}" data-parent-id="tab-c1-{{$lang->id}}" name="copyright" maxlength="110" value="{{json_decode($site_info->site_copyright, TRUE)[$lang->country_code]}}">
                                        </div>
                                        <div class="card-title text-uppercase">{{__('Personal Information Manager')}}</div>
                                        <div>
                                            <input type="text" class="form-control mb-3" id="personalInformation{{$lang->country_code}}" data-parent-id="tab-c1-{{$lang->id}}" name="personalInformation" maxlength="50" value="{{json_decode($site_info->personal_information_manager, TRUE)[$lang->country_code] ?? ''}}">
                                        </div>
                                        <div class="card-title text-uppercase">{{__('Bussiness Address')}}</div>
                                        <div>
                                            <input type="text" class="form-control mb-3" id="address{{$lang->country_code}}" data-parent-id="tab-c1-{{$lang->id}}" name="address" maxlength="110" value="{{json_decode($site_info->address, TRUE)[$lang->country_code]}}">
                                        </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3 mt-3">
                                                    <div class="card-title text-uppercase mb-3">{{ __('Terms of Service') }}</div>
                                                    <div class="c_product_editor" id="{{$lang->country_code}}" name="c_product_editor">
                                                        {!! json_decode($site_info->terms_of_condition, TRUE)[$lang->country_code] !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3 mt-3">
                                                    <div class="card-title text-uppercase mb-3">{{ __('Privacy Policy') }}</div>
                                                    <div class="e_product_editor" id="{{$lang->country_code}}" name="e_product_editor">
                                                        {!! json_decode($site_info->privacy, TRUE)[$lang->country_code] !!}
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="card-title text-uppercase">{{__('Company Registration Number')}}</div>
                            <div>
                                <input type="text" class="form-control mb-3" id="companyRegister" name="companyRegister" maxlength="50" value="{{$site_info->company_register_number}}">
                            </div>
                            <div class="card-title text-uppercase">{{__('Phone Number')}}</div>
                            <div>
                                <input type="tel" data-inputmask="'mask': '[9-]AAA-999'" im-insert="true" class="form-control mb-3 input-mask-trigger" id="phone" name="phone" maxlength="50" value="{{$site_info->phone_number}}">
                            </div>
                            <div class="card-title text-uppercase">{{__('Representative Email')}}</div>
                            <div>
                                <input type="text" class="form-control mb-3" id="email" name="email" maxlength="110" value="{{$site_info->email}}">
                            </div>
                            <div class="card-title text-uppercase">{{__('Fax Number')}}</div>
                            <div>
                                <input type="text" class="form-control mb-3" id="fax" name="fax" maxlength="50" value="{{$site_info->fax ?? ''}}">
                            </div>
                            <div class="row">
                                <div class="text-center card-title text-uppercase my-auto">{{__('Logo')}}</div>
                                <div class="text-center">
                                    <img class="mw-100 " src="{{$site_info->logo}}" style="max-height: 150px; min-width: 250px;" id="logo-photo-preview" alt="">
                                    <input type="hidden" name="logo" id="logo-photo">
                                    <button type="button" class="btn btn-outline-info w-100" onclick="filemanager.selectFile('logo-photo')">{{__('Logo Select')}}</button>
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
    $(document).ready(function() {

        $('#siteInfoEditBtn').click(function() {
            $(this).toggleClass('d-none')
            $('#s_settings input, #s_settings select, #s_settings textarea, #s_settings button').removeAttr(
                'disabled')
            $('#siteInfoSaveBtn').toggleClass('d-none')
        })

        let c_editor = [];
        var allEditors = document.querySelectorAll('.c_product_editor');
        let EditorId = [];

        $.each(allEditors, function(i, item){
            EditorId[i] = allEditors[i].id

            ClassicEditor.create(allEditors[i]).then(editor =>{
                c_editor.push({
                    name: EditorId[i],
                    editor
                });
            })
            .catch(error => {
                console.error(error);
            });
        });

        let e_editor = [];
        var allEditors2 = document.querySelectorAll('.e_product_editor');
        let EditorId2 = [];

        $.each(allEditors2, function(i, item){
            EditorId2[i] = allEditors2[i].id

            ClassicEditor.create(allEditors2[i]).then(editor2 =>{
                e_editor.push({
                    name: EditorId2[i],
                    editor2
                });
            })
                .catch(error => {
                    console.error(error);
                });
        });

        $('.siteInfoSubmit').on('click', function() {
            const langs = {!! $data['langs'] !!};

            let cName = {}
            let sName = {}
            let cRight= {}
            let piM = {}
            let bAddress = {}

            $.each(langs, function(i, v){
                const companyName = $('#companyName' + v.country_code).val();
                const id = '#companyName'+v.country_code;
                const code = v.country_code;
                cName[code] = companyName;

                const siteName = $('#siteName' + v.country_code).val();
                const id2 = '#siteName'+v.country_code;
                const code2 = v.country_code;
                sName[code] = siteName;

                const copyright = $('#copyright' + v.country_code).val();
                const id3 = '#copyright'+v.country_code;
                const code3 = v.country_code;
                cRight[code] = copyright;

                const personalInformation = $('#personalInformation' + v.country_code).val();
                const id4 = '#personalInformation'+v.country_code;
                const code4 = v.country_code;
                piM[code] = personalInformation;

                const address = $('#address' + v.country_code).val();
                const id5 = '#address'+v.country_code;
                const code5 = v.country_code;
                bAddress[code] = address;
            })

            let editorData = {};

            $.each(c_editor, function(i, v){
                let name = v.name;
                editorData[name] = v.editor.getData();
            })

            let cEditor = JSON.stringify(editorData);

            let editorData2 ={};
            $.each(e_editor, function(i, v){
                // console.log(v);
                let name = v.name;
                editorData2[name] = v.editor2.getData();
            })

            let eEditor = JSON.stringify(editorData2)
            // console.log(cEditor);

            const data = {
                companyName: JSON.stringify(cName),
                siteName: JSON.stringify(sName),
                fax: $('#fax').val(),
                companyRegister: $('#companyRegister').val(),
                personalInformation: JSON.stringify(piM),
                address: JSON.stringify(bAddress),
                phone: $('#phone').val(),
                email: $('#email').val(),
                copyright: JSON.stringify(cRight),
                logo: $('#logo-photo').val(),
                c_product_editor: cEditor,
                e_product_editor: eEditor,
            };

            Axios.post('/api/settings/siteinfo/update', data).then((resp) => {

                $('#siteInfoSaveBtn').toggleClass('d-none')
                $('#siteInfoEditBtn').toggleClass('d-none')
                $('#fldst').attr('disabled', 'disabled');
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: resp.data.msg
                })
            }).catch((err) => {
                console.log(err);
            });
        });
        $('#reload_page').click(function () {
            location.reload(true);
        });
    });
</script>
@endsection
