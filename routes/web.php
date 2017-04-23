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
    Route::get('/logout', 'LogoutController@doLogout');
    Route::get('/cars', 'CarController@cars')->middleware('adminAuthCheck');
    Route::get('/car/{id}', 'CarController@show')->middleware('adminAuthCheck');
    Route::get('/types', 'TypeController@types')->middleware('adminAuthCheck');
    Route::get('/type/{id}', 'TypeController@show')->middleware('adminAuthCheck');
    Route::get('/brands', 'BrandController@brands')->middleware('adminAuthCheck');
    Route::get('/brand/{id}', 'BrandController@show')->middleware('adminAuthCheck');
    Route::get('/properties', 'PropertyController@properties')->middleware('adminAuthCheck');
    Route::get('/property/{id}', 'PropertyController@show')->middleware('adminAuthCheck');
    Route::get('/photos', 'PhotoController@photos')->middleware('adminAuthCheck');
    Route::get('/photo/{id}', 'PhotoController@show')->middleware('adminAuthCheck');
    Route::get('/users', 'UserController@users')->middleware('adminAuthCheck');
    Route::get('/user/{id}', 'UserController@show')->middleware('adminAuthCheck');
    Route::get('/messages', 'MessageController@messages')->middleware('adminAuthCheck');
    Route::get('/message/{id}', 'MessageController@show')->middleware('adminAuthCheck');
    Route::get('/shops', 'ShopController@shops')->middleware('adminAuthCheck');
    Route::get('/shop/{id}', 'MessageController@show')->middleware('adminAuthCheck');
});