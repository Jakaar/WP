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
@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            let lang='{{Session::get('locale')}}';if(lang==='kr'){lang = 'ko'}
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

        })
    </script>
@endsection
