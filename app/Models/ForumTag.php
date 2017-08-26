<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ForumTag extends Model
{
    protected $table = 'forum_tag';

    public function Tag()
    {
        return $this->belongsTo('App\Models\Tag','tagid','id');
    }

    public function Forum()
    {
        return $this->belongsTo('App\Models\Forum','forumid','id');
    }
}
