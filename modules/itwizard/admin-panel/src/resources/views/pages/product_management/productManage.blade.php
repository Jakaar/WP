@extends('Admin::layouts.master')
@section('content')
<style>
    .squire {
        border: 1px solid;
        overflow: hidden;
        width: 100px;
        height: 100px;
        /* position: relative;
        float: left; */
        border-radius: 3px;
        text-align: center;
        background: #fac5ad;
        font-size: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
</style>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div>
                {{__('Product Management')}}
            </div>
        </div>
        <div class="page-title-actions">
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success" id="AddProduct" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                        <span class="btn-icon-wrapper pe-2 opacity-7">
                            <i class="pe-7s-plus"></i>
                        </span>
                        {{__('Add Product')}}
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="main-card mb-3 card card-btm-border border-primary card">
            <div class="card-body">
                <table style="width: 100%;" id="BulletInBoards" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="allselect"></th>
                            <th>{{__('NUMBER')}}</th>
                            <th>{{__('CATEGORY')}}</th>
                            <th>{{__('PRODUCT NAME')}}</th>
                            <th>{{__('PRODUCT CODE')}}</th>
                            <th>{{__('SKIN')}}</th>
                            <th>{{__('PRODUCT SUMMARY')}}</th>
                            <th>{{__('FUNCTION')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['prdct'] as $products)
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                            <td>{{$products->id}}</td>
                            <td>{{$products->product_classification}}</td>
                            <td>{{$products->product_name}}</td>
                            <td>{{$products->product_code}}</td>
                            <td>{{$products->product_detail}}</td>
                            <td>{{$products->product_price}}</td>
                            <td>
                                <button class="btn-outline-primary btn SingleProduct" data-bs-toggle="modal" data-bs-target="#EditPostModal" key="{{$products->id}}">
                                    {{ ('Edit') }}
                                </button>
                                <button class="btn-outline-danger btn-link btn DeleteButton" key="{{$products->id}}">
                                    {{ ('Delete') }}
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

@endsection
@section('modal')
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width: 960px;">
        <div class="modal-content">

            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-bold">
                        {{__('Add Product')}}
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <form action="" class="row" id="createProd">
                            <div class="input-group mb-3 ">
                                <div class="col-lg-6 mb-3 px-0">
                                    <label>{{__('Product Classification')}}</label>
                                    <select class="form-select form-control-sm form-control" id="c_product_classification" name="c_product_classification">
                                        <option value="" selected>-- Select parent category --</option>
                                        @foreach($data['parent'] as $parents)
                                        <option value="{{$parents->id}}">{{$parents->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3 px-2">
                                    <label>{{__('Product Code')}}</label>
                                    <input type="text" class="form-control" id="c_product_code" name="c_product_code" required>
                                </div>
                                <div class="col-lg-6 mb-3 px-0">
                                    <label>{{__('Product Name')}}</label>
                                    <input type="text" class="form-control" id="c_product_name" name="c_product_name">
                                </div>
                                <div class="col-lg-6 mb-3 px-2">
                                    <label>{{__('Product Price')}}</label>
                                    <input type="text" class="form-control" id="c_product_price" name="c_product_price">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Product Information')}}</label>
                                <div class="input-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">List</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="150" id="c_product_infromationList" name="c_product_infromationList">
                                        <span class="input-group-text px-2">Reduction</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="50" id="c_product_infromationReduction" name="c_product_infromationReduction">
                                        <span class="input-group-text px-2">Detail</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="350" id="c_product_infromationDetail" name="c_product_infromationDetail">
                                        <span class="input-group-text px-2">Enlargement</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="650" id="c_product_infromationEnlargement" name="c_product_infromationEnlargement">
                                        <small class="form-text text-muted">If you register the original image only during new registration, the rest of the image will be created automatically. (except for specified files) [GIF, JPG, PNG]</small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>
                                        Add Image
                                    </label>
                                    <div id="chosePhotoImage" class="mb-3 d-flex">
                                        <div class="d-flex flex-column">
                                            <label class="squire" id="chooseImage" for="input-image">
                                                +
                                            </label>
                                            <button class="btn btn-success d-none chosePhoto" id="input-image" onclick="filemanager.bulkSelectFile('prodPhoto2')">Add Image</button>
                                        </div>
                                        <div id="addNewImage"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Brief Product Description')}}</label>
                                <div id="c_product_editor" name="c_product_editor">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Product Details')}}</label>
                                <textarea class="form-control" rows="3" id="c_prodDetails" name="c_prodDetails"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                                    <button type="button" class="btn btn-success prodAddmanage" id="prodAddmanage">{{__('Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Edit Product Manage --}}

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="EditPostModal">
    <div class="modal-dialog modal-lg" style="max-width: 960px;">
        <div class="modal-content">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                        {{__('Edit Product')}}
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <form action="" class="row">
                            <div class="input-group mb-3 ">
                                <div class="col-lg-6 mb-3 px-0">
                                    <label>{{__('Product Classification')}}</label>
                                    <input type="hidden" id="e_id">
                                    <select class="form-select form-control-sm form-control" name="e_product_classification" id="e_product_classification">
                                        <option value="" selected> == Select parent category == </option>
                                        @foreach($data['parent'] as $parents)
                                        <option value="{{$parents->id}}">{{$parents->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-3 px-2">
                                    <label>{{__('Product Code')}}</label>
                                    <input type="text" class="form-control" id="e_product_code" name="e_product_code">
                                </div>
                                <div class="col-lg-6 mb-3 px-0">
                                    <label>{{__('Product Name')}}</label>
                                    <input type="text" class="form-control" id="e_product_name" name="e_product_name">
                                </div>
                                <div class="col-lg-6 mb-3 px-2">
                                    <label>{{__('Product Price')}}</label>
                                    <input type="text" class="form-control" id="e_product_price" name="e_product_price">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Product Information')}}</label>
                                <div class="input-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">List</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" name="e_product_informationList" id="e_product_informationList">
                                        <span class="input-group-text px-2">Reduction</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" name="e_product_informationReduction" id="e_product_informationReduction">
                                        <span class="input-group-text px-2">Detail</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" name="e_product_informationDetail" id="e_product_informationDetail">
                                        <span class="input-group-text px-2">Enlargement</span>
                                        <input type="text" class="form-control" aria-describedby="basic-addon3" name="e_product_informationEnlargement" id="e_product_informationEnlargement">
                                        <small class="form-text text-muted">If you register the original image only during new registration, the rest of the image will be created automatically. (except for specified files) [GIF, JPG, PNG]</small>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>
                                        Add Image
                                    </label>
                                    <div id="chosePhotoImage_2" class="mb-3 d-flex">
                                        <div class="d-flex flex-column">
                                            <label class="squire me-3" id="chooseImage_2" for="input-image2">
                                                +
                                            </label>
                                            <button type='button' class="btn btn-success d-none chosePhoto" id="input-image2" onclick="filemanager.bulkSelectFile('prodPhoto')">Add Image</button>
                                        </div>
                                        <div class="mb-3 d-flex" id="editListImage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Brief Product Description')}}</label>
                                <textarea id="e_product_editor" name="e_product_editor"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>{{__('Product Details')}}</label>
                                <textarea class="form-control" id="e_prodDetails" name="e_prodDetails" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                                    <button type="button" class="btn btn-success UpdateButton">{{__('Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    $('#BulletInBoards').DataTable({});
    $('#allselect').click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    })
</script>

<!-- Add product Manage -->

<script>
    $(document).ready(function() {

        var arrayList = new Array();
        window.prodPhoto2 = function(data) {
            localStorage.setItem('arrayData', '');
           $.each(data, function(index, data){
               console.log(data.absolute_url)
            $('#chosePhotoImage').prepend('<div class="me-3"><img style="height:100px; width:100px;" src=' + data.absolute_url + '><a class="deleteListImage" data-index="' + index + '" href="javascript:;" style="position:absolute; margin-left:-12px;"><i class="fa fa-trash"> </i></a></div>');
            arrayList.push(data.absolute_url);
        })
        localStorage.setItem('arrayData', arrayList);
        }
           
  

        //validate
        $("#createProd").validate({
            rules: {
                c_product_code: "required",
                c_product_name: "required",
                c_product_price: "required",
                c_product_infromationList: "required",
                c_product_infromationReduction: "required",
                c_product_infromationDetail: "required",
                c_product_infromationEnlargement: "required",
            },
            messages: {
                c_product_code: "Please enter code",
                c_product_name: "Please enter name",
                c_product_price: "Please enter price",
                c_product_infromationList: "Please enter List",
                c_product_infromationReduction: "Please enter Reduction",
                c_product_infromationDetail: "Please enter Detail",
                c_product_infromationEnlargement: "Please enter Enlargement",
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.next("label"));
                } 
                else 
                {
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

        let c_editor;
        ClassicEditor.create(document.querySelector('#c_product_editor'))
            .then(newEditor => {
                c_editor = newEditor;
            })
        $('#AddProduct').click(function() {
            localStorage.setItem('arrayData', '');
        })

        $('.prodAddmanage').click(function() {
            let m_check = $('#createProd').valid();
            console.log(m_check)

            var arrayData = localStorage.getItem('arrayData').split(',')
            const data = {
                classification: $('#c_product_classification').val(),
                name: $('#c_product_name').val(),
                code: $('#c_product_code').val(),
                price: $('#c_product_price').val(),
                informationList: $('#c_product_infromationList').val(),
                informationReduction: $('#c_product_infromationReduction').val(),
                informationDetail: $('#c_product_infromationDetail').val(),
                informationEnlargement: $('#c_product_infromationEnlargement').val(),
                picture: JSON.stringify(arrayData),
                c_product_editor: c_editor.getData(),
                prodDetails: $('#c_prodDetails').val(),
            }
            // console.log(data);
            Axios.post('/api/productManage/create', data).then((resp) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "success",
                    title: resp.data.msg,
                });
                window.location.reload()
                // console.log(resp);
            }).catch((err) => {
                console.log(err);
            });
        })

        //SingleProduct Manage
        attachments = [];

        let e_editor;
        ClassicEditor.create(document.querySelector('#e_product_editor'))
            .then(newEditor => {
                e_editor = newEditor;
            })
        $('.SingleProduct').click(function() {
            localStorage.setItem('arrayData', '');
            Axios.post('/api/productManage/singleProduct', {
                id: $(this).attr('key')
            }).then((resp) => {
                const html = resp.data.data.product_desc

                $('#e_product_classification').val(resp.data.data.product_classification),
                    $('#e_product_code').val(resp.data.data.product_code),
                    $('#e_product_name').val(resp.data.data.product_name),
                    $('#e_product_price').val(resp.data.data.product_price),
                    $('#e_product_informationList').val(resp.data.data.product_informationlist),
                    $('#e_product_informationReduction').val(resp.data.data.product_informationreduction),
                    $('#e_product_informationDetail').val(resp.data.data.product_informationdetail),
                    $('#e_product_informationEnlargement').val(resp.data.data.product_informationenlargement),
                    e_editor.data.set(html);
                $('#e_prodDetails').val(resp.data.data.product_detail),
                    $('#e_id').val(resp.data.data.id)
                let test = resp.data.data.product_image;
                test = JSON.parse(test);
                if (test.filter(e => e.length > 0).length > 0) {
                    attachments = test;
                    localStorage.setItem('arrayData', attachments);
                }
                $('#editListImage').html('')
                $.each(test, function(i, item) {
                    $('#editListImage').append('<div class="me-3"> <img style="height:100px; width:100px;" src=' + item + '><a class="deleteListImage" data-index="' + i + '" href="javascript:;" style="position:absolute; margin-left:-12px; background-color: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,145,108,1) 42%);"><i class="fa fa-trash"> </i></a> </div>');
                })
            }).catch((err) => {
                console.log(err);
            });

        })


        window.prodPhoto = function(data) {
            console.log(data)
            if (localStorage.getItem('arrayData')) {
                arrayList = localStorage.getItem('arrayData').split(',')
            }
            $.each(data, function(index, item) {
                $('#chosePhotoImage_2').append('<div class="me-3"> <img style="height:100px; width:100px;" src=' + item.absolute_url + '><a class="deleteListImage" data-index="' + index + '" href="javascript:;" style="position:absolute; margin-left:-12px; background-color: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(163,145,108,1) 42%);"><i class="fa fa-trash"> </i></a> </div>');
                arrayList.push(item.absolute_url);
            })
            localStorage.setItem('arrayData', arrayList);
        };
        //Update Product Manage
        $('.UpdateButton').click(function() {

            if (localStorage.getItem('arrayData') === null) {
                var arrayData = "";
            } else {
                var arrayData = localStorage.getItem('arrayData').split(',')
            }
            let id = $('#e_id').val()
            const data = {
                id: id,
                classification: $('#e_product_classification').val(),
                name: $('#e_product_name').val(),
                code: $('#e_product_code').val(),
                price: $('#e_product_price').val(),
                informationList: $('#e_product_informationList').val(),
                informationReduction: $('#e_product_informationReduction').val(),
                informationDetail: $('#e_product_informationDetail').val(),
                informationEnlargement: $('#e_product_informationEnlargement').val(),
                picture: JSON.stringify(arrayData),
                prodDetails: $('#e_prodDetails').val(),
                e_product_editor: e_editor.getData(),
            }
            // console.log(data);
            Axios.post('/api/productManage/update', data).then((resp) => {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "success",
                    title: resp.data.msg,
                });
                window.location.reload()
                // console.log(resp)
            })
        })
        //Delete Image 
        $(document).on('click', '.deleteListImage', function() {
            dataIndex = $(this).data('index');
            const temp = localStorage.getItem("arrayData");
            console.log(temp);
            var arrayData = Boolean(temp) ? temp.split(",") : []
            arrayData = arrayData.filter(function(item, i) {
                return i !== dataIndex;
            });
            if (arrayData.length > 0) localStorage.setItem('arrayData', arrayData);
            else localStorage.removeItem("arrayData");

            $(this).parent().remove()
        })
    })
</script>

<!--DeleteProduct Manage-->
<script>
    $(document).ready(function() {
        $('.DeleteButton').click(function() {
            let id = $(this).attr('key')
            console.log(id)
            Swal.fire({
                title: '{{__(' Are you sure ? ')}}',
                icon : 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: '{{__(' Cancel ')}}',
                confirmButtonText: '{{__(' Yes Delete It!')}}'
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/productManage/delete/' + id).then((resp) => {
                        Swal.fire(
                            'Deleted',
                            'Your file has been deleted.',
                            'success'
                        )
                        window.location.reload()
                    });
                }
            })
        });
    })
</script>
@endsection