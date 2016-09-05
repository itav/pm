<?php

require_once 'config.php';

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => $app['twig_dirs'],
    'debug' => $app['twig_debug'],
    'cache' => $app['twig_cache_dir'],

));

$app->register(new Silex\Provider\AssetServiceProvider(), [
    'assets.version' => $app['software_version'],
    'assets.version_format' => '%s?v=%s',
    'assets.named_packages' => [
        'css' => [
            'version' => 'css2',
            'base_path' => [
                '/../web/css/',
            ],
        ],
        'js' => [
            'base_path' => [
                '/../web/js/'
            ]
        ],
        'images' => [
            'base_urls' => [
                $app['base_url']
            ]
        ],
    ],
]);

$auth = function () use ($app) {
    session_start();
    if($_SESSION['is_logged'] === true){
        return null;
    }
    return $app->redirect('/login');
};
