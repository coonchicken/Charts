<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
           Schema::defaultStringLength(191);
           \App\Orders::creating(function($model){
            $model->name = strtoupper($model->name);
        });

        \App\Customers::creating(function($model){
         $model->name = strtoupper($model->name);
           });

         \App\OrderDetails::creating(function($model){
            $model->name = strtoupper($model->name);
               });

        \App\Products::creating(function($model){
           $model->name = strtoupper($model->name);
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
