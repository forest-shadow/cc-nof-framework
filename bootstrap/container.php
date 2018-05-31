<?php

// Instantiate container. After that we can add things to it.
$container = new League\Container\Container;

// Add service provider to container
$container->addServiceProvider(new App\Providers\AppServiceProvider());

var_dump($container->get('test'));