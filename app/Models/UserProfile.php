<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table = 'user_profile';


   /* public $timestamps = false;*/

    protected $fillable = [
        'DOB',
        'gender',
        'first_name',
        'last_name',
        'image',
        'userid'
    ];

    protected $hidden = ['userid'];

    public function User()
    {
        return $this->hasOne('App\User');
    }
}
