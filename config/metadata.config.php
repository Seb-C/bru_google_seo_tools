<?php
return array(
    'name'    => 'Google SEO Tools',
    'version' => '0.1',
    'icons' => array(
        16 => 'static/apps/bru_google_seo_tools/images/google_analytics-16.png',
        32 => 'static/apps/bru_google_seo_tools/images/google_analytics-32.png',
        64 => 'static/apps/bru_google_seo_tools/images/google_analytics-64.png',
    ),
    'provider' => array(
        'name' => 'Foine',
    ),
    'namespace' => 'Bru\Google\Seo\Tools',
    'permission' => array(
    ),
    'extends' => 'noviusos_page',
    'requires' => array('lib_options'),
    'launchers' => array(
        'bru_google_seo_tools_launcher_configuration' => array(
            'name' => 'Google SEO Tools',
            'icon64' => 'static/apps/bru_google_seo_tools/images/google_analytics-64.png',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/bru_google_seo_tools/config/form',
                )
            ),
        ),
    ),
);
