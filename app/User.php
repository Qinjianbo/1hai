<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = '1hai_user';
	protected $hidden = ['password','enabled'];
}
