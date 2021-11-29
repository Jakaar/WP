<div class="main-card mb-3 card-btm-border border-primary card">
    <div class="card-body">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" aria-label="Close"
                data-bs-dismiss="alert"></button>
            {{ __(session()->get('message')) }}
        </div>
    @endif
    @if (session()->has('errorA'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" aria-label="Close"
                data-bs-dismiss="alert"></button>
            {{ __(session()->get('errorA')) }}
        </div>
    @endif
    @if (session()->has('updated'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" aria-label="Close"
                data-bs-dismiss="alert"></button>
            {{ __(session()->get('updated')) }}
        </div>
    @endif
        <h5 class="card-title">{{__('FAQ')}}</h5>
        <div class="vertical-time-icons vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
            @foreach($FAQ as $item)
                <div class="vertical-timeline-item vertical-timeline-element" id="FAQRemover-{{$item->id}}">
                    <div>
                        <div class="vertical-timeline-element-icon bounce-in">
                            <div class="timeline-icon border-primary">
                                <i class=" icon-gradient bg-night-fade ion-android-bulb"></i>
                            </div>
                        </div>
                        <div class="vertical-timeline-element-content bounce-in">
                            <div class="row">
                                <div class="col-10">
                                    <h4 class="timeline-title">{{$item->question}}</h4>
                                    <p>
                                        {{$item->answer}}
                                    </p>

                                </div>
                                <div class="col-2">
                                    <button class="btn btn-outline-danger btn-sm FAQDelete" key="{{$item->id}}"><i class="pe-7s-trash"></i></button>
                                    <button class="btn btn-outline-info btn-sm editFAQ" data-id="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit" ><i class="pe-7s-pen"></i></button>
                                    
                                </div>
                            </div>
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@section('modal')
    <div class="modal fade" id="FAQModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="FAQForm" method="POST" action="/api/FAQ/create" autocomplete="off">
                            <input type="hidden" name="url" value="{{url()->full()}}">
                            <input type="hidden" name="board_master_id" value="{{$content['type']->board_master_id}}">
                            @csrf
                            <div class="col-12">
                                <label for="">{{__('Question')}}</label>
                                <input required name="question" type="text" class="form-control" placeholder="{{__('Write the Question')}}">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="answer">{{__('Answer')}}</label>
                                <textarea required name="answer" id="answer" class="form-control" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button type="button" class="btn btn-success saveFAQ"> {{__('Create')}} </button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title card-title" id="staticBackdropLabel">{{__('Edit ')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="FAQForm1" method="POST" action="/api/FAQ/update" autocomplete="off">
                        <input type="hidden" id="hiddenId">
                            @csrf
                            <div class="col-12">
                                <label for="">{{__('Question')}}</label>
                                <input required name="question"  id="question" type="text" class="form-control" placeholder="{{__('Write the Question')}}">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="answer">{{__('Answer')}}</label>
                                <textarea required name="answer" id="answer1" class="form-control" rows="10"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-primary border-primary">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                    <button type="button" class="btn btn-success updateFAQ">{{__('Save Changes')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $('#FAQForm').validate({
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

            $('#FAQForm1').validate({
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
                $('#FAQModal').modal('show')
            });
            $('.saveFAQ').on('click', function (){
               if ($('#FAQForm').valid())
               {
                   $('#FAQForm').submit();
               }
            });


            $('.FAQDelete').on('click', function (){
               Axios.post('/api/FAQ/delete/'+ $(this).attr('key')).then((resp)=>{
                   $('#FAQRemover-'+$(this).attr('key')).fadeOut();
                   Toast.fire({
                       icon: 'success',
                       position:'top-end',
                       title: '{{__('FAQ Deleted')}}'
                   })
               }).catch((err)=>{
                   Toast.fire({
                       icon: 'error',
                       position:'top-end',
                       title: '{{__('FAQ Deleting Error')}}'
                   })
               });
            });


            $('.editFAQ').click(function() {
                const edit_id = $(this).attr('data-id')
                const data = {
                    edit_id: edit_id
                }
                Axios.post('/api/FAQ/edit/', data).then((resp) => {
                    $('#hiddenId').val(resp.data.data.id)
                    $('#question').val(resp.data.data.question)
                    $('#answer1').val(resp.data.data.answer)
                }).catch((err) => {
                    Swal.fire({
                        icon: 'error',
                        title: err
                    });
                });
            })

            $('.updateFAQ').click(function() {
                if ($('#FAQForm1').valid()){
                    let data = {
                            id: $('#hiddenId').val(),
                            question: $('#question').val(),
                            answer: $('#answer1').val(),
                        }
                    Axios.post('/api/FAQ/update', data);
                    $('#FAQForm1').submit();
                }
            })

        })
    </script>
@endsection
