<?php

namespace ToxaGeek\LaravelFrontEndPackage;

use Illuminate\Support\ServiceProvider;

class FrontEndPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources' => resource_path()
        ]);
        $this->publishes([
            __DIR__.'/files' => base_path()
        ]);
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
