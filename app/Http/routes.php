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

// Route::get('blog', function () {
//     return view('welcome');
// });
Route::get('blog', [
	'uses' => 'PostController@index',
	'as' => 'blog',
	]);

// Route::auth();

// Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@index');

Route::post('/create',[
	'uses' => 'PostController@create',
	'as' => 'create',
	]);
	
Route::get('view',[
	'uses'=> 'PostController@view',
	'as'=> 'view'
	]);	
