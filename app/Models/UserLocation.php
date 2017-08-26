<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    //
    protected $table = 'user_location';

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
    public function Location()
    {
        return $this ->belongsTo('App\Models\Location','locationid','id');
    }

}
