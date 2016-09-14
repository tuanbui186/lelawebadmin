<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Interpreter extends Authenticatable
{
    protected $table = 'interpreter';

    protected $fillable = ['id','UserId','LanguageId','ActiveCode','IsActive','StatusId','IsApprove'];
	public $timestamps = false;

}