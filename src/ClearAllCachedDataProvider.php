<?php

namespace AfrazAhmad\ClearAllCachedData;

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
