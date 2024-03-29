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

Route::any('/bitmex/{path}', 'Exchanges\BitmexController@index')->where('path', '.*');
Route::any('/binance/{path}', 'Exchanges\BinanceController@index')->where('path', '.*');
Route::any('/okex/{path}', 'Exchanges\OkexController@index')->where('path', '.*');
Route::any('/huobi/{path}', 'Exchanges\HuobiController@index')->where('path', '.*');


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/welcome', 'HomeController@welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'Admin\UserManageController@index');
Route::get('/user/create', 'Admin\UserManageController@create');
Route::get('/user/verify-name/{userID?}', 'Admin\UserManageController@verifyNameUnique');
Route::get('/user/{userID}', 'Admin\UserManageController@edit');

Route::post('/user', 'Admin\UserManageController@addUser');
Route::patch('/user/{userID}', 'Admin\UserManageController@store');