<?php

namespace HopekellDev\Confirmident;

use Illuminate\Support\ServiceProvider;

class ConfirmidentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/confirmident.php' => config_path('confirmident.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/confirmident.php', 'confirmident'
        );

        $this->app->singleton('confirmident', function () {
            return new Confirmident();
        });
    }
}
