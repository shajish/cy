<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $table='community';
    public $fillable = ['name','location'];

    public function CommunityLocation()
    {
        return $this ->hasMany('App\Models\CommunityLocation','communityid','id');
    }
    public function CommunityUser()
    {
        return $this ->hasMany('App\Models\CommunityUser','communityid','id');
    }

}
