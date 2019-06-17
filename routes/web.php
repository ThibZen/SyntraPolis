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
Route::get('/specific/{MovieID?}', 'IndexController@specificMovie')->name('specificMovie');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@store')->name('store.register');

// Password Reset Routes...
Route::prefix('password')->group(function() {
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/reset', 'Auth\ResetPasswordController@reset');
});

//profile route after login...
Route::prefix('profile')->middleware('auth')->group(function() {
    Route::get('/admin','IndexController@admin')->name('admin');
    Route::get('/insert','IndexController@insertForm')->name('insertform');
    Route::post('/insert','DBController@insert')->name('insert');

    Route::get('/data','DBController@showData')->name('data');
    Route::get('/edit/{MovieID?}','DBController@editData')->name('edit');
    Route::get('/delete/{MovieID}','DBController@deleteData')->name('delete');
    Route::post('/update/{movie}','DBController@updateData')->name('update');
    Route::post('/modal','indexController@modal')->name('modal');
});

Route::get('/order','IndexController@orderMovie')->name('order');