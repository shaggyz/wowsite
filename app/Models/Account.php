<?php

namespace WowSite\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $dates = ['created_at', 'updated_at', 'last_login'];

    protected $connection = 'realmd';

    public $timestamps = false;
}
