<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post ;
use \App\Billing\Stripe ;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer('layouts.sidebar',function($view){

                $view->with('archives',\App\Post::archives()) ;  
        });
    }


    public function register()
    {
        $this->app->singleton(Stripe::class,function($app){


            
            return new Stripe(config(' services.stripe.secret'));
});
    }
}
