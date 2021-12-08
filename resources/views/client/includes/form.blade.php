<div class="container ">
    <div class="row ">
        <div class="divider"></div>
        <div class="col-12 mb-5">
            <div class="">
                @if (Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif

                <form method="post" action="/user_data_send" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label"> {{ __('Email') }} </label>
                        <input type="email" class="form-control" required name="_email" placeholder="Enter a your email">
                    </div>
                    <input type="hidden" name="form_id" value="{{ $datas['form_builded']->id }}">
                    <div id="fb-editor"></div>
                    <button type="submit" class="btn btn-primary float-right">{{ __('submit') }}</button>
                </form>
            </div>
        </div>

    </div>
</div>
</div>

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <script>
        $(document).ready(function() {
            const receivedData = '{!! $datas['form_builded']->data !!}'
            var formRenderOptions = {
                formData: receivedData,
            }
            $('#fb-editor').formRender(formRenderOptions)
        });
    </script>
@endsection
