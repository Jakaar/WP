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

                        <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                            <i class="pe-7s-refresh-2"></i>
                        </button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i
                                class="fa fa-plus"></i> Create new Menu </button>
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <ul class="list-group sortable" id="sortableMain">
                        <li class="list-group-item fw-bold" data-order="0" id="5">
                            <div class="widget-content d-flex">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        {{-- <button class="btn btn-outline-secondary btn-sm">
                                            <i class="pe-7s-expand1"></i>
                                        </button> --}}
                                        <input type="checkbox" checked id="checkbox-1" class="ms-4"> <label
                                            for="checkbox-1" class="m-3">Home Page</label>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn-outline-primary btn" onclick="alert('gg')"> {{ __('Edit') }}
                                        </button>
                                        <button class="btn-outline-danger btn-link btn"> {{ __('Delete') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group ms-4 sortable">
                                @for ($i = 1; $i < 2; $i++)
                                    <li class="list-group-item fw-bold" data-order="{{ $i }}"
                                        id="{{ $i }}">
                                        <div class="widget-content d-flex">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    {{-- <button class="btn btn-outline-secondary btn-sm">
                                                        <i class="pe-7s-expand1"></i>
                                                    </button> --}}
                                                    <input type="checkbox" checked id="checkbox-1" class="ms-4">
                                                    <label for="checkbox-1" class="m-3">Page{{ $i }}</label>
                                                </div>
                                                <div class="widget-content-right">
                                                    <button class="btn-outline-primary btn"> {{ __('Edit') }}
                                                    </button>
                                                    <button class="btn-outline-danger btn-link btn">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group ms-4 sortable">
                                            @for ($j = 1; $j < 2; $j++)
                                                <li class="list-group-item fw-bold" data-parent="{{ $i }}"
                                                    data-order="{{ $j }}" id="{{ $j }}">
                                                    <div class="widget-content d-flex">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                {{-- <button class="btn btn-outline-secondary btn-sm">
                                                                    <i class="pe-7s-expand1"></i>
                                                                </button> --}}
                                                                <input type="checkbox" checked id="checkbox-1"
                                                                    class="ms-4">
                                                                <label for="checkbox-1" class="m-3">Pagechild{{ $j }} </label>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <button class="btn-outline-primary btn">
                                                                    {{ __('Edit') }}
                                                                </button>
                                                                <button class="btn-outline-danger btn-link btn">
                                                                    {{ __('Delete') }}
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
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <style>
        .widget-content {
            padding: 5px;
        }

        ul li {
            cursor: move;
        }

    </style>
@endsection

@section('script')
    <script src="/js/jquery-sortable-lists.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    {{-- <script>
        $('.sortable').sortable({
            dropOnEmpty: true,
            items: "> li",
            tolerance: "pointer",
            containment: "document",
            connectWith: '.sortable ',
            stop: function() {
                console.log(SetSortOrder())
            }
        });

 

        function PopulateSortItems() {
            sortedItems.length = 0;

            $(".sortable li").each(function(index, value) {
                let item = {};
                item.id = $(this).attr("id");
                item.order = $(this).data("order");
                item.parent = $(this).data("parent")
                sortedItems.push(item);
            });

            return sortedItems
        }
    </script> --}}
    <script>
        function PopulateSortItems() {
            sortedItems.length = 0;

            $("#sortableMain li").each(function(index, value) {
                let item = {};
                item.id = $(this).attr("id");
                item.order = $(this).data("order");
                item.name = $(this).find('label').html()
                sortedItems.push(item);
            });

            return sortedItems
        }

        function SetSortOrder() {
            $("#sortableMain li").each(function(index, value) {
                if($(this).parent('.sortable').length != 0) {
                    // alert($(this).parent().find('li:first').html());
                }
                $(this).data("order", index);
            });
        }
        var sortedItems = [];
        var options = {
            placeholderCss: {
                'background-color': '#ff8'
            },
            hintCss: {
                'background-color': '#bbf'
            },

            onChange: function(cEl) {

            },
            complete: function(cEl) {
                SetSortOrder();
                var items = PopulateSortItems();
                console.log(items)
            },
            isAllowed: function(cEl, hint, target) {
                // Be carefull if you test some ul/ol elements here.
                // Sometimes ul/ols are dynamically generated and so they have not some attributes as natural ul/ols.
                // Be careful also if the hint is not visible. It has only display none so it is at the previouse place where it was before(excluding first moves before showing).
                if (target.data('module') === 'c' && cEl.data('module') !== 'c') {
                    hint.css('background-color', '#ff9999');
                    return false;
                } else {
                    hint.css('background-color', '#99ff99');
                    return true;
                }
            },
            opener: {
                active: true,
                as: 'html', // if as is not set plugin uses background image
                close: '<i class="fa fa-minus c3"></i>', // or 'fa-minus c3',  // or './imgs/Remove2.png',
                open: '<i class="fa fa-plus"></i>', // or 'fa-plus',  // or'./imgs/Add2.png',
                openerClass: "btn btn-outline-secondary",
            },

            ignoreClass: 'clickable btn'
        };

        SetSortOrder();
        $('#sortableMain').sortableLists(options);

        $(document).ready(function() {
            $('#create_menu').click(function() {
                $('#sortableMain').prepend(
                    '<li class="list-group-item"> <div class="widget-content d-flex"><div class="widget-content-wrapper"> <div class="widget-content-left"><input type="checkbox" checked id="checkbox-1" class="ms-4"><label for="checkbox-1" class="m-3">New Page </label></div> <div class="widget-content-right"> <button class="btn-outline-primary btn"> {{ __('Edit') }} </button> <button class="btn-outline-danger btn-link btn"> {{ __('Delete') }} </button> </div> </div> </div> </li>'
                )
                $('#staticBackdrop').modal('hide')
            })
        })
    </script>
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
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">= select =</span>
                                        </span>
                                    </option>
                                    <option value="007001">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">board</span>
                                        </span>
                                    </option>
                                    <option value="007002">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">page</span>
                                        </span>
                                    </option>
                                    <option value="007003">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">direct link</span>
                                        </span>
                                    </option>
                                    <option value="007004">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">form</span>
                                        </span>
                                    </option>
                                    <option value="007005">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">product</span>
                                        </span>
                                    </option>
                                    <option value="007006">
                                        <span style="vertical-align: inherit;">
                                            <span style="vertical-align: inherit;">form list</span>
                                        </span>
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
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="create_menu">Create menu</button>
                </div>
            </div>
        </div>
    </div>

@endsection
