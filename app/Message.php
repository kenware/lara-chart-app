<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function replies()
    {
        return $this->hasMany('App\Replie');
    }
}
