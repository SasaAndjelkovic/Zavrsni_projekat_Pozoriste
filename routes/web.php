<?php

use App\Http\Controllers\ShowthController;
use Illuminate\Support\Facades\Route;

Route::get('/showths', [ShowthController::class, 'index'])->name('showths.index');
Route::get('/showths/create', [ShowthController::class, 'create'])->name('showths.create');
Route::get('/showths/{showth}/edit', [ShowthController::class, 'edit'])->name('showths.edit');
Route::post('/showths/store', [ShowthController::class, 'store'])->name('showths.store');
Route::put('/showths/{showth}/update', [ShowthController::class, 'update'])->name('showths.update');
Route::delete('/showths/{showth}/delete', [ShowthController::class, 'destroy'])->name('showths.destroy');
