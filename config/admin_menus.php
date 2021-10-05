<?php
return [
    [
        'title'=>'settings',
        'menus'=> [
            [
                'url'=>'users',
                'icon'=>'pe-7s-users',
                'name'=>'Users',
                'child' => null
            ],[
                'url'=>'contact-us',
                'icon'=>'pe-7s-call',
                'name'=>'Contact Us',
                'child' => [
                    [
                        'url'=>'contact-us',
                        'icon'=>'pe-7s-call',
                        'name'=>'Contact Us Info',
                    ],[
                        'url'=>'contactus-inbox',
                        'icon'=>'pe-7s-call',
                        'name'=>'Contact Us Inbox',
                    ],
                ],
            ],[
                'url'=>'banner',
                'icon'=>'lnr-chart-bars',
                'name'=>'Banner',
                'child' => null,
            ]
        ],

    ],
];
