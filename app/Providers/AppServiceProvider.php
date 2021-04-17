<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\LandingPage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $template = LandingPage::first();
            $view->with(['template' => $template]);
});
    }
}
