@extends('Admin::layouts.master')
@section('title') {{__('Categories Management')}} @endsection

@inject('t','App\Helper\Helper')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-note2 icon-gradient bg-mean-fruit"></i>
                </div>
                <div style="color: #222222;">
                    {{ __('Categories Management') }}
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
                    {{ __('Create Category') }}
                </button>
                {{-- <button class="btn btn-outline-light opacity-3">{{ __('Delete') }}</button> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-btm-border border-primary mb-3">
                <div class="card-body">
                    <div class="card-title"></div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu" id="categoryDropdown">
                                @foreach ($items as $item)
                                    <li>
                                        <a href="#" aria-expanded="false" data-key="{{ $item->id }}">
                                            <i class="metismenu-icon pe-7s-less"></i>
                                            {{ $item->name }}
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            <span class="">
                                                <button data-key="{{ $item->id }}"
                                                    class="btn btn-outline-success float-end navBtns ModalShow">
                                                    <i class="pe-7s-plus"></i>
                                                </button>
                                            </span>
                                            <span class="">
                                                <button data-key="{{ $item->id }}"
                                                    class="btn btn-outline-danger float-end navBtns DeleteMenu">
                                                    <i class="pe-7s-trash"></i>
                                                </button>
                                            </span>
                                        </a>
                                        <ul class="mm-collapse" style="height: 7.04px;">
                                            @if ($item->child->count() != 0)
                                                @foreach ($item->child as $childCategory)
                                                    @include('Admin::pages.products.child_category', ['child_category' =>
                                                    $childCategory])
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-btm-border border-primary mb-3">
                <div class="card-body">

                    <div class="card-title dataName">{{__('Edit Category')}}</div>
                    <form action="#" class="d-none" id="editForm">

                        <div class="widget-content w-100">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="card-title m-0" id="menu_label">
                                    </div>
                                </div>
                                <div class="widget-content-right">
                                    <button type="button" class=" btn btn-success d-none" id="save_menu">
                                        {{ __('Save') }}
                                    </button>
                                    <button type="button" class=" btn btn-primary" id="edit_menu"> {{ __('Edit') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="e_id">
                        <div class="mb-3">
                            <label class="form-label fw-bold"> {{ __('Category Name') }} </label>
                            <input type="text" class="form-control" placeholder="{{ __('Category Name') }}"
                                id="e_category_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold"> {{ __('Parent Category') }} </label>
                            <select name="" id="e_parent_id" class="form-control form-select">
                                @foreach ($items as $option)
                                    <option value="{{ $option->id }}"> {{ $option->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold"> {{ __('Is Active') }} </label>
                            <select name="is_active" id="e_is_active" class="form-control form-select">
                                <option value="1"> {{ __('Active') }} </option>
                                <option value="0"> {{ __('Inactive') }} </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold"> {{ __('Priority') }} </label>
                            <input type="number" value="1" id="e_order" class="form-control" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-white shadow shadow-sm">
                    <h5 class="modal-title" id="staticBackdropLabel"> {{ __('Create New Product Category') }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="createCategory">
                        <input type="hidden" id="parent_id">
                        <div class="mb-3">
                            <label for="category_id" class="form-label fw-bold"> {{ __('Category Name') }} </label>
                            <input type="text" name="category_name" id="category_name" class="form-control"
                                placeholder="{{ __('Category Name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="is_active" class="form-label fw-bold"> {{ __('Is Active') }} </label>
                            <select name="is_active" id="is_active" class="form-control form-select">
                                <option value="1"> {{ __('Active') }} </option>
                                <option value="0"> {{ __('Inactive') }} </option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer card-btm-border card-shadow-success border-success">
                    <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal"> {{ __('Close') }}
                    </button>
                    <button type="button" class="btn btn-success saveCategory"> {{ __('Save') }} </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#editForm input, #editForm select').attr('disabled', true)
            $('.ModalShow').click(function() {
                $('#staticBackdrop').modal('show')
                $('#parent_id').val('')

            })
            $('#categoryDropdown li a').click(function() {
                const data = {
                    id: $(this).data('key')
                }

                $('#editForm').removeClass('d-none')
                Axios.post('/api/category/getData', data).then((resp) => {
                    // console.log(resp)
                    $('#dataName').html(resp.data.data.name)
                    $('#e_category_name').val(resp.data.data.name)
                    $('#e_is_active').val(resp.data.data.is_active)
                    $('#e_order').val(resp.data.data.order)
                    $('#e_id').val(resp.data.data.id)
                    $('#e_parent_id').html('')
                    if (resp.data.data.parent_id != null) {
                        $.each(resp.data.parent, function(index, value) {
                            $('#e_parent_id').append('<option value="' + value.id + '"> ' +
                                value.name + ' </option>')
                        })
                    } else {
                        $.each(resp.data.parent, function(index, value) {
                            $('#e_parent_id').append('<option value="' + value.id + '"> ' +
                                value.name + ' </option>')
                        })
                        $('#e_parent_id').prepend(
                            '<option value="" selected disabled> {{ __('Select Parent Category') }} </option>'
                        )
                    }

                        $('#e_parent_id').val(resp.data.data.parent_id).change()
                  

                }).catch((error) => {
                    Toast.fire({
                        icon: 'error',
                        title: error
                    });
                });
            })
            $('.navBtns').click(function() {
                $('#parent_id').val($(this).data('key'))
            })

            $('.DeleteMenu').click(function() {
                const data = {
                    id: $(this).data('key')
                }
                Axios.post('/api/category/delete', data).then((resp) => {
                    $('#staticBackdrop').modal('hide')
                    Swal.fire({
                            title: "{{ __('Deleted!') }}",
                            icon: 'success',
                            showConfirmButton: false,
                    })
                    setInterval(() => {
                        window.location.reload()
                    }, 1000);
                }).catch((error) => {
                    Toast.fire({
                        icon: 'error',
                        title: error
                    });
                });
            })

            $('.saveCategory').click(function() {
                $('#createCategory').validate({
                    ignore: "",
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

                        $(element).addClass("is-invalid").removeClass("is-valid");
                        // const parantId = $(element).attr('data-parent-id');
                        // $('#' + parantId).addClass("text-danger").removeClass("text-success");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        // const parantId = $(element).attr('data-parent-id');
                        // $('#' + parantId).addClass("text-success").removeClass("text-danger");
                        // $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                });
                const data = {
                    name: $('#category_name').val(),
                    is_active: $('#is_active').val(),
                    parent_id: $('#parent_id').val(),
                }
                // console.log(data)
                if ($('#createCategory').valid()) {
                    Axios.post('/api/category/create', data).then((resp) => {
                        $('#staticBackdrop').modal('hide')
                        Swal.fire({
                            title: "{{ __('Success') }}",
                            icon: 'success',
                            showConfirmButton: false,
                        })

                        setInterval(() => {
                            window.location.reload()
                        }, 1000);
                    }).catch((error) => {
                        Toast.fire({
                            icon: 'error',
                            title: error
                        });
                    });
                }
            })
            $('#edit_menu').click(function() {
                $('#save_menu').toggleClass('d-none')
                $('#editForm input, #editForm select').attr('disabled',
                    function(index, attr) {
                        return attr === 'disabled' ? null : ''
                    })
            })

            function getId() {
                let parent;
                parent = $('#e_parent_id').val();
                return parent
            }

            $('#save_menu').click(function() {
                $('#editForm').validate({
                    ignore: "",
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

                        $(element).addClass("is-invalid").removeClass("is-valid");
                        // const parantId = $(element).attr('data-parent-id');
                        // $('#' + parantId).addClass("text-danger").removeClass("text-success");
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        // const parantId = $(element).attr('data-parent-id');
                        // $('#' + parantId).addClass("text-success").removeClass("text-danger");
                        // $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                });
                let parent = getId();
                const data = {
                    id: $('#e_id').val(),
                    name: $('#e_category_name').val(),
                    parent_id: parent,
                    order: $('#e_order').val(),
                    is_active: $('#e_is_active').val(),
                }
                // console.log(data)
                if ($('#editForm').valid()) {
                    Axios.post('/api/category/update', data).then((resp) => {
                        Swal.fire({
                            title: "{{ __('Success') }}",
                            icon: 'success',
                            showConfirmButton: false,
                        })
                        setInterval(() => {
                            window.location.reload()
                        }, 1000);
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
@endsection
