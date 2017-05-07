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

        return view('Admin.shopCarCity', ['rents' => $rents, 'cars' => $cars, 'shops'=>$shops]);
    }

    public function show($id)
    {
        return (new Info())->show($id);
    }

    public function store(Request $request)
    {
        $car = collect($request->input())->only(['name', 'typeid', 'brandid', 'properties']);
        if ($request->hasFile('thumbnail')) {
            $car_photo_path = $request->file('thumbnail')->store('car_photo', 'public');
            if ($car_photo_path) {
                $car->put('car_photo_path', '/storage/'.$car_photo_path);
            }
        }
        $result = (new Info())->store($car, $request->get('id'));

        if ($result) {
            echo "<script>parent.callback('添加或更新成功')</script>";
        } else {
            echo "<script>parent.callback('添加或更新失败')</script>";
        }
    }

    public function changeValid(Request $request)
    {
        return (new Info())->store(collect($request->input())
            ->only(['valid']), $request->get('id'));
    }
}
