@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-keypad icon-gradient bg-mean-fruit"></i>
            </div>
            <div style="color: #222222;">
                {{__('Product Manage')}}
                <div class="page-title-subheading"></div>
            </div>
        </div>
        <div class="page-title-actions">
            <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <button type="button" class="search-icon btn-shadow btn btn-success ModalShow">
                <span class="btn-icon-wrapper pe-2 opacity-7">
                    <i class="pe-7s-plus"></i>
                </span>
                {{__('Add Product')}}
            </button>
            <button class="btn btn-outline-light">{{__('Copy')}}</button>
            <button class="btn btn-outline-light">{{__('Delete')}}</button>
        </div>
    </div>
</div>
{{--    <div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">--}}
{{--        <div class="card-header-title fsize-2 text-capitalize fw-normal" style="color: #222222;">{{__('Product Manage')}}</div>--}}
{{--        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">--}}
{{--            <button class="btn btn-info btn-sm">{{__('Add Product')}}</button>--}}
{{--            <button class="btn btn-light btn-sm">{{__('Copy')}}</button>--}}
{{--            <button class="btn btn-light btn-sm">{{__('Delete')}}</button>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="main-card mb-3 card">
    <div class="">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card-body" style="background: #F9F9F9 !important;">
                        <h5 class="card-title fw-bold" style="color: #222222; margin: 0;text-transform: capitalize !important;">{{__('All Item')}}</h5>
                    </div>
                </div>
            </div>
            <div class="mt-5 row justify-content-center">
                <div class="col-12">
                    <table style="width: 100%;" id="ProductTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Code')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Price')}}</th>
                                <th>{{__('Order')}}</th>
                                <th>{{__('On/Off')}}</th>
                                <th>{{__('Action')}}</th>
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
                                            <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
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
                                    <input class="status" type="checkbox" >
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">{{__('Edit')}}</button>
                                    <button class="btn btn-sm btn-outline-danger opacity-5">{{__('Delete')}}</button>
                                </td>
                            </tr>
                            <tr class="border-custom">
                                <td>
                                    <input type="checkbox" class="form-check-input">
                                </td>
                                <td>
                                    <div class="avatar-icon-wrapper avatar-icon-lg">
                                        <div class="avatar-icon rounded">
                                            <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
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
                                    <input class="status" type="checkbox" >
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-outline-info">{{__('Edit')}}</button>
                                    <button class="btn btn-sm btn-outline-danger opacity-5">{{__('Delete')}}</button>
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
@section('script')
{{--    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">--}}
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(document).ready(function (){
            $('#ProductTable').DataTable({
                // language: {
                //     url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                // }
            });
            $('.status').bootstrapToggle({
                'onstyle':'primary',
                'offstyle':'light',
                'on':'<i class="pe-7s-check"></i>',
                'off':'<i class="pe-7s-close"></i>',
                'size':'xs'
            });
        })
    </script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
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
    })
</script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: filemanager.ckBrowseUrl,
        });
    })
</script>
<script>
    $(document).ready(function() {

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

            for(var i in files){
                console.log(files)
            }


        })
    })
</script>
<script>
    $('.ModalShow').click(function(){
        $('#staticBackdrop').modal('show')
    })
</script>
<script>
    $(document).ready(function() {
        $('#switcher').click(function() {
            if ($(this).is(':checked')) {
                $(this).next('label').html('Show')
            } else {
                $(this).next('label').html('Hide')
            }
        })
    })
</script>
@endsection

@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productLabel">{{ __('Create Product') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Category') }} <span
                                    class="text-danger ">*</span> </label>
                            <select name="product_category" id="" class="form-control form-select">
                                <option value=""> </option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="" class="form-label fw-bold"> {{ __('Product Code') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Product Code') }} "
                                name="product_code">
                        </div>

                        <div class="mb-3 col-lg-6 col-sm-12">
                            <label for="" class="form-label fw-bold"> {{ __('Product Name') }} <span
                                    class="text-danger ">*</span> </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Product Name') }} "
                                name="product_name">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __(' Priority') }} </label>
                            <input type="number" min="1" class="form-control" placeholder="{{ __(' Priority') }}"
                                name="priority">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Type') }} </label>
                            <div class="clearfix"></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hit" value="{{ __('Hit') }}"
                                    name="type[]">
                                <label class="form-check-label" for="hit">{{ __('Hit') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="recommended"
                                    value="{{ __('Recommended') }}" name="type[]">
                                <label class="form-check-label" for="recommended">{{ __('Recommended') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Trend" value="{{ __('Trend') }}"
                                    name="type[]">
                                <label class="form-check-label" for="Trend">{{ __('Trend') }}</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Popularity"
                                    value="{{ __('Popularity') }}" name="type[]">
                                <label class="form-check-label" for="Popularity">{{ __('Popularity') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Discount"
                                    value="{{ __('Discount') }}" name="type[]">
                                <label class="form-check-label" for="Discount">{{ __('Discount') }}</label>
                            </div>
                        </div>
                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="" class="form-label fw-bold"> {{ __('Principal Company') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Principal Company') }} "
                                name="principal">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="" class="form-label fw-bold"> {{ __('Made by ') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Made by') }} " name="made_by">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="" class="form-label fw-bold"> {{ __('Brand') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Brand') }} " name="brand">
                        </div>

                        <div class="mb-3 col-lg-3 col-sm-12 col-md-6">
                            <label for="" class="form-label fw-bold"> {{ __('Model Name') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Model Name') }} "
                                name="model_name">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Price') }} </label>
                            <input type="text" class="form-control " placeholder=" {{ __('Price') }} " name="price">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold"> {{ __('Product Description') }} <span
                                    class="text-danger ">*</span> </label>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="d-inline"></div>
                        <div class="mb-3 col">
                            <label for="" class="form-label fw-bold"> {{ __('Main image') }} <span
                                    class="text-danger ">*</span> </label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="{{ __('No file chosen') }}"
                                    readonly>
                                <input type="file" class="d-none" name="main_image" id="main_image">
                                <label for="main_image" class="btn btn-outline-secondary"> {{ __('Choose file') }}
                                </label>
                            </div>
                        </div>
                        <div class="d-inline"></div>
                        <div class="mb" id="thumbnail_group">
                            <label for="" class="form-label fw-bold"> {{ __('Thumbnails') }} </label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="{{ __('No file chosen') }}"
                                    readonly>
                                <input type="file" class="d-none" name="thumbnail[]" id="thumbnail_1">
                                <label for="thumbnail_1" class="btn btn-outline-secondary"> {{ __('Choose file') }}
                                </label>
                            </div>

                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-secondary" id="add_thumbnail"> + </button>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="switcher" checked>
                                <label class="form-check-label fw-bold" for="flexSwitchCheckChecked"> {{ __('Show') }}
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-end">
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">
                                    {{ __('Close') }}
                                </button>
                                <button type="button" class="btn btn-success">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
