<?php

$app->match('/', 'App\\Controller::someAction')->method('GET|POST')->bind('homepage');
