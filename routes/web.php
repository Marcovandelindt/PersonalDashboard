<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

/**
 * Login routes
 */
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'attempt'])->name('login.attempt');

/**
 * Water Intake routes
 */
Route::get('/water-intake', [App\Http\Controllers\WaterIntake\WaterIntakeController::class, 'index'])->name('water-intake.index');

/**
 * Drinks routes
 */
Route::get('/drinks', [App\Http\Controllers\Drinks\DrinksController::class, 'index'])->name('drinks.index');
Route::get('/drinks/create', [App\Http\Controllers\Drinks\DrinksController::class, 'create'])->name('drinks.create');
Route::post('/drinks/create', [App\Http\Controllers\Drinks\DrinksController::class, 'store'])->name('drinks.store');
