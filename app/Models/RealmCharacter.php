<?php

namespace WowSite\Models;

use Illuminate\Database\Eloquent\Model;

class RealmCharacter extends Model
{
    protected $table = 'realmcharacters';

    protected $connection = 'realmd';
}
