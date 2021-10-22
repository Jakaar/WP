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
            margin: 0 0 0px 0;
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
            <label class="mb-0 card-title col">{{__("Main Notice Board Creation Code")}}</label>
            <button type="button" onclick=""
                    class="btn btn-light btn-sm ml-auto col-1">생성코드복사
            </button>
        </div>
        <div class="container-fluid">
                <pre class="custom">
                   <code id="codeSample" class="html hljs xml">
<span class="hljs-tag">&lt;<span class="hljs-name">jsp:include</span> <span class="hljs-attr">page</span>=<span
        class="hljs-string">"/module/rb"</span> <span class="hljs-attr">flush</span>=<span
        class="hljs-string">"true"</span>&gt;</span>
	<span class="hljs-tag">&lt;<span class="hljs-name">jsp:param</span> <span class="hljs-attr">name</span>=<span
            class="hljs-string">"rbseq"</span> <span class="hljs-attr">value</span>=<span class="hljs-string">"[메인게시물번호]"</span> /&gt;</span>
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
        <h4 class="check_tit">체크사항</h4>
        <ul class="ml10">
            <li>최근 게시물을 가져올 수 있습니다.</li>
            <li>출력하고자 하는 위치에 예제 코드와 같은 블럭을 추가합니다.</li>
            <li>rbseq <b>[메인게시물번호]</b>는 아래 메인게시물 목록의 순번으로 변경합니다.</li>
            <!-- <li>- bcseq <b>[카테고리번호]</b>를 추가하면 해당 카테고리의 게시물만 가져옵니다. 카테고리를 구분하지 않으려면 value를 빈 값으로 넣거나, 파라미터 라인을 삭제하면 됩니다.</li> -->
        </ul>
    </div>

    {{--

                Body section
                showing the table under here
    --}}

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
										<span id="spanCode_7" class="d-none">
&lt;jsp:include page="/module/rb.do" flush="true"&gt;
	&lt;jsp:param name="rbseq" value="7" /&gt;
&lt;/jsp:include&gt;
										</span>
                            <a href="" class="btn btn-sm btn-light">{{__('Creation Code Copy')}}</a>
                            <a href=""
                               class="btn btn-sm btn-primary">{{__('Preview')}}</a>
                            <a href=""
                               class="btn btn-sm btn-primary">{{__('Change')}}</a>
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
