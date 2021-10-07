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
//            [
//                'url'=>'users',
//                'icon'=>'pe-7s-users',
//                'name'=>'Users',
//                'child' => null
//            ],
//            [
//                'url'=>'contact-us',
//                'icon'=>'pe-7s-call',
//                'name'=>'Contact Us',
//                'child' => [
//                    [
//                        'url'=>'contact-us',
//                        'icon'=>'pe-7s-call',
//                        'name'=>'Contact Us Info',
//                    ],
//                    [
//                        'url'=>'contactus-inbox',
//                        'icon'=>'pe-7s-call',
//                        'name'=>'Contact Us Inbox',
//                    ],
//                ],
//            ],
//            [
//                'url'=>'banner',
//                'icon'=>'lnr-chart-bars',
//                'name'=>'Banner',
//                'child' => null,
//            ]
        ],

    ],
    [
        'title'=>'Permission manage',
        'menus'=> [
            [
                'url'=>'',
                'icon'=>'pe-7s-key',
                'name'=>'Permission manage',
                'child' => null,
            ]
        ],

    ],
];
