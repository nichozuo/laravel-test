<?php

use App\Modules\Admin;
use Illuminate\Support\Facades\Route;
use Nichozuo\LaravelHelpers\Helper\RouteHelper;

Route::prefix('/admin')->name('admin.')->group(function ($router) {
    RouteHelper::New($router, Admin\AuthController::class);
    Route::prefix('/temp')->name('temp.')->group(function ($router) {
        RouteHelper::New($router, Admin\Temp\HousesController::class);
    });
});
