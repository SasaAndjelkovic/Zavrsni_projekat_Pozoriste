<?php

use App\Http\Controllers\Auth\ManagerAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\ShowthController;
use App\Http\Controllers\AvatarController;
use Illuminate\Support\Facades\Route;

//ovo je neka pocetna stranica
Route::get('/', function() {
    return "HOME";
})->name('home');

Route::middleware(['guest:web'])->group(function() {
    //moze da pristupi samo neko ko NIJE manager
    Route::get('/user/login', [UserAuthController::class, 'loginShow'])
        ->name('user.login.show');

    Route::post('/user/login', [UserAuthController::class, 'login'])
        ->name('user.login.store');
});

Route::middleware(['auth:web'])->group(function() {
    //samo za ulogovane manageristratore
    Route::post('/user/logout', [UserAuthController::class, 'logout'])
        ->name('user.logout');
});

//user ili manager

Route::middleware(['guest:manager'])->group(function() {
    //moze da pristupi samo neko ko NIJE manager
    Route::get('/manager/login', [ManagerAuthController::class, 'loginShow'])
        ->name('manager.login.show');

    Route::post('/manager/login', [ManagerAuthController::class, 'login'])
        ->name('manager.login.store');
});

Route::middleware(['auth:manager'])->group(function() {
    //samo za ulogovane manageristratore
    Route::post('/manager/logout', [ManagerAuthController::class, 'logout'])
        ->name('manager.logout');
});

Route::middleware(['auth:manager,web'])->group(function() {   //svi ulazaci

    Route::get('/showths', [ShowthController::class, 'index'])->name('showths.index');
    Route::get('/showths/create', [ShowthController::class, 'create'])->name('showths.create');
    Route::get('/showths/{showth}/edit', [ShowthController::class, 'edit'])->name('showths.edit');
    Route::post('/showths/store', [ShowthController::class, 'store'])->name('showths.store');
    Route::put('/showths/{showth}/update', [ShowthController::class, 'update'])->name('showths.update');
    Route::delete('/showths/{showth}/delete', [ShowthController::class, 'destroy'])->name('showths.destroy');

    Route::get('/avatars', [AvatarController::class, 'index'])->name('avatars.index');
    Route::get('/avatars/create', [AvatarController::class, 'create'])->name('avatars.create');
    Route::get('/avatars/{avatar}/edit', [AvatarController::class, 'edit'])->name('avatars.edit');
    Route::post('/avatars/store', [AvatarController::class, 'store'])->name('avatars.store');
    Route::put('/avatars/{avatar}/update', [AvatarController::class, 'update'])->name('avatars.update');
    Route::delete('/avatars/{avatar}/delete', [AvatarController::class, 'destroy'])->name('avatars.destroy');
});

