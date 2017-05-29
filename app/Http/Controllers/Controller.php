<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Captcha;

class Controller extends BaseController
{
    public function getCaptcha()
    {
        return Captcha::create();
    }
    /**
     * 判断是否登录了
     *
     * @param Request $request
     * @return array|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function isLogin(Request $request)
    {
        if (!session('user') || !session('user')->isEmpty()) {
            if ($request->ajax()) {
                return ['errorCode' => 2, 'errorMsg' => '登录超时或没有登录，请登录'];
            } else {
                return redirect('/login');
            }
        }

    }
}
