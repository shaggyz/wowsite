<?php

namespace WowSite\Models;

use Illuminate\Database\Eloquent\Model;

class GameCharacter extends Model
{
    protected $connection = 'characters';

    protected $table = 'characters';

    public $timestamps = false;
}
