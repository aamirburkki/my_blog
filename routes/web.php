<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login','AuthController@index')->name('login');
Route::get('/','AuthController@create')->name('signup');
Route::post('user/register','AuthController@update');
Route::post('user/auth','AuthController@store');
Route::post('logout', 'AuthController@destroy')->name('logout');

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard','DashboardController@index');
    Route::resource('users','UserController');
});
