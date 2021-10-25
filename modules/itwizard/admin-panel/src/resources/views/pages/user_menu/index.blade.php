@extends('Admin::layouts.master')

@section('content')

    <div class="app-main__inner p-0">
        <div class="app-inner-layout">

            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-home icon-gradient bg-mixed-hopes"></i>
                        </div>
                        <div>
                            {{ __('User Menu') }}
                            <div class="page-title-subheading"></div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i
                                class="fa fa-plus"></i> Create new Menu </button>
                        <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                            <i class="pe-7s-refresh-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item fw-bold">
                            <div class="widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="pe-7s-expand1"></i>
                                        </button>
                                        <input type="checkbox" checked id="checkbox-1" class="ms-4"> <label
                                            for="checkbox-1" class="m-3">Home Page</label>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> </button>
                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                                    </div>
                                </div>
                            </div>


                            <ul class="list-group ms-4">
                                @for ($i = 1; $i < 4; $i++)
                                    <li class="list-group-item">
                                        <div class="widget-content">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <button class="btn btn-secondary btn-sm">
                                                        <i class="pe-7s-expand1"></i>
                                                    </button>
                                                    <input type="checkbox" checked id="checkbox-1" class="ms-4">
                                                    <label for="checkbox-1" class="m-3">Page {{ $i }}
                                                    </label>
                                                </div>
                                                <div class="widget-content-right">
                                                    <button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group ms-4">
                                            @for ($i = 1; $i < 4; $i++)
                                                <li class="list-group-item">
                                                    <div class="widget-content">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <button class="btn btn-secondary btn-sm">
                                                                    <i class="pe-7s-expand1"></i>
                                                                </button>
                                                                <input type="checkbox" checked id="checkbox-1"
                                                                    class="ms-4">
                                                                <label for="checkbox-1" class="m-3">Page child
                                                                    {{ $i }} </label>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <button class="btn btn-info btn-sm"> <i
                                                                        class="fa fa-edit"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-sm"> <i
                                                                        class="fa fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endfor
                                        </ul>
                                    </li>
                                @endfor
                            </ul>
                        </li>
                        <li class="list-group-item fw-bold">
                            <div class="widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="pe-7s-expand1"></i>
                                        </button>
                                        <input type="checkbox" checked id="checkbox-1" class="ms-4">
                                        <label for="checkbox-1" class="m-3">Page {{ $i }} </label>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group ms-4">
                                @for ($i = 1; $i < 3; $i++)
                                    <li class="list-group-item">
                                        <div class="widget-content">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <button class="btn btn-secondary btn-sm">
                                                        <i class="pe-7s-expand1"></i>
                                                    </button>
                                                    <input type="checkbox" checked id="checkbox-1" class="ms-4">
                                                    <label for="checkbox-1" class="m-3">Page {{ $i }}
                                                    </label>
                                                </div>
                                                <div class="widget-content-right">
                                                    <button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <style>
        .widget-content {
            padding: 5px;
        }

    </style>
@endsection
@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create new Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="" class="form-label"> Top Menu </label>
                                <select name="" id="" class="form-control">
                                    <option value=""> Home Page </option>
                                    <option value=""> Page 2 </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="form-label"> Menu name </label>
                                <input type="text" class="form-control" placeholder="Menu Name">
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="" class="form-label"> Status Classification </label>
                                <select name="" id="" class="form-control">
                                    <option value=""> Use </option>
                                    <option value=""> Unset </option>
                                    <option value=""> Delete </option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3 tex">
                                <label for="" class="form-label"> Menu window </label>
                                <div class="clearfix"></div>
                                <select name="" id="" class="form-control">
                                    <option value=""> Current Window </option>
                                    <option value=""> New Window </option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb-3 tex">
                                <label for="" class="form-label"> Menu type </label>
                                <div class="clearfix"></div>
                                <select name="" id="" class="form-control">

                                    <option value="">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">= select =</font>
                                        </font>
                                    </option>
                                    <option value="007001">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">board</font>
                                        </font>
                                    </option>
                                    <option value="007002">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">page</font>
                                        </font>
                                    </option>
                                    <option value="007003">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">direct link</font>
                                        </font>
                                    </option>
                                    <option value="007004">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">form</font>
                                        </font>
                                    </option>
                                    <option value="007005">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">product</font>
                                        </font>
                                    </option>
                                    <option value="007006">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">form list</font>
                                        </font>
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-12">
                                <label for="" class="form-label"> Explanation </label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create menu</button>
                </div>
            </div>
        </div>
    </div>
@endsection
