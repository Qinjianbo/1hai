<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Car\Car;
use App\Models\Car\Rent;
use App\Models\City\City;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

/**
 * 首页控制情
 *
 *
 */
class IndexController extends Controller
{
    public function index(Request $request)
    {
        $rentTableName = (new Rent)->getTable();
        $carTableName = (new Car())->getTable();
        $top4 = Rent::leftJoin(
                $carTableName,
                $rentTableName.'.car_id',
                '=',
                $carTableName.'.id'
            )
            ->select(['car_id', 'price', 'name', 'car_photo_path'])
            ->where($carTableName.'.valid', 1)
            ->orderBy($rentTableName.'.created_at', 'desc')
            ->limit(4)->get();
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();

        return view(
            'Home.index',
                [
                    'top4' => $top4,
                    'carCount' => $carCount,
                    'shopCount' => $shopCount,
                    'cityCount' => $cityCount
                ]
        );
    }
}
