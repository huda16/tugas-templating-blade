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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/home', 'RegisterController@home');
Route::get('/register', 'RegisterController@register');
Route::get('/welcome', 'RegisterController@sapa');
Route::post('/welcome', 'RegisterController@welcome_post');

Route::get('/master', function () {
    return view('adminlte/master');
});

Route::get('/', function () {
    return view('items/index');
});

Route::get('/data-tables', function () {
    return view('items/indextabel');
});
