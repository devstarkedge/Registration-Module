<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        Schema::defaultStringLength(191);
        Validator::extend('validate_phone', function ($attribute, $value, $parameters, $validator) {

                   $isNumeric = true;
                   if(!is_numeric($value)){
                       $isNumeric = false;
                   }
            if(strlen($value) != 10 ){
                $isNumeric = false;
            }

               if($isNumeric){
                   return true;
               }
            return false;
        });

        Validator::replacer('validate_phone', function ($message, $attribute, $rule, $parameters) {

            return "The phone field only accept integer & must Contain 10 integers";

        });
    }


}
