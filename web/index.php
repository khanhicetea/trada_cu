<?php

define('ROOT_PATH', dirname(dirname(__FILE__)));

$autoloader = require_once (ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

\Sifoni\Engine::getInstance()->init()->bootstrap(array(
    'path.root' => ROOT_PATH,
    'autoloader' => $autoloader,
))->start()->run();