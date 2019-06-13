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
Route::get('/profile/insert','IndexController@insertForm')->name('insertform');
Route::post('/insert','DBController@insert')->name('insert');

Route::get('/profile/data','DBController@showData')->name('data');
Route::get('/profile/edit/{MovieID?}','DBController@editData')->name('edit');
Route::get('/delete/{MovieID}','DBController@deleteData')->name('delete');

Route::post('/update/{movie}','DBController@updateData')->name('update');
Route::post('/modal','indexController@modal')->name('modal');




// Route for Auth + login to the dashboard panel
Route::get('/login', 'IndexController@login')->name('login');



