<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	
	return View::make('hello');
});

Route::get('users/{id?}',array('as' => 'user', 'uses' => 'UserApiController@get_user')); //function ($id) {
Route::get('auth/{user}/{pass}', 'UserApiController@getAuth');
//return View::make('user')->with('id', $id);
//})
//->where('id', '[0-9]+');

//Route::any('api/v1/users/(:num?)', array('as' => 'api.todos', 'uses' => 'api.todos@index'));