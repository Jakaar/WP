@extends('Admin::layouts.master')
@section('content')
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
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
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
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                            <td>User Detail</td>
                            <td>1.0</td>
                            <td>10/21/2021</td>
                            <td>SuperAdmin</td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                    {{__('Edit') }}
                                </button>
                                <button class="btn-outline-danger btn-link btn">
                                    {{__('Delete') }}
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                            <td>User Detail</td>
                            <td>2.0</td>
                            <td>10/21/2021</td>
                            <td>SuperAdmin</td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                    {{__('Edit') }}
                                </button>
                                <button class="btn-outline-danger btn-link btn">
                                    {{__('Delete') }}
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="chekboxer" value="" id="flexCheckDefault"></td>
                            <td>User Detail</td>
                            <td>3.0</td>
                            <td>10/21/2021</td>
                            <td>SuperAdmin</td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditPostModal">
                                    {{__('Edit') }}
                                </button>
                                <button class="btn-outline-danger btn-link btn">
                                    {{__('Delete') }}
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    $('#reload_page').click(function () {
        location.reload(true);
    });
</script>

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
                        <div class="input-group mb-3 ">
                            <div class="col-lg-6 mb-3 px-0">
                                <label>{{__('Product Classification')}}</label>
                                <select class="form-select form-control-sm form-control">
                                    <option>Category 1</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3 px-2">
                                <label>{{__('Product Code')}}</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3 px-0">
                                <label>{{__('Product Name')}}</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3 px-2">
                                <label>{{__('Product Price')}}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headerList">
                                <input type="text" class="form-control" name="contentList">
                                <button class="btn btn-primary">{{__('addition')}}</button>
                            </div>
                            <small class="form-text text-muted">(ex) Country of origin Korea, price 10000</small>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headerList" placeholder="title">
                                <input type="text" class="form-control" name="contentList" placeholder="eigenvalues">
                                <input type="text" class="form-control" name="headerList" placeholder="Prize">
                                <input type="text" class="form-control" name="contentList" placeholder="1">
                                <button class="btn btn-primary">{{__('addition')}}</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">{{__('List')}}</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="150">
                                    <span class="input-group-text px-2" id="basic-addon3">{{__('Reduction')}}</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="50">
                                    <span class="input-group-text px-2" id="basic-addon3">{{__('Detail')}}</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="350">
                                    <span class="input-group-text px-2" id="basic-addon3">{{__('Enlargement')}}</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="650">
                                    <small class="form-text text-muted">If you register the original image only during new registration, the rest of the image will be created automatically. (except for specified files) [GIF, JPG, PNG]</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success CreateBoard">{{__('Add Image')}} </button>
                            </div>
                            <div>
                                <table id="prdImgAdd" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="checkAll" name="checkImg" id="chkAll" value="0">
                                            </th>
                                            <td>
                                                <div class="w95 fleft p10">
                                                    <p>
                                                        <span style="vertical-align: inherit;">
                                                            <span style="vertical-align: inherit;">
                                                                Images added for the first time are automatically resized and saved. </span>
                                                            <span style="vertical-align: inherit;">(Possible to designate when editing)
                                                            </span>
                                                        </span><input type="hidden" name="prdImageTypeList" value="Y">
                                                    </p>
                                                    <p class="borderB">
                                                        <input type="hidden" name="prdImageSeqList" value="0">
                                                        <span class="w20">
                                                            <span style="vertical-align: inherit;">
                                                                <span style="vertical-align: inherit;">original image</span>
                                                            </span>
                                                        </span>
                                                        <input type="file" name="originalFileList">
                                                        <input type="file" name="listFileList" style="display:none;">
                                                        <input type="file" name="smallFileList" style="display:none;">
                                                        <input type="file" name="detailFileList" style="display:none;">
                                                        <input type="file" name="largeFileList" style="display:none;">
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Attachments')}}</label>
                            <div class="input-group">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Related Products')}}</label>
                            <div class="col-lg-5">
                                <button class="btn-outline-primary btn">{{__('Enrollment')}}</button>
                                <button class="btn-outline-danger btn-link btn">{{__('Delete')}}</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Brief Product Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Details')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                                <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
                            </div>
                        </div>
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
                        <div class="input-group mb-3 ">
                            <div class="col-lg-6 mb-3 px-0">
                                <label>{{__('Product Classification')}}</label>
                                <select class="form-select form-control-sm form-control">
                                    <option selected>Category 1</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3 px-2">
                                <label>{{__('Product Code')}}</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3 px-0">
                                <label>{{__('Product Name')}}</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3 px-2">
                                <label>{{__('Product Price')}}</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headerList">
                                <input type="text" class="form-control" name="contentList">
                                <button class="btn btn-primary">addition</button>
                            </div>
                            <small class="form-text text-muted">(ex) Country of origin Korea, price 10000</small>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="headerList" placeholder="title">
                                <input type="text" class="form-control" name="contentList" placeholder="eigenvalues">
                                <input type="text" class="form-control" name="headerList" placeholder="Prize">
                                <input type="text" class="form-control" name="contentList" placeholder="1">
                                <button class="btn btn-primary">addition</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Information')}}</label>
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">List</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="150">
                                    <span class="input-group-text px-2" id="basic-addon3">Reduction</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="50">
                                    <span class="input-group-text px-2" id="basic-addon3">Detail</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="350">
                                    <span class="input-group-text px-2" id="basic-addon3">Enlargement</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="650">
                                    <small class="form-text text-muted">If you register the original image only during new registration, the rest of the image will be created automatically. (except for specified files) [GIF, JPG, PNG]</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success CreateBoard">Add Image</button>
                            </div>
                            <div>
                                <table id="prdImgAdd" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <input type="checkbox" class="checkAll" name="checkImg" id="chkAll" value="0">
                                            </th>
                                            <td>
                                                <div class="w95 fleft p10">
                                                    <p>
                                                        <span style="vertical-align: inherit;">
                                                            <span style="vertical-align: inherit;">
                                                                Images added for the first time are automatically resized and saved. </span>
                                                            <span style="vertical-align: inherit;">(Possible to designate when editing)
                                                            </span>
                                                        </span><input type="hidden" name="prdImageTypeList" value="Y">
                                                    </p>
                                                    <p class="borderB">
                                                        <input type="hidden" name="prdImageSeqList" value="0">
                                                        <span class="w20">
                                                            <span style="vertical-align: inherit;">
                                                                <span style="vertical-align: inherit;">original image</span>
                                                            </span>
                                                        </span>
                                                        <input type="file" name="originalFileList">
                                                        <input type="file" name="listFileList" style="display:none;">
                                                        <input type="file" name="smallFileList" style="display:none;">
                                                        <input type="file" name="detailFileList" style="display:none;">
                                                        <input type="file" name="largeFileList" style="display:none;">
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Attachments')}}</label>
                            <div class="input-group">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Related Products')}}</label>
                            <div class="col-lg-5">
                                <button class="btn-outline-primary btn">Enrollment</button>
                                <button class="btn-outline-danger btn-link btn">Delete</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Brief Product Description')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>{{__('Product Details')}}</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                                <button type="button" class="btn btn-success CreateBoard">{{__('Save')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
