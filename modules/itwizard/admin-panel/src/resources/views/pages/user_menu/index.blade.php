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
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <!-- Treview HTML -->
                    <div class="treeview">
                        <ul class="sTree bgC4" id="sTree2">
                            <li class="bgC4" id="item_a">
                                <div>Item a</div>
                            </li>
                            <li class="bgC4" id="item_b">
                                <div>Item b</div>
                            </li>
                            <li class="bgC4 sortableListsClose" id="item_c">
                                <div><span class="sortableListsOpener"> </span>Item c</div>
                                <ul class="">
                                    <li class="bgC4" id="item_1">
                                        <div>Item 1</div>
                                    </li>
                                    <li class="bgC4" id="item_2">
                                        <div>Item 2</div>
                                    </li>
                                    <li class="bgC4" id="item_3">
                                        <div>Item 3</div>
                                    </li>
                                    <li class="bgC4" id="item_4">
                                        <div>Item 4</div>
                                    </li>
                                    <li class="bgC4" id="item_5">
                                        <div>Item 5</div>
                                    </li>
                                </ul>
                            </li>
                            <li class="bgC4 sortableListsClose" id="item_d">
                                <div><span class="sortableListsOpener"> </span>Item c</div>
                                <ul class="">
                                    <li class="bgC4" id="item_1">
                                        <div>Item 1</div>
                                    </li>
                                    <li class="bgC4" id="item_2">
                                        <div>Item 2</div>
                                    </li>
                                    <li class="bgC4" id="item_3">
                                        <div>Item 3</div>
                                    </li>
                                    <li class="bgC4" id="item_4">
                                        <div>Item 4</div>
                                    </li>
                                    <li class="bgC4" id="item_5">
                                        <div>Item 5</div>
                                    </li>
                                </ul>
                            </li>
                            <li class="bgC4 sortableListsClose" id="item_e">
                                <div><span class="sortableListsOpener"> </span>Item c</div>
                                <ul class="">
                                    <li class="bgC4" id="item_1">
                                        <div>Item 1</div>
                                    </li>
                                    <li class="bgC4" id="item_2">
                                        <div>Item 2</div>
                                    </li>
                                    <li class="bgC4" id="item_3">
                                        <div>Item 3</div>
                                    </li>
                                    <li class="bgC4" id="item_4">
                                        <div>Item 4</div>
                                    </li>
                                    <li class="bgC4" id="item_5">
                                        <div>Item 5</div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .treeview ul,
        .treeview li { list-style-type:none; padding:3px; color:#fff; border:1px solid #000; }
        .treeview ul { padding:10px; }
        .treeview ul li { padding-left:50px; margin:10px 0; border:1px solid #000; }
        .treeview li div { padding:7px; background-color:#D870A9; border:1px solid #000; }
        .treeview li, ul, div { border-radius: 3px; }
        .scrollUp { position:fixed; top:0; left:0; height:48px; width:50px; border:1px solid red; }
        .scrollDown { position:fixed; bottom:0; left:0; height:48px; width:50px; border:1px solid red; }
        .sortableListsClose ul, .sortableListsClose ol { display:none; }
        .red { background-color:#ff9999;}
        .blue { background-color:#D870A9;}
        .green { background-color:#99ff99; }
        .pV10 { padding-top:10px; padding-bottom:10px; }
        .dN { display:none; }
        .zI1000 { z-index:1000; }
        .bgC1 { background-color:#ccc; }
        .bgC2 { background-color:#ff8; }
        .bgC3 { background-color:#f0f; }
        .bgC4 { background-color:#ED87BD; }
        .small1 { font-size:0.8em; }
        .small2 { font-size:0.7em; }
        .small3 { font-size:0.6em; }
        #sTreeBase { width:100px; height:50px; background-color: blue; }
        #text { padding:10px 0; }
        #sTree { background-color: green; }
        #sTree2 { margin:10px 0; }
        #center { width:950px; margin:0 auto; padding:10px; }
    </style>
@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="/js/jquery-sortable-lists.js"></script>
    <script>
            $(function()
            {
                var options = {
                placeholderCss: {'background-color': '#ff8'},
                hintCss: {'background-color':'#bbf'},
                onChange: function( cEl )
            {
                console.log( 'onChange' );
            },
                complete: function( cEl )
            {
                console.log( 'complete' );
            },
                isAllowed: function( cEl, hint, target )
            {
                // Be carefull if you test some ul/ol elements here.
                // Sometimes ul/ols are dynamically generated and so they have not some attributes as natural ul/ols.
                // Be careful also if the hint is not visible. It has only display none so it is at the previouse place where it was before(excluding first moves before showing).
                if( target.data('module') === 'c' && cEl.data('module') !== 'c' )
            {
                hint.css('background-color', '#ff9999');
                return false;
            }
                else
            {
                hint.css('background-color', '#99ff99');
                return true;
            }
            },
                opener: {
                active: true,
                as: 'html',  // if as is not set plugin uses background image
                close: '<i class="fa fa-minus c3"></i>',  // or 'fa-minus c3',  // or './imgs/Remove2.png',
                open: '<i class="fa fa-plus"></i>',  // or 'fa-plus',  // or'./imgs/Add2.png',
                openerCss: {
                'display': 'inline-block',
                //'width': '18px', 'height': '18px',
                'float': 'left',
                'margin-left': '-35px',
                'margin-right': '5px',
                //'background-position': 'center center', 'background-repeat': 'no-repeat',
                'font-size': '1.1em'
            }
            },
                ignoreClass: 'clickable'
            };
                $('#sTree2').sortableLists(options);

                console.log($('#sTree2').sortableListsToArray());
                console.log($('#sTree2').sortableListsToHierarchy());
                console.log($('#sTree2').sortableListsToString());
            });
    </script>
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
