@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
                </div>
                <div style="color: #222222;">
                    {{ __('Product Manage') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" id="reload_page" type="button" data-bs-toggle="tooltip" title=""
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{ __('Add Product') }}
                </button>
                <button class="btn btn-outline-info opa">{{ __('Copy') }}</button>
                <button class="btn btn-outline-light opacity-3 multipleDelete">{{ __('Delete') }}</button>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card card-btm-border border-primary">
        <div class="">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card-body" style="background: #F9F9F9 !important;">
                            <h5 class="card-title fw-bold"
                                style="color: #222222; margin: 0;text-transform: capitalize !important;">
                                {{ __('All Item') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center">
                    <div class="col-12">
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
                        <table style="width: 100%;" id="ProductTable" class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Code') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Order') }}</th>
                                    <th>{{ __('On/Off') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr class="border-custom remover-{{$item->id}}" key="{{$item->id}}">
                                        <td>
                                            <input type="checkbox" class="form-check-input selectItem" key="{{$item->id}}">
                                        </td>
                                        <td>
                                            <div class="avatar-icon-wrapper avatar-icon-lg">
                                                <div class="avatar-icon rounded">
                                                    <img src="{{$item->main_img}}" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $item->sku }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            ₩ {{ number_format($item->price) }}
                                        </td>
                                        <td>
                                            {{ $item->showing_order }}
                                        </td>
                                        <td>
                                            <input class="status enabler" type="checkbox" @if ($item->is_status) checked @endif key="{{$item->id}}">
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-info editModal" data-id="{{ $item->id }}">{{ __('Edit') }}</button>
                                            <button class="btn btn-sm btn-outline-danger opacity-5 SingleDelete" key="{{$item->id}}">{{ __('Delete') }}</button>
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
    {{$items->links('Admin::components.paginator')}}

@endsection
@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="/cms/product/create" method="POST" id="addProduct">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="productLabel">{{ __('Create Product') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body row">
                        <div class="mb-3 col-6">
                            <label for="category_id" class="form-label fw-bold"> {{ __('Product Category') }} <span
                                    class="text-danger ">*</span> </label>
                            <select name="category_id" id="category_id" class="form-control form-select" required>
                                <option value="1">gg </option>
                            </select>
                        </div>
                        <div class="mb-3 col-6 ">
                            <label class="form-check-label fw-bold mb-2">
                                {{ __('Status') }}
                            </label>
                            <div class="clearfix"></div>
                            <input class="switcher" type="checkbox" id="switcher" name="is_status" checked>
                            {{-- <label for="" class="form-check-label fw-bold me-4 visiblity"> {{ __('Show') }} </label> --}}
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="sku" class="form-label fw-bold"> {{ __('Product Code') }} </label>
                            <div class="input-group">
                                <input type="text" minlength="10" maxlength="10" class="form-control" id="sku"
                                    placeholder="{{ __('Product Code') }}" name="sku">
                                <button type="button" class="btn btn-outline-primary checkCode"> {{ __('Check') }}
                                </button>
                            </div>
                            <small id="duplicated"></small>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="product_name" class="form-label fw-bold">
                                {{ __('Product Name') }}
                                <span class="text-danger ">*</span></label>
                            <input type="text" class="form-control " placeholder="{{ __('Product Name') }}" name="name"
                                id="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="order" class="form-label fw-bold">{{ __('Priority') }}</label>
                            <input id="order" type="number" min="1" class="form-control"
                                placeholder="{{ __('Priority') }}" name="showing_order">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Type') }} </label>
                            <div class="clearfix"></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hit" name="is_hit">
                                <label class="form-check-label" for="hit">{{ __('Hit') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_suggest" name="is_suggest">
                                <label class="form-check-label" for="is_suggest">{{ __('Suggest Item') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_new" name="is_new">
                                <label class="form-check-label" for="is_new">{{ __('New') }}</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="is_trend" name="is_trend">
                                <label class="form-check-label" for="is_trend">{{ __('Trending') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Sale" name="is_sale">
                                <label class="form-check-label" for="Sale">{{ __('Sale') }}</label>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="manufacturer" class="form-label fw-bold"> {{ __('Manufacturer') }} </label>
                            <input id="manufacturer" type="text" class="form-control"
                                placeholder="{{ __('Manufacturer') }}" name="manufacturer">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="created_country" class="form-label fw-bold"> {{ __('Country of Origin') }}
                            </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Country of Origin') }} "
                                name="created_country">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="brand_name" class="form-label fw-bold"> {{ __('Brand') }} </label>
                            <input id="brand_name" type="text" class="form-control" placeholder=" {{ __('Brand') }} "
                                name="brand_name">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="model_name" class="form-label fw-bold"> {{ __('Model Name') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Model Name') }} "
                                name="model_name">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label fw-bold"> {{ __('Market Price') }} </label>
                            <input id="price" type="number" class="form-control "
                                placeholder=" {{ __('Market Price') }} " name="price">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Description') }} <span
                                    class="text-danger ">*</span> </label>
                            <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="mb-3 col-6">
                            {{-- <div class="clearfix"></div> --}}
                            <label for="mnpht" class="form-label fw-bold">
                                {{ __('Main image') }}
                                <span class="text-danger ">*</span>
                            </label>
                            <img src="" id="main-photo-preview" class="rounded w-100 mb-3" alt="">
                            <input type="hidden" id="main-photo" name="main_img" required>
                            <div class="input-group">
                                <button id="mnpht" type="button" onclick="filemanager.selectFile('main-photo')"
                                    class="btn btn-outline-secondary">
                                    {{ __('Select Image') }}
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="mltplgm" class="form-label fw-bold"> {{ __('Multiple Image') }} </label>
                            <br>
                            <div class="d-inline" id="bulkImage"></div>
                            <div id="thumbnails" class="row"></div>
                            <div class="mt" id="thumbnail_group">
                                <div class="mb-3">
                                    <input type="hidden" name="thumbnail" id="thumbnail">
                                    <button id="mltplgm" type="button" class="btn btn-outline-secondary"
                                        onclick="filemanager.bulkSelectFile('myBulkSelectCallback')">
                                        {{ __('Multiple Image') }}
                                    </button>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <button type="button" class="btn btn-outline-secondary" id="add_thumbnail"> + </button>
                        </div> --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">
                            {{ __('Close') }}
                        </button>
                        <button id="addProductButton" class="btn btn-success">{{ __('Save') }}</button>
                        <button id="editProductButton" class="btn btn-success d-none">{{ __('Update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    {{-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet"> --}}
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(document).ready(function() {
            localStorage.removeItem('items')
            $('.multipleDelete').on('click', function (){
                if (JSON.parse(localStorage.getItem('items')))
                {
                    Swal.fire({
                        title: '{{__('Are you sure?')}}',
                        html: '{{__('Total Deleting Items')}} :'+JSON.parse(localStorage.getItem('items')).length,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: '{{__('Cancel')}}',
                        confirmButtonText: '{{__('Yes, Delete it!')}}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Axios.post('/api/product/multiple/delete', JSON.parse(localStorage.getItem('items'))).then((resp) => {
                                Swal.fire(
                                    '{{__('Deleted')}}',
                                    resp.data.msg,
                                    'success'
                                )
                                $.each(JSON.parse(localStorage.getItem('items')), function (i,v){
                                   $('.remover-'+v).fadeOut();
                                });
                            })
                        }
                    })
                }else{
                    alert('not seleceted')
                }
                // console.log(JSON.parse(localStorage.getItem('items')).length)
            });
            $('.selectItem').change(function (){
                const items = [];
                $('.selectItem').each(function (i,v){
                   if ($(this).is(':checked'))
                   {
                       items[i] = $(this).attr('key')
                   }
                });
                localStorage.setItem('items',JSON.stringify(items));
            })

            $('.enabler').change(function() {
                Axios.post('/api/product/status/'+$(this).attr('key')).then((resp) => {
                    Toast.fire({
                        icon: 'success',
                        position: 'top-end',
                        title: resp.data.msg
                    })
                })
            });
            $('.SingleDelete').on('click',function() {
                Swal.fire({
                    title: '{{__('Are you sure?')}}',
                    text: "{{__('You wont be able to revert this!')}}",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: '{{__('Cancel')}}',
                    confirmButtonText: '{{__('Yes, Delete it!')}}'
                }).then((result) => {
                        if (result.isConfirmed) {
                            Axios.post('/api/product/delete/'+$(this).attr('key')).then((resp) => {
                            Swal.fire(
                                '{{__('Deleted')}}',
                                resp.data.msg,
                                'success'
                            )
                            $(this).closest('tr').fadeOut();
                        })
                    }
                })
            });
            $('#ProductTable').DataTable({
                "paging": false,
                "ordering": false,
                "info": false,
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
            $('.status').bootstrapToggle({
                'onstyle': 'primary',
                'offstyle': 'light',
                'on': '<i class="pe-7s-check"></i>',
                'off': '<i class="pe-7s-close"></i>',
                'size': 'xs'
            });

            $('.switcher').bootstrapToggle({
                'onstyle': 'primary',
                'offstyle': 'light',
                'on': '<i class="pe-7s-check"></i>',
                'off': '<i class="pe-7s-close"></i>',
                'size': 'sm'
            });
        })
    </script>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        const thumbnail = [];
        $(document).ready(function() {
            CKEDITOR.replace('description', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });

            window.myBulkSelectCallback = function(data) {
                $.each(data, function(i, v) {
                    $('#thumbnails').append('<div class="col-lg-3 position-relative"><img src="' + v
                        .absolute_url +
                        '"style="height:100px; object-fit:cover" class="mb-3 w-100"><button class="btn btn-outline-danger deleteImage position-absolute btn-sm" style="right:12px;"><i class="fa fa-trash"></i></button></div>'
                    )
                    thumbnail.push(v.absolute_url);
                })
                // console.log(thumbnail)
            };
            $('.ModalShow').click(function() {
                $('#staticBackdrop').modal('show')
            })
            $('#addProductButton').click(function() {
                // console.log(thumbnail)
                $('#thumbnail').val(JSON.stringify(thumbnail));
                $('#addProduct').validate({
                    ignore: "",
                    rules: {
                        description: {
                            required: function() {
                                CKEDITOR.instances.description.updateElement();
                            },

                            minlength: 10
                        }
                    },
                    messages: {
                        description: {
                            required: "Please enter Text",
                            minlength: "Please enter 10 characters"


                        }
                    },
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
                        // console.log(element)
                        $(element).prev('label').addClass("text-danger").removeClass(
                            "is-valid");

                        // $('#' + parantId).addClass("text-danger").removeClass("text-success");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        // console.log(element)
                        $(element).prev('label').addClass("text-dark").removeClass("is-valid");
                    },
                });
                if ($('#addProduct').valid()) {
                    $('#addProduct').submit()

                }

            })
            $('#editProductButton').click(function() {
                if ($('#editProductButton').valid()) {
                    $('#thumbnail').val(JSON.stringify(thumbnail));
                    $('#addProduct').submit()
                }
            })
            $('.checkCode').click(function() {
                const label = $(this).parent('div').prev('label')
                const buttonD = $(this)
                const code = $('#sku').val()
                if (code.length == 10) {
                    const data = {
                        code: code
                    }
                    Axios.post('/api/ProductCodeGenerate', data).then((resp) => {
                        console.log(resp)
                        if (resp.data.msg == 'Code Non Duplicated') {
                            label.removeClass('text-danger').addClass('text-dark')
                            $(this).removeClass('btn-outline-primary btn-outline-danger').addClass(
                                'btn-outline-success')
                            buttonD.text('{{ __('Not Duplicated') }}').addClass('disabled')
                            buttonD.prev('input').attr('readonly', 'true')
                            $('#duplicated').html('')
                        } else {
                            $(this).removeClass('btn-outline-primary btn-outline-success').addClass(
                                'btn-outline-danger')
                            buttonD.text('{{ __('Duplicated') }}')
                            $('#duplicated').html(
                                '<code class="d-block"> {{ __('Suggest Product Code') }} : ' +
                                resp.data.suggest + "</code>")
                            $(this).prev('input').val('');
                        }
                    }).catch((err) => {
                        Toast.fire({
                            icon: 'error',
                            title: err
                        });
                    })
                } else {
                    label.addClass('text-danger')
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.ModalShow').click(function() {
                $('#editProductButton').addClass('d-none')
                $('#addProductButton').removeClass('d-none')
                $('#productLabel').html('{{ __('Create Product') }}')
                $('#addProduct')[0].reset()
                $('#sku').removeAttr('readonly')
                $('#sku').val("")
                $('.checkCode').removeClass('disabled btn-outline-success').html('Check').addClass('btn-outline-primary')
                $('#main-photo-preview').attr('src', '')
                $('#thumbnails').html('')
                $('#hit').prop('checked', 0)
                $('#is_suggest').prop('checked', 0)
                $('#is_new').prop('checked', 0)
                $('#is_trend').prop('checked', 0)
                $('#is_sale').prop('checked', 0)
                CKEDITOR.instances.description.setData('')
                $('#addProduct').attr('action', '/cms/product/create');
            })
            $('.editModal').click(function() {
                const id = $(this).data('id')
                const data = {
                    id: id,
                }
                Axios.post('/api/product/getData', data).then((resp) => {
                    $('#editProductButton').removeClass('d-none')
                    $('#addProductButton').addClass('d-none')

                    const data = resp.data.data;
                    console.log(data)
                    $('#staticBackdrop').modal('show')
                    $('#productLabel').html('{{ __('Edit Product') }}')
                    $('#sku').val(data.sku)
                    $('#product_name').val(data.name)
                    $('#order').val(data.showing_order)
                    $('#hit').prop('checked', data.is_hit)
                    $('#is_suggest').prop('checked', data.is_suggest)
                    $('#is_new').prop('checked', data.is_new)
                    $('#is_trend').prop('checked', data.is_trend)
                    $('#is_sale').prop('checked', data.is_sale)
                    $('#sku').attr('readonly',true)
                    $('.checkCode').addClass('disabled').removeClass('btn-outline-primary').addClass('btn-outline-success').html('{{ __("Not Duplicated") }}')
                    $('#manufacturer').val(data.manufacturer)
                    $('input[name=created_country]').val(data.created_county)
                    $('#brand_name').val(data.brand_name)
                    $('input[name=model_name]').val(data.model_name)
                    $('#price').val(data.price)
                    CKEDITOR.instances.description.setData(data.description)
                    $('#addProduct').attr("action", '/cms/product/update/' + data.id)
                    $('#main-photo-preview').attr('src', data.main_img)
                    $('#thumbnails').html('')
                    // console.log(JSON.parse(data.other_photos))

                    $.each(JSON.parse(data.other_photos), function(index, item) {
                        thumbnail.push(item)
                    })
                    console.log(thumbnail)
                    $.each(JSON.parse(data.other_photos), function(i, v) {
                        $('#thumbnails').prepend(
                            '<div class="col-lg-3 position-relative"><img src="' + v +
                            '"style="height:100px; object-fit:cover" class="mb-3 w-100"><button class="btn btn-outline-danger deleteImage position-absolute btn-sm" style="right:12px;"><i class="fa fa-trash"></i></button></div>'
                        )
                    })

                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                })

            })
            Array.prototype.remove = function() {
                var what, a = arguments,
                    L = a.length,
                    ax;
                while (L && this.length) {
                    what = a[--L];
                    while ((ax = this.indexOf(what)) !== -1) {
                        this.splice(ax, 1);
                    }
                }
                return this;
            };
            $(document).on('click', '.deleteImage', function() {
                $(this).parent().remove()
                thumbnail.remove($(this).prev('img').attr('src'))
                $('#thumbnail').val(JSON.stringify(thumbnail))
                // console.log(thumbnail)
            })
        })
    </script>
@endsection
