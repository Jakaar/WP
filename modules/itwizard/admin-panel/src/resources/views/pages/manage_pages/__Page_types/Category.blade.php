{{--@inject('t','App\Helper\Helper')--}}
<div class="row">
    @if($content['type']->isCategory)
        <div class="col-md-4">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">
                    @if($content['categories'])
                        <div class="">
                            <div class="d-grid gap-2">
                                <button class="mb-2 btn btn-outline-success CreateCategoryModal">{{__('Create Category')}}</button>
                            </div>
                        </div>
                        <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menus">
                                    @foreach ($content['categories'] as $category)
                                        @if(count($category->subcategories) > 0)
                                            <li>
                                                <a href="{{route('page_content', ['slug' => explode('/',url()->current())[5], 'id'=>$category->id])}}"
                                                   class="{{Request::is('*/*/'.explode('/',url()->current())[5].'/*/'.$category->id.'*') ? 'active' :null}}"
                                                   data-key="{{ $category->id }}">
                                                    {!! $t->translateText($category->name) !!}
                                                </a>
                                                <ul class="">
                                                    @if (count($category->subcategories) > 0)
                                                        @include('Admin::components.subcategories', ['subcategories' => $category->subcategories, 'parent' => $category->name])
                                                    @endif
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('page_content', ['slug' => explode('/',url()->current())[5], 'id'=>$category->id])}}"
                                                   class="{{Request::is('*/*/'.explode('/',url()->current())[5].'/*/'.$category->id.'*') ? 'active' :null}}"
                                                   data-key="{{ $category->id }}">
                                                    {{--                                                        <i class="metismenu-icon pe-7s-less"></i>--}}
                                                    {{ $t->translateText($category->name) }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="d-grid gap-2">
                            <button class="mb-2 btn btn-outline-success CreateCategoryModal">{{__('Create Category')}}</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">
                    @php dump($content) @endphp
                    <table style="width: 100%;" id="pageListTable" class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">
                    <div class="">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"></i>
                                {{--                    Header Alternate Tabs--}}
                            </div>
                            <ul class="nav tabs-animated">
                                @php $i = 1; $n = 1; @endphp
                                @foreach($data['langs'] as $lang)
                                    <li class="nav-item">
                                        <a data-bs-toggle="tab" href="#tab-eg5-{{$lang->id}}" class="nav-link @if($i == 1) active @endif">{{$lang->country}}</a>
                                    </li>
                                    @php $i++; @endphp
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            @if($errors->all())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ __('The :Name version is empty.', ['name' => $error]) }}</li>
                                    @endforeach
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                                    {{ __(session()->get('message')) }}
                                </div>
                            @endif

                            <form id="addNewItemForm" name="addNewItemForm" action="{{route('save.content')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{url()->full()}}" name="option">
                                <input type="hidden" value="{{$content['type']->board_type}}" name="type">
                                <div class="tab-content contentEditor">
                                    @foreach($data['langs'] as $lang)
                                        <div class="tab-pane fade @if($n == 1) active show @endif" id="tab-eg5-{{$lang->id}}" role="tabpanel">
                                            <h1>{{$lang->country}}</h1>
                                            <textarea name="editor[{{$lang->country_code}}]" id="editor{{$lang->country_code}}" value="" required="required">
                                                {{ $content['PageData']->content[$lang->country_code] ?? '' }}
                                            </textarea>
                                        </div>
                                        @php $n++; @endphp
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-end">
                                            <button id="subData" type="button" class="btn-wide btn-shadow btn btn-outline-success mt-2">{{__('Save')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

@section('modal')
    <div class="modal fade create-page-management" id="CreateCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content ">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="exampleModalLongTitle">{{ __('Create Page') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/api/contentcategory/create" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="menuId" value="{{$content['type']->id}}">
                    <input type="hidden" name="parentId" value="">
                    <div class="modal-body">
                        <div class="position-relative mb-3">
                            <label for="" class="form-label">{{__('Parent Category')}}</label>
                            <select class="form-control" name="parentId" id="parentId">
                                <option value="" selected disabled>{{__('No Parent')}}</option>
                                @foreach($content['categories'] as $category)
                                    <option value="{{ $category->id }}">{!! $t->translateText($category->name) !!}</option>
                                    {{--                                    @if (count($category->subcategories) > 0)--}}
                                    {{--                                        @include('Admin::components.subcategories', ['subcategories' => $category->subcategories, 'parent' => $category->name])--}}
                                    {{--                                    @endif--}}
                                @endforeach
                            </select>
                        </div>
                        <div class="position-relative mb-3">
                            <ul class="nav tabs-animated">
                                @foreach($data['langs'] as $key=>$lang)
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link @if($key === 0) active @endif" id="tab-c1-{{$lang->id}}" data-bs-toggle="tab" href="#tab-animated1-{{$lang->id}}">
                                            <span class="nav-text"><b>{{$lang->country}}</b></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content mt-3">
                                @foreach($data['langs'] as $key=>$lang)
                                    <div class="tab-pane fade @if($key === 0) active show @endif" id="tab-animated1-{{$lang->id}}" role="tabpanel">
                                        <div class="position-relative mb-3">
                                            <label for="NewCategoryName" class="form-label">{{__('Category Name')}}</label>

                                            <input name="NewCategoryName[{{$lang->country_code}}]" id="BoardName{{$lang->country_code}}" placeholder="" type="text" class="form-control"
                                                   data-parent-id="tab-c1-{{$lang->id}}"
                                                   data-msg-required="{{__('This Field is Required')}}"
                                                   required>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{--                            <label for="NewCategoryName" class="form-label">{{__('Category Name')}}</label>--}}
                            {{--                            <input name="NewCategoryName" id="NewCategoryName" required placeholder="{{__('Category Name')}}" type="text" class="form-control text-lowercase">--}}
                        </div>
                    </div>
                    <div class="modal-footer card-btm-border card-shadow-success border-success">
                        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-success createPageSubmit">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        let lang = '{{Session::get('locale')}}';
        if (lang === 'kr')
        {
            lang = 'ko'
        }
        CKEDITOR.replace('editor1', {
            language : lang,
            height: '840px',
        });
        $('.save').on('click', function (){
            // console.log($('#editor1').val())
        })
        $(document).ready(function (){
            // console.log(option1)
           $('#pageListTable').DataTable({option1})
            $('.CreateCategoryModal').on('click', function (){
                $('#CreateCategoryModal').modal('show');
            });
            let editors = [];
            $.each($('.contentEditor textarea'), (i,v) =>{
                const editor = CKEDITOR.replace(v.id, {
                    language : lang,
                    height: '840px',
                });
                editors.push(editor)
            });
            $('#subData').click(function() {
                $.each(editors, (i,v) =>{
                    const html = v.getData();
                    $('#'+v.name).html(html);
                });
                $('#addNewItemForm').submit()
            })
        });
    </script>
@endsection
