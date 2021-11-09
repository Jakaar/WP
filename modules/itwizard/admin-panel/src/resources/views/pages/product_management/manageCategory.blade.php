@extends('Admin::layouts.master')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users"></i>
            </div>
            <div>
                {{__('Category Management')}}
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{__('Category Registration')}}
                </button>
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
                            <th>{{__('LEVEL')}}</th>
                            <th>{{__('CATEGORY NAME')}}</th>
                            <th>{{__('REGISTERED PRODUCT')}}</th>
                            <th>{{__('EXPLANATION')}}</th>
                            <th>{{__('STATE')}}</th>
                            <th>{{__('ACTION')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $categories)
                        <tr>
                            <td> 0 </td>
                            <td>{{$categories->category_name}}</td>
                            <td> 0 </td>
                            <td>{{$categories->explanation}}</td>
                            <td>{{$categories->state}}</td>
                            <td>
                                <div class="float-end">
                                    <button class="btn-md mb-2 me-2 btn-icon btn-icon-only btn btn-outline-primary SingleProduct" data-bs-toggle="modal" data-bs-target="#EditRegistrationModal" key="{{$categories->id}}">
                                        {{__('Edit')}}
                                    </button>
                                    <button class="btn-md mb-2 me-2 btn-icon btn-icon-only btn btn-outline-danger DeleteButton" key="{{$categories->id}}">
                                        {{__('Delete')}}
                                    </button>
                                </div>
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
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="CreateRegistrationModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Menu Registration')}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="manageForm">
                    <div class="mb-3">
                        <label>{{__('Parent Category')}}</label>
                        <select id="c_parentCategory" name="c_parentCategory" class="form-select form-control-sm form-control">
                            <option value="" selected> == Select parent category == </option>
                            @foreach($parent as $parents)
                            <option value="{{$parents->id}}">{{$parents->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{{__('Classification of use')}}</label>
                        <select id="c_classification" name="c_classification" class="form-select form-control-sm form-control">
                            <option value="1">use</option>
                            <option value="2">unused</option>
                            <option value="0">delete</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{{__('Category name')}}</label>
                        <input type="text" id="c_category_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleText" class="form-label">{{__('Explanation')}}</label>
                        <textarea name="text" id="c_exampleText" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="button" class="btn btn-success CreateManage">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="EditRegistrationModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Edit Menu Registration')}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="manageForm2">
                    <div class="mb-3">
                        <label>{{__('Parent Category')}}</label>
                        <input type="hidden" id="e_id">
                        <select id="e_parentCategory" name="e_parentCategory" class="form-select form-control-sm form-control">
                            <option value="" selected> == Select parent category == </option>
                            @foreach($parent as $parents)
                            <option value="{{$parents->id}}">{{$parents->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{{__('Classification of use')}}</label>
                        <select id="e_classification" name="e_classification" class="form-select form-control-sm form-control">
                            <option value="1">use</option>
                            <option value="2">unused</option>
                            <option value="0">delete</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>{{__('Category name')}}</label>
                        <input type="text" id="e_category_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleText" class="form-label">{{__('Explanation')}}</label>
                        <textarea name="text" id="e_exampleText" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success UpdateButton">Save</button>
                        </div>
                    </div>
                </form>
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

<script>
    $(document).ready(function() {
        $('.CreateManage').click(function() {
            let m_check = $('.manageForm').valid();
            console.log(m_check)
            const data = {
                parent_id: $('#c_parentCategory').val(),
                use: $('#c_classification').val(),
                name: $('#c_category_name').val(),
                desc: $('#c_exampleText').val(),
            }
            if (m_check === true) {
                Axios.post('/api/manageCategory/create', data).then((resp) => {
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
                }).catch((err) => {
                    console.log(err);
                });
            }
        })

        //validate
        $('.manageForm').validate({
            rules: {
                c_category_name: "required",
                c_exampleText: "required",
            },
            messages: {
                c_category_name: "Please enter name",
                c_exampleText: "Please enter text",
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.next("label"));
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

        //validate2 

        $('.manageForm2').validate({
            rules: {
                e_category_name: "required",
                e_exampleText: "required",
            },
            messages: {
                e_category_name: "Please enter name",
                e_exampleText: "Please enter text",
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.next("label"));
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
        })


        //UpdateProduct
        $('.UpdateButton').click(function() {
            let checker = $('.manageForm2').valid();
            let id = $("#e_id").val()
            const data = {
                id: id,
                parent_id: $('#e_parentCategory').val(),
                use: $('#e_classification').val(),
                name: $('#e_category_name').val(),
                desc: $('#e_exampleText').val()
            }
            if (checker === true) {
                Axios.post('/api/manageCategory/update', data).then((resp) => {
                    const Toast = Swal.mixin({
                        icon: 'success',
                        title: 'Success',
                        showConfirmButton: false,
                        timer: 1500,
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
                    // setInterval
                    window.location.reload()
                }).catch((err) => {
                    console.log(err);
                });
            }
        })

        //singleProduct
        $('.SingleProduct').click(function() {
            let id = $(this).attr('key')
            const data = {
                id: id
            }
            Axios.post('/api/manageCategory/singleProduct', data).then((resp) => {
                $('#e_parentCategory').val(resp.data.data.category_id),
                    $('#e_classification').val(resp.data.data.state),
                    $('#e_category_name').val(resp.data.data.category_name),
                    $('#e_exampleText').val(resp.data.data.explanation),
                    $('#e_id').val(resp.data.data.id)
            }).catch((err) => {
                console.log(err);
            });
        });

        //Delete script
        $('.DeleteButton').click(function() {
            let id = $(this).attr('key')
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
                    Axios.post('/api/manageCategory/delete/' + id).then((resp) => {
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