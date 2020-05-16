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

// 必要ないのでコメントアウト
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
//検索機能
Route::get('paginate', 'SearchController@index')->name('search.index');