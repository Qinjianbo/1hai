<?php
namespace App\Http\Logic\User;

use App\User;
use Illuminate\Http\Request;
use Collection;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterByEmail;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class Register
{
	/**
	 * doRegisterByEmail
	 * 1.check the info
	 * 2.make randomCode and save it
	 * 3.save the info
	 * 4.put the email into the quere
	 *
	 * @param Request $request
	 *
	 * @return bool
	 */
	public function doRegisterByEmail(Request $request): bool
	{
		$userModel = new User();
		$userModel->username = $request->input('username');
		$userModel->password = md5($request->input('password'));
		$userModel->email = $request->input('username');
		if ($userModel->save()) {
			$randomCode = $this->makeRandomCode(6);
			$expiresAt = Carbon::now()->addMinutes(21);
			$key = 'username_'.crc32($request->input('username'));
			Cache::store('redisCaptcha')->put($key, $randomCode, $expiresAt);
			$message = ((new RegisterByEmail($request->input('username'), $randomCode))
				->onConnection('redis')->onQueue('emails'));
			Mail::to($request->input('username'))->queue($message);
			return true;
		}
		return false;
	}
	
	/**
	 * checkRegisterCode
	 * 1.get the randomCode from redis
	 * 2.compare the saved code and the code that user inputs
	 * 3.if the code corrects ,changing user to enable
	 * 4.if the changing successed , forget the code in the redis
	 *
	 * @param $request
	 *
	 * @return bool
	 */
	public function checkRegisterCode($request): bool
	{
		$key = 'username_'.crc32($request->input('username'));
		$randomCode = $request->input('captcha');
		$captcha = Cache::store('redisCaptcha')->get($key, '');
		if ($captcha == $randomCode) {
			$userModel = User::where('username', $request->input('username'))->first();
			$userModel->enabled = 1;
			if ($userModel->save()) {
				Cache::store('redisCaptcha')->forget($key);
				return true;
			} else {
				return false;
			}

		} else {
			Log::info(sprintf('The captcha in redis is null of the user:%s', $request->username));
			return false;
		}
	}

	/**
	 * makeRandomCode
	 *
	 * @param $length
	 *
	 * @return string
	 */
	 
	public function makeRandomCode(int $length): string
	{
		$iniStr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghigklmnopqrstuvwxyz';
		$codeStr = '';
		$max = strlen($iniStr) - 1;
		for ($i = 0; $i < $length; $i++) {
			$codeStr .= $iniStr[rand(0, $max)];
		}
		return $codeStr;

	}
}
