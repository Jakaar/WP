<div class="main-card mb-3">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            {{session()->get('message')}}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <table style="width: 100%;" id="ListTable" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <td>{{__('Image')}}</td>
                                <td>{{__('Title')}}</td>
                                <td>{{__('Description')}}</td>
                                <td>{{__('Created At')}}</td>
                                <td>{{__('Actions')}}</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Lists as $key=>$list)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="avatar-icon-wrapper avatar-icon-xl w-100">
                                            <div class="" style="width: 80px;">
                                                <img style="background-image: cover;" class="w-100" src="{{$list->main_img}}" alt="">
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            {{$list->name}}
                                        </a>
                                    </td>
                                    <td>
                                        <p class="text-truncate text-muted">
                                            {{ Illuminate\Support\Str::limit($list->description, 40) }}
                                        </p>
                                    </td>
                                    <td>
                                        {{$list->created_at}}
                                    </td>
                                    <td>
                                        <button class="btn-outline-primary btn EditPost" key="{{$list->id}}">
                                            {{__('Edit')}}
                                        </button>
                                        <button class="btn-outline-danger  btn" key="{{$list->id}}">
                                            {{__('Delete')}}
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('modal')
    <div class="modal fade" id="EditPost" tabindex="-1" data-bs-focus="false" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
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
                        <div class="row mb-5">
                            <div class="col-md-4">
{{--                                <label for="galleryContent">{{__('Name')}}</label>--}}
{{--                                <input type="text" class="form-control">--}}

                                <label for="name">{{__('Title')}}</label>
                                <input id="name" type="text" class="form-control" name="name" required>

                                <label for="galleryContent">{{__('Short Description')}}</label>
                                <textarea required name="desc" id="galleryContent"
                                          class="form-control"
                                          rows="10"
                                          placeholder="{{__('Write Here')}}"></textarea>
                                <label for="select">{{__('Image')}}</label>
                                <a href="#" onclick="filemanager.selectFile('profile-photo')">
                                    <img src="{{asset('aPanel/imgs/noimg.png')}}" id="profile-photo-preview" alt="" class="w-100">
                                </a>
                                <input type="hidden" id="profile-photo" name="img">
{{--                                <button onclick="filemanager.selectFile('profile-photo')">Choose</button>--}}
                                <button type="button" id="select" class="btn btn-info btn-sm btn-block float-end mt-2" onclick="filemanager.selectFile('profile-photo')">{{__('Choose')}}</button>
                            </div>
                            <div class="col-md-8">
                                <label for="content">{{__('Content')}}</label>
                                <textarea name="" id="CreateContent" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button id="savebtn" type="button" class="btn btn-success UpdateOrCreate" key="0"> {{__('Create ')}} </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(document).ready(function (){
            $('#ListTable').DataTable(DatatableOptions{{session()->get('locale')}});
            let lang='{{Session::get('locale')}}';if(lang==='kr'){lang = 'ko'}
            const $editor = CKEDITOR.replace('CreateContent', {
                filebrowserBrowseUrl:filemanager.ckBrowseUrl,
                language : lang,
                height: '600',
            });
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
            $('.EditPost').on('click', function (){
                Axios.post('/api/GetPost/Details/'+$(this).attr('key'))
                    .then((resp) => {
                        $('#name').val(resp.data.name)
                        $('#galleryContent').val(resp.data.description)
                        if(resp.data.data){ $editor.setData(resp.data.data) } else { $editor.setData('') }
                        $('#profile-photo-preview').attr('src', resp.data.main_img)
                        $('#profile-photo').val(resp.data.main_img)
                        $('#savebtn').attr('key', $(this).attr('key'))
                        $('#EditPost').modal('show');
                    })
            })
           $('.ShowModal').on('click', function (){
               $('#CategoryForm')[0].reset();
               $editor.setData('')
               $('#profile-photo-preview').attr('src', '{{asset('aPanel/imgs/noimg.png')}}')
               $('#savebtn').attr('key', 0)
               $('#EditPost').modal('show');
           })
            $('.UpdateOrCreate').on('click', function (){
               const data = {
                   name: $('#name').val(),
                   description: $('#galleryContent').val(),
                   data: $editor.getData(),
                   main_img: $('#profile-photo').val(),
               }
               const url = '/'+$(this).attr('key')
               if($('#CategoryForm').valid())
               {
                   Axios.post('/api/GetPost/CreateOrUpdate'+url, {
                       data:data,
                       url: '{{url()->full()}}'
                   })
                       .then((resp) => {
                           Toast.fire({
                               icon: 'success',
                               position: 'top-end',
                               title: resp.data.msg,
                           })
                           $('#EditPost').modal('hide');
                           if (resp.data.type === 'created')
                           {
                               setInterval(()=> {
                                   location.reload()
                               }, 900)
                           }
                       }).catch((err) => {
                       Toast.fire({
                           icon: 'error',
                           position: 'top-end',
                           title: '{{__('Something Went Wrong')}}',
                       })
                   })
               }
            });
        });
    </script>
@endsection
