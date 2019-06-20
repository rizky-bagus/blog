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

Route::get('/', 'FrontendController@index');
Route::get('/news/index', 'FrontendController@news')->name('index');
Route::get('/news/category/{id}', 'FrontendController@filter')->name('filter');
Route::get('/news/search', 'FrontendController@search')->name('search');
Route::get('/news/details/{id}', 'FrontendController@detail')->name('detail');

// Category
Route::get('/category', function() {
	return view('category.index');
});

// News
Route::get('/news', function() {
	return view('news.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
