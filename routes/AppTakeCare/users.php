<?php

use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\app\Http\Controllers'], function () {
    Route::apiResource('users', UsersController::class)->only(['index', 'show', 'store', 'update', 'destroy']);
});
