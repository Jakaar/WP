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
                <button class="btn btn-outline-light">{{ __('Copy') }}</button>
                <button class="btn btn-outline-light">{{ __('Delete') }}</button>
            </div>
        </div>
    </div>
    {{-- <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header"> --}}
    {{-- <div class="card-header-title fsize-2 text-capitalize fw-normal" style="color: #222222;">{{__('Product Manage')}}</div> --}}
    {{-- <div class="btn-actions-pane-right text-capitalize actions-icon-btn"> --}}
    {{-- <button class="btn btn-info btn-sm">{{__('Add Product')}}</button> --}}
    {{-- <button class="btn btn-light btn-sm">{{__('Copy')}}</button> --}}
    {{-- <button class="btn btn-light btn-sm">{{__('Delete')}}</button> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    <div class="main-card mb-3 card">
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
                                <tr class="border-custom">
                                    <td>
                                        <input type="checkbox" class="form-check-input">
                                    </td>
                                    <td>
                                        <div class="avatar-icon-wrapper avatar-icon-lg">
                                            <div class="avatar-icon rounded">
                                                <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                    alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        00001
                                    </td>
                                    <td>
                                        iphone 13 Pro Max
                                    </td>
                                    <td>
                                        1,500,000
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <input class="status" type="checkbox">
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info">{{ __('Edit') }}</button>
                                        <button
                                            class="btn btn-sm btn-outline-danger opacity-5">{{ __('Delete') }}</button>
                                    </td>
                                </tr>
                                <tr class="border-custom">
                                    <td>
                                        <input type="checkbox" class="form-check-input">
                                    </td>
                                    <td>
                                        <div class="avatar-icon-wrapper avatar-icon-lg">
                                            <div class="avatar-icon rounded">
                                                <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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"
                                                    alt="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        00001
                                    </td>
                                    <td>
                                        iphone 13 Pro Max
                                    </td>
                                    <td>
                                        1,500,000
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <input class="status" type="checkbox">
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-info">{{ __('Edit') }}</button>
                                        <button
                                            class="btn btn-sm btn-outline-danger opacity-5">{{ __('Delete') }}</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <option value="a">gg </option>
                            </select>
                        </div>
                        <div class="mb-3 col-6 ">
                            <label class="form-check-label fw-bold mb-2">
                                {{ __('Is Active') }}
                            </label>
                            <div class="clearfix"></div>
                            <input class="switcher" type="checkbox" id="switcher" name="is_status" checked>
                            {{-- <label for="" class="form-check-label fw-bold me-4 visiblity"> {{ __('Show') }} </label> --}}
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="sku" class="form-label fw-bold"> {{ __('Product Code') }} </label>
                            <div class="input-group">
                                <input type="text" minlength="10" maxlength="10" class="form-control" id="sku" placeholder="{{ __('Product Code') }}"
                                    name="sku">
                                <button type="button" class="btn btn-outline-primary checkCode"> {{ __('Check') }}
                                </button>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="product_name" class="form-label fw-bold">
                                {{ __('Product Name') }}
                                <span class="text-danger ">*</span></label>
                            <input type="text" class="form-control " placeholder="{{ __('Product Name') }}" name="name"
                                id="product_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="order" class="form-label fw-bold">{{ __(' Priority') }}</label>
                            <input id="order" type="number" min="1" class="form-control"
                                placeholder="{{ __(' Priority') }}" name="showing_order">
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
                        <button type="button" id="addProductButton" class="btn btn-success">{{ __('Save') }}</button>
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
            $('#ProductTable').DataTable({
                // language: {
                //     url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                // }
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
        $(document).ready(function() {
            CKEDITOR.replace('description', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            });

            $('#add_thumbnail').click(function() {
                let count = $('#thumbnail_group .input-group').length;
                count = count + 1;
                if (count == 9) {
                    $(this).remove()
                }
                const item =
                    '<div class="input-group mb-3"> <input type="text" class="form-control" placeholder="{{ __('No file chosen') }}" readonly> <input type="file" class="d-none" name="thumbnail[]" id="thumbnail_' +
                    count + '"><label for="thumbnail_' + count +
                    '" class="btn btn-outline-secondary"> {{ __('Choose file') }} </label></div>';
                $('#thumbnail_group').append(item);
            })

            function readFile(file) {
                var fReader = new FileReader();
                let image;
                fReader.readAsDataURL(file);
                return fReader;
                // console.log(file)
                // fReader.onloadend = function (event){
                //     return event.currentTarget.result;

                // }
            }

            console.log(localStorage.getItem('images'))
            const files = {};
            $(document).on('change', 'input[type=file]', function() {
                const image = $(this)
                const data = readFile($(this).prop('files')[0]);
                data.onloadend = function(event) {
                    files[image.attr('id')] = event.currentTarget.result
                    // console.log(files)
                    //   image.parent().parent().prev('div').append('<img src="' + event.currentTarget.result + '"style="width:100px" class="rounded mb-3 me-2">')
                }
                // $(this).parent().parent().prev('div').html('<img src="' +  + '">')
                $(this).parent('.input-group').find('input[type=text]').val($(this).val())

                for (var i in files) {
                    console.log(files)
                }
            })

            let thumbnail = [];
            window.myBulkSelectCallback = function(data) {
                $.each(data, function(i, v) {
                    thumbnail[i] = v.absolute_url
                    $('#bulkImage').append('<img src="' + v.absolute_url +
                        '" style="width:150px; height:100px; object-fit:cover" class="rounded mb-3">'
                    )
                })
            };

            $('.ModalShow').click(function() {
                $('#staticBackdrop').modal('show')
            })
            $('#addProductButton').click(function() {
                // console.log(thumbnail)
                $('#thumbnail').val(thumbnail);
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
            $('.checkCode').click(function() {
                const code = $(this).prev('input').val()
                const data = {
                    code : code
                }
                Axios.post('/api/ProductCodeGenerate', data).then((resp) => {
                    
                }).catch((err) => {
                    Toast.fire({
                        icon: 'error',
                        title: err
                    });
                })
            })
        })
    </script>
@endsection
