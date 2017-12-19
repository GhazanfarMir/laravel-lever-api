<?php

namespace GhazanfarMir\Lever\Api;


use Illuminate\Support\ServiceProvider;
use GhazanfarMir\Lever\Api\Client as LeverClient;

class LeverApiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->app->singleton('leverapi', function ($app) {

            return new LeverClient();

        });
    }

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {

        /**
         * publish configurations so it can be overridden by package users.
         */
        $config_path = __DIR__.'/../config/lever.php';

        $this->publishes([
            $config_path => config_path('lever.php'),
        ]);

    }

}