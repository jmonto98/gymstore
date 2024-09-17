<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name('cart.purchase');
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name('myaccount.orders');

    Route::post('/products/{id}/reviews', 'App\Http\Controllers\ReviewController@store')->name('review.store');
});

Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name('admin.product.index');
Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name('admin.product.store');
Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name('admin.product.delete');
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('admin.product.edit');
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');
Route::get('/categories', 'App\Http\Controllers\Category\AdminCategoryController@index')->name('category.home.index');
Route::get('/categories/{id}/edit', 'App\Http\Controllers\Category\AdminCategoryController@edit')->name('category.edit');
Route::put('/categories/{id}', 'App\Http\Controllers\Category\AdminCategoryController@update')->name('category.update');
Route::post('/categories/store', 'App\Http\Controllers\Category\AdminCategoryController@store')->name('category.store');
Route::delete('/categories/{id}', 'App\Http\Controllers\Category\AdminCategoryController@delete')->name('category.delete');
Route::get('/usesMode', 'App\Http\Controllers\UseMode\AdminUseModeController@index')->name('useMode.home.index');
Route::get('/usesMode/{id}/edit', 'App\Http\Controllers\UseMode\AdminUseModeController@edit')->name('useMode.edit');
Route::put('/usesMode/{id}', 'App\Http\Controllers\UseMode\AdminUseModeController@update')->name('useMode.update');
Route::post('/usesMode/store', 'App\Http\Controllers\UseMode\AdminUseModeController@store')->name('useMode.store');
Route::delete('/usesMode/{id}', 'App\Http\Controllers\UseMode\AdminUseModeController@delete')->name('useMode.delete');

Route::get('/register', 'App\Http\Controllers\User\UserHomeController@register')->name('user.register');
Route::get('/user', 'App\Http\Controllers\User\UserHomeController@index')->name('user.index');
Route::post('/user/create', 'App\Http\Controllers\User\UserHomeController@create')->name('user.create');
Route::get('/user/edit/{id}', 'App\Http\Controllers\User\UserHomeController@edit')->name('user.edit');
Route::put('/user/update/{id}', 'App\Http\Controllers\User\UserHomeController@update')->name('user.update');

require __DIR__.'/auth.php';

Auth::routes();
