@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    {{ __('Content & Menu') }}
                    {{-- <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div> --}}
                </div>
            </div>
            <div class="page-title-actions">
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{ __('Refresh') }}"
                    class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span>
                        {{ __('Create Main Menu') }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card-title">{{ __('Menu')}}</div>
            <div class="main-card mb-3 p-2 card">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            @foreach ($categories as $category)
                                @if (count($category->childrenCategories) > 0)
                                    <li class="">
                                        <a href="#" aria-expanded="false" data-key="{{ $category->id }}">
                                            <i class="metismenu-icon pe-7s-less"></i>

                                            {{ $t->translateText($category->name) }}

                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            <span class="">
                                                <button key="{{ $category->id }}"
                                                    class="btn btn-outline-success float-end navBtns ModalShow">
                                                    <i class="pe-7s-plus"></i>
                                                </button>
                                            </span>
                                            <span class="">
                                                <button key="{{ $category->id }}"
                                                    class="btn btn-outline-danger float-end navBtns DeleteMenu">
                                                    <i class="pe-7s-trash"></i>
                                                </button>
                                            </span>
                                        </a>
                                        <ul class="mm-collapse" style="height: 7.04px;">
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('Admin::pages.user_menu.child_category', ['child_category' => $childCategory])
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a href="#" class="GetContent" data-key="{{ $category->id }}">
                                            <i class="metismenu-icon pe-7s-less"></i>
                                            {{ $t->translateText($category->name) }}
                                            <span class="">
                                                <button key="{{ $category->id }}"
                                                    class="btn btn-outline-success float-end navBtns ModalShow">
                                                    <i class="pe-7s-plus"></i>
                                                </button>
                                            </span>
                                            <span class="">
                                                <button key="{{ $category->id }}"
                                                    class="btn btn-outline-danger float-end navBtns DeleteMenu">
                                                    <i class="pe-7s-trash"></i>
                                                </button>
                                            </span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-title">{{ __('Details') }}</div>
            <div class="main-card mb-3 card ">
                <div class="card-header">
                    <div class="widget-content w-100">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="card-title m-0" id="menu_label"></div>
                            </div>
                            <div class="widget-content-right">
                                <button class=" btn btn-success d-none" id="save_menu"> {{ __('Save') }}
                                </button>
                                <button class=" btn btn-primary" id="edit_menu"> {{ __('Edit') }} </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body card-btm-border border-primary">
                    <div id="ContentData" class="d-none">
                        <form action="" class="row" id="updateMenu">
                            <div class="mb-3 col-6">
                                <label for="" class="form-label fw-bold"> {{ __('Name') }} </label>
                                <input type="hidden" id="m_id">
                                <input type="text" name="m_name" class="form-control" id="m_name" required>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label fw-bold"> {{ __('Top Menu') }} </label>
                                <select name="" class="form-control form-select" id="m_category_id" name="m_category_id">
                                    <option value=""> = Select Parent Menu = </option>
                                    @foreach ($categories as $category)
                                        @if ($category->category == null)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label fw-bold"> {{ __('Classification of use') }} </label>
                                <div class="clearfix"></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="use" value="1">
                                    <label class="form-check-label" for="blank">{{ __('Use') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="use" value="2">
                                    <label class="form-check-label" for="current">{{ __('Unset') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="use" value="3">
                                    <label class="form-check-label" for="current">{{ __('Delete') }}</label>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="" class="form-label fw-bold"> {{ __('Window') }} </label>
                                <div class="clearfix"></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="blank" name="target" value="1">
                                    <label class="form-check-label" for="blank">{{ __('Current Tab') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="current" name="target" value="0">
                                    <label class="form-check-label" for="current">{{ __('New Tab') }}</label>
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="" class="form-label fw-bold"> {{ __('Menu Url') }} </label>
                                <input type="text" class="form-control" id="m_menu_url">
                            </div>

                            <div class="mb-3 col-12">
                                <label for="" class="fw-bold form-label"> {{ __('Explanation') }} </label>
                                <textarea name="description" cols="30" rows="10" id="description" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('modal')
        <div id="CreateMenuModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class=" card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                {{-- <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i> --}}
                                {{ __('Create Board') }}
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="creatForm">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="nav tabs-animated">
                                        @foreach($data['langs'] as $key=>$lang)
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link @if($key === 0) active @endif" id="tab-c1-{{$lang->id}}" data-bs-toggle="tab" href="#tab-animated1-{{$lang->id}}">
                                                    <span class="nav-text">{{$lang->country}}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="tab-content mt-3">
                                        @foreach($data['langs'] as $key=>$lang)
                                            <div class="tab-pane fade @if($key === 0) active show @endif" id="tab-animated1-{{$lang->id}}" role="tabpanel">
                                                <div class="position-relative mb-3">
                                                    <h5 class="card-title">{{ __('Name') }}</h5>
                                                    <input name="" id="BoardName{{$lang->country_code}}" placeholder="" type="email" class="form-control">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="card-title mt-3">{{__('Board Name')}}</h5>
                                    <select id="JoinedBoard" class="multiselect-dropdown form-control">
                                        <option value="" selected disabled>{{__('Choose')}}</option>
                                        @foreach($main['board'] as $board)
                                            <option value="{{$board->id}}">{{$board->board_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr class="text-primary">
                            <div class="row mt-2">
                                <div class="col-6">
                                    <h5 class="card-title">{{ __('Window') }}</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="blank" name="target" value="1">
                                        <label class="form-check-label" for="blank">{{ __('Current Tab') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="current" name="target" value="0" checked>
                                        <label class="form-check-label" for="current">{{ __('New Tab') }}</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="button" class="btn btn-success CreateMenu">{{ __('Create') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $('#ContentData input, #ContentData select, #ContentData textarea').attr('disabled', 'true')
                $('.vertical-nav-menu li a').click(function() {
                    $('#ContentData').removeClass('d-none')
                    const id = $(this).data('key');
                    const data = {
                        id: id,
                    }
                    Axios.post('/api/get/menu', data).then((resp) => {
                        $('#menu_label').text(resp.data.data.name)
                        $('input[name=target]').prop('checked', false);
                        $('input[name=use]').prop('checked', false);
                        $('#m_id').val(resp.data.data.id);
                        $('#m_name').val(resp.data.data.name)
                        $('#m_menu_url').val(resp.data.data.menu_url)
                        $('#description').html(resp.data.data.description)
                        $('#m_category_id').val(resp.data.data.category_id).change()
                        $('input[name=use][value=' + resp.data.data.isEnabled + ']').prop('checked',
                            true)
                        $('input[name=target][value=' + resp.data.data.target + ']').prop('checked',
                            true)
                        // Toast.fire({
                        //     icon: 'success',
                        //     title: resp.data.msg
                        // });

                    });
                })
                $('#edit_menu').click(function() {
                    $('#save_menu').toggleClass('d-none')
                    $('#ContentData input, #ContentData select, #ContentData textarea').attr('disabled',
                        function(index, attr) {
                            return attr === 'disabled' ? null : ''
                        })
                })
                //validate update menu
                $("#updateMenu").validate({
                    rules: {
                        m_name: "required",
                        m_menu_url: "required"
                    },
                    messages: {
                        m_name: "Please enter menu name",
                        m_menu_url: "Please enter menu url",
                    },
                    errorElement: "em",
                    errorPlacement: function(error, element) {
                        // Add the `invalid-feedback` class to the error element
                        error.addClass("invalid-feedback");
                        if (element.prop("type") === "checkbox") {
                            error.insertAfter(element.next("label"));
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                });
                // update menu
                $('#save_menu').click(function() {
                    let m_check = $('#updateMenu').valid();

                    if (m_check === true) {
                        const data = {
                            id: $("#m_id").val(),
                            name: $('#m_name').val(),
                            menu_url: $('#m_menu_url').val(),
                            description: $('#description').val(),
                            category_id: $('#m_category_id').val(),
                            use: $('input[name=use]').val(),
                            target: $('input[name=target]').val(),
                        }
                        Axios.post('/api/menu/update', data).then((resp) => {
                            $('#save_menu').toggleClass('d-none')
                            $('#ContentData input, #ContentData select, #ContentData textarea').attr(
                                'disabled',
                                function (index, attr) {
                                    return attr == 'disabled' ? null : ''
                                })
                            Toast.fire({
                                icon: 'success',
                                title: resp.data.msg
                            });
                            window.location.reload()
                        }).catch((error) => {
                            Toast.fire({
                                icon: 'error',
                                title: error
                            });
                        });
                    }

                })

            })
        </script>
        <script>
            $(document).ready(function (){
                $('.ModalShow').click(function (){
                    $('#CreateMenuModal').attr('key',$(this).attr('key')).modal('show');
                    localStorage.setItem('MenuParentId', $(this).attr('key'));
                });
                $('.CreateMenu').on('click', function () {
                    const langs = {!! $data['langs'] !!};
                    let dataJ = {}
                    $.each(langs, function (i, v){
                        const inp = $('#BoardName'+v.country_code).val()
                        $('#creatForm').validate({
                            rules: {
                                inp: "required",
                            },
                            messages: {
                                inp: "Please enter menu name",
                            },
                            errorElement: "c",
                            errorPlacement: function(error, element) {
                                // Add the `invalid-feedback` class to the error element
                                error.addClass("invalid-feedback");
                                if (element.prop("type") === "checkbox") {
                                    error.insertAfter(element.next("label"));
                                } else {
                                    error.insertAfter(element);
                                }
                            },
                            highlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-invalid").removeClass("is-valid");
                            },
                            unhighlight: function(element, errorClass, validClass) {
                                $(element).addClass("is-valid").removeClass("is-invalid");
                            },
                        });
                        const code = v.country_code
                        dataJ[code] = inp
                    });
                        // console.log(JSON.stringify(data))
                    const data = {
                        MenuName: JSON.stringify(dataJ),
                        OpenType: $("input[name='target']:checked").val(),
                        parent_id: $('#CreateMenuModal').attr('key'),
                        board_id: $('#JoinedBoard').val(),
                    };
                    // Axios.post('/api/CreateMenu', data).then((resp) => {
                    //     Toast.fire({
                    //         icon: 'success',
                    //         title: resp.data.msg
                    //     });
                    //
                    //     $('#CreateMenuModal').modal('hide').removeAttr('key');
                    //     setTimeout(function (){
                    //         location.reload()
                    //     },2000);
                    // });
                });
                $('.DeleteMenu').on('click', function () {
                    Swal.fire({
                        title: '{{__('Are you sure?')}}',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: '{{__('Cancel')}}',
                        confirmButtonText: '{{__('Yes Delete It!')}}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Axios.post('/api/DeleteMenu/' + $(this).attr('key')).then((resp) => {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                setTimeout(function (){
                                    location.reload()
                                },2000);
                            });
                        }
                    })
                });
            });
            $('#reload_page').click(function () {
                location.reload(true);
            });
        </script>
    @endsection
