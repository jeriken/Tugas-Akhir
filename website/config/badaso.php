<?php

return [
    'db_name' => env('DB_DATABASE'),
    'admin_panel_route_prefix' => env('MIX_ADMIN_PANEL_ROUTE_PREFIX', 'dashboard'),
    'default_menu' => env('MIX_DEFAULT_MENU', 'general'),
    'api_route_prefix' => env('MIX_API_ROUTE_PREFIX', 'api'),
    'license_key' => env('BADASO_LICENSE_KEY'),
    'database' => [
        'prefix' => env('BADASO_TABLE_PREFIX', 'badaso_'),
    ],
    'storage' => [
        'disk' => env('FILESYSTEM_DRIVER', 'public'),
    ],
    'configuration_groups' => [
        ['value' => 'adminPanel', 'label' => 'Admin Panel'],
    ],
    'widgets' => [
        'Uasoft\\Badaso\\Widgets\\UserWidget',
        'Uasoft\\Badaso\\Widgets\\RoleWidget',
        'Uasoft\\Badaso\\Widgets\\PermissionWidget',
    ],
    'whitelist' => [
        'web' => [],
        'badaso' => [
            '/maintenance',
            '/login',
        ],
        'api' => [
            '/v1/configurations/applyable',
            '/v1/maintenance',
            '/v1/auth/login',
            '/v1/file/*',
        ],
    ],
    'manifest' => [
        'name' => 'Badaso',
        'short_name' => 'Badaso',
        'description' => 'Badaso Progressive Web App ',
        'icons' => [
            [
                'src' => '/storage/photos/shares/logo-144px.png',
                'sizes' => '144x144',
                'type' => 'image/png',
            ],
            [
                'src' => '/storage/photos/shares/logo-192px.png',
                'sizes' => '192x192',
                'type' => 'image/png',
            ],
            [
                'src' => '/storage/photos/shares/logo-512px.png',
                'sizes' => '512x512',
                'type' => 'image/png',
            ],
        ],
        'start_url' => env('MIX_ADMIN_PANEL_ROUTE_PREFIX', 'dashboard'),
        'display' => 'standalone',
        'theme_color' => '#00923F',
        'background_color' => '#00923F',
    ],
];
