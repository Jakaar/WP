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
        'title'=>'Settings',
        'menus'=> [
            [
                'url'=>'',
                'icon'=>'pe-7s-users',
                'name'=>'Basic settings',
                'child' => [
                    [
                'url'=>'site_info',
                'icon'=>'pe-7s-users',
                'name'=>'Site information',
                'child' => null
            ],
                ]
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-users',
                'name'=>'Notice board',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-users',
                'name'=>'Product management',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-users',
                'name'=>'Member management',
                'child' => null
            ],
            [
                'url'=>'',
                'icon'=>'pe-7s-users',
                'name'=>'API management',
                'child' => null
            ],
            [
                'url'=>'seo_list',
                'icon'=>'pe-7s-users',
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
