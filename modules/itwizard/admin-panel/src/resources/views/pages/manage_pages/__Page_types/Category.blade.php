<div class="main-card mb-3">
    <div class="row">
        <div class="col-md-4 col-lg-3 col-xl-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    This is a wider card with supporting
                </div>
                <div class="card-footer">
                    <a href="" class="">Last updated 3 mins ago</a>
                </div>
            </div>
        </div>
    </div>
</div>

@section('modal')
    <div class="modal fade" id="CategoryCreate" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create in Group Photos')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="CategoryForm" method="POST" action="/api/FAQ/create" autocomplete="off">
                        <div class="row">
                            <div class="col-6">
{{--                                <label for="galleryContent">{{__('Name')}}</label>--}}
{{--                                <input type="text" class="form-control">--}}

                                <label for="name">{{__('Name')}}</label>
                                <input id="name" type="text" class="form-control" name="name" required>

                                <label for="select">{{__('Image')}}</label>
                                <a href="#" onclick="filemanager.selectFile('profile-photo')"><img src="{{asset('aPanel/imgs/noimg.png')}}" id="profile-photo-preview" alt="" class="w-100"></a>
                                <input type="hidden" id="profile-photo" name="img">
{{--                                <button onclick="filemanager.selectFile('profile-photo')">Choose</button>--}}
                                <button type="button" id="select" class="btn btn-info btn-sm btn-block float-end mt-2" onclick="filemanager.selectFile('profile-photo')">{{__('Choose')}}</button>
                            </div>
                            <div class="col-6">
                                <label for="galleryContent">{{__('Description')}}</label>
                                <textarea required name="desc" id="galleryContent" class="form-control" rows="20" placeholder="{{__('Write Here')}}"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button type="submit" class="btn btn-success UpdateOrCreate"> {{__('Create ')}} </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function (){
            $('#CategoryForm').validate({
                ignore: [],
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        // error.insertAfter(element.next("label"));
                    } else {
                        // error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
            });

           $('.ShowModal').on('click', function (){
               $('#CategoryCreate').modal('show');
           })
        });
    </script>
@endsection
