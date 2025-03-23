<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::apiResource('posts', PostController::class);

/*

Route::middleware('api')
    ->prefix('api')
    ->group(function () {
        // Optional: quick test route
        Route::get('/test', function () {
            return response('API is working!', 200);
        });

        // Your full RESTful API for posts
        Route::apiResource('posts', PostController::class);
    });
*/
