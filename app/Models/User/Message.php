<?php

namespace App\Models\User;

use App\Models\Model;

class Message extends Model
{
    protected $table = 'wutao_message';
    protected $guarded = [];
    public $timestamps = false;
}
