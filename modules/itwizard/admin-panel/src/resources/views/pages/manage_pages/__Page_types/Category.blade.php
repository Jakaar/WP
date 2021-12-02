<div class="main-card mb-3">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            {{session()->get('message')}}
        </div>
    @endif
    <div class="row">
        @foreach($Groups as $group)
            <div class="col-md-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-outline-danger btn-sm" key=""><i class="pe-7s-trash"></i></button>
                        <button class="btn btn-outline-info btn-sm" style="margin-left: 5px;"><i class="pe-7s-pen"></i></button>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$group->name}}</h5>
                        <p class="text-truncate">{{$group->description}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{url()->full().'/'.base64_encode($group->id)}}" class="">{{__('Created At ').\Carbon\Carbon::parse($group->created_at)->format('Y-m-d')}}</a>
                    </div>
                </div>
            </div>
        @endforeach
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
                    <form id="CategoryForm" method="POST" action="/api/Content/Category/create" autocomplete="off">
                        @csrf
                        <input type="hidden" name="url" value="{{url()->full()}}">
                        <input type="hidden" name="board_master_id" value="{{$content['type']->board_master_id}}">
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
                    <button type="button" class="btn btn-success UpdateOrCreate"> {{__('Create ')}} </button>
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
            $('.UpdateOrCreate').on('click', function (){
                if($('#CategoryForm').valid())
                {
                    $('#CategoryForm').submit();
                }
            })
           $('.ShowModal').on('click', function (){
               $('#CategoryCreate').modal('show');
           })
        });
    </script>
@endsection
