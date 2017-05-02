<?php

namespace App\Models\User;

use App\Models\Model;

class User extends Model
{
    protected $table = 'wutao_user';
    protected $guarded = [];
    public $timestamps = false;
}
