<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "Comment";
    
    //Comment này thuộc TinTuc nào
    public function tintuc()
    {
        //Tham Số: path(Model_TinTuc), FK(Comment), PK(TinTuc)
        return $this->belongsTo('App\TinTuc','idTinTuc','id');
    }
    //Comment này của 1User nào
    public function user()
    {
        //Tham Số: path(Model_User), FK(Comment), PK(User)
        return $this->belongsTo('App\User','idUser','id');
    }
}
