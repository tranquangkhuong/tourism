<?php

return [
    'super_admin' => [
        'roles' => [
            'name' => 'super-admin',
        ],
    ],

    'admin' => [
        'roles' => [
            'name' => 'admin',
        ],
        'permissions' => [
            'add_tag',
            'edit_tag',
            'delete_tag',
            'add_vehicle',
            'edit_vehicle',
            'delete_vehicle',
            'add_promotion',
            'edit_promotion',
            'delete_promotion',
            'add_area',
            'edit_area',
            'delete_area',
            'add_location',
            'edit_location',
            'delete_location',
        ],
    ],
];
