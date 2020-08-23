<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
	return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//news
Route::get('/news', 'NewsController@newsindex');

//gallery
Route::get('/gallery', 'GalleryController@galleryindex');

//goods
Route::get('/goods', 'GoodsController@goodsindex');