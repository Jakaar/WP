@extends('Admin_UI.layouts.master')
@section('contect')
<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">{{__('Contact us')}}</h5>
                    <form id="ContactUsForm" method="post" action="">
                        <fieldset disabled="disabled">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label class="form-label" for="title">{{__('Title')}}</label>
                                        <input type="text" id="title" name="title" placeholder="{{__('Enter title')}}" value="{!! $data['contact_us']->title ?? '' !!}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label for="email" class="form-label">{{__('Email')}}</label>
                                        <input name="email" id="email" placeholder="{{__('Enter email')}}" type="email" value="{!! $data['contact_us']->email ?? '' !!}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative mb-3">
                                        <label for="phone" class="form-label">{{__('Phone')}}</label>
                                        <input id="phone" name="phone" placeholder="{{__('Phone number')}}" value="{!! $data['contact_us']->phone ?? '' !!}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative mb-3">
                                        <label for="short_content" class="form-label">{{__('Short content')}}</label>
                                        <textarea id="short_content" class="form-control"
                                                  name="short_content"
                                                  placeholder="{{__('Enter short content')}}"
                                                  rows="6">{!! $data['contact_us']->short_content ?? '' !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative mb-3">
                                        <label for="exampleAddress" class="form-label">{{__('Address')}}</label>
                                        <textarea id="address"
                                                  name="address"
                                                  class="form-control"
                                                  placeholder="{{__('Only write the official address')}}"
                                                  rows="6">{!! $data['contact_us']->address ?? '' !!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="card-title">{{__('Social accounts')}}</h5>
                                <div class="col-md-3">
                                    <div class="position-relative mb-3">
                                        <label for="facebook" class="form-label">{{__('Facebook')}}</label>
                                        <input id="facebook" name="facebook" value="{!! $data['contact_us']->facebook ?? '' !!}" placeholder="{{__('Facebook account')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative mb-3">
                                        <label for="youtube" class="form-label">{{__('Youtube')}}</label>
                                        <input id="youtube" name="youtube" value="{!! $data['contact_us']->youtube ?? '' !!}" placeholder="{{__('Youtube account')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative mb-3">
                                        <label for="twitter" class="form-label">{{__('Twitter')}}</label>
                                        <input id="twitter" name="twitter" value="{!! $data['contact_us']->twitter ?? '' !!}" placeholder="{{__('Twitter account')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="position-relative mb-3">
                                        <label for="linkedin" class="form-label">{{__('Linked in')}}</label>
                                        <input id="linkedin" name="linkedin" placeholder="{{__('Linked in account')}}" value="{!! $data['contact_us']->linkedin ?? '' !!}" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button id="contactEditBtn" type="button" class="mt-2 btn btn-primary disabler">{{__('Edit')}}</button>
                        <button id="contactSaveBtn" type="button" class="mt-2 btn btn-success contactSubmit invisible">{{__('Save')}}</button>
                    </form>
                </div>
            </div>

</section>
@endsection
