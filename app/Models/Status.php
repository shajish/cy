<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $table = 'status';

    public function User()
    {
        return $this->hasOne('App\User','userid', 'id');
    }
}
