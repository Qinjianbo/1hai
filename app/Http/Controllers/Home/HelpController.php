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
class HelpController extends Controller
{
    public function index(Request $request)
    {
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();

        return view(
            'Home.help',
                [
                    'carCount' => $carCount,
                    'shopCount' => $shopCount,
                    'cityCount' => $cityCount
                ]
        );
    }
}
