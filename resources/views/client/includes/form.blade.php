<style>

</style>
<div class="container " >
    <div class="row " >
        <div class="divider"></div>
        <div class="col-12">
            <div class="">
                <div id="fb-editor"></div>
            </div>
        </div>
        <div class="col-12">

        </div>
    </div>
</div>
</div>

@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
<script>
    $(document).ready(function (){
        const receivedData = '{!!$datas['form_builded']->data!!}'
        console.log(receivedData);
        var formRenderOptions = {
            formData: receivedData,
        }
        $('#fb-editor').formRender(formRenderOptions)
    });
    // jQuery(function($) {
    //     var fbTemplate = document.getElementById('fb-template');
    //     $('.fb-render').formRender({
    //     });
    // });
</script>
@endsection
