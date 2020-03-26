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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('bids', 'BidController');
    Route::resource('categories', 'CategoryController');
    Route::resource('deals', 'DealController');
    Route::resource('levels', 'LevelController');
    Route::resource('lots', 'LotController');
    Route::resource('orders', 'OrderController');
    Route::resource('reviews', 'ReviewController');
    Route::resource('users', 'UserController');
});
