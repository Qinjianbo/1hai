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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $defaultAdminUser = config('app.defaultAdminUser');
        $defaultAdminPass = config('app.defaultAdminPass');
        if ($username == $defaultAdminUser && $password == $defaultAdminPass) {
            session(['username' => $username]);
            return redirect('/admin/cars');
        } else {
            return view('Admin.login', ['message' => '用户名或密码错误']);
        }
    }
}
