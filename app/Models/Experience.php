<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $table = 'experience';

    protected $fillable = ['organization','position','title','from','to'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
