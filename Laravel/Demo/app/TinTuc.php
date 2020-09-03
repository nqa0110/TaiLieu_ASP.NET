<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = "TinTuc";
    //TinTuc thuộc LoaiTin nào
    public function loaitin()
    {
        //Tham số: path(Model_LoaiTin, FK(TinTuc), PK(LoaiTin))
        return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }
    // Lấy Comment cho TinTuc
    public function comment()
    {
        //1 TinTuc có nhiều Comment
        //Tham Số: path(Model_Comment), FK(Comment), PK(TinTuc)
        return $this->hasMany('App\Comment','idTinTuc','id');
    }
}
