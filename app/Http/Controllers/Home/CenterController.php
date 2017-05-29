<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Car\Car;
use App\Models\City\City;
use App\Models\Shop\Shop;
use App\Models\User\User;
use Illuminate\Http\Request;

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
     *
     */
    public function passwordIndex()
    {
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();
        return view(
            'Home.center',
            [
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
                'password'  => 'active',
                'personal_hide' => 'hide',
                'order_hide' => 'hide',
            ]
        );
    }
}
