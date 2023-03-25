<?php

use App\Http\Controllers\ShowthController;
use App\Http\Controllers\AvatarController;
use Illuminate\Support\Facades\Route;

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


