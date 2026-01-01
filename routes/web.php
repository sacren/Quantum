<?php

use App\Http\Controllers\StockController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::resource('pizzas', PizzaController::class)
    ->only(['index']);

Route::resource('quotes', QuoteController::class)
    ->only(['index']);

Route::resource('users', UserController::class)
    ->only(['index']);

Route::resource('stocks', StockController::class)
    ->only(['index']);
