<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'home.index',
	'uses' => 'HomeController@index'
]);
Route::get('/home','HomeController@redirectIndex');
Route::get('/category/{id}',[
	'as' => 'home.category',
	'uses' => 'HomeController@getCategory'
]);

Route::resource('topic', 'TopicController');

Route::resource('member', 'MemberController');
Route::resource('category', 'CategoryController');
Route::resource('tag', 'TagController');

Route::resource('trend','TrendController');

Route::controller('/test','TestController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


