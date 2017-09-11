<?php

namespace Ikeraslt\Settings;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    public function register()
    {
        $this->app->singleton('settings', function () {
            return new Settings();
        });

        $this->app->alias('settings', Settings::class);
    }
}