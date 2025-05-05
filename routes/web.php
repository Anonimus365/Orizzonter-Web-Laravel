<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/formularios', [FormController::class, 'index'])->name('formularios'); 
Route::get('/formularios/{form?}', [FormController::class, 'index'])->name('formularios'); 

Route::post('/formularios/users', [UserController::class, 'store'])->name('users.store');

Route::post('/profiles', [ProfileController::class, 'store'])->name('profiles.store');

Route::post('/statistics', [StatisticController::class, 'store'])->name('statistics.store');

Route::get('/login', [LoginController::class, 'login'])->name('login');