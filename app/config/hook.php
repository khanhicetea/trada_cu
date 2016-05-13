<?php

$app = \Sifoni\Engine::getInstance()->getApp();

// Hook anything you want :)

// Register HTMLPurifier
$app['purifier.config'] = $app->share(function () use ($app) {
    $config = HTMLPurifier_Config::createDefault();
    foreach ($app['config.app.purifier'] as $key => $value) {
        $config->set($key, $value);
    }
    return $config;
});

$app['purifier'] = $app->share(function() use ($app) {
    $purifier = new HTMLPurifier($app['purifier.config']);
    return $purifier;
});

// Twig HTMLPurifier filter
$app['twig'] = $app->share($app->extend('twig', function(Twig_Environment $twig, $app) {
    $clean_filter = new Twig_SimpleFilter('clean', function ($string) use ($app) {
        return $app['purifier']->purify($string);
    }, ['is_safe' => ['html']]);
    $twig->addFilter($clean_filter);

    $dumper = new Twig_SimpleFunction('dump', function ($dump_value) {
        return dump($dump_value);
    });
    $twig->addFunction($dumper);

    return $twig;
}));
