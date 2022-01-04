<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nichozuo\LaravelHelpers\Helper\SQLHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 记录sql日志
        SQLHelper::SqlLog();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix unique key is too long
//        SQLHelper::Schema();
    }
}
