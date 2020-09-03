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
use App\TheLoai;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    //find(1) = idTheLoai(1)
    $theloai = TheLoai::find(1);
    foreach($theloai->loaitin as $loaitin){
        echo $loaitin->Ten."<br>";
    }
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        //admin/theloai/danhsach
        Route::get('danhsach','TheLoaiController@getDanhSach');
        //admin/theloai/sua
        Route::get('sua','TheLoaiController@getSua');
        //admin/theloai/them
        Route::get('them','TheLoaiController@getThem');
        //post
        Route::post('them','TheLoaiController@postThem');

    });

    Route::group(['prefix'=>'loaitin'],function(){
        //admin/loaitin/danhsach
        Route::get('danhsach','LoaiTinController@getDanhSach');
        //admin/loaitin/sua
        Route::get('sua','LoaiTinController@getSua');
        //admin/loaitin/them
        Route::get('them','LoaiTinController@getThem');
    });

    Route::group(['prefix'=>'tintuc'],function(){
        //admin/tintuc/danhsach
        Route::get('danhsach','TinTucController@getDanhSach');
        //admin/tintuc/sua
        Route::get('sua','TinTucController@getSua');
        //admin/tintuc/them
        Route::get('them','TinTucController@getThem');
    });
});