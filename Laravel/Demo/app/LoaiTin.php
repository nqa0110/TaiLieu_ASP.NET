<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = "LoaiTin";
    // LoaiTin thuộc TheLoai nao
    public function theloai()
    {
        // Tham số: path(Model_TheLoai, FK(LoaiTin), PK(TheLoai))
        return $this->belongsTo('App\TheLoai','idTheLoai','id');
    }
    //LoaiTin có bn TinTuc
    public function tintuc()
    {
        //Tham số: path(Model_TinTuc, FK(TinTuc), PK(LoaiTin))
        return $this->hasMany('App\TinTuc','idLoaiTin','id');
    }
}
