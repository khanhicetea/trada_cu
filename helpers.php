<?php

if (!function_exists('engine')) {
    function engine()
    {
        return \Sifoni\Engine::getInstance();
    }
}

if (!function_exists('app')) {
    function app($key = null)
    {
        return $key ? engine()->getApp()[$key] : engine()->getApp();
    }
}

if (!function_exists('__')) {
    function __($key, $params = [])
    {
        return app('translator')->trans($key, $params);
    }
}

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;

            case 'false':
            case '(false)':
                return false;

            case 'empty':
            case '(empty)':
                return '';

            case 'null':
            case '(null)':
                return;
        }

        $len = strlen($value);
        if ($len > 1 && ($value[0] == '"' && $value[$len - 1] == '"')) {
            return substr($value, 1, -1);
        }

        return $value;
    }
}
