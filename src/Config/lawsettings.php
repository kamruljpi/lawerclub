<?php

return [

	/*
    |--------------------------------------------------------------------------
    | Law Settings
    |--------------------------------------------------------------------------
    |
    */
    
	'admin_tmp' => 'admintemplate::admin.layout.app',

	'path' => [

        'load_base_views' => false, // set true load views from base folders
        'load_base_migrations' => false, // set true load views from base folders
        
        'package_views' => base_path('vendor/kamruljpi/lawsettings/src/Resources/views'),

        'package_migrations' => base_path('vendor/kamruljpi/lawsettings/src/database/migrations'),

        'package_assets' => base_path('vendor/kamruljpi/lawsettings/src/assets'),

        'base_assets' => base_path()."/../",

        'base_views' => base_path('resources/views/kamruljpi/lawsettings'),

        'base_migrations' => database_path('migrations'),
    ]
];
