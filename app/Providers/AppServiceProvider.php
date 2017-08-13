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
// Import Blade for Custom Blades Directives
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age', function($expression){
            $data = json_decode($expression);
            
            $year = $data[0];
            $month = $data[1];
            $day = $data[2];
            $age = Carbon::createFromDate($year, $month, $day)->age;
            // Laravel has a specific short helper function for showing variables 
            // dd() – stands for “Dump and Die”.
            // dd($age);

            return "<?php echo $age; ?>";
        });

        Blade::directive('sayHello', function($expression){
            return "<?php echo 'Hello ' . $expression; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
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
}
