<?php

return [
    'role_structure' => [
        'super_administrator' => [
            'role' => 'v,c,u',
            'user' => 'v,c,u,d',
            'position' => 'v,c,u,d',
            'category' => 'v,c,u,d',
            'article' => 'v,c,u,d',
            'recruitment' => 'v,c,u,d,vf,cl,cs,vl',
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'v' => 'view',
        'c' => 'create',
        'u' => 'update',
        'd' => 'delete',
        'p' => 'process',
        'vd' => 'void',
        'vf' => 'verify',
        'vl' => 'validate',
        'cs' => 'create-schedule',
        'cl' => 'cancel',
    ]
];
