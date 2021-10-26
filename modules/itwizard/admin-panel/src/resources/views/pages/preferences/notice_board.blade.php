@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{__('Notice Board')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}"
                        class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="card mb-3  card-btm-border border-primary class ">
        <div class="card-body ">
            <div class="float-start">
                <div class="card-title"> {{__('Notice Board Creation Code')}} </div>
            </div>
            <div class="float-end">
                <button class="btn mb-3 btn-secondary">{{__('Creation Code Copy')}} </button>
            </div>
            <div class="clearfix"></div>
            <div class="bg-light p-2">
                <code id="code">
                        <span>&lt;jsp:include page="/module/board" flush="true"&gt;<br>
                            	&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsp:param name="bcode" value="[게시판코드]"/&gt;<br>
                            &lt;/jsp:include&gt;
                        </span>
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
                            <li>게시판을 출력하고자 하는 위치에 예제 코드와 같은 블럭을 추가합니다.</li>
                            <li>bcode [게시판코드]는 아래 게시판 목록의 게시판코드로 변경합니다.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card  card-btm-border border-primary class">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="BulletInBoard">
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

                        <td>1</td>
                        <td>notice</td>
                        <td>notice</td>
                        <td>3</td>
                        <td>20</td>
                        <td>notice</td>
                        <td>notice</td>
                        <td>notice</td>
                        <td>notice</td>
                        <td>notice</td>
                        <td>
                            <a href="" class="btn btn-sm btn-light">{{__('Creation Code Copy')}}</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <!--        <div class="card-body">
            <h5 class="card-title">{{__('Top 10 Viewed pages')}}</h5>
            <table id="noControlledTable1" style="width: 100%;" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <td>{{__('Menu Name')}}</td>
                    <td>{{__('Title')}}</td>
                    <td>{{__('Created At')}}</td>
                    <td>{{__('Views')}}</td>
                </tr>
                </thead>
            </table>
        </div>-->
    </div>
@endsection
