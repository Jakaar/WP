<div class="row">
    @if(count($content['categories']))
        <div class="col-md-4">
            <div class="main-card mb-3 card-btm-border border-primary card">
                <div class="card-body">
                    <select class="form-control" name="" id="">
                        @foreach($content['categories'] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @if (count($category->subcategories) > 0)
                                @include('Admin::components.subcategories', ['subcategories' => $category->subcategories, 'parent' => $category->name])
                            @endif
                        @endforeach
                    </select>
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
