<?php

use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/ss', function () {
    return view('welcome');
});

Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
Route::post('/personal', [PersonalController::class, 'store'])->name('personal.store');
