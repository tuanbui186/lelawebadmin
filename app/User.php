<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'usersadmin';

    protected $fillable = ['id','name','email','password','remember_token'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

}