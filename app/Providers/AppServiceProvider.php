<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (class_exists(\ErpNET\Saas\Providers\ErpnetSaasServiceProvider::class))
            $this->app->register(\ErpNET\Saas\Providers\ErpnetSaasServiceProvider::class);

        if (class_exists(\ErpNET\Permissions\Providers\ErpnetPermissionsServiceProvider::class))
            $this->app->register(\ErpNET\Permissions\Providers\ErpnetPermissionsServiceProvider::class);
    }
}
