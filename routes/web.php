<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@home')->name('home');
Route::get('/upcoming', 'IndexController@upcoming')->name('upcoming');
Route::get('/schedule', 'IndexController@schedule')->name('schedule');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/specific/{MovieID}', 'IndexController@specificMovie')->name('specificMovie');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\LoginController@register')->name('register');

// Password Reset Routes...
Route::prefix('password')->group(function() {
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/reset', 'Auth\ResetPasswordController@reset');
});

//profile route after login...
Route::prefix('profile')->middleware('auth')->group(function() {
    Route::get('/', 'IndexController@profile')->name('profile.index');
});


Route::get('/home', 'HomeController@index')->name('loginSucces');
