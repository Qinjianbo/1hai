<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'myblog_user';
	protected $hidden = ['password','enabled'];
}
