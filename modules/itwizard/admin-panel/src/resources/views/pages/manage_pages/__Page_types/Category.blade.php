{{--@inject('t','App\Helper\Helper')--}}
<style>
    .vertical-nav-menus {
        margin: 0;
        padding: 0;
        position: relative;
        list-style: none;
    }
    .vertical-nav-menus li a{
        display: block;
        line-height: 2.4rem;
        height: 2.4rem;
        padding: 0 1.5rem 0 45px;
        position: relative;
        border-radius: 0.25rem;
        color: #343a40;
        white-space: nowrap;
        transition: all 0.2s;
        margin: 0.1rem 0;
    }
    .vertical-nav-menus ul {
        border-radius: 15px;
        margin: 0;
        position: relative;
        list-style: none;
        transition: padding 300ms;
        padding: .5em 0 0 2rem;
    }
    .vertical-nav-menus ul > li > a {
        color: #6c757d;
        height: 2rem;
        line-height: 2rem;
        padding: 0 1.5rem 0;
    }
    .vertical-nav-menus ul::before {
        content: "";
        height: 100%;
        opacity: 1;
        width: 3px;
        background: #e0f3ff;
        position: absolute;
        left: 20px;
        top: 0;
        border-radius: 15px;
    }
    .vertical-nav-menus li a:hover
    {
        background: #e0f3ff;
        text-decoration: none;
    }
    .vertical-nav-menus li a.active
    {
        background: #e0f3ff;
        text-decoration: none;
    }

</style>
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
                    <h1>title</h1>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">
                    <h1>title</h1>
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
