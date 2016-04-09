<?php

define('ROOT_PATH', __DIR__);

$autoloader = require_once (ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
require_once (ROOT_PATH . DIRECTORY_SEPARATOR . 'helpers.php');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$engine = \Sifoni\Engine::getInstance()->init()->bootstrap(array(
    'app.vendor_name' => env('APP_VENDOR_NAME', 'App'),
    'debug' => env('DEBUG', true),
    'web_profiler' => env('WEB_PROFILTER', true),
    'timezone' => env('TIMEZONE', 'UTC'),
    'path.root' => ROOT_PATH,
    'autoloader' => $autoloader,
));

return $engine;
