<?php

namespace App\Providers;

use App\HelloDep;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(HelloDep::class,fn() =>new HelloDep('Fred') );
        // $this->app->singleton(HelloDep::class,function(){
        //     return new HelloDep('Fred');
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
