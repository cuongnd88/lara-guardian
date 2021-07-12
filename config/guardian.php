<?php

return [
    'models' => [
        'actions' => App\Models\Action::class,

        'pages' => App\Models\Page::class,

        'roles' => App\Models\Role::class,

        'groups' => App\Models\Group::class,

        'permissions' => App\Models\Permission::class,
    ],
    'upsert' => [
        'actions' => [
            'insert' => ['id', 'name', 'alias'],
            'update' => ['name', 'alias'],
        ],
        'pages' => [
            'insert' => ['id', 'name', 'alias'],
            'update' => ['name', 'alias'],
        ],
        'roles' => [
            'insert' => ['id', 'name', 'alias'],
            'update' => ['name', 'alias'],
        ],
    ]
];
