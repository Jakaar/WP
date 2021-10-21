<?php
return [
    [
        'title'=>'Preferences',
        'url'=>'cms/preferences',
        'menus'=> [
            [
                'url'=>'/#',
                'icon'=>'pe-7s-config',
                'name'=>'Basic setting',
                'child' => [
                    [
                        'url'=>'cms/preferences',
                        'icon'=>'',
                        'name'=>'Basic setting',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/log_analysis',
                        'icon'=>'',
                        'name'=>'Log analysis',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/popup_manage',
                        'icon'=>'',
                        'name'=>'Popup manage',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/form_mail',
                        'icon'=>'',
                        'name'=>'Form mail',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/banner_manage',
                        'icon'=>'',
                        'name'=>'Banner manage',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/page_manage',
                        'icon'=>'',
                        'name'=>'Page manage',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/page_access',
                        'icon'=>'',
                        'name'=>'Page access rights',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-display2',
                'name'=>'Notice board',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'cms/preferences/notice_board',
                        'icon'=>'',
                        'name'=>'Notice board',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/main_post',
                        'icon'=>'',
                        'name'=>'Main post',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-box1',
                'name'=>'Product management',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'cms/preferences/product_list',
                        'icon'=>'',
                        'name'=>'Product list',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/preferences/main_picks',
                        'icon'=>'',
                        'name'=>'Main & Featured Products',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-users',
                'name'=>'Member management',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'cms/preferences/',
                        'icon'=>'',
                        'name'=>'Member Register',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'SNS settings',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-share',
                'name'=>'API management',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'API',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-ticket',
                'name'=>'Point Manage',
                'colorClass'=>'success',
                'child' => [
//                    [
//                        'url'=>'#',
//                        'icon'=>'',
//                        'name'=>'Point Manage',
//                        'child' => null
//                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-link',
                'name'=>'SEO Manage',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'cms/settings',
                        'icon'=>'',
                        'name'=>'SEO Manage',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-unlock',
                'name'=>'Menu Permission Manage',
                'colorClass'=>'success',
                'child' => [
                    [
                        'url'=>'cms/settings',
                        'icon'=>'',
                        'name'=>'Menu management',
                        'child' => null
                    ],
                    [
                        'url'=>'cms/settings',
                        'icon'=>'',
                        'name'=>'Permission management',
                        'child' => null
                    ],
                ],
            ],

        ],
    ], //Setting the environment menu
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
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-menu',
                'name'=>'User menu',
                'colorClass'=>'index',
                'child' => [],
            ]
        ],

    ], // Dashboard menus
    [
        'title'=>'Basic setting',
        'url'=>'cms/basic_setting',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-info',
                'name'=>'Site information',
                'child' => [],
            ],
            [
               'url'=>'#',
               'icon'=>'pe-7s-user',
               'name'=>'Administrator settings',
               'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-exapnd2',
                'name'=>'Manage pop-ups',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-display2',
                'name'=>'MainBanner management',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-door-lock',
                'name'=>'User security settings',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-portfolio',
                'name'=>'Subscription Terms and Privacy Policy',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-lock',
                'name'=>'Administrator security settings',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-pen',
                'name'=>'Fixed code',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Fixed code',
                        'child' => null
                    ],
                ],
            ],
        ],

    ], // Basic settings
    [
        'title'=>'Member management',
        'url'=>'cms/member_management',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-user',
                'name'=>'Admin Home',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Admin Home',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Administrator settings',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-users',
                'name'=>'Member Management',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Member Management',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage your membership',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Secessionist',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Send a group email',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Email settings',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage direct messages',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage members',
                        'child' => null
                    ],
                ],
            ]
        ],

    ], // Member Management
    [
        'title'=>'Manage pages',
        'url'=>'cms/manage_pages',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-albums',
                'name'=>'Manage pages',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage pages',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-upload',
                'name'=>'(No group)',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Quote Guide',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Contact us',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Directions',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Test',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-plugin',
                'name'=>'Add-on Service',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Search for online ads',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Sms service',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-global',
                'name'=>'Mobile apps/web creation',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Create a web/app',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Develop custom apps',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Text page',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-bookmarks',
                'name'=>'About us',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Company overview',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Company history',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Business area',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Suppliers',
                        'child' => null
                    ],
                ],
            ]
        ],

    ], // Manage pages
    [
        'title'=>'Board Management',
        'url'=>'cms/board_management',
        'menus'=> [
            [
                'url'=>'cms/board_management',
                'icon'=>'pe-7s-airplay',
                'name'=>'Board management',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Board management',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Comment integration management',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Post integration management',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Bulletin board statistics',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-check',
                'name'=>'Easy consultation',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'cms/settings',
                        'icon'=>'',
                        'name'=>'Easy consultation',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-photo-gallery',
                'name'=>'List of bulletin boards',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-upload',
                'name'=>'(No group)',
                'colorClass'=>'index',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Image',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'General publishing board',
                        'child' => null
                    ],
                ],
            ]
        ],

    ], // Board management
    [
        'title'=>'Suppliers',
        'url'=>'cms/suppliers',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-mail',
                'name'=>'Formmail management',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Formmail manager',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Create a form mail',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-mail-open-file',
                'name'=>'List of formmails',
                'colorClass'=>'index',
                'child' => [],
            ]
        ],

    ], // Suppliers
    [
        'title'=>'Banner management',
        'url'=>'cms/banner_management',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-albums',
                'name'=>'Banner management',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Banner management',
                        'child' => null
                    ],
                ],
            ],
            [
                'url'=>'#',
                'icon'=>'pe-7s-note2',
                'name'=>'Banner list',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-display1',
                'name'=>'mainBanner',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-angle-up-circle',
                'name'=>'Vertically',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-angle-right-circle',
                'name'=>'Horizontal',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-back-2',
                'name'=>'leftBanner',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-back-2',
                'name'=>'left',
                'colorClass'=>'index',
                'child' => [],
            ],
            [
                'url'=>'cms/dashboard/user_menu',
                'icon'=>'pe-7s-next-2',
                'name'=>'right',
                'colorClass'=>'index',
                'child' => [],
            ]
        ],

    ], // banner management
    [
        'title'=>'Manage statistics',
        'url'=>'cms/manage_statistics',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-graph2',
                'name'=>'Product management',
                'child' => [],
            ]
        ],
    ], // Manage statistics
    [
        'title'=>'Product management',
        'url'=>'cms/product_management',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-albums',
                'name'=>'Product management',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Product management',
                        'child' => null
                    ],
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage categories',
                        'child' => null
                    ],
                ],
            ],
        ],
    ], // Product management
    [
        'title'=>'User menu',
        'url'=>'cms/user_menu',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-menu',
                'name'=>'Menu list',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Menu list',
                        'child' => null
                    ],
                ],
            ],
        ],
    ], // User menu
    [
        'title'=>'Menu management',
        'url'=>'cms/manage_menus',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-menu',
                'name'=>'Manage menus',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage menus',
                        'child' => null
                    ],
                ],
            ],
        ],
    ], // Manage menus
    [
        'title'=>'Register business ads',
        'url'=>'cms/business_ads',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-key',
                'name'=>'User security settings',
                'child' => [

                ],
            ],
        ],
    ], // Register business ads
    [
        'title'=>'Manage discount coupons',
        'url'=>'cms/manage_discount',
        'menus'=> [
            [
                'url'=>'#',
                'icon'=>'pe-7s-ribbon',
                'name'=>'Manage discount coupons',
                'child' => [
                    [
                        'url'=>'#',
                        'icon'=>'',
                        'name'=>'Manage discount coupons',
                        'child' => null
                    ],
                ],
            ],
        ],
    ], // Manage discount coupons
    [
        'title'=>'Notice Board management',
        'url'=>'cms/noticeboard',
        'menus'=> [
            [
                'url'=>'cms/noticeboard',
                'icon'=>'pe-7s-albums',
                'name'=>'Notice Board Management',
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
                        'url'=>'cms/settings/contactUs',
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
        'title'=>'Members & Permission manage',
        'url'=>'cms/permission',
        'menus'=> [
            [
                'url'=>'cms/settings/members',
                'icon'=>'pe-7s-users',
                'name'=>'Member manage',
                'child' => null,
            ],
            [
                'url'=>'cms/permission',
                'icon'=>'pe-7s-key',
                'name'=>'Permission manage',
                'child' => null,
            ],
            [
                'url'=>'cms/permission/group_email',
                'icon'=>'pe-7s-mail',
                'name'=>'Send a mail',
                'child' => null,
            ],
            [
                'url'=>'cms/permission/secessionist                ',
                'icon'=>'pe-7s-plug',
                'name'=>'Secessionist',
                'child' => null,
            ],
            [
                'url'=>'cms/permission/settings',
                'icon'=>'pe-7s-unlock',
                'name'=>'Permission settings',
                'child' => null,
            ],
            [
                'url'=>'cms/permission/email_settings',
                'icon'=>'pe-7s-settings',
                'name'=>'Mail settings',
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
