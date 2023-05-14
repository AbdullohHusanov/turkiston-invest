<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User model class
    |--------------------------------------------------------------------------
    */

    'user_model' => 'App\Models\User',

    /*
    |--------------------------------------------------------------------------
    | Nova User resource tool class
    |--------------------------------------------------------------------------
    */

    'user_resource' => 'App\Nova\User',

    /*
    |--------------------------------------------------------------------------
    | The group associated with the resource
    |--------------------------------------------------------------------------
    */

    'role_resource_group' => 'Other',

    /*
    |--------------------------------------------------------------------------
    | Database table names
    |--------------------------------------------------------------------------
    | When using the "HasRoles" trait from this package, we need to know which
    | table should be used to retrieve your roles. We have chosen a basic
    | default value but you may easily change it to any table you like.
    */

    'table_names' => [
        'roles' => 'roles',

        'role_permission' => 'role_permission',

        'role_user' => 'role_user',

        'users' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Permissions
    |--------------------------------------------------------------------------
    */

    'permissions' => [
        'view admin' => [
            'display_name' => 'View admin',
            'description' => 'Can view admin',
            'group' => 'Admin'
        ],
        'view users' => [
            'display_name' => 'View users',
            'description' => 'Can view users',
            'group' => 'User',
        ],

        'create users' => [
            'display_name' => 'Create users',
            'description' => 'Can create users',
            'group' => 'User',
        ],

        'edit users' => [
            'display_name' => 'Edit users',
            'description' => 'Can edit users',
            'group' => 'User',
        ],

        'delete users' => [
            'display_name' => 'Delete users',
            'description' => 'Can delete users',
            'group' => 'User',
        ],

        'view all roles' => [
            'display_name' => 'View all roles',
            'description' => 'Can view all roles',
            'group' => 'Role',
        ],

        'view roles' => [
            'display_name' => 'View roles',
            'description' => 'Can view roles',
            'group' => 'Role',
        ],

        'create roles' => [
            'display_name' => 'Create roles',
            'description' => 'Can create roles',
            'group' => 'Role',
        ],

        'edit roles' => [
            'display_name' => 'Edit roles',
            'description' => 'Can edit roles',
            'group' => 'Role',
        ],

        'delete roles' => [
            'display_name' => 'Delete roles',
            'description' => 'Can delete roles',
            'group' => 'Role',
        ],

        'view posts' => [
            'display_name' => 'View posts',
            'description' => 'Can view posts',
            'group' => 'Post',
        ],

        'view all posts' => [
            'display_name' => 'View all posts',
            'description' => 'Can all view posts',
            'group' => 'Post',
        ],

        'create posts' => [
            'display_name' => 'Create posts',
            'description' => 'Can create posts',
            'group' => 'Post',
        ],

        'edit posts' => [
            'display_name' => 'Edit posts',
            'description' => 'Can edit posts',
            'group' => 'Post',
        ],

        'delete posts' => [
            'display_name' => 'Delete posts',
            'description' => 'Can delete posts',
            'group' => 'Post',
        ],

        'view pages' => [
            'display_name' => 'View pages',
            'description' => 'Can view pages',
            'group' => 'Page',
        ],

        'view all pages' => [
            'display_name' => 'View all pages',
            'description' => 'Can view all pages',
            'group' => 'Page',
        ],

        'create pages' => [
            'display_name' => 'Create pages',
            'description' => 'Can create pages',
            'group' => 'Page',
        ],

        'edit pages' => [
            'display_name' => 'Edit pages',
            'description' => 'Can edit pages',
            'group' => 'Page',
        ],

        'delete pages' => [
            'display_name' => 'Delete pages',
            'description' => 'Can delete pages',
            'group' => 'Page',
        ],

        'view pages categories' => [
            'display_name' => 'View pages categories',
            'description' => 'Can view pages categories',
            'group' => 'Page Category',
        ],

        'view all pages categories' => [
            'display_name' => 'View all pages categories',
            'description' => 'Can all view pages categories',
            'group' => 'Page Category',
        ],

        'create pages categories' => [
            'display_name' => 'Create pages categories',
            'description' => 'Can create pages categories',
            'group' => 'Page Category',
        ],

        'edit pages categories' => [
            'display_name' => 'Edit pages categories',
            'description' => 'Can edit pages categories',
            'group' => 'Page Category',
        ],

        'delete pages categories' => [
            'display_name' => 'Delete pages categories',
            'description' => 'Can delete pages categories',
            'group' => 'Page Category',
        ],

        'view posts categories' => [
            'display_name' => 'View posts categories',
            'description' => 'Can view posts categories',
            'group' => 'Post Category',
        ],

        'view all posts categories' => [
            'display_name' => 'View all posts categories',
            'description' => 'Can all view posts categories',
            'group' => 'Post Category',
        ],

        'create posts categories' => [
            'display_name' => 'Create posts categories',
            'description' => 'Can create posts categories',
            'group' => 'Post Category',
        ],

        'edit posts categories' => [
            'display_name' => 'Edit posts categories',
            'description' => 'Can edit posts categories',
            'group' => 'Post Category',
        ],

        'delete posts categories' => [
            'display_name' => 'Delete posts categories',
            'description' => 'Can delete posts categories',
            'group' => 'Post Category',
        ],

        'view main page config' => [
            'display_name' => 'View main page config',
            'description' => 'Can view main page config',
            'group' => 'Main Page Config',
        ],

        'view all main page config' => [
            'display_name' => 'View all main page config',
            'description' => 'Can all view main page config',
            'group' => 'Main Page Config',
        ],

        'create main page config' => [
            'display_name' => 'Create main page config',
            'description' => 'Can create main page config',
            'group' => 'Main Page Config',
        ],

        'edit main page config' => [
            'display_name' => 'Edit main page config',
            'description' => 'Can edit main page config',
            'group' => 'Main Page Config',
        ],

        'delete main page config' => [
            'display_name' => 'Delete main page config',
            'description' => 'Can delete main page config',
            'group' => 'Main Page Config',
        ],
        'view forum' => [
            'display_name' => 'View forum',
            'description' => 'Can view forum',
            'group' => 'Forum',
        ],

        'view all forum' => [
            'display_name' => 'View all forum',
            'description' => 'Can all view forum',
            'group' => 'Forum',
        ],

        'create forum' => [
            'display_name' => 'Create forum',
            'description' => 'Can create forum',
            'group' => 'Forum',
        ],

        'edit forum' => [
            'display_name' => 'Edit forum',
            'description' => 'Can edit forum',
            'group' => 'Forum',
        ],

        'delete forum' => [
            'display_name' => 'Delete forum',
            'description' => 'Can delete forum',
            'group' => 'Forum',
        ],

        'view forum comments' => [
            'display_name' => 'View forum comments',
            'description' => 'Can view forum comments',
            'group' => 'Forum Comment',
        ],

        'view all forum comments' => [
            'display_name' => 'View all forum comments',
            'description' => 'Can all view forum comments',
            'group' => 'Forum Comment',
        ],

        'create forum comments' => [
            'display_name' => 'Create forum comments',
            'description' => 'Can create forum comments',
            'group' => 'Forum Comment',
        ],

        'edit forum comments' => [
            'display_name' => 'Edit forum comments',
            'description' => 'Can edit forum comments',
            'group' => 'Forum Comment',
        ],

        'delete forum comments' => [
            'display_name' => 'Delete forum comments',
            'description' => 'Can delete forum comments',
            'group' => 'Forum Comment',
        ],
    ],
];
