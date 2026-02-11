<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/ss', function () {
    return view('welcome');
});

Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
Route::get('/personal/create', [PersonalController::class, 'create'])->name('personal.create');
Route::post('/personal', [PersonalController::class, 'store'])->name('personal.store');
>>>>>>> 9ae9991b94056e9a21ee03e8b07a184c6e4a7b39
