<div class="main-card mb-3">
    <div class="row">
        @if(session()->has('message'))
            <div class="col-12">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                    </button>
                    {{session()->get('message')}}
                </div>
            </div>
        @endif
        @foreach($Groups as $group)
            <div class="col-3 mt-2">
                <div class="card card-btm-border border-primary">
                    <div class="card-body">
                        <div class="card-shadow-primary card-border text-white card bg-primary" style="min-height: 200px; background-image: url('{{$group->main_img}}'); background-size: cover;"></div>
                        <h5 class="menu-header-title mt-2 mb-2">{{$group->name}}</h5>
                        <div class="d-block text-end card-footer">
                            <button class="btn-shadow-danger btn btn-outline-danger btn-sm">{{__('Delete')}}</button>
                            <button class="btn-shadow-warning btn btn-outline-warning btn-sm OpenGroup" key="{{$group->id}}">{{__('Edit & Open')}}</button>
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
                <form id="FAQForm" method="POST" action="/api/Gallery/create" autocomplete="off">
                <div class="modal-body">
                    <div class="row">

                            <input type="hidden" name="url" value="{{url()->full()}}">
                            <input type="hidden" name="board_master_id" value="{{$content['type']->board_master_id}}">
                            <input type="hidden" name="main_img" id="GMain-Img">
                            @csrf
                            <div class="col-12">
                                <label for="name">{{__('Gallery Name')}}</label>
                                <input required name="name" id="name" type="text" class="form-control" placeholder="{{__('Give a Gallery name')}}">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="description">{{__('Gallery Description')}}</label>
                                <textarea required name="description" id="description" class="form-control" rows="10" placeholder="{{__('Write Here')}}"></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="d-grid gap-2">
                                    <button id="chooser" class="mb-2 btn btn-outline-info btn-sm" type="button" onclick="filemanager.selectFile('GMain-Img')">{{__('Choose Main Image')}}</button>
                                </div>
                                <a href="#" onclick="(function(){$('#chooser').click()}())">
                                    <img src="{{asset('aPanel/imgs/image_placeholder.jpg')}}" id="GMain-Img-preview" class="w-100" alt="">
                                </a>
                            </div>

                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button type="submit" class="btn btn-success Create"> {{__('Create')}} </button>
                </div>
                </form>
            </div>
        </div>
    </div>
{{--    Open Modal--}}
    <div class="modal fade" id="GalleryInPhotos" tabindex="-1" data-bs-focus="false" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__('Create in Group Photos')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form id="FAQForm" method="POST" action="/api/FAQ/create" autocomplete="off">
                            <div class="col-12 mt-2">
                                <label for="galleryContent">{{__('Content')}}</label>
                                <textarea required name="galleryContent" id="galleryContent" class="form-control" rows="10" placeholder="{{__('Write Here')}}"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{__('Close')}} </button>
                    <button type="button" class="btn btn-success UpdateOrCreate"> {{__('Update')}} </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('aPanel/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(document).ready(function (){
            let lang='{{Session::get('locale')}}';if(lang==='kr'){lang = 'ko'}
            $('.ShowModal').click(function (){
                $('#GalleryGroupModal').modal('show');
            })
            const $editor = CKEDITOR.replace('galleryContent', {
                filebrowserBrowseUrl:filemanager.ckBrowseUrl,
                language : lang,
                height: '600',
            });
            $('.OpenGroup').click(function (){
                Axios.post('/api/Gallery/GetContent/'+$(this).attr('key'))
                .then((resp)=> {
                    if(resp.data.data){ $editor.setData(resp.data.data.photos) } else { $editor.setData('') }
                    $('#GalleryInPhotos').attr('key', $(this).attr('key')).modal('show');
                }).catch((err) => {
                    Toast.fire({
                        icon: 'warning',
                        position: 'top-end',
                        title: '{{__('Try Again Open')}}'
                    })
                });
            })
            $('.UpdateOrCreate').on('click', ()=>{
                Axios.post('/api/Gallery/CreateContent/'+$('#GalleryInPhotos').attr('key'),{
                    data: $editor.getData(),
                })
                .then((resp) => {
                    $('#GalleryInPhotos').modal('hide')
                    Toast.fire({
                        icon: 'success',
                        position: 'top-end',
                        title: '{{__('Successfully')}}'
                    })
                })
            })
            $('.GalleryCreate').on('click', ()=>{
                Axios.post('/api/Gallery/CreateContent' ,{
                    data: $editor.getData(),
                })
                    .then((resp) => {
                        $('#GalleryInPhotos').modal('hide')
                        Toast.fire({
                            icon: 'success',
                            position: 'top-end',
                            title: '{{__('Successfully')}}'
                        })
                    })
            })
        })
    </script>
@endsection
