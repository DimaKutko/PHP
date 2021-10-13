<?php

require __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {


    $prefix = 'App\\';
    $base_dir = __DIR__ . '/app/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

include_once __DIR__ . '/functions.php';
include_once __DIR__ . '/routers.php';
