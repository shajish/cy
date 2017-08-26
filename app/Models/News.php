<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
    public function NewsComment()
    {
        return $this ->hasMany('App\Models\NewsComment','newsid','id');
    }
}
