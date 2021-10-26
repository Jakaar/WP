@extends('Admin::layouts.master')

@section('content')
<style>
    .ck-editor__editable {
        min-height: 100px;
    }
    iframe {
        width:  100%;
        height: 100%;
    }
</style>
<section>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                   {{__('Banner Management')}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="Refresh" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>

            </div>

        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example"  class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>{{__('Number')}}</th>
                    <th>{{__('Group Name')}}</th>
                    <th>{{__('Code')}}</th>
                    <th>{{__('Image')}}</th>
                    <th>{{__('Form')}}</th>
                    <th>{{__('Number Of Line-Wrapped Banners')}}</th>
                    <th>{{__('Is Used')}}</th>
                    <th>{{__('Edit/Delete')}}</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">{{__('MainBanner')}}</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">{{__('Main')}}</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">세로형</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">가로형</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">leftBanner</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">left</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">right</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">mainBanner</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">mainBanner</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">mainBanner</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">mainBanner</a></td>
                        <td><a onclick="javascript:$.Nav('go','./banner_write', {bseq:2});">main</a></td>
                        <td>2</td>
                        <td>세로</td>
                        <td>1</td>
                        <td>사용함</td>
                        <td>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-primary" onclick="window.location.href='/cms/banner_management/editBanner'">
                                <i class="pe-7s-pen btn-icon-wrapper"></i>
                            </button>
                            <button class="btn-sm mb-2 me-2 btn-icon btn-icon-only btn-pill btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"></i>
                            </button>
                        </td>
                    </tr>


                </tbody>
            </table>
            <nav>
                <ul class="pagination mb-5">
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">«</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


</section>
@endsection