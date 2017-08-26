<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $table = 'role_user';

    protected $fillable = ['userid', 'roleid'];

    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
    public function Role()
    {
        return $this ->belongsTo('App\Models\Role','roleid','id');
    }
}
