<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PaymentManage extends Model
{
    protected $table = 'payment_manage';

    protected $fillable = ['id','name','status','capture_amount'];

    public $timestamps = false;

}