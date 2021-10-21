@extends('Admin::layouts.master')
@section('content')
<style>
    .ck-editor__editable {
        min-height: 100px;
    }
    iframe {
        width:  100%;
        height: 100%;
    }
</style>
<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3  card-btm-border card-shadow-primary border-primary card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 col-sm-6">
                            <h5 class="card-title">{{__('Contact us')}}</h5>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-6" style="text-align: end">
                            <button id="contactSaveBtn" type="button" class="mt-2 btn btn-success contactSubmit invisible">{{__('Save')}}</button>
                            <button id="contactEditBtn" type="button" class="mt-2 btn btn-primary disabler_contactus">{{__('Edit')}}</button>
                        </div>
                    </div>
                    <form id="ContactUsForm" method="post" action="">
                        <fieldset disabled="disabled" id="contactus_fieldset">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label class="form-label" for="title">{{__('Title')}}</label>
                                        <input type="text" id="title" name="title" placeholder="{{__('Enter title')}}" value="{{ $data['contact_us']->title ?? '' }}" class="form-control" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label for="email" class="form-label">{{__('Email')}}</label>
                                        <input name="email" id="email" placeholder="{{__('Enter email')}}" type="email" value="{{ $data['contact_us']->email ?? '' }}" class="form-control" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label for="phone" class="form-label">{{__('Phone')}}</label>
                                        <input id="phone" name="phone" placeholder="{{__('Phone number')}}" data-inputmask="'mask': '9999 9999 9999 9999'" value="{{ $data['contact_us']->phone ?? '' }}" type="text" class="form-control" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label for="short_content" class="form-label">{{__('Short content')}}</label>
                                    <div class="position-relative mb-3" id="ContactUsEditor1" name="ContactUsEditor1">
                                        {!!$data['contact_us']->short_content ?? ''!!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="position-relative mb-3">
                                        <label for="phone" class="form-label">{{__('Address')}}</label>
                                        <textarea id="address"
                                                  maxlength="250"
                                                  name="address"
                                                  class="form-control"
                                                  placeholder="{{__('Only write the official address')}}"
                                                  rows="6"
                                                  required  >{{ $data['contact_us']->address ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="row mt-3">
                                        <h5 class="card-title">{{__('Social accounts')}}</h5>
                                        <div class="col-md-6">
                                            <div class="position-relative mb-3">
                                                <label for="facebook" class="form-label">{{__('Facebook')}}</label>
                                                <input id="facebook" name="facebook" value="{{ $data['contact_us']->facebook ?? '' }}" placeholder="{{__('Facebook account')}}" type="text" class="form-control" maxlength="70">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative mb-3">
                                                <label for="youtube" class="form-label">{{__('Youtube')}}</label>
                                                <input id="youtube" name="youtube" value="{{ $data['contact_us']->youtube ?? '' }}" placeholder="{{__('Youtube account')}}" type="text" class="form-control" maxlength="70">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative mb-3">
                                                <label for="twitter" class="form-label">{{__('Twitter')}}</label>
                                                <input id="twitter" name="twitter" value="{{ $data['contact_us']->twitter ?? '' }}" placeholder="{{__('Twitter account')}}" type="text" class="form-control" maxlength="70">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative mb-3">
                                                <label for="linkedin" class="form-label">{{__('Linked in')}}</label>
                                                <input id="linkedin" name="linkedin" placeholder=" {{__('Linked in account')}}" value="{{ $data['contact_us']->linkedin ?? ''}}" type="text" class="form-control" maxlength="70">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe width="437" height="462" id="gmap_canvas" src="https://maps.google.com/maps?q=seoul&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%px;}</style>
                                            <a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%px;}</style>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        let editor;
        ClassicEditor.create(document.querySelector('#ContactUsEditor1'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
        $('.contactSubmit').on('click', function () {
            const data = {
                title: $('#title').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                address: $('#address').val(),
                facebook: $('#facebook').val(),
                youtube: $('#youtube').val(),
                twitter: $('#twitter').val(),
                linkedin: $('#linkedin').val(),
                short_content: editor.getData(),
            };
            Axios.post('/api/settings/contactUs/update', data).then((resp) => {
                $('#contactSaveBtn').addClass('invisible');
                $('#contactus_fieldset').attr('disabled', 'disabled');
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
    });
</script>
@endsection
