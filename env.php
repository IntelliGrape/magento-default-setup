<?php
return [
    'cache_types' => [
        'compiled_config' => 1,
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '50f1e7e04cb203770aa02d1beca81d44'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => getenv("DB_HOST"),
                'dbname' => getenv("DB_NAME"),
                'username' => getenv("DB_USER_NAME"),
                'password' => getenv("DB_PASSWORD"),
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'eac_'
            ],
            'page_cache' => [
                'id_prefix' => 'eac_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'downloadable_domains' => [
        'localhost'
    ],
    'install' => [
        'date' => 'Fri, 10 Apr 2020 08:24:07 +0000'
    ]
];