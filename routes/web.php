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
Route::get('/profile', 'IndexController@profile')->name('profile');

// Route for Auth + login to the dashboard panel
Route::get('/login', 'IndexController@login')->name('login');
Route::get('/register', 'IndexController@register')->name('register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
