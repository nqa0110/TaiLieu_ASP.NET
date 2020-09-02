<?php

use GuzzleHttp\Middleware;
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
//trang login
Route::group(['middleware' => 'guest'],function(){
    //match = post + get
    Route::match(['get','post'],'/login',['as'=>'login', 'uses'=>'LoginController@index']);
});
//trang admin
Route::group(['middleware' => 'auth'],function(){
    Route::get('/trangchu','TrangChuController@index');
});

Route::get('/', function () {
    return view('welcome');
});



