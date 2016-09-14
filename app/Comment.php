<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    protected $table = 'Comment';

    protected $primaryKey = 'Id';

    protected $fillable = ['Id','TransId','Comment','Rate','CreateDate'];

    public $timestamps = false;

}