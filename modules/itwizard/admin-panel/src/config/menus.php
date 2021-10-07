<?php
return [
    [
        'title'=>'Dashboard',
        'menus'=> [
            [
                'url'=>'/cms/analytic',
                'icon'=>'pe-7s-rocket',
                'name'=>'Analytic',
                'function'=>'index',
                'child' => [],
            ],
            [
                'url'=>'/cms/banner',
                'icon'=>'pe-7s-photo-gallery',
                'name'=>'Banner',
                'function'=>'index',
                'child' => [],
            ],
            [
                'url'=>'/cms/user_menu',
                'icon'=>'pe-7s-menu',
                'name'=>'User menu',
                'function'=>'index',
                'child' => [],
            ]
        ],

    ],
    [
        'title'=>'News',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-rocket',
                'name'=>'News',
                'child' => [
                    [
                        'url'=>'#',
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
        'menus'=> [
            [
                'url'=>'',
                'icon'=>'pe-7s-config',
                'name'=>'Basic settings',
                'child' => [
                    [
                        'url'=>'site_info',
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
