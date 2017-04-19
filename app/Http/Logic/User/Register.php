<?php
namespace App\Http\Logic\User;

use App\User;
use Illuminate\Http\Request;
use Collection;

class Register
{
    /**
     * 通过手机注册
     *
     * @param Request $request
     * @return bool
     */
	public function doRegisterByMobile(Request $request): bool
    {
        $userModel = new User();
        $userModel->username = $request->input('username');
        $userModel->password = md5($request->input('password'));
        $userModel->realname = $request->input('realname');
        if ($userModel->save()) {
            return true;
        } else {
            return false;
        }
    }
}
