<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Brand;
use App\Http\Logic\Car\Info;
use App\Http\Logic\Car\Property;
use App\Http\Logic\Car\Type;
use App\Models\Car\Car;
use App\Models\Car\Rent;
use App\Models\Order\Order;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\support\Collection;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function orders(Request $request)
    {
        $users = User::all()->keyBy('id');
        $orders = Order::orderBy('created_at','desc')->orderBy('status')->paginate(20);
        $rents = Rent::leftJoin(
            'wutao_car_info',
            'wutao_car_info.id',
            '=',
            'wutao_shop_car_city.car_id'
        )->leftJoin(
            'wutao_shop',
            'wutao_shop.id',
            '=',
            'wutao_shop_car_city.shop_id'
        )->whereIn('wutao_shop_car_city.id', $orders->pluck('rent_id'))
            ->select(['wutao_shop_car_city.id','price', 'name', 'shop_name'])
            ->get()
            ->keyBy('id');

        return view('Admin.order',['orders' => $orders, 'users' => $users, 'rents'=>$rents]);
    }

    public function changePayed(Request $request)
    {
        $result = Order::where('id', $request->get('id'))->update(['status'=>2]);
        if ($request !== false) {
            return 1;
        } else {
            return 0;
        }
    }

    public function finishOrder(Request $request)
    {
        $result = Order::where('id', $request->get('id'))->update(['status'=>4]);
        if ($request !== false) {
            return 1;
        } else {
            return 0;
        }
    }
}
