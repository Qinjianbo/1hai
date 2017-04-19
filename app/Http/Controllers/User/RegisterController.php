<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Register;
use Illuminate\Http\Request;
use App\Jobs\SendRegisterEmail;
use Validator;
use Illuminate\support\Collection;

class RegisterController extends Controller
{
	/**
	 * doRegister
	 *
	 * @param $request
	 *
	 * @return Collection
	 */
	public function doRegister(Request $request): Collection
	{
		if ($request->input('type') == 'email') {
			$rules = ['username' => 'required|email|unique:myblog_user,username'];
		} elseif ($request->input('type') == 'mobile') {
			$rules = ['username' => 'required|digits:11|unique:myblog_user,username'];
		} else {
			return collect(['err' => 'Please tell me your login type.Email or mobile']);
		}
		$rules['password'] = 'required|alpha_dash';
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return collect($validator->messages());
		}

		$registorLogic = new Register();
		if ($request->type == 'mobile') {
			return $registorLogic->doRegisterByMobile($request);
		} elseif ($request->type == 'email') {
			if ($registorLogic->doRegisterByEmail($request)) {
				$job = ((new SendRegisterEmail())->onConnection('redis')->onQueue('emails'));
				dispatch($job);
				return collect(['code' => '200']);
			} else {
				return collect(['err' => 'Sorry,it likes something wrong!Please Try again later!','code'=>'500']);
			}
		} else {
			return collect(['err' => 'Please tell me the register type. Email or Mobile','code'=>'10001']);
		}
	}

	public function checkRegisterCode(Request $request): Collection
	{
		if ($request->input('type') == 'email') {
                        $rules = ['username' => 'required|email'];
                } elseif ($request->input('type') == 'mobile') {
                        $rules = ['username' => 'required|digits:11'];
                } else {
                        return collect(['err' => 'Please tell me your login type.Email or mobile']);
                }
		$rules['captcha'] = 'required|alpha_num';
		$validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                        return collect($validator->messages());
                }
		$registorLogic = new Register();
		if ($registorLogic->checkRegisterCode($request)) {
			return collect(['code' => 200]);
		} else {
			return collect(['err' => 'Sorry,something is wrong!Please try again later!']);
		}
	
	}
}
