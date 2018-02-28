<?php

namespace AfrazAhmad\ClearAllCachedData;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use AfrazAhmad\ClearAllCachedData\ClearAllCachedData;

class ClearAllCachedDataProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load routes
            //$this->loadRoutesFrom(__DIR__.'/routes.php');
        //include __DIR__.'/routes.php';
        // register our controller
            // $this->app->make('Devdojo\Calculator\CalculatorController');
        // load view
            // $this->loadViewsFrom(__DIR__.'/views', 'calculator');
            // $this->publishes([__DIR__.'/path/to/views' => resource_path('views/vendor/courier'),
        // load migrations
            // $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
        // load translations
            // $this->loadTranslationsFrom(__DIR__.'/path/to/translations', 'courier');
            // $this->publishes([__DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
        if ($this->app->runningInConsole()) {
            $this->commands([
                ClearAllCachedData::class,
            ]);
        }
        
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
