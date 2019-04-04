<?php

namespace provider;

use Illuminate\Support\ServiceProvider;

class ssoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('MiniOrange\Classes\Actions\AuthFacadeController');
        
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadMigrationsFrom(__DIR__.'/../src/2014_10_12_100000_create_miniorange_tables.php');
         $this->loadRoutesFrom(__DIR__.'/../src/routes.php');
         $this->loadViewsFrom(__DIR__.'/../src/','newidea');
    }
}
