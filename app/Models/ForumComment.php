<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    //
    protected $table = 'forum_comment';

    public function Comment()
    {
        return $this->belongsTo('App\Models\Comment','commentid', 'id');
    }
    public function Forum()
    {
        return $this->belongsTo('App\Models\Forum','forumid', 'id');
    }
}
