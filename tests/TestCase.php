<?php

namespace AhmedTofaha\LaravelInsights\Tests;

use AhmedTofaha\LaravelInsights\LaravelInsightsServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AhmedTofaha\\LaravelInsights\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelInsightsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
//        $migration = include __DIR__.'/../database/migrations/create_meow_points_table.php';
//        $migration->up();
    }
}
