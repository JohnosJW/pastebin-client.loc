<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once( __DIR__ . '/web/Routes.php');

spl_autoload_register(function ($class) {
    if (file_exists(__DIR__ . './app/models/' . $class . '.php')) {
        require_once __DIR__ . './app/models/' . $class . '.php';
    } elseif (file_exists(__DIR__ . './app/controllers/' . $class . '.php')) {
        require_once __DIR__ . './app/controllers/' . $class . '.php';
    }
});
