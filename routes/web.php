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

Route::get('/profile/admin','IndexController@admin')->name('admin');
Route::get('/profile/insert','IndexController@insertform')->name('insertform');
Route::post('/insert','DBController@insert')->name('insert');
Route::get('/profile/data','DBController@showdata')->name('data');
//Route::post('/profile/store','IndexController@store')->name('store');
Route::get('/profile/edit','IndexController@edit')->name('edit');
Route::post('/update','DBController@update')->name('update');



// Route for Auth + login to the dashboard panel
Route::get('/login', 'IndexController@login')->name('login');

// Route for insertForm and insert in DB


