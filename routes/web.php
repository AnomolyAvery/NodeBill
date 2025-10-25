<?php

use Illuminate\Support\Facades\Route;

Route::view("/", 'home');

Route::prefix('store')->as('store.')->group(function () {
    Route::get('/', 'App\Http\Controllers\Store\PlanController@index')->name('plans.index');
    Route::get('/plan/{id}', 'App\Http\Controllers\Store\PlanController@show')
        ->whereNumber('id')
        ->name('plans.show');
});