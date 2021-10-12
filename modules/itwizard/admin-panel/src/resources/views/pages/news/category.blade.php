@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-th-large icon-gradient bg-malibu-beach"></i>
                </div>
                <div>
                    {{__('Category')}}
                    {{--                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>--}}
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="btn-shadow btn btn-success CreateCategoryModal">
                            <span class="btn-icon-wrapper pe-2 opacity-7">
                                <i class="pe-7s-plus"></i>
                            </span>
                        {{__('Create Category')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($data['categories'] as $category)
            <div class="col-md-6 col-lg-3 closer{{$category->id}}">
                <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card">
                    <div class="widget-chat-wrapper-outer">
                        <div class="widget-chart-content">
                            <div class="row">
                                <div class="col" key="{{$category->id}}">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-pen"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger NewsCatDlt">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-chart-flex">
                                <div class="widget-numbers mb-0 w-100">
                                    <div class="widget-chart-flex mb-2">
                                        <div class="fsize-2 text-truncate">
                                            <small class="opacity-5 fsize-1">+</small>
                                            {{$category->cat_name}}
                                        </div>
                                        <div class="ms-auto">
                                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                                <span class="text-success ps-2 fsize-1">{{$category->qty}} <small>{{__('News')}} ...</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(()=>{
            $('.NewsCatDlt').on('click', function(){
                Swal.fire({
                    title: '확실합니까 ?',
                    text: "삭제 버튼 클릭 시 완전 삭제됩니다.복구 불가능합니다.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '삭제 !',
                    cancelButtonText: '취소'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Axios.post('/api/news/category/delete/'+$(this).closest('div').attr('key'))
                            .then((resp)=> {
                                Swal.fire(
                                    '삭제되었습니다!',
                                    '',
                                    'success'
                                );
                                $('.closer'+$(this).closest('div').attr('key')).fadeOut();
                        }).catch((resp) => {
                            console.log(resp)
                        })
                    }
                })
            });
            $('.CreateCategoryModal').click(function (){
                $('.bd-example-modal-lg').modal('show');
            })

        })
    </script>
@endsection
@section('modal')
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{__('Create Category')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
