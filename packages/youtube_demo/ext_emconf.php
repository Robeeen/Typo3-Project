<?php

/**
 * Extension Manager/Repository config file for ext "youtube_demo".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'YouTube Demo',
    'description' => 'demo',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'ItServicesZone\\YoutubeDemo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Shams Khan',
    'author_email' => 'shams@gmail.com',
    'author_company' => 'IT Services Zone',
    'version' => '1.0.0',
];
