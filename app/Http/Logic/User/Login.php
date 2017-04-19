<?php
namespace App\Http\Logic\User;

use App\User;
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

		$key = sprintf('login_user:%s', $request->input('username'));
		if (!($user = Cache::get($key))) {
			$expiredAt = Carbon::now()->addMinutes(60);
			$user = collect($userModel->where($criteria)->first());
			Cache::store('redisLogin')->put($key, $user, $expiredAt);
		}
		return $user;
	}		    
}
