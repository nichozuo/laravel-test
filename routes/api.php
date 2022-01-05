<?php

use App\Modules\Admin;
use Illuminate\Support\Facades\Route;
use Nichozuo\LaravelHelpers\Helper\RouteHelper;

Route::prefix('/admin')->name('admin.')->group(function ($router) {
    RouteHelper::New($router, Admin\AuthController::class);
//    RouteHelper::New($router, Admin\HousesController::class);
});
