<?php

define('ROOT_PATH', __DIR__);

$autoloader = require_once (ROOT_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$engine = \Sifoni\Engine::getInstance()->init()->bootstrap(array(
    'path.root' => ROOT_PATH,
    'autoloader' => $autoloader,
));

return $engine;