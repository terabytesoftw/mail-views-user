<?php

/**
 * Web application configuration shared by all test types
 */

$params = $params ?? [];

$config = [
    'components' => [
        'i18n' => [
            'translations' => [
                'mail.views.user' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                ],
            ],
        ],
    ],
];

return $config;
