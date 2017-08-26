<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    //
    protected $table = 'news_comment';

    public function Comment()
    {
        return $this->belongsTo('App\Models\Comment','commentid', 'id');
    }

    public function News()
    {
        return $this->belongsTo('App\Models\News','newsid', 'id');
    }
}
