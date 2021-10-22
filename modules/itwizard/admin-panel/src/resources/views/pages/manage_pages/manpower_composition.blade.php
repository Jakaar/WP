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
                    {{__('Manpower Composition And Operation Plan')}}
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
                    <input value="인력구성 및 운용방안" placeholder="with ABC a placeholder" type="email" class="form-control text-lowercase">
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
                        <input value="/operation_plan" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <input value="operation_plan" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="position-relative mb-3" id="PageContent2" name="PageContent">
                        <section class="section">
                            <div class="empty-space">&nbsp;</div>

                            <div class="section-content container pad1">
                                <h1 class="big text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Manpower composition and operation plan</font></font></h1>

                                <h1 class="medium text-center fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Project execution is based on 5 people (including interpreter PM), and the </font></font><br />
                                    <b style="color: #c43f2b"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">period is renewed at least every 6 months.</font></font></b></h1>

                                <h5 class="large fw-light text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">In principle, the working method is that local employees in Mongolia carry out the project remotely.</font></font></h5>

                                <div class="empty-space">&nbsp;</div>

                                <div class="row rowpad16 rowpad-mobile">
                                    <div class="col-6 col-lg-3">
                                        <div class="operation-plan-item">
                                            <div class="img-wrap" style="background-image: url(/images/dummy/oplan1.png)"><img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                            <div class="ratio-wrap"><img alt="" class="w-100" src="/images/ratio-1-1.png" />
                                                <div class="ratio-content">
                                                    <div class="operation-plan-content">
                                                        <div class="operation-plan-number"><span>01</span></div>

                                                        <div class="operation-plan-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Development team composition</font></font></div>

                                                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Business support (interpretation/translation) 1 </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">programmer Intermediate 3 </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">programmers 1 beginner programmer </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">※ Developer level can be </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">adjusted </font><font style="vertical-align: inherit;">by customer request </font><font style="vertical-align: inherit;">.</font></font></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6  col-lg-3">
                                        <div class="operation-plan-item mt-5">
                                            <div class="img-wrap" style="background-image: url(/images/dummy/oplan2.png)"><img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                            <div class="ratio-wrap"><img alt="" class="w-100" src="/images/ratio-1-1.png" />
                                                <div class="ratio-content">
                                                    <div class="operation-plan-content">
                                                        <div class="operation-plan-number"><span>02</span></div>

                                                        <div class="operation-plan-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Technical details available to developers</font></font></div>

                                                        <div>JAVA<br />
                                                            PHP<br />
                                                            ASP.NET / C#<br />
                                                            Angular.JS, AJAX, React.JS</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6  col-lg-3">
                                        <div class="operation-plan-item">
                                            <div class="img-wrap" style="background-image: url(/images/dummy/oplan3.png)"><img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                            <div class="ratio-wrap"><img alt="" class="w-100" src="/images/ratio-1-1.png" />
                                                <div class="ratio-content">
                                                    <div class="operation-plan-content">
                                                        <div class="operation-plan-number"><span>03</span></div>

                                                        <div class="operation-plan-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">How the team works</font></font></div>

                                                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">It is operated as a team dedicated to the contracting company. </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">We </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">do not carry </font><font style="vertical-align: inherit;">out any work other than contract work </font><font style="vertical-align: inherit;">.</font></font></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6  col-lg-3">
                                        <div class="operation-plan-item mt-5">
                                            <div class="img-wrap" style="background-image: url(/images/dummy/oplan4.png)"><img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                            <div class="ratio-wrap"><img alt="" class="w-100" src="/images/ratio-1-1.png" />
                                                <div class="ratio-content">
                                                    <div class="operation-plan-content">
                                                        <div class="operation-plan-number"><span>04</span></div>

                                                        <div class="operation-plan-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Other inquiries</font></font></div>

                                                        <div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Direct inquiries: 010-2297-4223 (CEO </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yanghee </font></font><br />
                                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Moon </font><font style="vertical-align: inherit;">) </font><font style="vertical-align: inherit;">tagoplus@gmail.com </font><font style="vertical-align: inherit;">1644-5805, 070-8244-5807</font></font></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="empty-space">&nbsp;</div>

                            <div class="d-flex justify-content-center mt-5"><a class="btn btn-outline-dark btn-square ml-1" href="/form/list/030900?mode=write" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Personnel Outsourcing Inquiries</font></font></a> <a class="btn btn-primary btn-square ml-1" href="/common/몽골ITwizard_몽골사업소개서_20210720.pdf" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Download Business Profile</font></font></a></div>

                            <div class="empty-space large">&nbsp;</div>

                            <div class="empty-space">&nbsp;</div>
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
        ClassicEditor.create(document.querySelector('#PageContent2'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
