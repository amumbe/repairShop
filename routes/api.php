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

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/shop', 'ListShopsController@index');
//View a single instructor
Route::get('/instructor/{id}', 'ListShopsController@show');
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');



