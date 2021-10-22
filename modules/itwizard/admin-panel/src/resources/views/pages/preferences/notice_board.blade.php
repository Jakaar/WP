@extends('Admin::layouts.master')
@section('content')
    <style type="text/css">

        /*

github.com style (c) Vasily Polovnyov <vast@whiteants.net>

*/

        /*
            customized css
        */
        @import url('//fonts.googleapis.com/css?family=Roboto+Mono');

        pre.custom {
            margin: 0 0 10px 0;
        }

        pre.custom code {
            font-family: 'Roboto Mono';
            font-size: 12px;
            overflow-y: auto;
            overflow-x: auto;
            padding: 0 0 15px 25px;
            line-height: 1.7em;
        }


        /*
            customized css
        */
        .tago-callout {
            padding: 1.25rem;
            margin-bottom: 1.25rem;
            border: 1px solid #eee;
            border-left-width: .25rem;
            border-radius: .25rem;
            border-left-color: #e92626;
            background-color: white;
            position: relative;
            z-index: 1;
        }

        .tago-callout p:last-child {
            margin-bottom: 0;
        }

        .callout-warning {
            border-left-color: #e92626;

        }

        .callout-warning ul li {
            font-size: .9375rem;
        }


        .hljs {
            display: block;
            overflow-x: auto;
            padding: 0.5em;
            color: #333;
            background: #f8f8f8;
        }

        .hljs-comment,
        .hljs-quote {
            color: #998;
            font-style: italic;
        }

        .hljs-keyword,
        .hljs-selector-tag,
        .hljs-subst {
            color: #333;
            font-weight: bold;
        }

        .hljs-number,
        .hljs-literal,
        .hljs-variable,
        .hljs-template-variable,
        .hljs-tag .hljs-attr {
            color: #008080;
        }

        .hljs-string,
        .hljs-doctag {
            color: #d14;
        }

        .hljs-title,
        .hljs-section,
        .hljs-selector-id {
            color: #900;
            font-weight: bold;
        }

        .hljs-subst {
            font-weight: normal;
        }

        .hljs-type,
        .hljs-class .hljs-title {
            color: #458;
            font-weight: bold;
        }

        .hljs-tag,
        .hljs-name,
        .hljs-attribute {
            color: #000080;
            font-weight: normal;
        }

        .hljs-regexp,
        .hljs-link {
            color: #009926;
        }

        .hljs-symbol,
        .hljs-bullet {
            color: #990073;
        }

        .hljs-built_in,
        .hljs-builtin-name {
            color: #0086b3;
        }

        .hljs-meta {
            color: #999;
            font-weight: bold;
        }

        .hljs-deletion {
            background: #fdd;
        }

        .hljs-addition {
            background: #dfd;
        }

        .hljs-emphasis {
            font-style: italic;
        }

        .hljs-strong {
            font-weight: bold;
        }

        .card {
            margin-bottom: 30px;
            border: 0;
            box-shadow: 0 0 2rem 0 rgb(136 152 170 / 15%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            border: 1px solid rgba(0, 0, 0, .05);
            border-radius: .375rem;
            background-color: #fff;
            padding: 1.875rem;
            padding-bottom: 0;
            background-clip: border-box;
        }
    </style>



    {{--    Header section
            notice board code heseg
    --}}
    <div class="card">
        <div class="card-header border-0 d-flex container-fluid">
            <label class="mb-0 card-title col">{{__("Notice Board Creation Code")}}</label>
            <button type="button" onclick=""
                    class="btn btn-light btn-sm ml-auto col-1">생성코드복사
            </button>
        </div>
        <div class="container-fluid">
                <pre class="custom">
                    <code id="codeSample" class="html hljs xml">
                <span class="hljs-tag">&lt;<span class="hljs-name">jsp:include</span>
                    <span class="hljs-attr">page</span>=<span
                        class="hljs-string">"/module/board"</span> <span class="hljs-attr">flush</span>=<span
                        class="hljs-string">"true"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">jsp:param</span> <span
                            class="hljs-attr">name</span>=<span
                            class="hljs-string">"bcode"</span> <span class="hljs-attr">value</span>=<span
                            class="hljs-string">"[게시판코드]"</span> /&gt;</span>
                <span class="hljs-tag">&lt;/<span class="hljs-name">jsp:include</span>&gt;</span>
                    </code>
                </pre>
        </div>
    </div>

    {{--
            Information section
            !!!! check points

            --}}
    <div class="tago-callout callout-warning">
        <h4 class="check_tit">{{__('Check Points')}}</h4>
        <ul class="ml10">
            <li>게시판을 출력하고자 하는 위치에 예제 코드와 같은 블럭을 추가합니다.</li>
            <li>bcode <b>[게시판코드]</b>는 아래 게시판 목록의 게시판코드로 변경합니다.</li>
        </ul>
    </div>

    {{--

                Body section
                showing the table under here
    --}}

    <div class="card">
        <div class="card-title border-0">
            <div class="d-flex">
                <label class="mb-0">{{__('Main Notice Board Number')}} : 11</label>
                <a href="" class="btn btn-sm btn-primary ml-auto ">{{__('Create Main Notice Board')}}</a>
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
                        <th>{{__('Type of Notice Board')}}</th>
                        <th>{{__('Skin')}}</th>
                        <th>{{__('List View')}}</th>
                        <th>{{__('Content View')}}</th>
                        <th>{{__('Writing')}}</th>
                        <th>{{__('Reply')}}</th>
                        <th>{{__('Comments')}}</th>
                        <th>{{__('Function')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>11</td>
                        <td>formList</td>
                        <td>formlist</td>
                        <td>일반형 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>portfolio</td>
                        <td>portfolio</td>
                        <td>portfolio</td>
                        <td>portfolio</td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>staff</td>
                        <td>staff</td>
                        <td>staff</td>
                        <td>staff</td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href=""
                               class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>GallMong</td>
                        <td>갤러리</td>
                        <td>이미지 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>notice</td>
                        <td>공지사항</td>
                        <td>일반형 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href=""
                               class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>video</td>
                        <td>몽골 법인 ITwizard TV 유튜브</td>
                        <td>동영상</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href=""
                               class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>answerBoard</td>
                        <td>묻고답하기</td>
                        <td>답변형 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>business</td>
                        <td>사업실적</td>
                        <td>사업실적</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>


                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>gallery</td>
                        <td>실적갤러리</td>
                        <td>이미지 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td><a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>certificate</td>
                        <td>인증현황</td>
                        <td>썸네일 게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>
                            <a href="" class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>faqMong</td>
                        <td>자주 묻는 질문</td>
                        <td>FAQ게시판</td>
                        <td></td>

                        <td>전체</td>
                        <td>전체</td>
                        <td>관리자</td>
                        <td>전체</td>
                        <td>전체</td>

                        <td>

                            <a href=""
                               class="btn btn-light btn-sm">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
