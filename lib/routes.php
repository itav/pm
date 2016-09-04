<?php

$app->match('/', 'App\\Controller::someAction')->method('GET|POST')->bind('homepage');
$app->get('/auth', 'App\\Controller::loginAction')->bind('auth');