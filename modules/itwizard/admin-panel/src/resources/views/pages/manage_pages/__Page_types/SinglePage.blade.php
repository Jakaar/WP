<div class="main-card mb-3 card-btm-border border-primary card">
    <div class="card-body">
        <h1>single page</h1>
        <form action="">
            <textarea name="editor1" id="editor1"></textarea>
        </form>
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
        CKEDITOR.replace('editor1', {
            language : lang,
            height: '840px',
        });
        $('.save').on('click', function (){
            console.log($('#editor1').val())
        })
    </script>
@endsection
