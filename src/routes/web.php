<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\dashboardCli\dashboardCliController;
use App\Http\Controllers\products\ProductController;
use App\Http\Controllers\user\UserController;

// Página principal
Route::view('/', 'pagePrincipal.page-principal')->name('page.principal');

// === RUTAS DE AUTENTICACIÓN ===
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});

// === RUTAS DE USUARIO ===
Route::prefix('user')->group(function () {
    Route::post('/register', [UserController::class, 'registerUser'])->name('user.register');
});

// === DASHBOARD CLIENTE (Protegidas con middleware auth) ===
Route::prefix('dashboardCli')->middleware('auth')->group(function () {
    Route::get('/', [dashboardCliController::class, 'index'])->name('dashboard.cli');

    // Catálogo de productos
    Route::get('/products', [dashboardCliController::class, 'getProducts'])->name('dashboard.catalog.products');
    Route::post('/products', [ProductController::class, 'createProduct'])->name('dashboard.catalog.products.create');
    Route::get('/products/{id}', [ProductController::class, 'getProductById'])->name('dashboard.catalog.products.id');
    Route::post('/products/filter', [ProductController::class, 'filterProducts'])->name('dashboard.catalog.products.filter');
    Route::get('/products/addCar/{id}', [ProductController::class, 'addProductCar'])->name('dashboard.catalog.products.addCar');

    // Secciones del dashboard
    Route::get('/home', [dashboardCliController::class, 'home'])->name('dashboard.home');
    Route::get('/services', [dashboardCliController::class, 'services'])->name('dashboard.cli.services');
    Route::get('/softwareForSale', [dashboardCliController::class, 'softwareForSale'])->name('dashboard.cli.softwareForSale');
    Route::get('/news', [dashboardCliController::class, 'news'])->name('dashboard.cli.news');
});

// Vista de layout (para pruebas)
Route::view('/layout', 'layouts.dashboardLayout.dashboardLayout');
