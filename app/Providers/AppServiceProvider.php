<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('header',function($view){
            $user=Auth::user();
            $view->with('user_login',$user);
        });
         view()->composer('trangchu',function($view){
            $user=Auth::user();
            $view->with('user_login',$user);
        });
         view()->composer('aside',function($view){
            $user=Auth::user();
            $view->with('user_login',$user);
        });
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
