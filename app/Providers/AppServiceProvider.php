<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        //
        $this->getComposer();
    }


    public function getComposer(): void
    {
        view()->composer('partials.nav', function ($view) {
            $view->with('latest', Article::latest()->first());
        });
    }

}
