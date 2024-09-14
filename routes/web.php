<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.index');

Auth::routes();