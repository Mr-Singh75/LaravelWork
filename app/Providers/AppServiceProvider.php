<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Implementation\DataImplementation;
use App\Repository\Interface\UserInterface;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
