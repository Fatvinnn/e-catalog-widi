<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.details');
Route::get('/features', function () {
    $features = App\Models\Feature::all();
    return view('pages.features', compact('features'));
});
Route::view('/marketplace', 'pages.marketplace');
Route::view('/company', 'pages.company');

