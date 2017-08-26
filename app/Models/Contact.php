<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact';

    protected $fillable = ['mobile','telephone','social_link'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
