<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'customer';

    protected $fillable = ['id','UserId','LanguageId','ActiveCode','IsActive','StatusId'];

    public $timestamps = false;

}