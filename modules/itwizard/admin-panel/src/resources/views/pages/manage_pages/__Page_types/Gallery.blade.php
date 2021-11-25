<div class="main-card mb-3">
    <div class="row">
        @foreach($Groups as $group)
            <div class="col-3">
                <div class="card card-btm-border border-primary">
                    <div class="card-body">
                        <div class="card-shadow-primary card-border text-white card bg-primary" style="min-height: 200px; background-image: url('{{$group->main_img}}'); background-size: cover;"></div>
                        <h5 class="menu-header-title mt-2 mb-2">{{$group->name}}</h5>
                        <div class="d-block text-end card-footer">
                            <a href="" class="btn-shadow-primary btn btn-outline-info btn-sm">{{__('Open')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@section('modal')
    <div class="modal fade" id="GalleryGroupModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create Gallery Group')}}</h5>
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
                                <label for="name">{{__('Gallery Name')}}</label>
                                <input required name="name" id="name" type="text" class="form-control" placeholder="{{__('Give a Gallery name')}}">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="description">{{__('Gallery Description')}}</label>
                                <textarea required name="description" id="description" class="form-control" rows="10" placeholder="{{__('Write Here')}}"></textarea>
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
            $('.ShowModal').click(function (){
                $('#GalleryGroupModal').modal('show');
            })
        })
    </script>
@endsection
