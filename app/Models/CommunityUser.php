<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityUser extends Model
{
    //
    protected $table = 'community_user';

    public function User()
    {
        return $this->belongsTo('App\User','userid', 'id');
    }
    public function Community()
    {
        return $this ->belongsTo('App\Models\Community','communityid','id');
    }

}
