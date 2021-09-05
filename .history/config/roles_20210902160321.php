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
            'add'
        ],
    ],
];
