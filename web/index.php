<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/../lib/services.php';
require_once __DIR__ . '/../lib/routes.php';




$app->run();