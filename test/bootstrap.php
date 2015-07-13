<?php

$engine = require (dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bootstrap.php');

class WebTestCase extends \Silex\WebTestCase {
    public function createApplication() {
        global $engine;
        
        $engine->start();
        $app = $engine->getApp();
        $app['debug'] = true;
        $app['exception_handler']->disable();
        $app['session.test'] = true;

        return $app;
    }
}
