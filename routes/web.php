<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\OilTransactionController;
use App\Http\Controllers\BusTripController;
use App\Http\Controllers\ReportController;

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Public routes
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // Expenses routes
    Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
    Route::get('/expenses/fetch', [ExpenseController::class, 'fetch'])->name('expenses.fetch');
    
    // Oil transactions routes
    Route::get('/oil', [OilTransactionController::class, 'index'])->name('oil.index');
    Route::post('/oil', [OilTransactionController::class, 'store'])->name('oil.store');
    Route::get('/oil/fetch', [OilTransactionController::class, 'fetch'])->name('oil.fetch');
    
    // Bus trips routes
    Route::get('/bus', [BusTripController::class, 'index'])->name('bus.index');
    Route::post('/bus', [BusTripController::class, 'store'])->name('bus.store');
    Route::get('/bus/fetch', [BusTripController::class, 'fetch'])->name('bus.fetch');
    
    // Reports routes
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/expenses', [ReportController::class, 'expenses'])->name('reports.expenses');
    Route::get('/reports/oil', [ReportController::class, 'oil'])->name('reports.oil');
    Route::get('/reports/bus', [ReportController::class, 'bus'])->name('reports.bus');
});
