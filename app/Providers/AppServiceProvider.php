<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Import Schema for the migration error
use Illuminate\Support\Facades\Schema;
// Import View
use View;
// Import Carbon for dates
use Carbon\Carbon;
// Import Auth
use Auth;


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
        // share('key', 'value')
        View::share('myname', 'manu');
        // Access the attribute age from the function createFromDate using carbon
        $age = Carbon::createFromDate(1993, 7, 6)->age;
        View::share('age', $age);
        //If you want to assess the auth data, you need the composer. Where * means the data will be available to all views;
        View::composer('*', function($view){
                $view->with('auth', Auth::user());
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
