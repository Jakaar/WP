<div class="main-card mb-3 card-btm-border border-primary card">
    <div class="card-body">
{{--        @php--}}
{{--            dump($content)--}}
{{--        @endphp--}}
        <div class="mb-3">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"></i>
{{--                    Header Alternate Tabs--}}
                </div>
                <ul class="nav">
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
                <form action="{{route('save.content')}}" method="POST">
                    @csrf
                    <div class="tab-content">
                        @foreach($data['langs'] as $lang)
                            <div class="tab-pane contentEditor @if($n == 1) active @endif" id="tab-eg5-{{$lang->id}}" role="tabpanel">
                                <h1>{{$lang->country}}</h1>
                                <textarea name="editor[{{$lang->country_code}}]" id="editor[{{$lang->country_code}}]"></textarea>
                            </div>
                            @php $n++; @endphp
                        @endforeach
                    </div>
                    <div class="d-block text-end card-footer">
                        <button type="submit" class="btn-wide btn-shadow btn btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        let lang = '{{Session::get('locale')}}';
        if (lang === 'kr')
        {
            lang = 'ko'
        }
        $.each($('.contentEditor textarea'), (i,v) =>{
            CKEDITOR.replace(v.id, {
                language : lang,
                height: '840px',
            });
            console.log(i,v)
        });
        $('.save').on('click', function (){
            console.log($('#editor1').val())
        })
    </script>
@endsection
