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

Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
	Route::get('/login', 'LoginController@doLogin');
	Route::post('/reg', 'RegisterController@doRegister');
	Route::get('/reg_code', 'RegisterController@checkRegisterCode');
});
