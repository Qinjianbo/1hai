<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * 退出登录控制器
 *
 * Class LogoutController
 * @package App\Http\Controllers\Admin
 *
 * @author Wutao
 */
class LogoutController extends Controller
{
    /**
     * 退出登录
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function doLogout(Request $request)
    {
        $request->session()->forget('username');
        return view('Admin.login', ['message' => '']);
    }
}