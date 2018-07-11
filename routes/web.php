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
 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 

Route::get('/listShop', 'ListShopsController@index');
//View a single instructor
Route::get('/listShop/{id}', 'ListShopsController@show');
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api']), function (){
Route::post('details', 'API\UserController@details');
});
