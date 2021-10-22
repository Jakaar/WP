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
                {{__('Key Skills')}}
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
                        <input value="주요 보유 기술" placeholder="with ABC a placeholder" type="email" class="form-control text-lowercase">
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
                            <input value="/technology" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <input value="technology" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                        </div>
                        <div class="position-relative mb-3" id="PageContent" name="PageContent">
                            <section class="section">
                                <div class="empty-space">&nbsp;</div>
                                <div class="section-content container">
                                    <h1 class="big text-center">주요 보유 기술</h1>
                                    <h1 class="medium text-center fw-light">몽골 아웃소싱 인력만의 <b style="color: #c43f2b">주요 보유 기술!</b></h1>
                                    <div class="row rowpad16">
                                        <div class="offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
                                            <div class="skills-wrap">
                                                <div class="skills-center">
                                                    <div class="skills-center-content-wrap"><img alt="" class="w-100 d-none d-lg-block" src="/images/ratio-1-1.png" />
                                                        <div class="skills-center-content d-flex align-items-center justify-content-center">Mongol Outsourcing</div>
                                                    </div>
                                                </div>

                                                <div class="skill-items-wrap">
                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">JAVA<br />
                                                            JAVA SPRING<br />
                                                            JAVA SPRING BOOT</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>

                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">PYTHON<br />
                                                            DJANGO</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>

                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">PHP, LARAVEL<br />
                                                            CODEIGNITER</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>

                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">JAVA SCRIPT<br />
                                                            VUEJS, REACTJS<br />
                                                            ANGULA</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>

                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">NODEJS</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>

                                                    <div class="skill-item">
                                                        <div class="skill-item-content d-flex align-items-center justify-content-center text-center">REACT NATIVE<br />
                                                            FLUTTER</div>

                                                        <div class="skill-item-border">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="empty-space large">&nbsp;</div>

                                <div class="empty-space large">&nbsp;</div>

                                <div class="empty-space ">&nbsp;</div>
                            </section>

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
        ClassicEditor.create(document.querySelector('#PageContent'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
