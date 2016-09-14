<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Language extends Authenticatable
{
    protected $table = 'language';

    protected $fillable = ['LangId','LangName'];

    public $timestamps = false;

}