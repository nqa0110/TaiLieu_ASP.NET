<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//TheLoai -> LoaiTin -> TinTuc
class TheLoai extends Model
{
    protected $table = "TheLoai";

    //lấy tất cả LoaiTin của TheLoai
    public function loaitin()
    {
        // 1 TheLoai có nhiều LoaiTin
        // 3 tham số: path(Model_LoaiTin),FK(LoaiTin),PK(TheLoai)
        return $this->hasMany('App\LoaiTin','idTheLoai','id');
    }
    //lấy tất cả Tintuc trong TheLoai
    public function tintuc()
    {
        //lien ket: TinTuc=>LoaiTin=>TheLoai
        //tham số: path(Model_TinTuc), path(Model_LoaiTin), FK(LoaiTin), FK(TinTuc), PK(TheLoai)
        return $this->hasManyThrough('App\TinTuc','App\LoaiTin','idTheLoai','idLoaiTin','id');
    }
}
