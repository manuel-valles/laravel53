<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Import View
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //composer('path of the view','path to the profile composer')
        View::creator(['pages.profile','pages.settings'], 'App\Http\ViewComposers\ProfileComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
