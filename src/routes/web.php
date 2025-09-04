<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\dashboardCli\dashboardCliController;
use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pagePrincipal.page-principal');
})->name('page.principal');


//Routes for login and logout
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});

Route::prefix('user')->group(function () {
    // Route::get('/register', [UserController::class, 'registerForm'])->name('user.register');
    Route::post('/register', [UserController::class, 'registerUser'])->name('user.register');
});


Route::prefix('dashboardCli')->group(function () {
    Route::get('/', [dashboardCliController::class, 'index'])->name('dashboard.cli')->middleware('auth');
    Route::get('/products', [dashboardCliController::class, 'getProducts'])->name('dashboard.catalog.products')->middleware('auth');
    Route::post('/products', [ProductController::class, 'createProduct'])->name('dashboard.catalog.products.create')->middleware('auth');
});

Route::get('/layout', function () {
    return view('layouts.dashboardLayout.dashboardLayout');
});
