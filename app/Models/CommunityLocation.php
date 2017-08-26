<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CommunityLocation extends Model
{
    protected $table='community_location';

    public function Location()
    {
        return $this ->belongsTo('App\Models\Location','locationid','id');
    }
    public function Community()
    {
        return $this ->belongsTo('App\Models\Community','communityid','id');
    }

}
