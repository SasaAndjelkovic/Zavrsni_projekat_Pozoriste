<?php

use App\Http\Controllers\Api\ManagerAuthApiController;
use App\Http\Controllers\Api\ShowthApiController;
//use App\Http\Controllers\Api\ClientApiController;
use Illuminate\Support\Facades\Route;

// Laravel automatski dodaje "/api/" prefiks svim linkovima u ovom fajlu

Route::name('api.')->group(function() {

    // localhost:8000/api/manager/login
    Route::middleware('guest:manager')->group(function() {
        Route::post('/manager/login', [ManagerAuthApiController::class, 'login'])
            ->name('manager.login'); // api.manager.login
    });

    Route::middleware('guest:manager')->group(function() {
        // interaguje sa predstavama
        Route::get('/showths', [ShowthApiController::class, 'index'])
            ->name('showths.index');

        Route::post('/showths', [ShowthApiController::class, 'store'])
            ->name('showths.store');

        Route::delete('/showths/{showth}', [ShowthApiController::class, 'delete'])
            ->name('showths.delete');
    });
});
