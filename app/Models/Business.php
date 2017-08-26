<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    protected $table = 'business';

    protected $fillable = ['name','type','description'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
