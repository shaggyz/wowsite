<?php

namespace WowSite\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $connection = 'realmd';
}
