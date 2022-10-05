<?php

namespace AhmedTofaha\LaravelInsights;

use Illuminate\Support\ServiceProvider;

class LaravelInsightsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register a class in the service container
        $this->app->bind('meow_points', function ($app) {
            return new LaravelInsights();
        });
//        $this->mergeConfigFrom(__DIR__.'/../config/laravel-insights.php', 'laravel-insights');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-insights.php' => config_path('laravel-insights.php'),
            ], 'config');
//            $this->publishes([
//                __DIR__.'/../database/migrations/create_meow_points_table.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_points_table.php'),
//                // you can add any number of migrations here
//            ], 'migrations');
        }
    }
}
