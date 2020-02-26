<?php

use Illuminate\Support\Str;


/**
 * Generates an asset URL for static content, taking the CDN into consideration
 *
 * @param string $path
 * @param bool   $secure
 *
 * @return string
 */


function cdn(string $path, bool $secure = true){
    $base = config('app.url_static', config('app.url'));
    # we get the base URL first
    $uri = new \GuzzleHttp\Psr7\Uri($base);

    # create the URI
    if (!empty($path) && !is_string($path)) {
        throw new InvalidArgumentException('path should either be a string');
    }
    if (!empty($path)) {
        $uri = $uri->withPath(Str::startsWith($path, '/') ? $path : '/'.$path);
    }
    if ($secure) {
        $uri = $uri->getScheme() === 'http' ? $uri : $uri->withScheme('https');
    } else {
        $uri = $uri->withScheme('http');
    }
    return (string) $uri;
}
