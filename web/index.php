<?php

$engine = require (dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bootstrap.php');

$app = $engine->start()->getApp();
$app->run();