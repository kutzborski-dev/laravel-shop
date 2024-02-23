<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\HomeController;
use App\Http\Controllers\Product\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{productName}-{productId}', [ProductController::class, 'show'])->name('product.details');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/{categoryPath}', [CategoryController::class, 'show'])->where('categoryPath', '.*')->name('category.list');