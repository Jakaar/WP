@extends('Admin::layouts.master')
@section('content')
<section>
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
                    {{__('Personnal Outsourcing System')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" id="reload_page" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card mt-4 card-btm-border card-shadow-primary border-primary">
        <div class="card-header-title fsize-2 text-capitalize fw-normal px-3 py-3">
            {{__('Page Create')}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="position-relative mb-3">
                        <label for="exampleSelect" class="form-label">Menu*</label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="input-group">
                        <select name="select" id="exampleSelect" class="form-select form-control">
                            <option>Mongolia manpower outsourcing</option>
                            <option>Solution</option>
                            <option>Portfolio</option>
                            <option>Service center</option>
                            <option>About us</option>
                        </select>
                        <div class="input-group-text">
                            <span class="">{{ ('Group Management') }}</span>
                        </div>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-text">
                            <span class="">Priority</span>
                        </div>
                        <select name="select" id="exampleSelect" class="form-select form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="position-relative p-2">
                        <label for="exampleSelect" class="form-label">Page Name*</label>
                    </div>
                    <div class="position-relative p-2">
                        <label for="exampleSelect" class="form-label">Jsp Connection</label>
                    </div>
                    <div class="position-relative p-2 mt-3">
                        <label for="exampleSelect" class="form-label">Page Url</label>
                    </div>
                    <div class="position-relative p-2 mt-2">
                        <label for="exampleSelect" class="form-label">Page Code</label>
                    </div>
                    <div class="position-relative p-2 mt-2">
                        <label for="exampleSelect" class="form-label">Page Content</label>
                    </div>
                </div>
                <div class="col-md-10">
                    <input value="인력 아웃소싱 체계" placeholder="with ABC a placeholder" type="email" class="form-control text-lowercase">
                    <div class="jsp-connection p-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Use</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Not Used</label>
                        </div>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-text">
                            <span class="">{{ config('app.url') }}</span>
                        </div>
                        <input value="/outsourcing_system" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <input value="outsourcing_system" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="position-relative mb-3" id="PageContent1" name="PageContent">
                        <section class="section">
                            <div class="empty-space">&nbsp;</div>

                            <div class="section-content container">
                                <h1 class="big text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Personnel Outsourcing System</font></font></h1>

                                <h1 class="medium text-center fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ITwizard LLC </font><b style="color: #c43f2b"><font style="vertical-align: inherit;">performs IT development services in Korea</font></b><font style="vertical-align: inherit;"> by utilizing manpower through Mongolian IT manpower </font></font><br />
                                    <b style="color: #c43f2b"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">!</font></font></b></h1>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="outsource-wrap">
                                            <div class="w-100">
                                                <div class="d-md-flex  position-relative"><img alt="" class="outsource-connector" src="/images/chain.png" />
                                                    <div class="outsource-item">
                                                        <h2 class="outsource-item-title"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ITwizard LLC</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Local subsidiary in Mongolia)</font></font></h2>

                                                        <div class="outsource-item-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ITwizrd LLC Founder </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">General service agency business </font><font style="vertical-align: inherit;">in </font><font style="vertical-align: inherit;">Korea Corporate </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">service contract and management support </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">business progress management</font></font></div>
                                                    </div>

                                                    <div class="outsource-item">
                                                        <h2 class="outsource-item-title"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tago Plus Co., Ltd.</font></font></b></h2>

                                                        <div class="outsource-item-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ITwizrd Required technical manpower hiring and management </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Office, equipment (office equipment, Internet, PC, etc.) purchase and management </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business progress management (PM)</font></font></div>
                                                    </div>
                                                </div>

                                                <div class="outsource-item-bottom-line">&nbsp;</div>
                                            </div>

                                            <div class="outsource-tag-wrap  d-flex">
                                                <div class="outsource-tag"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domestic IT company A</font></font></div>

                                                <div class="outsource-tag"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domestic IT company B</font></font></div>

                                                <div class="outsource-tag"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domestic IT company C</font></font></div>

                                                <div class="outsource-tag"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domestic IT company D</font></font></div>

                                                <div class="outsource-tag"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Domestic IT company E</font></font></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="empty-space ">&nbsp;</div>
                        </section>
                        <!-- end section -->
                    </div>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <button class="btn-wide mb-2 me-2 btn btn-outline-primary btn-lg">Save</button>
                    <button class="btn-wide mb-2 me-2 btn btn-outline-dark btn-lg">List</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        let editor;
        ClassicEditor.create(document.querySelector('#PageContent1'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
