<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    //
    protected $table = 'event_comment';

    public function Comment()
    {
        return $this->belongsTo('App\User','commentid', 'id');
    }

    public function Event()
    {
        return $this->belongsTo('App\Models\Event','eventid', 'id');
    }
}
