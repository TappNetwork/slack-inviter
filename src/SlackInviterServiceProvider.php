<?php

namespace Tapp\SlackInviter;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SlackInviterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'slack-inviter');
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('slack-inviter.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/slack-inviter'),
            ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'slack-inviter');

        // Register the main class to use with the facade
        $this->app->singleton('slack-inviter', function () {
            return new SlackInviter;
        });
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/routes.php');
        });
    }

    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
            'namespace' => 'Tapp\SlackInviter\Http\Controllers',
            'prefix' => config('slack-inviter.prefix'),
        ];
    }
}
