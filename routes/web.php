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

//公共获取验证码路由
Route::get('/captcha', 'Controller@getCaptcha');

// 前台路由
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/register', function () {
        return view('user.register');
    });
    Route::get('/login', function() {
        return view('user.login');
    });
    Route::get('/search', 'SearchController@index');
    Route::get('/car', 'CarController@index');
});

// 后台路由
Route::get('/Admin', function () {
   return view('Admin.login', ['message' => '']);
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::post('/login', 'LoginController@doLogin');
    Route::get('/logout', 'LogoutController@doLogout');
    Route::get('/cars', 'CarController@cars')->middleware('adminAuthCheck');
    Route::post('/car/store', 'CarController@store')->middleware('adminAuthCheck');
    Route::get('/car/changeValid', 'CarController@changeValid')->middleware('adminAuthCheck');
    Route::get('/car/{id}', 'CarController@show')->middleware('adminAuthCheck');
    Route::get('/types', 'TypeController@types')->middleware('adminAuthCheck');
    Route::get('/type/delete/{id}', 'TypeController@delete')->middleware('adminAuthCheck');
    Route::get('/type/{id}', 'TypeController@show')->middleware('adminAuthCheck');
    Route::post('/type/store', 'TypeController@store')->middleware('adminAuthCheck');
    Route::get('/brands', 'BrandController@brands')->middleware('adminAuthCheck');
    Route::get('/brand/delete/{id}', 'BrandController@delete')->middleware('adminAuthCheck');
    Route::get('/brand/{id}', 'BrandController@show')->middleware('adminAuthCheck');
    Route::post('/brand/store', 'BrandController@store')->middleware('adminAuthCheck');
    Route::get('/properties', 'PropertyController@properties')->middleware('adminAuthCheck');
    Route::get('/property/delete/{id}', 'PropertyController@delete')->middleware('adminAuthCheck');
    Route::get('/property/{id}', 'PropertyController@show')->middleware('adminAuthCheck');
    Route::post('/property/store', 'PropertyController@store')->middleware('adminAuthCheck');
    Route::get('/users', 'UserController@users')->middleware('adminAuthCheck');
    Route::get('/user/{id}', 'UserController@show')->middleware('adminAuthCheck');
    Route::get('/user/changeEnabled/{id}', 'UserController@changeEnabled')->middleware('adminAuthCheck');
    Route::get('/messages', 'MessageController@messages')->middleware('adminAuthCheck');
    Route::get('/message/{id}', 'MessageController@show')->middleware('adminAuthCheck');
    Route::post('/message/store', 'MessageController@store')->middleware('adminAuthCheck');
    Route::get('/shops', 'ShopController@shops')->middleware('adminAuthCheck');
    Route::get('/shop/{id}', 'ShopController@show')->middleware('adminAuthCheck');
    Route::get('/shop/delete/{id}', 'ShopController@delete')->middleware('adminAuthCheck');
    Route::post('/shop/store', 'ShopController@store')->middleware('adminAuthCheck');
    Route::get('/shopCarCityList', 'ShopCarCityController@rents')->middleware('adminAuthCheck');
    Route::get('/shopCarCity/delete/{id}', 'ShopCarCityController@delete')->middleware('adminAuthCheck');
    Route::get('/shopCarCity/{id}', 'ShopCarCityController@show')->middleware('adminAuthCheck');
    Route::post('/shopCarCity/store', 'ShopCarCityController@store')->middleware('adminAuthCheck');
    Route::get('/cities', 'CityController@cities')->middleware('adminAuthCheck');
});
