<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';

    protected $fillable = ['id','Name','Price','Minute','ImagePath'];

    public $timestamps = false;
}