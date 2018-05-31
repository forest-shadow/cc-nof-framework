<?php

// for start using sessions
session_start();

// requiring auto-loading feature
require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = (new Dotenv\Dotenv(__DIR__ . '/..//'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}


require_once __DIR__ . '/container.php';