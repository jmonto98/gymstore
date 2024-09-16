<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('auth.register');
Route::post('/save', 'App\Http\Controllers\Auth\RegisterController@save')->name('auth.save');
