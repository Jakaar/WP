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
                            <td>{{__('Title')}}</td>
                            <td>{{__('Created At')}}</td>
                            <td>{{__('Actions')}}</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notices as $order=>$notice)
                            <tr key="{{$notice->id}}">
                                <td>{{$order + 1}}</td>
                                <td>
                                    <a href="#" class="EditPost" key="{{$notice->id}}">
                                        {{$notice->title}}
                                    </a>
                                </td>
                                <td>
                                    {{$notice->created_at}} <{{\Carbon\Carbon::make($notice->created_at)->diffForHumans()}}>
                                </td>
                                <td>
                                    <button class="btn-outline-primary btn EditPost" key="{{$notice->id}}">
                                        {{__('Edit')}}
                                    </button>
                                    <button class="btn-outline-danger btn" key="{{$notice->id}}">
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
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create Notice')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="CategoryForm" method="POST" action="/api/Content/Notice/create" autocomplete="off">
                        @csrf
                        <input type="hidden" name="url" value="{{url()->full()}}">
                        <input type="hidden" name="board_master_id" value="{{$content['type']->board_master_id}}">
                        <div class="row mb-5">
                            <div class="col-12">
                                <label for="name">{{__('Title')}}</label>
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-12">
                                <label for="content">{{__('Content')}}</label>
                                <textarea name="" id="CreateContent" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button id="savebtn" type="button" class="btn btn-success UpdateOrCreate" key="0"> {{__('Create & Update')}} </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(document).ready(function (){
            $('#ListTable').DataTable({});
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
                Axios.post('/api/GetNotice/Details/'+$(this).attr('key'))
                    .then((resp) => {
                        $('#name').val(resp.data.title)
                        if(resp.data.content){ $editor.setData(resp.data.content) } else { $editor.setData('') }

                        $('#savebtn').attr('key', $(this).attr('key'))
                        $('#EditPost').modal('show');
                    })
            })
            $('.ShowModal').on('click', function (){
                $('#CategoryForm')[0].reset();
                $editor.setData('')
                $('#savebtn').attr('key', 0)
                $('#EditPost').modal('show');
            })
            $('.UpdateOrCreate').on('click', function (){
                const data = {
                    name: $('#name').val(),
                    content: $editor.getData(),
                }

                const url = '/'+$(this).attr('key')
                if($('#CategoryForm').valid())
                {
                    Axios.post('/api/GetNotice/CreateOrUpdate'+url, {
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
