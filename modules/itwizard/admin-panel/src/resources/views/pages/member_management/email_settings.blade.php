@extends('Admin::layouts.master')
@section('content')
    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-mail-open icon-gradient bg-mixed-hopes"></i>
                        </div>
                        <div>
                            {{__('Email Settings')}}
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

            <div class="main-card card card-btm-border border-primary">
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="card-title"> {{__('Email Signture')}} </label>
                                <div class="clearfix"></div>
                                <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="radio" name="email_signture" id="s_use"
                                        value="option1" checked>
                                    <label class="form-check-label" for="s_use">{{__('Use')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="email_signture" id="s_not_use"
                                        value="option2">
                                    <label class="form-check-label" for="s_not_use">{{__('Not Used')}}</label>
                                </div>
                                <div id="SiteInfoeditor1" name="SiteInfoeditor1">{{__('Create your Signature')}}</div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="card-title"> {{__('Email Suggestion')}} </label>
                                <div class="clearfix"></div>
                                <div class="form-check form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="show Email" id="inlineRadio1"
                                        value="option1">
                                    <label class="form-check-label form-label" for="inlineRadio1">{{__('Enable')}}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="show Email" id="inlineRadio2"
                                        value="option2" checked>
                                    <label class="form-check-label form-label" for="inlineRadio2">{{__('Disable')}}</label>
                                </div>
                                <div class="w-100 border border-info text-muted p-4">
                                    <ul>
                                        <li> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, cumque vero
                                            ipsa aliquid tempore fugit sed ducimus rerum facere sint. Ducimus praesentium
                                            necessitatibus eius sequi asperiores odit, deleniti perferendis soluta. </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <button class=" btn btn-primary ">{{__('Save changes')}} </button>
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
        let editor;
        ClassicEditor.create(document.querySelector('#SiteInfoeditor1'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
