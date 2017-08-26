<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $table = 'forum';

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }

    public function ForumTag()
    {
        return $this->hasMany('App\Models\ForumTag','forumid','id');
    }
    public function ForumComment()
    {
        return $this->hasMany('App\Models\ForumComment','forumid','id');
    }
}
