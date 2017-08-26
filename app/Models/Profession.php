<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    protected $table = 'profession';

    protected $fillable=['type','detail','userid'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
