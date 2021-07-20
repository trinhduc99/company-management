<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/auth', ['middleware' => 'throttle:20,5']], function() {
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');

    Route::get('/login/{service}', 'App\Http\Controllers\api\Auth\SocialController@redirect');
    Route::get('/login/{service}/callback', 'App\Http\Controllers\api\Auth\SocialController@callback');
});