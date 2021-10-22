@extends('Admin::layouts.master')
@section('content')
<section>
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
        .ck-editor__editable {
            max-height: 400px;
        }
    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Business Introduction')}}
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
                            <option>Solution</option>
                            <option>Mongolia manpower outsourcing</option>
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
                    <input value="사업소개" placeholder="with ABC a placeholder" class="form-control text-lowercase">
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
                        <input value="/introduction" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <input value="introduction" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="position-relative mb-3" id="PageContent3" name="PageContent">
                        <section class="section">
                            <div class="empty-space">&nbsp;</div>

                            <div class="section-content container">
                                <h1 class="big text-center">오시는 길</h1>
                                <!-- Not Allowed Tag Filtered --><iframe allowfullscreen="" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3166.7338419406506!2d126.88792498503851!3d37.46700567290275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b61e90abef5cf%3A0x4f8c10f4fb574e7e!2zNDAy7Zi4LCA1IEdhc2FuIGRpZ2l0YWwgMS1ybywgR2FzYW4tZG9uZywgR2V1bWNoZW9uLWd1LCBTZW91bCwg06jQvNC906nQtCDQodC-0LvQvtC90LPQvtGB!5e0!3m2!1smn!2smn!4v1626922028227!5m2!1smn!2smn" style="border:0;" width="100%"></iframe>

                                <div class="d-md-flex mappage-item">
                                    <div class="mappage-title">한국본사</div>

                                    <div class="mappage-content">
                                        <div class="d-inline-flex align-items-center mr-5 w-100 mb-3"><img alt="" class="mr-3" src="/images/contact-icon-map.png" /> 서울 금천구 가산디지털1로 5 대륭테크노타운20차 402호 1644-5805 02-6919-1793</div>

                                        <div class="d-inline-flex align-items-center mr-5"><img alt="" class="mr-3" src="/images/contact-icon-phone.png" /> 1644-5805</div>

                                        <div class="d-inline-flex align-items-center mr-5"><img alt="" class="mr-3" src="/images/contact-icon-fax.png" /> 02-6919-1793</div>
                                    </div>
                                </div>
                                <!-- Not Allowed Tag Filtered --><iframe allowfullscreen="" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1337.1482256923405!2d106.9252498!3d47.9113011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5d969350c2a9dc4d%3A0xbfd0f388542c67f0!2sExpress%20tower!5e0!3m2!1smn!2smn!4v1626922155828!5m2!1smn!2smn" style="border:0;" width="100%"></iframe>

                                <div class="d-md-flex mappage-item">
                                    <div class="mappage-title">몽골본사</div>

                                    <div class="mappage-content">
                                        <div class="d-inline-flex align-items-center mr-5 w-100 mb-3"><img alt="" class="mr-3" src="/images/contact-icon-map.png" /> #1104-1105, Express tower, Peace Avenue, 1th khoroo, Chingeltei district, Ulaanbaatar city, Mongolia</div>

                                        <div class="d-inline-flex align-items-center mr-5 w-100 mb-3"><img alt="" class="mr-3" src="/images/contact-icon-phone.png" /> +976-7011-0023</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="empty-space large"></div> -->

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
        ClassicEditor.create(document.querySelector('#PageContent3'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
