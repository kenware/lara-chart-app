<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{

    public function room()
    {
        return $this->hasMany('App\Room');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','user_image',
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
