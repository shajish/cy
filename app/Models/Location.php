<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    public function UserLocation()
    {
        return $this ->hasMany('App\Models\UserLocation','locationid','id');
    }
    public function CommunityLocation()
    {
        return $this ->hasMany('App\Models\CommunityLocation','locationid','id');
    }
    public function Event()
    {
        return $this ->hasMany('App\Models\Event','locationid','id');
    }



}
