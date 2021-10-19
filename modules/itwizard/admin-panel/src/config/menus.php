<?php
return [
    [
        'title'=>'Dashboard',
        'url'=>'cms/dashboard',
        'menus'=> [
            [
                'url'=>'cms/dashboard',
                'icon'=>'pe-7s-rocket',
                'name'=>'Analytic',
                'colorClass'=>'text-success',
                'child' => [],
            ],
//            [
//                'url'=>'cms/dashboard/user_menu',
//                'icon'=>'pe-7s-menu',
//                'name'=>'User menu',
//                'colorClass'=>'index',
//                'child' => [],
//            ]
        ],

    ], // Dashboard menus
//    [
//        'title'=>'Marketing',
//        'url'=>'cms/marketing',
//        'menus'=> [
//            [
//                'url'=>'cms/marketing',
//                'icon'=>'pe-7s-ticket',
//                'name'=>'Banner',
//                'colorClass'=>'success',
//                'child' => [],
//            ],
//            [
//                'url'=>'cms/marketing/popup',
//                'icon'=>'lnr-layers',
//                'name'=>'Popup',
//                'colorClass'=>'success',
//                'child' => [],
//            ],
//        ],
//    ], // Marketing menus
//    [
//        'title'=>'Gallery',
//        'url'=>'cms/gallery',
//        'menus'=> [
//            [
//                'url'=>'cms/gallery',
//                'icon'=>'pe-7s-albums',
//                'name'=>'Galleries',
//                'colorClass'=>'text-success',
//                'child' => [],
//            ],
//            [
//                'url'=>'cms/gallery/photos',
//                'icon'=>'pe-7s-photo',
//                'name'=>'Gallery photos',
//                'colorClass'=>'success',
//                'child' => [],
//            ],
//        ],
//    ], // Gallery menus
    [
        'title'=>'Notice Board Management',
        'url'=>'cms/noticeboard',
        'menus'=> [
            [
                'url'=>'cms/noticeboard',
                'icon'=>'pe-7s-albums',
                'name'=>'Notice Board Management',
                'colorClass'=>'success',
                'child' => [

                ],
            ],
        ],
    ], // Notice Board Management menus
    [
        'title'=>'Content & Menu',
        'url'=>'cms/cM',
        'menus'=> [
            [
                'url'=>'cms/cM',
                'icon'=>'pe-7s-albums',
                'name'=>'Content & Menu',
                'colorClass'=>'success',
                'child' => [

                ],
            ],
            [
                'url'=>'cms/cM/menus',
                'icon'=>'pe-7s-menu',
                'name'=>'Menu Manage',
                'colorClass'=>'info',
                'child' => [

                ],
            ],
            [
                'url'=>'cms/contents',
                'icon'=>'pe-7s-folder',
                'name'=>'Content Manage',
                'colorClass'=>'success',
                'child' => [

                ],
            ],
        ],
    ], // Menu management menus
//    [
//        'title'=>'News',
//        'url'=>'cms/news',
//        'menus'=> [
//            [
//                'url'=>'cms/news',
//                'icon'=>'pe-7s-news-paper',
//                'name'=>'News',
//                'child' => [],
//            ],
//            [
//                'url'=>'cms/news/categories',
//                'icon'=>'pe-7s-menu',
//                'name'=>'News Categories',
//                'child' => [],
//            ]
//        ],
//
//    ], // News menus
    [
        'title'=>'Settings',
        'url'=>'cms/settings',
        'menus'=> [
            [
                'url'=>'cms/settings',
                'icon'=>'pe-7s-config',
                'name'=>'Basic settings',
                'child' => [
                    [
                        'url'=>'cms/settings',
                        'icon'=>'',
                        'name'=>'Site information',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/contactUs',
                        'icon'=>'',
                        'name'=>'Contact Us',
                        'child' => null
                    ],
                ]
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-display1',
                'name'=>'Notice board',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-box1',
                'name'=>'Product management',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-id',
                'name'=>'Member management',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-link',
                'name'=>'API management',
                'child' => null
            ],
            [
                'url'=>'cms/settings/seo_list',
                'icon'=>'pe-7s-graph1',
                'name'=>'SEO management',
                'child' => null
            ],
        ],

    ], // Setting menus
    [
        'title'=>'Permission manage',
        'url'=>'cms/permission',
        'menus'=> [
            [
                'url'=>'cms/permission',
                'icon'=>'pe-7s-key',
                'name'=>'Permission manage',
                'child' => null,
            ],
//            [
//                'url'=>'cms/permission/menu_manage',
//                'icon'=>'pe-7s-menu',
//                'name'=>'User management',
//                'child' => null,
//            ]
        ],

    ], // Permission manage menus
];
