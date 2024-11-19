<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Auth
Auth::routes();

// Dashboard
Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard.index');
});

// Users
Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index')->name('users.index');
    Route::get('users/create', 'create')->name('users.create');
    Route::post('users', 'store')->name('users.store');
    Route::get('users/{id}', 'show')->name('users.show');
    Route::get('users/{id}/edit', 'edit')->name('users.edit');
    Route::put('users/{id}/edit', 'update')->name('users.update');
    Route::delete('users/{id}', 'destroy')->name('users.destroy');
});

// Categories
Route::controller(CategoryController::class)->group(function () {
    Route::get('categories', 'index')->name('categories.index');
    Route::post('categories', 'store')->name('categories.store');
    Route::put('categories/{id}/edit', 'update')->name('categories.update');
    Route::delete('categories/{id}', 'destroy')->name('categories.destroy');
});

// Suppliers
Route::controller(SupplierController::class)->group(function () {
    Route::get('suppliers', 'index')->name('suppliers.index');
    Route::get('suppliers/create', 'create')->name('suppliers.create');
    Route::post('suppliers', 'store')->name('suppliers.store');
    Route::get('suppliers/{id}', 'show')->name('suppliers.show');
    Route::get('suppliers/{id}/edit', 'edit')->name('suppliers.edit');
    Route::put('suppliers/{id}/edit', 'update')->name('suppliers.update');
    Route::delete('suppliers/{id}', 'destroy')->name('suppliers.destroy');
});
