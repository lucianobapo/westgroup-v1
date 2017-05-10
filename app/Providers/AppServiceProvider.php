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

        if (class_exists(\Barryvdh\TranslationManager\ManagerServiceProvider::class))
            $this->app->register(\Barryvdh\TranslationManager\ManagerServiceProvider::class);


        if (class_exists(\ErpNET\Migrates\Providers\ErpnetMigratesServiceProvider::class))
            $this->app->register(\ErpNET\Migrates\Providers\ErpnetMigratesServiceProvider::class);

//        if (class_exists(\ErpNET\Models\Providers\ErpnetModelsServiceProvider::class))
//            $this->app->register(\ErpNET\Models\Providers\ErpnetModelsServiceProvider::class);
    }
}
