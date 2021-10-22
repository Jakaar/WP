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
                    {{__('About Us')}}
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
                            <option>About us</option>
                            <option>Solution</option>
                            <option>Mongolia manpower outsourcing</option>
                            <option>Portfolio</option>
                            <option>Service center</option>
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
                    <input value="회사 소개" placeholder="with ABC a placeholder" type="email" class="form-control text-lowercase">
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
                        <input value="/about_us" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <input value="about_us" placeholder="with ABC a placeholder" class="form-control text-lowercase">
                    </div>
                    <div class="position-relative mb-3" id="PageContent5" name="PageContent">
                        <section class="section">
                            <div class="empty-space">&nbsp;</div>

                            <div class="section-content container">
                                <h1 class="big text-center">회사소개</h1>

                                <h1 class="medium text-center fw-light">인터넷 비스니스의 파트너! <b style="color: #c43f2b">해외 IT 사업의 선두주자 타고플러스</b></h1>

                                <h6 class="large fw-light text-center">(주)타고플러스는 웹기반의 각종 솔루션 및 어플리케이션 개발, 인터넷 마케팅, 그룹웨어 서비스에서 개발까지<br />
                                    인터넷상의 다양한 업무들을 수행하고 있습니다.<br />
                                    또한, 수많은 해외 프로젝트 수행 및 많은 해외 IT 아웃소싱 사업을 성공적으로 수행했습니다</h6>

                                <div class="empty-space">&nbsp;</div>

                                <div class="row">
                                    <div class="offset-lg-1 col-lg-10">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="overview-item d-flex flex-column mt-4">
                                                    <div class="img-wrap mb-4 mb-md-5">
                                                        <div class="overview-icon abs-filled d-flex align-items-center justify-content-center"><img alt="" src="/images/dummy/overview-icon1.png" /></div>

                                                        <div class="overview-circle abs-filled">&nbsp;</div>
                                                        <img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                                    <div class="text-center">
                                                        <div class="overview-title">자체적인 브랜드</div>

                                                        <div class="overview-text">자체적인 브랜드 BIZWIZ(Business+Wizard) 시리즈를 개발하여 출시하고 있습니다. 국내뿐만 아니라 일본과 인도네시아 까지도 그 기술력 및 성능을 인정받고 있습니다.</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="overview-item d-flex flex-column mt-4">
                                                    <div class="img-wrap mb-4 mb-md-5">
                                                        <div class="overview-icon abs-filled d-flex align-items-center justify-content-center"><img alt="" src="/images/dummy/overview-icon2.png" /></div>

                                                        <div class="overview-circle red abs-filled">&nbsp;</div>
                                                        <img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                                    <div class="text-center">
                                                        <div class="overview-title">웹표준, 웹접근성</div>

                                                        <div class="overview-text">기업의 얼굴이라고 할수도 있는 홈페이지 분야에서도 다년간의 경험으로 모바일웹, 웹표준, 웹접근성 등을 이용한 많은 프로젝트를 수행한 바 있습니다</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="overview-item d-flex flex-column mt-4">
                                                    <div class="img-wrap mb-4 mb-md-5">
                                                        <div class="overview-icon abs-filled d-flex align-items-center justify-content-center"><img alt="" src="/images/dummy/overview-icon3.png" /></div>

                                                        <div class="overview-circle abs-filled">&nbsp;</div>
                                                        <img alt="" class="w-100" src="/images/ratio-1-1.png" /></div>

                                                    <div class="text-center">
                                                        <div class="overview-title">웹기술의 선진화</div>

                                                        <div class="overview-text">향후 타고플러스에서는 21세기 인터넷의 발전과 디지털 산업의 활성화를 목적으로 인터넷 인프라 구상을 위한 전반적 시스템 수립에 신기술을 타기업보다 앞서 진행을 하고 있습니다.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="empty-space large">&nbsp;</div>

                            <div class="empty-space">&nbsp;</div>
                        </section>

                        <section class="section bg-light">
                            <div class="section-content container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <div>
                                            <div class="slogan-title">타고플러스(他故+Plus)의 의미처럼</div>

                                            <div class="slogan-text">남들과는 다른 사고로 창조적이고 독창적으로 한발 더 나아가 IT사업의 주도적인 업체가 되기 위해서<br />
                                                최선을 다하고 앞으로도 노력하는 기업, 신뢰있는 기업이 되기 위해<br />
                                                열심히 뛰겠습니다.</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5"><img alt="" class="slogan-img" src="/images/dummy/slogan.png" /></div>
                                </div>
                            </div>
                        </section>

                        <section class="section">
                            <div class="empty-space">&nbsp;</div>

                            <div class="section-content container">
                                <div class="custom-table">
                                    <div class="custom-table-row">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center w-100">
                                                    <div class="custom-table-head">사업자등록번호</div>

                                                    <div class="custom-table-text">113-86-13483</div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="d-none d-lg-flex align-items-center w-100">
                                                    <div class="custom-table-head">통신판매신고번호</div>

                                                    <div class="custom-table-text">구로 2008-00086호</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row d-block d-lg-none">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">통신판매신고번호</div>

                                            <div class="custom-table-text">구로 2008-00086호</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center w-100">
                                                    <div class="custom-table-head">법인명</div>

                                                    <div class="custom-table-text">(주)타고플러스</div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="d-none d-lg-flex align-items-center w-100">
                                                    <div class="custom-table-head">대표이사</div>

                                                    <div class="custom-table-text">문양희</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row d-block d-lg-none">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">대표이사</div>

                                            <div class="custom-table-text">문양희</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="d-flex align-items-center w-100">
                                                    <div class="custom-table-head">업태</div>

                                                    <div class="custom-table-text">서비스업, 소매업</div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="d-none d-lg-flex align-items-center w-100">
                                                    <div class="custom-table-head">종목</div>

                                                    <div class="custom-table-text">소프트웨어, 그룹웨어 등의 솔루션 개발 전자상거래</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row d-block d-lg-none">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">종목</div>

                                            <div class="custom-table-text">소프트웨어, 그룹웨어 등의 솔루션 개발 전자상거래</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">임직원 수</div>

                                            <div class="custom-table-text">50명</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">설립일</div>

                                            <div class="custom-table-text">2003년 11월 1일 아이티위즈 창업<br />
                                                2007년 5월 8일 (주)타고플러스로 법인 전환</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">본점소재지</div>

                                            <div class="custom-table-text">서울 금천구 가산디지털1로 5 대륭테크노타운20차 402호</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">몽골지사</div>

                                            <div class="custom-table-text">ITwizard LLC<br />
                                                #1104-1105, Express tower, Peace Avenue, 1th khoroo, Chingeltei district, Ulaanbaatar city, Mongolia<br />
                                                Homepage : <a href="http://www.itwizard.mn">http://www.itwizard.mn</a></div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">대표전화/팩스</div>

                                            <div class="custom-table-text">02-1644-5805 / 02-6919-1793</div>
                                        </div>
                                    </div>

                                    <div class="custom-table-row">
                                        <div class="d-flex align-items-center w-100">
                                            <div class="custom-table-head">대표메일</div>

                                            <div class="custom-table-text"><a href="mailto:admin@tagoplus.co.kr"><u>admin@tagoplus.co.kr</u></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="empty-space large">&nbsp;</div>
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
        ClassicEditor.create(document.querySelector('#PageContent5'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
