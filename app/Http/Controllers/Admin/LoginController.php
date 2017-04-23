<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Collection;

class LoginController extends Controller
{
    /**
     * 后台登录
     *
     * @param Request $request
     */
	public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $defaultAdminUser = config('app.defaultAdminUser');
        $defaultAdminPass = config('app.defaultAdminPass');
        if ($username == $defaultAdminUser && $password == $defaultAdminPass) {
            echo '登录成功';
        } else {
            echo '登录失败';
        }
    }
}
