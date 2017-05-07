<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\City\City;
use App\Http\Logic\Car\Info;
use App\Http\Logic\Car\Rent;
use App\Http\Logic\Shop\Shop;
use Illuminate\Http\Request;
use Illuminate\support\Collection;
use Illuminate\Support\Facades\Storage;

class ShopCarCityController extends Controller
{
    public function rents(Request $request)
    {
        $rents = (new Rent())->getRentsForAdmin($request);

        $cars = (new Info())->getList($request)->keyBy('id');
        $shops = (new Shop())->getList($request)->keyBy('id');
        $cities = (new City())->getList($request)->keyBy('id');

        return view('Admin.shopCarCity', ['rents' => $rents, 'cars' => $cars, 'shops'=>$shops, 'cities' => $cities]);
    }

    public function show($id)
    {
        $rent = (new Rent())->show($id);
        if ($rent) {
            $rent['car'] = (new Info())->show($rent['car_id']);
            $rent['shop'] = (new Shop())->show($rent['shop_id']);
            $rent['city'] = (new City())->show($rent['city_id']);
        }

        return $rent;
    }

    /**
     * 创建或更新租赁信息
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return (new Rent())
            ->store(collect($request->input())
                ->only(['shop_id', 'car_id', 'city_id', 'price']), $request->get('id'));
    }

    /**
     * 删除某租售信息
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        return (new Rent())->delete($id);
    }
}
