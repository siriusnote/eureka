<?php

namespace Siriusnote\Framework;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'admin');

        $this->app->make(AdminController::class);
        

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
