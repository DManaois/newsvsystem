<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



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

     public function boot()
     {
        Validator::extend('adamson_email', function ($attribute, $value, $parameters, $validator) {
            return Str::endsWith($value, '@adamson.edu.ph');
        });
     }
     
    
}