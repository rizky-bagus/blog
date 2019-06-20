<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
	'middleware' => ['api', 'cors'],
], function ($router) {
	// Auth
	Route::post('register', 'AuthController@register');
	Route::post('login', 'AuthController@login');
	Route::post('logout', 'AuthController@logout');

	// Category
	Route::get('category', 'CategoryController@index');
	Route::get('category/edit/{id}', 'CategoryController@edit');
	Route::get('category/{id}', 'CategoryController@showNews');
	Route::post('category', 'CategoryController@store');
	Route::post('category/{id}', 'CategoryController@update');
	Route::delete('category/{id}', 'CategoryController@destroy');

	// News
	Route::get('news', 'NewsController@index');
	Route::get('news/edit/{id}', 'NewsController@edit');
	Route::post('news', 'NewsController@store');
	Route::post('news/{id}', 'NewsController@update');
	Route::post('news/publish/{id}', 'NewsController@publish');
	Route::delete('news/{id}', 'NewsController@destroy');
});