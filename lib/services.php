<?php

require_once 'config.php';

$app['twig'] = function($app) {
    $loader = new Twig_Loader_Filesystem($app['twig_dirs']);
    $twig = new Twig_Environment($loader, [
        'cache' => $app['twig_cache_dir'],
        'debug' => $app['twig_debug'],
    ]);
    return $twig;
};
