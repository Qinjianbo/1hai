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
        $rules = ['username' => 'required|digits:11'];
		$rules['password'] = 'required|alpha_dash';
		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return collect($validator->messages());
		}
		$loginLogic = new Login();
		return $loginLogic->doLogin($request);
	}
}
