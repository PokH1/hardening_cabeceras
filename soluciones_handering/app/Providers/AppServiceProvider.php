<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if que controla en entorno de desarrollo de la aplicación y agrega que al url force el esquema de https en local y produción
        // if (app()->environment('local', 'production')){
        //     URL::forceScheme('https');
        // }
    }
}
