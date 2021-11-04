@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit"></i>
                </div>
                <div class="">
                    {{__('Main post')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}"
                        class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>{{__('Create Main Notice Board')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3  card-btm-border border-primary class">
        <div class="card-body">
            <div class="float-start">
                <div class="card-title"> {{__('Main Notice Board Creation Code')}} </div>
            </div>
            <div class="clearfix"></div>
            <div class="bg-light p-2">
                <code id="code">
                    @ include
                </code>
            </div>
        </div>
    </div>
    <div class="card mb-3  card-btm-border border-primary class">
        <div class="card-body">
            <div class="">
                <div class="card-title">{{__('Check Points')}}</div>
                <ul class="todo-list-wrapper list-group list-group-flush ">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info"></div>
                        <ul>
                            <li>최근 게시물을 가져올 수 있습니다.</li>
                            <li>출력하고자 하는 위치에 예제 코드와 같은 블럭을 추가합니다.</li>
                            <li>rbseq <b>[메인게시물번호]</b>는 아래 메인게시물 목록의 순번으로 변경합니다.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card mb-3 card-btm-border border-primary class">
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
                <table class="table table-striped table-hover" id="NewsTable">
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
                            <a href="" class="btn btn-sm btn-outline-secondary">{{__('Creation Code Copy')}}</a>
                            <a href="" class="btn btn-sm btn-info">{{__('Preview')}}</a>
                            <a href="" class="btn btn-sm btn-primary">{{__('Edit')}}</a>
                            <a href="" class="btn btn-sm btn-danger">{{__('Delete')}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
@section('modal')
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{__('Main post')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="" action="" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label fw-bold">게시판코드</label>
                                <div class="col">
                                    <select class="form-control" id="" name="">
                                        <option value="">= 게시판 선택 =</option>
                                        <option value="">formlist</option>
                                        <option value="">portfolio</option>
                                        <option value="">staff</option>
                                        <option value="">갤러리</option>
                                        <option value="">공지사항</option>
                                        <option value="">몽골 법인 ITwizard TV 유튜브</option>
                                        <option value="">묻고답하기</option>
                                        <option value="">사업실적</option>
                                        <option value="">실적갤러리</option>
                                        <option value="">인증현황</option>
                                        <option value="">자주 묻는 질문</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label fw-bold">게시판 카테고리</label>
                                <div class="col">
                                    <select name="" class="form-control">
                                        <option value="">=선택안함=</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">연결 페이지</label>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">{{env('APP_URL')}}</span>
                                    </div>
                                    <select class="form-control" id="" name="">
                                        <option value="">= 선택 =</option>
                                        <option value="">자주 묻는 질문</option>
                                        <option value="">공지사항</option>
                                        <option value="">회사 유튜브</option>
                                        <option value="">묻고 답하기</option>
                                        <option value="">갤러리</option>
                                        <option value="">SMS Enterprise Reseller</option>
                                        <option value="">웹사이트</option>
                                        <option value="">모바일 및 앱</option>
                                    </select>
                                </div>
                                <small class="form-text text-danger">※ 연결 페이지를 빈 값으로 설정하면 링크가 적용되지 않습니다.</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label fw-bold">제목 글자 수</label>
                                <div class="col">
                                    <input type="text" name="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label fw-bold">노출 게시물 수</label>
                                <div class="col">
                                    <input type="text" name="" class="form-control" value="">
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold col-sm-2">기본 예제 적용</label>
                            <div class="col">
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="save">
                                    <label class="custom-control-label" for="rdoExample1">원래대로</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input "
                                           value="default">
                                    <label class="custom-control-label" for="rdoExample2">기본형</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="image">
                                    <label class="custom-control-label" for="rdoExample3">이미지</label>
                                </div>
                                <div class="custom-control custom-radio form-check-inline">
                                    <input type="radio" id="" name="rdoExample"
                                           class="custom-control-input"
                                           value="thumb">
                                    <label class="custom-control-label" for="rdoExample4">썸네일</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">코딩 시작</label>
                            <div class="col">
                                <textarea name="" cols="120" rows="1"
                                          class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">코딩 반복</label>
                            <div class="col"><textarea name="codingLoop" cols="120" rows="5"
                                                       class="coding form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label fw-bold">코딩 종료</label>
                            <div class="col"><textarea name="codingEnd" cols="120" rows="1"
                                                       class="coding form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="card mb-3 card-body">
                        <div class="card-title">{{__('Check Points')}}</div>
                        <ul class="todo-list-wrapper list-group list-group-flush ">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <ul>
                                    <li>메인게시물이 반복되는 부분은 [코딩 반복] 영역에 입력합니다.</li>
                                    <li>CSS 스타일이 별도로 필요할 경우 [코딩 시작] 부분에 class로 적용합니다.</li>
                                    <li>주의 : 미리보기의 경우 CSS 차이로 스타일이 정상적으로 나오지 않을 수 있습니다.</li>
                                    <li> #{SUBJECT} : 제목, #{DATE} : 날짜(SNS타입), #{LINK} : 링크([연결 페이지]에 입력한 URL로 구성),
                                        #{NEW} : 새 글 아이콘
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="text-center w-100">
                        <button class="btn btn-success">{{__('Save')}}</button>
                        <button type="button" class="btn btn-outline-info"
                                data-bs-dismiss="modal">{{__('Cancel')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>
@endsection
