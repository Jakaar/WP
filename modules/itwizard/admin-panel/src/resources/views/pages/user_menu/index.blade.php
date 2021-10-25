@extends('Admin::layouts.master')

@section('content')
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
    <div class="row">
        <div class="col-6">
            <div class="p-1 mb-5 card-border card  Scriptcontent">
                <!-- Treview HTML -->
                <div class="app-sidebar__inner">
                    <ul class="sTree vertical-nav-menu metismenu border-danger" id="sTree2">
                        <li>
                            <a href="elements-icons.html" id="menu1">
                                <i class="metismenu-icon"></i>
                                Icons 1
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html" id="menu2">
                                <i class="metismenu-icon"></i>
                                Icons 2
                            </a>
                        </li>
                        <li>
                            <a href="elements-icons.html" id="menu3">
                                <i class="metismenu-icon"></i>
                                Icons 3
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-6">
            <div id="tree1"></div>
        </div>
    </div>
@endsection
@section('script')
{{--    <script>--}}
{{--            $(function()--}}
{{--            {--}}
{{--                const options = {--}}
{{--                    placeholderCss: {'background-color': '#ff8'},--}}
{{--                    hintCss: {'background-color': '#bbf'},--}}
{{--                    onChange: function (cEl) {--}}

{{--                    },--}}
{{--                    complete: function (cEl) {--}}
{{--                        // const jsonData = JSON.stringify(tree)--}}
{{--                        Axios.post('/api/GetContentData',{data:cEl}).then((resp)=>{--}}
{{--                            console.log(resp)--}}
{{--                        }).catch((err) => {--}}
{{--                            console.log(err)--}}
{{--                        })--}}
{{--                    },--}}
{{--                    isAllowed: function (cEl, hint, target) {--}}
{{--                        // Be carefull if you test some ul/ol elements here.--}}
{{--                        // Sometimes ul/ols are dynamically generated and so they have not some attributes as natural ul/ols.--}}
{{--                        // Be careful also if the hint is not visible. It has only display none so it is at the previouse place where it was before(excluding first moves before showing).--}}
{{--                        if (target.data('module') === 'c' && cEl.data('module') !== 'c') {--}}
{{--                            hint.css('background-color', '#ff9999');--}}
{{--                            return false;--}}
{{--                        } else {--}}
{{--                            hint.css('background-color', '#99ff99');--}}
{{--                            return true;--}}
{{--                        }--}}
{{--                    },--}}
{{--                    opener: {--}}
{{--                        active: true,--}}
{{--                        as: 'html',  // if as is not set plugin uses background image--}}
{{--                        close: '<i class="fa fa-minus c3"></i>',  // or 'fa-minus c3',  // or './imgs/Remove2.png',--}}
{{--                        open: '<i class="fa fa-plus"></i>',  // or 'fa-plus',  // or'./imgs/Add2.png',--}}
{{--                        openerCss: {--}}
{{--                            'display': 'inline-block',--}}
{{--                            //'width': '18px', 'height': '18px',--}}
{{--                            'float': 'left',--}}
{{--                            'margin-left': '-35px',--}}
{{--                            'margin-right': '5px',--}}
{{--                            //'background-position': 'center center', 'background-repeat': 'no-repeat',--}}
{{--                            'font-size': '1.1em'--}}
{{--                        }--}}
{{--                    },--}}
{{--                    ignoreClass: 'clickable'--}}
{{--                };--}}
{{--                const tree = $('#sTree2').sortableLists(options);--}}
{{--            });--}}
{{--    </script>--}}
    <script>
        $(document).ready(function() {
            $('#create_menu').click(function() {
                $('#sortableMain').prepend(
                    '<li class="list-group-item"> <div class="widget-content d-flex"><div class="widget-content-wrapper"> <div class="widget-content-left"><input type="checkbox" checked id="checkbox-1" class="ms-4"><label for="checkbox-1" class="m-3">New Page </label></div> <div class="widget-content-right"> <button class="btn-outline-primary btn"> {{ __('Edit') }} </button> <button class="btn-outline-danger btn-link btn"> {{ __('Delete') }} </button> </div> </div> </div> </li>'
                )
                $('#staticBackdrop').modal('hide')
            })
        })
    </script>
<script>
    const data = [
        {
            name: 'node1',
            children: [
                { name: 'child1' },
                { name: 'child2' }
            ]
        },
        {
            name: 'node2',
            children: [
                { name: 'child3' }
            ]
        }
    ];
    $('#tree1').tree({
        data: data,
        dragAndDrop: true,

    });

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
