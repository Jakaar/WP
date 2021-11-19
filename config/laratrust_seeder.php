<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'owner' => [
            'member' => 'c,r,u,d',
            'role' => 'c,r,u,d',
            'permission' => 'c,r,u,d',
            'profile' => 'r,u',
            'banner' => 'c,r,u,d',
            'product' => 'c,r,u,d',
            'page' => 'c,r,u,d',
            'noticeBoard' => 'c,r,u,d',
            'mail' => 'c,r,u,d',
            'userMenu' => 'c,r,u,d',
            'categoryProduct' => 'c,r,u,d',
            'dashBoard' => 'c,r,u,d',
        ],
        'admin' => [
            'member' => 'c,r,u,d',
            'profile' => 'r,u',
            'banner' => 'c,r,u',
            'product' => 'c,r,u',
            'page' => 'c,r,u',
            'noticeBoard' => 'c,r,u',
            'mail' => 'c,r,u',
            'userMenu' => 'c,r,u',
            'categoryProduct' => 'c,r,u',
            'dashBoard' => 'c,r,u',
        ],
        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
