@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="font-icon-wrapper font-icon-lg">
                    <i class="pe-7s-help1 icon-gradient bg-night-fade"></i>
                </div>
                <div>
                    {{ __('Main Notice Board') }}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                        class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus"></i>{{__('Create Main Notice Board')}}
                </button>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title"> {{__('Main Notice Board Creation Code')}} </div>
            </div>
            <div class="clearfix"></div>
            <div class="bg-light p-2">
                <code id="code">
                        <span>&lt;jsp:include page="/module/rb" flush="true"&gt;<br>
                            	&nbsp;&nbsp;&nbsp;&lt;jsp:param name="rbseq" value="[메인게시물번호]" /&gt;<br>
                        &lt;/jsp:include&gt;
                        </span>
                </code>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="">
                <div class="card-title">{{__('Check Points')}}</div>
                <ul class="todo-list-wrapper list-group list-group-flush ">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-warning"></div>
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left me-2">
                                    * 최근 게시물을 가져올 수 있습니다.<br>
                                    * 출력하고자 하는 위치에 예제 코드와 같은 블럭을 추가합니다.<br>
                                    * rbseq <b>[메인게시물번호]</b>는 아래 메인게시물 목록의 순번으로 변경합니다.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <label class="card-title"> {{__('Main Notice Board Number')}} : 11</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="NewsTable">
                    <thead>
                    <tr>
                        <th>{{__('Number')}}</th>
                        <th>{{__('Notice Board Code')}}</th>
                        <th>{{__('Notice Board Name')}}</th>
                        <th>{{__('Notice Board Number')}}</th>
                        <th>{{__('Number of letters')}}</th>
                        <th>{{__('Category')}}</th>
                        <th>{{__('Function')}}</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>notice</td>
                        <td>공지사항</td>
                        <td>3</td>
                        <td>20</td>
                        <td>선택안함</td>
                        <td>
                            <a href="" class="btn btn-sm btn-light">{{__('Creation Code Copy')}}</a>
                            <a href="" class="btn btn-sm btn-primary">{{__('Preview')}}</a>
                            <a href="" class="btn btn-sm btn-primary">{{__('Change')}}</a>
                            <a href="" class="btn btn-sm btn-danger">{{__('Delete')}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer justify-content-center">
            <nav class="pagination-rounded">
                <ul class="pagination my-2 ">
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section("modal")

    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <!--                            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                </div>-->
                <div class="modal-body">
                    <form id="" action="" method="post">
                        <input type="hidden" name="">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>게시판코드</label>
                            <div class="col-sm-4">
                                <select class="form-control " id="boardCode" name="boardCode">
                                    <option value="">= 게시판 선택 =</option>
                                    <option value="formList">formlist</option>
                                    <option value="portfolio">portfolio</option>
                                    <option value="staff">staff</option>
                                    <option value="GallMong">갤러리</option>
                                    <option value="notice">공지사항</option>
                                    <option value="video">몽골 법인 ITwizard TV 유튜브</option>
                                    <option value="answerBoard">묻고답하기</option>
                                    <option value="business">사업실적</option>
                                    <option value="gallery">실적갤러리</option>
                                    <option value="certificate">인증현황</option>
                                    <option value="faqMong">자주 묻는 질문</option>
                                </select>
                            </div>
                            <label class=""><span class="text-danger">*</span>게시판 카테고리 </label>
                            <div class="">
                                <select name="" class="form-control">
                                    <option value="0">= 선택안함 =</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class=""><span class="text-danger">*</span>연결 페이지</label>
                            <div class="">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">http://192.168.0.147</span>
                                    </div>
                                    <select class="form-control " id="linkUrl" name="linkUrl">
                                        <option value="0">= 선택 =</option>
                                        <option value="030600">자주 묻는 질문</option>
                                        <option value="030100">공지사항</option>
                                        <option value="060100">회사 유튜브</option>
                                        <option value="030200">묻고 답하기</option>
                                        <option value="021000">갤러리</option>
                                        <option value="050104">SMS Enterprise Reseller</option>
                                        <option value="010100">웹사이트</option>
                                        <option value="010200">모바일 및 앱</option>
                                    </select>
                                </div>
                                <small class="form-text text-danger">※ 연결 페이지를 빈 값으로 설정하면 링크가 적용되지 않습니다.</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>제목 글자 수</label>
                            <div class="col-sm-4">
                                <input type="text" name="subjectCharCount" class="onlyNumber form-control" maxlength="2"
                                       value="">
                            </div>
                            <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>노출 게시물 수 </label>
                            <div class="col-sm-4">
                                <input type="text" name="articleCount" class="onlyNumber form-control" maxlength="2"
                                       value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger">*</span>기본 예제 적용</label>
                            <div class="col-sm-10">
                                <div class="d-flex align-items-center h-100">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="rdoExample1" name="rdoExample"
                                               class="custom-control-input"
                                               value="save" disabled="">
                                        <label class="custom-control-label" for="rdoExample1">원래대로</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-4">
                                        <input type="radio" id="rdoExample2" name="rdoExample"
                                               class="custom-control-input "
                                               value="default">
                                        <label class="custom-control-label" for="rdoExample2">기본형</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-4">
                                        <input type="radio" id="rdoExample3" name="rdoExample"
                                               class="custom-control-input"
                                               value="image">
                                        <label class="custom-control-label" for="rdoExample3">이미지</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-4">
                                        <input type="radio" id="rdoExample4" name="rdoExample"
                                               class="custom-control-input"
                                               value="thumb">
                                        <label class="custom-control-label" for="rdoExample4">썸네일</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger ">*</span>코딩 시작</label>
                            <div class="col-sm-10">
                                <textarea name="codingStart" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger ">*</span>코딩 반복</label>
                            <div class="col-sm-10">
                                <textarea name="codingLoop" cols="120" rows="10" class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"><span class="text-danger ">*</span>코딩 종료</label>
                            <div class="col-sm-10">
                                <textarea name="codingEnd" cols="120" rows="1" class="coding form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="tago-callout callout-warning">
                                    <h4 class="check_tit">체크사항</h4>
                                    <ul class="ml10">
                                        <li>- 메인게시물이 반복되는 부분은 [코딩 반복] 영역에 입력합니다.</li>
                                        <li>- CSS 스타일이 별도로 필요할 경우 [코딩 시작] 부분에 class로 적용합니다.</li>
                                        <li>- 주의 : 미리보기의 경우 CSS 차이로 스타일이 정상적으로 나오지 않을 수 있습니다.</li>
                                        <li>- #{SUBJECT} : 제목, #{DATE} : 날짜(SNS타입), #{LINK} : 링크([연결 페이지]에 입력한 URL로 구성),
                                            #{NEW} : 새 글 아이콘
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-sm-2">
                                <a onclick="" class="btn btn-primary btn-block btn-lg"
                                   style="cursor: pointer;">저장</a>
                            </div>
                            <div class="col-6 col-sm-2">
                                <a onclick=""
                                   class="btn btn-dark btn-block btn-lg" style="cursor: pointer;">취소</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
