<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    public function ForumTag()
    {
        return $this->hasMany('App\Models\ForumTag','tagid','id');
    }
}
