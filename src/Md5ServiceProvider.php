<?php

namespace Zdp\Md5;

use Illuminate\Support\ServiceProvider;


class Md5ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5',function(){
            return new Md5();
        });
    }
}
