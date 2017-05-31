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

Route::get('/webcast', 'IndexController@webcast');

Route::get('/swday', 'IndexController@swday');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home')->middleware('auth');

Route::get('/admin/banners', 'AdminController@banners')->name('banners')->middleware('auth');

