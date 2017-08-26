<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    protected $table = 'interest';

    protected $fillable = ['interests'];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
