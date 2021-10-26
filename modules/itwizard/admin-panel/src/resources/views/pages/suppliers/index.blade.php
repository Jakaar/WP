@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-mail icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Form Mail Manager') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                {{-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus"></i>
                    {{ __('Create a Form Mail') }}
                </button> --}}
            </div>
        </div>
    </div>

    <div class="card mb-3 card-btm-border border-primary">
        <div class="card-body">
            <div class="card-title"> {{ __('Conditional Search') }} </div>
            <div class=" input-group">
                <div class="col-auto">
                    <select name="" id="" class="form-control">
                        <option value=""> = processing status = </option>
                        <option value=""> Waiting </option>
                        <option value=""> Processing Complate </option>
                    </select>
                </div>
                <div class="col-auto">
                    <select name="" id="" class="form-control">
                        <option value=""> = Contents = </option>
                        <option value=""> Waiting </option>
                        <option value=""> Processing Complate </option>
                    </select>
                </div>
                <div class="col-auto">
                    <input type="search" class="form-control" placeholder="{{ __('Keywords') }}">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary px-5"> {{ __('Search') }} </button>
                    <button class="btn btn-outline-secondary px-5 ml-3"> {{ __('Reset Search') }} </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary">
        <div class="card-body">
            <div class="card-title"> Total number of registrations: 19</div>
            <table class="table table-striped table-hover" id="BasicTable">
                <thead>
                    <th> {{ __('Number') }} </th>
                    <th> {{ __('Type') }} </th>
                    <th> {{ __('Title') }} </th>
                    <th> {{ __('Date Created') }} </th>
                    <th> {{ __('Processing Status') }} </th>
                    <th> {{ __('Action') }} </th>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Personnel Outsourcing Inquiries </td>
                        <td> ASP.NET Developer Dispatch Inquiry </td>
                        <td> {{ now()->format('Y-m-d') }} </td>
                        <td> Waiting </td>
                        <td>
                            <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                {{ 'Edit' }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ 'Delete' }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Form mail management') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-lg-8 mb-3">
                            <label for="" class="form-label fw-bold">
                                {{ __('processing status') }}
                            </label>
                            <select name="" id="" class="form-control form-select">
                                <option value=""> = processing status = </option>
                                <option value=""> Waiting </option>
                                <option value=""> Processing Complate </option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-bordered table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th> {{ __('Name') }} </th>
                                        <td> Lee Sang-deok </td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('Company Name') }} </th>
                                        <td> ring interactive </td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('E-Mail') }} </th>
                                        <td> sdlee@ringi.co.kr</td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('Contact') }} </th>
                                        <td> sdlee@ringi.co.kr</td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('Title') }} </th>
                                        <td> ASP.NET Developer Dispatch Inquiry</td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('Inquiries') }} </th>
                                        <td> <textarea name="" id="" cols="30" rows="10" disabled class="form-control">링인터랙티브 이상덕이사입니다.
                                                    저희 회사는 교육분야 SI/SM을 주로 하는 회사인데, 고객사 중에 자체 개발을 해서 개발인력 파견만 요청하는 회사가 있습니다.  
                                                    
                                                    가산동에 있고, 개발자 정직원 40여명과 프리랜서 개발자 20여명이 함께 근무중입니다. 7,8개월 기간의 새로운 프로젝트가 생겨서 15명 정도 프리랜서를 충원해야 하는 상황인데 국내에 ASP.NET 웹 개발자가 별로 없어서 문의 드립니다. 책을 활용한 온라인 교육 서비스이고, MVC 패턴의 ASP.NET, MS-SQL로 개발해야 합니다.
                                                    
                                                    1. 몽골 현지에서만 프로젝트를 진행하시나요? 한국에 상주 가능한 인력은 없나요?
                                                    
                                                    2. 몽골에서만 진행 가능하다면, 업무진행에 어려움은 없을까요? 기획과 디자인, 퍼블은 한국에서 진행하고 있고 개발만 담당하면 되는데, 보안문제나 다른 어려움은 없을까요?
                                                    
                                                    3. 한국에 개발자를 파견할 수도 있다면, 비자문제나 저희가 준비해야 할것들이 어떤 것이 있을까요?
                                                    
                                                    몽골 개발자들과 일해본 적이 없어서 가능성을 확인하고자 문의드립니다.
                                                    
                                                    010-5319-4484, sdlee@ringi.co.kr 로 연락주시면 됩니다. </textarea></td>
                                    </tr>
                                    <tr>
                                        <th> {{ __('Required technical manpower') }} </th>
                                        <td> C#, etc.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="" id="" cols="30" rows="10" class="form-control test"></textarea>
                            <div class="form-check d-inline-block float-end fw-bold"><input type="checkbox" id="receive"
                                class="form-check-input"><label for="receive" class="form-check-label">
                                {{ __("Send reply by e-mail (If checked, reply will be sent to the author's e-mail.)") }} </label></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> {{ __('Close') }} </button>
                    <button type="button" class="btn btn-primary"> {{ __('Confirm') }} </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            let editor;
            ClassicEditor.create(document.querySelector('.test'))
                .then(newEditor => {
                    editor = newEditor;
                    editor.ui.view.editable.element.style.height = '300px';
                })
                .catch(error => {

                });
        })
    </script>
@endsection
