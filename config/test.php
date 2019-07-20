<?php

/**
 * Web application configuration shared by all test types
 */

$config = [
    'id' => 'test.mail.views.user',
    'name'=> 'Mail Views User Core',
    'aliases' => [
        '@bower'   => '@root/node_modules',
        '@npm'   => '@root/node_modules',
        '@public' => '@root/tests/public',
        '@runtime' => '@root/tests/public/@runtime',
    ],
    'basePath' => '@root/src',
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'basePath' => '@public/assets',
        ],
        'i18n' => [
            'translations' => [
                'mail.views.user' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                ],
            ],
        ],
        'log' => [
            'traceLevel' => 'YII_DEBUG' ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'categories' => [
                        'yii\swiftmailer\Logger::add'
                    ],
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@runtime/logs/app.log',
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => 'test.mail.views.user',
            'enableCsrfValidation' => true,
        ],
    ],
];

return $config;
