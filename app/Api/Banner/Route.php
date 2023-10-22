<?php

use App\Api\Banner\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/banner', [Controller::class, 'all']);
Route::get('/banner/store', [Controller::class, 'store']);
Route::prefix('v1')->group(function(){
    Route::apiResource('banners',Controller::class);

});
