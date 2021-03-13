<?php

namespace App\Providers;

use App\MultiStep\Routing\PendingMultiStepRegistration;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Illuminate\Support\ServiceProvider;

class MultiStepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        FacadesRoute::macro('multistep', function ($uri, $controller) {
            //dd($controller);

            return new PendingMultiStepRegistration(
                $uri,
                $controller
            );
        });
    }
}
