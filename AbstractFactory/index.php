<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\AbstractFactory\ApplicationConfigurator;

$app = new ApplicationConfigurator();
$app->main();
