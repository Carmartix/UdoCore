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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/carrera','CarreraController');
Route::resource('/materia','MateriaController');
/*
Route::group(['prefix'=>'admin'], function(){
	
	if (Auth::guest())
		return view('welcome');
	elseif (Auth::user()->type == 'admin')
		return view('admin.index');
	else
		return view('welcome');
	
});
*/