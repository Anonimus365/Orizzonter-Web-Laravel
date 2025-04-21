<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/formularios', [FormController::class, 'index'])->name('formularios'); 

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');


Route::get('/login', [LoginController::class, 'login'])->name('login');