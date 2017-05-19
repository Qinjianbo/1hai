<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Car\Car;
use App\Models\Car\Rent;
use App\Models\City\City;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

/**
 *
 *
 */
class CarController extends Controller
{
    public function index(Request $request)
    {
        $car = Car::find($request->get('car_id', 0));
        $rents = Rent::where('car_id', $request->get('car_id', 0))->get();
        $cities = collect();
        $shops = collect();
        if (!$rents->isEmpty()) {
            $cities = City::whereIn('id', $rents->pluck('city_id'))->get()->keyBy('id');
            $shops = Shop::whereIn('id', $rents->pluck('shop_id'))->get()->keyBy('id');
        }

        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();

        return view(
            'Home.car',
            [
                'car' => $car,
                'cities' => $cities,
                'shops' => $shops,
                'rents' => $rents,
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
            ]
        );
    }
}
