<?php

namespace HopekellDev\Confirmident;

use Illuminate\Support\ServiceProvider;

/**
 * Confirmident's Identity Verification laravel package
 * @author Hope Ezenwa- Hopekell <hopekelltech@gmail.com>
 * @version 1
 **/

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
