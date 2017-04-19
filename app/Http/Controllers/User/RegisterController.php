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
	 * doRegister 注册
	 *
	 * @param $request
	 *
	 * @return Collection
	 */
	public function doRegister(Request $request): Collection
	{
        $rules = ['username' => 'required|digits:11|unique:ihai_user,username'];
        $rules['password'] = 'required|alpha_dash';
        $rules['realname'] = 'required|string';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return collect($validator->messages());
        }
        $registorLogic = new Register();
        if ($registorLogic->doRegisterByMobile($request)) {
            return collect(['message' => '注册成功', 'errCode' => 0, 'data' => []]);
        } else {
            return collect(['message' => '注册失败', 'errCode' => 1, 'data' => []]);
        }
	}
}
