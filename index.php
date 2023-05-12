<?php

@include_once __DIR__ . '/vendor/autoload.php';

use Kirby\Cms\App as Kirby;

Kirby::plugin('treast/cookieconsent', [
    'blueprints' => [
        'cookieconsent' => __DIR__ . '/blueprints/cookies.yml',
        'fields/cookies/config' => __DIR__ . '/blueprints/fields/config.yml',
        'fields/cookies/cookies' => __DIR__ . '/blueprints/fields/cookies.yml',
        'fields/cookies/consent' => __DIR__ . '/blueprints/fields/consent.yml',
        'fields/cookies/settings' => __DIR__ . '/blueprints/fields/settings.yml',
    ]
]);
