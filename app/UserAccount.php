<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
    protected $table = 'useraccount';
    protected $primaryKey = 'UserId';
    protected $fillable = ['UserId','Email','Password','DisplayName','Image','RoleId','LoginDate','CreateDate'];

    public $timestamps = false;

}