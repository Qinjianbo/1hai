<?php
namespace App\Http\Logic\User;

use App\Models\User\User;
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
        $userModel->password = $request->input('password');
        $userModel->realname = $request->input('realname');
        $userModel->created_at = time();
        $userModel->updated_at = time();
        $userModel->enabled = 1;
        if ($userModel->save()) {
            return true;
        } else {
            return false;
        }
    }
}
