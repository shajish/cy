<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';

    public function UserRole()
    {
        return $this->hasMany('App\Models\UserRole','userid', 'id');
    }

    public function Profession()
    {
        return $this->hasMany('App\Models\Profession', 'userid', 'id');
    }

    public function Education()
    {
        return $this->hasMany('App\Models\Education', 'userid', 'id');
    }

    public function Interest()
    {
        return $this->hasMany('App\Models\Interest', 'userid', 'id');
    }

    public function Contact()
    {
        return $this->hasMany('App\UserModel\Contact', 'userid', 'id');
    }

    public function Business()
    {
        return $this->hasMany('App\UserModel\Business', 'userid', 'id');
    }

    public function Experience()
    {
        return $this->hasMany('App\Models\Experience', 'userid', 'id');
    }

    public function UserProfile()
    {
        return $this->hasOne('App\Models\UserProfile', 'userid', 'id');
    }

    public function UserLocation()
    {
        return $this->hasMany('App\Models\UserLocation', 'userid', 'id');
    }

    public function CommunityUser()
    {
        return $this->hasMany('App\Models\CommunityUser', 'userid', 'id');
    }

    public function Event()
    {
        return $this->hasMany('App\Models\Event', 'userid', 'id');
    }

    public function News()
    {
        return $this->hasMany('App\Models\News', 'userid', 'id');
    }

    public function Status()
    {
        return $this->hasOne('App\Models\Status', 'userid', 'id');
    }

    public function Forum()
    {
        return $this->hasMany('App\Models\Forum', 'userid', 'id');
    }

    public function Comment()
    {
        return $this->hasMany('App\UserModel\Comment', 'userid', 'id');
    }


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'statusid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
