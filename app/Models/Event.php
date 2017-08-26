<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'event';
    public $fillable = ['title','detail'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
    public function Location()
    {
        return $this ->belongsTo('App\Models\Location','locationid','id');
    }
    public function EventComment()
    {
        return $this ->hasMany('App\Models\EventComment','eventid','id');
    }


}
