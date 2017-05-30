<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Message;
use App\Models\Car\Car;
use App\Models\Order\Order;
use App\Models\City\City;
use App\Models\Shop\Shop;
use App\Models\User\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * 创建订单
     * @param Request $request
     * @return \Illuminate\Support\Collection|mixed
     */
    public function store(Request $request)
    {
        $this->isLogin($request);
        $user = User::select(['id', 'idcard'])->where('id', session('user')['id'])->first();
        if (!$user['idcard'] || strlen($user['idcard']) != 18) {
            return collect(['errorCode' => 3, 'errorMsg' => '请先前往个人中心将身份证号更改正确']);
        }
        $currentOrder = Order::select(['id'])->where('user_id', $user['id'])->whereIn('status',[1,2])->get();
        if (!$currentOrder->isEmpty()) {
            return collect(['errorCode' => 3, 'errorMsg' => '您有未完成订单，请完成后再来预订']);
        }
        $order['rent_id'] = $request->get('id');
        $order['user_id'] = $user['id'];
        $order['status'] = 1;
        $order['created_at'] = time();
        $order['updated_at'] = time();
        $order = Order::create($order);
        if ($order) {
            return ['errorCode' => 0, 'errorMsg' => '', 'data' => $order];
        } else {
            return ['errorCode' => 4, 'errorMsg' => '订单创建失败', 'data' => []];
        }
    }
}
