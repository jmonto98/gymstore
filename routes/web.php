<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.create"); 
Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store"); 
Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name('admin.product.delete');
Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('admin.product.edit');
Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('admin.product.update');
Route::get('/categories', 'App\Http\Controllers\Category\AdminCategoryController@index')->name('category.home.index');
Route::get('/categories/{id}/edit', 'App\Http\Controllers\Category\AdminCategoryController@edit')->name('category.edit');
Route::put('/categories/{id}/edit', 'App\Http\Controllers\Category\AdminCategoryController@update')->name('category.update');
Route::post('/categories/store', 'App\Http\Controllers\Category\AdminCategoryController@store')->name('category.store');
Route::delete('/categories/{id}', 'App\Http\Controllers\Category\AdminCategoryController@destroy')->name('category.destroy');