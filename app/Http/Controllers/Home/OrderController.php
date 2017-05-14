<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Message;
use App\Models\Car\Car;
use App\Models\City\City;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->session()->get('user');
        if (!$user || $user->isEmpty()) {
            return collect(['status' => 2, 'errorMsg' => '请先登录']);
        }
        if (!$user['idcard'] || !$user['cart_pic_path']) {
            return collect(['status' => 3, 'errorMsg' => '请先进行实名认证']);
        }
        $only = [
            'rent_id' => 'id',
        ];
        return (new Message())
            ->store(collect($request->input())
                ->only($only), $request->get('id'));
    }
}
