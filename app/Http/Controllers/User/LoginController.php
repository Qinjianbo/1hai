<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Logic\User\Login;
use Validator;

class LoginController extends Controller
{
	public function doLogin(Request $request)
	{
		if ($request->input('type') == 'email') {
			$rules = ['username' => 'required|email'];
		} elseif ($request->input('type') == 'mobile') {
			$rules = ['username' => 'required|digits:11'];
		} else {
			return collect(['err' => 'Please tell me your login type.Email or mobile']);
		}
		$rules['password'] = 'required|alpha_dash';
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return collect($validator->messages());
		}

		$loginLogic = new Login();
		return $loginLogic->doLogin($request);
	}
}
