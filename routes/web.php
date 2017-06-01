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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('home')->middleware('auth');

Route::get('/admin/banners', 'AdminController@banners')->name('banners')->middleware('auth');

Route::post('/admin/banner/save', 'AdminController@create')->name('save')->middleware('auth');

Route::get('/logout', function () {
	Session::flush();
	Auth::logout();
	return \Redirect::to('/admin');
});

Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/app/images/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});