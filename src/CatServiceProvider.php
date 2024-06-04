<?php

namespace tomaszkordas\RandomCat;

use Illuminate\Support\ServiceProvider;

class CatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'randomCat');
        $this->mergeConfigFrom(__DIR__.'/config/random-cat.php', 'randomcat');
    }

    public function register()
    {

    }
}
