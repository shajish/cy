<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'education';

    protected $fillable=[
        'institute','from_year','to_year','description','degree'
    ];

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
}
