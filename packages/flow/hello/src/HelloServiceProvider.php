<?php

namespace Flow\Hello;


use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider{
    public function boot(){
        include __DIR__.'/routes.php';

    }
    public function register(){
        // register our controller
        $this->app->make('Flow\Hello\HelloController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');

    }
}
