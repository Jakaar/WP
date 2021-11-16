@extends('Admin::layouts.master')
@inject('t','App\Helper\Helper')
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
            <button type="button" data-bs-toggle="tooltip" title="{{__('Refresh')}}" class="btn-shadow me-3 btn btn-info refresh-page" id="reload_page">
                <i class="pe-7s-refresh-2"></i>
            </button>
            <div class="d-inline-block dropdown">
                @permission('categoryProduct-create')
                <button type="button" class="search-icon btn-shadow btn btn-success CreateModalShow" data-bs-toggle="modal" data-bs-target=".bd-example">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="pe-7s-plus"></i>
                    </span>
                    {{__('Category Registration')}}
                </button>
                @endpermission
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
                            <th>{{__('DESCRIPTION')}}</th>
                            <th>{{__('STATE')}}</th>
                            <th>{{__('ACTION')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $categories)
                        <tr>
                            <td>{{$categories->id}} </td>
                            <td>{{$t->translateText($categories->category_name)}}</td>
                            <td>{{$categories->product_count->count() ?? 'NULL'}}</td>
                            <td>{{$t->translateText($categories->explanation)}}</td>
                            <td>{{$categories->state}}</td>
                            <td>
                                <div class="float-end">
                                    @permission('categoryProduct-update')
                                    <button class="btn-md mb-2 me-2 btn-icon btn-icon-only btn btn-outline-primary SingleProduct" data-bs-toggle="modal" data-bs-target="#EditRegistrationModal" key="{{$categories->id}}">
                                        {{__('Edit')}}
                                    </button>
                                    @endpermission
                                    @permission('categoryProduct-delete')
                                    <button class="btn-md mb-2 me-2 btn-icon btn-icon-only btn btn-outline-danger DeleteButton" key="{{$categories->id}}">
                                        {{__('Delete')}}
                                    </button>
                                    @endpermission
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
<div class="modal fade bd-example" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="CreateRegistrationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Menu Registration')}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav tabs-animated mb-3">
                    @foreach ($data['langs'] as $key => $lang)
                    <li class="nav-item">
                        <a role="tab" class="nav-link @if ($key === 0) active @endif" id="c_tab-c1-{{ $lang->id }}" data-bs-toggle="tab" href="#c_tab-animated1-{{ $lang->id }}">
                            <span class="nav-text"><b>{{ $lang->country }}</b></span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <form action="" class="manageForm">
                    <div class="mb-3">
                        <label>{{__('Parent Category')}}</label>
                        <select id="c_parentCategory" name="c_parentCategory" class="form-select form-control-sm form-control">
                            <option value="" selected> == Select parent category == </option>
                            @foreach($parent as $parents)
                            <option value="{{$parents->id}}">{{ $t->translateText($parents->category_name) }}</option>
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

                    <div class="tab-content mt-3">
                        @foreach($data['langs'] as $key => $lang)
                        <div class="tab-pane fade @if($key === 0) active show @endif" id="c_tab-animated1-{{$lang->id}}">
                            <div class="mb-3">
                                <label>{{__('Category name')}}</label>
                                <input type="text" name="c_category_name{{$lang->country_code}}" id="c_category_name{{$lang->country_code}}" class="form-control" data-parent-id="tab-c1-{{$lang->id}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleText" class="form-label">{{__('Explanation')}}</label>
                                <textarea name="text" id="c_exampleText{{$lang->country_code}}" class="form-control" data-parent-id="tab-c1-{{$lang->id}}" required></textarea>
                            </div>
                        </div>
                        @endforeach
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

<div class="modal fade bd-example" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="EditRegistrationModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Edit Menu Registration')}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav tabs-animated mb-3">
                    @foreach ($data['langs'] as $key => $lang)
                    <li class="nav-item">
                        <a role="tab" class="nav-link @if ($key === 0) active @endif" id="tab-c1-{{ $lang->id }}" data-bs-toggle="tab" href="#tab-animated1-{{ $lang->id }}">
                            <span class="nav-text"><b>{{ $lang->country }}</b></span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <form action="" class="manageForm2">
                    <div class="mb-3">
                        <label>{{__('Parent Category')}}</label>
                        <input type="hidden" id="e_id">
                        <select id="e_parentCategory" name="e_parentCategory" class="form-select form-control-sm form-control">
                            <option value="" selected> == Select parent category == </option>
                            @foreach($parent as $parents)
                            <option value="{{$parents->id}}">{{ $t->translateText($parents->category_name) }}</option>
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

                    <div class="tab-content mt-3">
                        @foreach($data['langs'] as $key => $lang)
                            <div class="tab-pane fade @if($key === 0) active show @endif" id="tab-animated1-{{$lang->id}}">
                                <div class="mb-3">
                                    <label>{{__('Category name')}}</label>
                                    <input type="text" name="e_category_name{{$lang->country_code}}" id="e_category_name{{$lang->country_code}}" class="form-control" data-parent-id="tab-c1-{{$lang->id}}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleText" class="form-label">{{__('Explanation')}}</label>
                                    <textarea name="text" id="e_exampleText{{$lang->country_code}}" class="form-control" data-parent-id="tab-c1-{{$lang->id}}" required></textarea>
                                </div>
                            </div>
                        @endforeach
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

            const langs = {!! $data['langs'] !!};

            let dataR = {}

            $.each(langs, function(i, v){

                const name = $('#c_category_name'+v.country_code).val();
                const id = '#c_category_name'+v.country_code;
                const code = v.country_code;
                dataR[code] = name
            });

            let dataJ = {}

            $.each(langs, function(i, v){
                const desc = $('#c_exampleText'+v.country_code).val();
                const id = '#c_exampleText'+v.country_code;
                const code = v.country_code;
                dataJ[code] = desc
            })

            const data = {
                parent_id: $('#c_parentCategory').val(),
                use: $('#c_classification').val(),
                MenuName: JSON.stringify(dataR),
                MenuDesc: JSON.stringify(dataJ),
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
            let id = $("#e_id").val();

            const langs = {!! $data['langs'] !!};

            let dataG = {}

            $.each(langs, function(i, v){

                const name = $('#e_category_name'+v.country_code).val();
                const id = '#e_category_name'+v.country_code;
                const code = v.country_code;
                dataG[code] = name
            })

            let dataD = {}

            $.each(langs, function(i, v){
                const desc = $('#e_exampleText'+v.country_code).val();
                const id = '#e_exampleText'+v.country_code;
                const code = v.country_code;
                dataD[code] = desc
            })

            const data = {
                id: id,
                parent_id: $('#e_parentCategory').val(),
                use: $('#e_classification').val(),
                name: JSON.stringify(dataG),
                desc: JSON.stringify(dataD),
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
            const langs = {!! $data['langs'] !!};

            let id = $(this).attr('key')
            const data = {
                id: id
            }
            Axios.post('/api/manageCategory/singleProduct', data).then((resp) => {
                    $.each(langs, (i,v)=>{
                        $('#e_category_name'+v.country_code).val(JSON.parse(resp.data.data.category_name)[v.country_code])
                        $('#e_exampleText'+v.country_code).val(JSON.parse(resp.data.data.explanation)[v.country_code])
                    })
                    $('#e_parentCategory').val(resp.data.data.category_id),
                    $('#e_classification').val(resp.data.data.state),
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
