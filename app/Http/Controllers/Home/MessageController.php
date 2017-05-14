<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Message;
use App\Models\Car\Car;
use App\Models\City\City;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

/**
 * 留言控制情
 *
 *
 */
class MessageController extends Controller
{
    public function store(Request $request)
    {
        $only = [
            'mobile'   => 'mobile',
            'message'  => 'message',
            'realname' => 'realname',
            'eamil'    => 'email',
            'qq'       => 'qq',
            'wechat'   => 'wechat',
        ];
        return (new Message())
            ->store(collect($request->input())
                ->only($only), $request->get('id'));
    }

    public function top20(Request $request)
    {
        $top20 = \App\Models\User\Message::where('can_show',1)
            ->orderBy('created_at', 'desc')
            ->limit(20)
            ->get();
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();
        return view(
            'Home.message',
            [
                'top20'     => $top20,
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
            ]
        );
    }
}
