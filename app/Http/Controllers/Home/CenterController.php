<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Car\Car;
use App\Models\City\City;
use App\Models\Shop\Shop;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * 个人中心控制器
 *
 * Class CenterController
 * @package App\Http\Controllers\Home
 */
class CenterController extends Controller
{
    /**
     * 调用UserModel 根据用户id获取用户信息
     * 并将用户信息传递至模板
     *
     * @param Request $request
     * @param $uid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $uid)
    {
        $this->isLogin($request);
        $user = User::find($uid);

        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();

        return view(
            'Home.center',
            [
                'user' => $user,
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
                'personal'  => 'active',
                'password_hide' => 'hide',
                'order_hide' => 'hide',
            ]
        );
    }

    /**
     * 跳转更改密码界面
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function passwordIndex(Request $request)
    {
        $this->isLogin($request);
        $user = session('user');
        $uid = $user['id'];
        $user = User::find($uid);
        $this->isLogin($request);
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();
        return view(
            'Home.center',
            [
                'user' => $user,
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
                'password'  => 'active',
                'personal_hide' => 'hide',
                'order_hide' => 'hide',
            ]
        );
    }

    /**
     * 更改密码
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function changePwd(Request $request)
    {
        $this->isLogin($request);
        $uid = $request->get('id', 0);
        $oldpwd = $request->get('oldpwd', 0);
        $newpwd = $request->get('newpwd', 0);
        $secnewpwd = $request->get('secnewpwd', 0);
        if (strlen(strval($newpwd)) < 6) {
            return ['errorCode' => '1', 'errorMsg' => '新密码小于6位，请重新输入', 'data' => ''];
        }
        if ($newpwd != $secnewpwd) {
            return ['errorCode' => '1', 'errorMsg' => '两次新密码输入不一致，请重新输入', 'data' => ''];
        }
        $user = User::select('password')->where('id', $uid)->first();
        if ($oldpwd != $user['password']) {
            return ['errorCode' => '1', 'errorMsg' => '原密码输入错误，请重新输入', 'data' => ''];
        }
        if (User::where('id', $uid)->update(['password' => $newpwd]) !== false) {
            return ['errorCode' => '', 'errorMsg' => '密码更新成功', 'data' => ''];
        } else {
            return ['errorCode' => '1', 'errorMsg' => '密码更新失败', 'data' => ''];
        }
    }
}
