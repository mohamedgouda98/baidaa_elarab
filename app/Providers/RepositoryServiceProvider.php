<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\CountryInterface',
            'App\Http\Repositories\Admin\CountryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PoetInterface',
            'App\Http\Repositories\Admin\PoetRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
