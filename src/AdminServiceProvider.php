<?php

namespace Duanhongxiang\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('admin',function(){
            return new Admin();
        });
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
