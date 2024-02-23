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

Route::get('/', function () {
    return 'home';
})->name('home');

Route::get('/product/{productName}-{productId}', function($productName, $productId){
    return $productName;
})->name('product.details');

Route::get('/{categoryPath}', function($categoryPath) {
    return $categoryPath;
})->where('categoryPath', '.*')->name('category.list');

Route::get('/search', function(){
    return 'search';
})->name('search');