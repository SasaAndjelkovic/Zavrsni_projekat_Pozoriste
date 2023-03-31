<?php

use App\Http\Controllers\Api\AdminAuthApiController;
//use App\Http\Controllers\Api\ClientApiController;
use Illuminate\Support\Facades\Route;

// Laravel automatski dodaje "/api/" prefiks svim linkovima u ovom fajlu

Route::name('api.')->group(function() {

    // localhost:8000/api/admin/login
    Route::middleware('guest:admin')->group(function() {
        Route::post('/admin/login', [AdminAuthApiController::class, 'login'])
            ->name('admin.login'); // api.admin.login
    });

    Route::middleware('auth:admin')->group(function() {
        // interaguje sa klijentima
        Route::get('/showths', [ClientApiController::class, 'index'])
            ->name('showths.index');

        Route::post('/showths', [ClientApiController::class, 'store'])
            ->name('showths.store');

        Route::delete('/showths/{client}', [ClientApiController::class, 'delete'])
            ->name('showths.delete');
    });
});
