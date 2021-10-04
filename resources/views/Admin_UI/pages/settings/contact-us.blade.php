@extends('Admin_UI.layouts.master')
@section('contect')
<section>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">{{__('Contact us')}}</h5>
                    <form class="" method="post" action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label class="form-label" for="title">{{__('Title')}}</label>
                                    <input type="text" id="title" name="title" placeholder="{{__('Enter title')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input name="email" id="email" placeholder="{{__('Enter email')}}" type="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative mb-3">
                                    <label for="phone" class="form-label">{{__('Phone')}}</label>
                                    <input name="phone" placeholder="{{__('Phone number')}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <label for="short_content" class="form-label">{{__('Short content')}}</label>
                                    <textarea type="text" id="short_content" class="form-control" name="short_content" placeholder="{{__('Enter short content')}}" row="1"> </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative mb-3">
                                    <label for="exampleAddress" class="form-label">{{__('Address')}}</label>
                                    <textarea name="address" placeholder="{{__('Only write the official address')}}" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                                                <div class="row">
                            <h5 class="card-title">{{__('Social accounts')}}</h5>
                           <div class="col-md-3">
                               <div class="position-relative mb-3">
                                   <label for="facebook" class="form-label">{{__('Facebook')}}</label>
                                   <input name="facebook" placeholder="{{__('Facebook account')}}" type="text" class="form-control">
                               </div>
                           </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="youtube" class="form-label">{{__('Youtube')}}</label>
                                    <input name="youtube" placeholder="{{__('Youtube account')}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="twitter" class="form-label">{{__('Twitter')}}</label>
                                    <input name="twitter" placeholder="{{__('Twitter account')}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative mb-3">
                                    <label for="linkedin" class="form-label">{{__('Linked in')}}</label>
                                    <input name="linkedin" placeholder="{{__('Linked in account')}}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button class="mt-2 btn btn-primary contactSubmit">{{__('Submit')}}</button>
                    </form>
                </div>
            </div>

</section>
@endsection
