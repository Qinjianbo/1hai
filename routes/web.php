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
Route::get('/register', function () {
    return view('user.register');
});
Route::get('blade', function () {
	return view('child');
});
Route::get('login', function() {
	return view('user.login');
});
Route::get('/captcha', 'Controller@getCaptcha');

// 后台路由
Route::get('/Admin', function () {
   return view('Admin.login', ['message' => '']);
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::post('/login', 'LoginController@doLogin');
    Route::get('/car', 'CarController@index')->middleware('adminAuthCheck');
    Route::get('/logout', 'LogoutController@doLogout');
});