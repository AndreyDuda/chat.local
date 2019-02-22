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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/start', 'StartController@index')->name('start');
Route::get('/start/get-json', 'StartController@getJson')->name('getJson');
Route::get('/start/data-chart', 'StartController@chartData');
Route::get('/start/random-chart', 'StartController@chartRandom');
