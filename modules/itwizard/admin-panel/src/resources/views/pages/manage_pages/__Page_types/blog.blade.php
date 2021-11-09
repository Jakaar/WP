@inject('t','App\Helper\Helper')
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
                        {{--                        <select class="full-width form-control" name="category" data-placeholder="Select a Category" tabindex="-1" aria-hidden="true" required>--}}
                        {{--                            <option value="" data-prefix="">Select a Category</option>--}}
                        {{--                                @foreach($content['categories'] as $row)--}}
                        {{--                                    @include('Admin::components.subcategories', ['row' => $row])--}}
                        {{--                                @endforeach--}}
                        {{--                        </select>--}}
                        <select class="form-control" name="" id="">
                            @foreach($content['categories'] as $category)
                                <option value="{{ $category->id }}">{!! $t->translateText($category->name) !!}</option>

                                @if (count($category->subcategories) > 0)
                                    @include('Admin::components.subcategories', ['subcategories' => $category->subcategories, 'parent' => $category->name])
                                @endif
                            @endforeach
                        </select>
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

                </div>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">

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
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <label for="NewCategoryName" class="form-label">{{__('Category Name')}}</label>
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
