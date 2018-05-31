<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

// Inside this class we add things to container
class AppServiceProvider extends AbstractServiceProvider {

    // This describes what kind of thing (in form of key) provider will
    // be return
    protected $provides = [
        //
    ];

    // This method shares things inside container so we can access them
    public function register()
    {
        $container = $this->getContainer();
    }
}