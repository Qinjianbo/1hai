<?php

namespace App\Models\User;

use App\Models\Model;

class User extends Model
{
	protected $table = '1hai_user';
	protected $hidden = ['password','enabled','idcard'];
}
