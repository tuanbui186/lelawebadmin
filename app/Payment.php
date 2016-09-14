<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    protected $table = 'payment';

    protected $fillable = ['id','clientId','clientSecret','mode','loglevel','cache','logenable','payID'];

    public $timestamps = false;

}