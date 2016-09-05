<?php


$app->match('/', 'App\\Controller::someAction')->method('GET|POST')->bind('homepage')->before($auth);
$app->match('/login', 'App\\Controller::loginAction')->method('GET|POST')->bind('login');
$app->get('/logout', 'App\\Controller::LogoutAction')->bind('logout');