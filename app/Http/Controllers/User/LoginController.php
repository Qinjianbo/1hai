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
			return collect(['message' => $validator->messages(), 'errCode' => 1, 'data' => []]);
		}
		$loginLogic = new Login();
		$user = $loginLogic->doLogin($request);
		if (!$user->isEmpty()) {
            return collect(['message' => '登录成功', 'errCode' => 0, 'data' => $user]);
        } else {
            return collect(['message' => '用户名不存在或密码错误', 'errCode' => 1, 'data' => []]);
        }
	}
}
