<?php

/*
 * Your package config would go here
 */

$settings =  [
    'app_name' => 'VaahCMS',
    'app_slug' => 'vaahcms',
    'admin_theme' => 'default',
    'public_theme' => 'default',
    'public_theme_template' => 'default',
    'modules_path' => 'vaahcms/Modules',
    'themes_path' => 'vaahcms/Themes',
    'plugins_path' => 'vaahcms/Plugins',
    'per_page' => 20,
    'minified' => 0,
    'api_route' => 'https://cms.vaah.dev/api',
    'debug' => 1,
];

return $settings;