<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class StripePayment extends Model
{
    protected $table = 'stripepayment';

    protected $fillable = ['id','secret_key','publishable_key'];

    public $timestamps = false;

}