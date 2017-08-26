<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }


    public function ForumComment()
    {
        return $this->hasMany('App\Models\ForumComment','commentid', 'id');
    }

    public function EventComment()
    {
        return $this->hasMany('App\Models\EventComment','commentid', 'id');
    }

    public function NewsComment()
    {
        return $this->hasMany('App\Models\NewsComment','commentid', 'id');
    }
}
