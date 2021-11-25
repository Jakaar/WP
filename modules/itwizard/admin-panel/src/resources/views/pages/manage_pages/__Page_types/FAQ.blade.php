<div class="main-card mb-3 card-btm-border border-primary card">
    <div class="card-body">
        <h5 class="card-title">{{__('FAQ')}}</h5>
        <div class="vertical-time-icons vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
            <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                    <div class="vertical-timeline-element-icon bounce-in">
                        <div class="timeline-icon border-primary">
                            <i class=" icon-gradient bg-night-fade ion-android-bulb"></i>
                        </div>
                    </div>
                    <div class="vertical-timeline-element-content bounce-in">
                        <h4 class="timeline-title">All Hands Meeting</h4>
                        <p>
                            Lorem ipsum dolor sic amet, today at
                            <a href="javascript:void(0);">12:00 PM</a>
                        </p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                    <div class="vertical-timeline-element-icon bounce-in">
                        <div class="timeline-icon border-primary">
                            <i class=" icon-gradient bg-night-fade ion-android-bulb"></i>
                        </div>
                    </div>
                    <div class="vertical-timeline-element-content bounce-in">
                        <h4 class="timeline-title">All Hands Meeting</h4>
                        <p>
                            Lorem ipsum dolor sic amet, today at
                            <a href="javascript:void(0);">12:00 PM</a>
                        </p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
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
                        <form id="FAQForm" method="POST" action="/api/FAQ/create">
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
            $('.ShowModal').on('click', function (){
                $('#FAQModal').modal('show')
            });
            $('.saveFAQ').on('click', function (){
               if ($('#FAQForm').valid())
               {
                   $('#FAQForm').submit();
               }
            });
        })
    </script>
@endsection
