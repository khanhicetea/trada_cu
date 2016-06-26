<?php

$engine = engine();

return [
    'languages' => ['en'],
    'purifier' => [
        'Core.Encoding' => 'UTF-8',
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'Cache.SerializerPath' => $engine->getStoragePath('cache'),
        'HTML.SafeIframe' => true,
        'URI.SafeIframeRegexp' => '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%',
    ],
];
