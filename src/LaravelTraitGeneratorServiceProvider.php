<?php

namespace Shaka\LaravelTraitGenerator;

use Illuminate\Support\ServiceProvider;
use Shaka\LaravelTraitGenerator\Console\MakeTrait;

class LaravelTraitGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeTrait::class,
        ]);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/stubs' => base_path('stubs/vendor/laravel-trait-generator'),
            ], 'stubs');
        }
    }
}
