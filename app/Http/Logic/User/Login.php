<?php
namespace App\Http\Logic\User;

use App\Models\User\User;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Login
{
	/**
	 * doLogin
	 * 1.basic check
	 * 2.DB validates
	 * 3.cache
	 *
	 * @param Request $request
	 *
	 * @return Collection
	 */ 
	public function doLogin(Request $request): Collection
	{
		$criteria['username'] = $request->input('username', '');
		$criteria['password'] = md5($request->input('password', ''));
		$criteria['enabled'] = 1;
		$userModel = new User();
        $user = collect($userModel->select(['id','username','realname'])->where($criteria)->first());

        return $user;
	}		    
}
