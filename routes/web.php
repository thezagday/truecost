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

    Route::get('/dashboard', function () { return view('admin.dashboard'); });
    Route::get('/basic-table', function () { return view('admin.basic-table'); });
    Route::get('/blank', function () { return view('admin.blank'); });
    Route::get('/buttons', function () { return view('admin.buttons'); });
    Route::get('/calendar', function () { return view('admin.calendar'); });
    Route::get('/charts', function () { return view('admin.charts'); });
    Route::get('/chat', function () { return view('admin.chat'); });
    Route::get('/compose', function () { return view('admin.compose'); });
    Route::get('/datatable', function () { return view('admin.datatable'); });
    Route::get('/email', function () { return view('admin.email'); });
    Route::get('/forms', function () { return view('admin.forms'); });
    Route::get('/google-maps', function () { return view('admin.google-maps'); });
    Route::get('/ui', function () { return view('admin.ui'); });
    Route::get('/vector-maps', function () { return view('admin.vector-maps'); });

    Route::get('/404', function () { return view('admin.404'); });
    Route::get('/500', function () { return view('admin.500'); });

    Route::get('/auction', ['as' => 'auction.index', 'uses' => 'AuctionController@index']);
    Route::get('/auction/show/{lot}', ['as' => 'auction.show', 'uses' => 'AuctionController@show']);
    Route::post('/auction/reduce/{lot}', ['as' => 'auction.reduce', 'uses' => 'AuctionController@reducePrice']);
});
