<?php

$EM_CONF['static_info_tables_tr'] = [
    'title' => 'Static Info Tables (tr)',
    'description' => 'Turkish (tr) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '6.9.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Florian Wessels',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'php' => '7.2.0-7.4.99',
            'static_info_tables' => '6.9.0-6.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Leuchtfeuer\\StaticInfoTablesTr\\' => 'Classes',
        ],
    ],
];
