<?php

$app->match('/', 'App\\Controller::someAction')->method('GET|POST');
