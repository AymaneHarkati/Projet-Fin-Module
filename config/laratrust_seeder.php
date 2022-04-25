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
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'agriculteurs' => 'c,r,u,d',
            'parcelles' => 'c,r,u,d',
            'tarifs' => 'c,r,u,d',
            'employes' => 'c,r,u,d',
            'intervention' => 'c,r,u,d',
        ],
        'manager' => [
            'agriculteurs' => 'r,u,d',
            'parcelles' => 'r,u,d',
            'tarifs' => 'r,u,d',
            'employes' => 'r,u,d',
            'intervention' => 'r,u,d',
        ],
        'user' => [
            'agriculteurs' => 'r',
            'parcelles' => 'r',
            'tarifs' => 'r',
            'employes' => 'r',
            'intervention' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
