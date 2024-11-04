<?php

use App\Http\Middleware\AdminAuthMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/search', 'App\Http\Controllers\HomeController@search')->name('home.search');
Route::post('/search', 'App\Http\Controllers\HomeController@search')->name('home.search');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');

Route::get('/products', 'App\Http\Controllers\Product\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\Product\ProductController@show')->name('product.show');

Route::get('/cart', 'App\Http\Controllers\Cart\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\Cart\CartController@delete')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\Cart\CartController@add')->name('cart.add');

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\Cart\CartController@purchase')->name('cart.purchase');
    Route::post('/products/{id}/reviews', 'App\Http\Controllers\Review\ReviewController@store')->name('review.store');
});

Route::middleware([AdminAuthMiddleware::class])->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name('admin.product.index');
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name('admin.product.store');
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name('admin.product.delete');
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('admin.product.edit');
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');

    Route::get('/admin/categories', 'App\Http\Controllers\Admin\AdminCategoryController@index')->name('admin.category.index');
    Route::get('/admin/categories/{id}/edit', 'App\Http\Controllers\Admin\AdminCategoryController@edit')->name('admin.category.edit');
    Route::put('/admin/categories/{id}', 'App\Http\Controllers\Admin\AdminCategoryController@update')->name('admin.category.update');
    Route::post('/admin/categories/store', 'App\Http\Controllers\Admin\AdminCategoryController@store')->name('admin.category.store');

    Route::get('/admin/user', 'App\Http\Controllers\Admin\UserHomeController@index')->name('admin.user.index');
    Route::post('/admin/user/create', 'App\Http\Controllers\Admin\UserHomeController@create')->name('admin.user.create');
    Route::get('/admin/user/edit/{id}', 'App\Http\Controllers\Admin\UserHomeController@edit')->name('admin.user.edit');
    Route::put('/admin/user/update/{id}', 'App\Http\Controllers\Admin\UserHomeController@update')->name('admin.user.update');
});

require __DIR__.'/auth.php';

Auth::routes();
