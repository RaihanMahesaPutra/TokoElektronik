<?php

// Login
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');

// Register
Route::get('/register', 'AuthController@showRegisterForm')->name('register');
Route::post('/register', 'AuthController@register');

// Logout
Route::post('/logout', 'AuthController@logout')->name('logout');
