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
                'colorClass'=>'success',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/banner',
                'icon'=>'pe-7s-photo-gallery',
                'name'=>'Banner',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-menu',
                'name'=>'User menu',
                'colorClass'=>'index',
                'child' => [],
            ]
        ],

    ],
    [
        'title'=>'News',
        'url'=>'cms/news',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-rocket',
                'name'=>'News',
                'child' => [
                    [
                        'url'=>'/cms/news',
                        'name'=>'News',
                    ],
                    [
                        'url'=>'/cms/new',
                        'name'=>'News Category',
                    ],
                ],
            ]
        ],

    ],
    [
        'title'=>'Settings',
        'url'=>'cms/site_info',
        'menus'=> [
            [
//                'url'=>'/cms/site_info',
                'icon'=>'pe-7s-config',
                'name'=>'Basic settings',
                'child' => [
                    [
                        'url'=>'/cms/site_info',
                        'icon'=>'',
                        'name'=>'Site information',
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
                'url'=>'seo_list',
                'icon'=>'pe-7s-graph1',
                'name'=>'SEO management',
                'child' => null
            ],
        ],

    ],
    [
        'title'=>'Permission manage',
        'url'=>'cms/permission',
        'menus'=> [
            [
                'url'=>'/cms/permission',
                'icon'=>'pe-7s-key',
                'name'=>'Permission manage',
                'child' => null,
            ],
            [
                'url'=>'/cms/menu_manage',
                'icon'=>'pe-7s-menu',
                'name'=>'User management',
                'child' => null,
            ]
        ],

    ],
];
