<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('ngay_hom_truoc_lon_hon', function ($attribute, $value, $parameters, $validator) {
            $begin_date = $validator->getData()[$parameters[0]];
            return strtotime($value) > strtotime($begin_date);
        });
    }
}
