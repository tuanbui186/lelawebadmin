<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Transaction extends Authenticatable
{
    protected $table = 'transaction';

    protected $fillable = ['Id','UserSrc','UserDes','Duration','Tip','TotalMoney','CategoryId','IsCancel','CreateDate','Status','targetLangId','moneyTrans'];

    ];

    public $timestamps = false;

}