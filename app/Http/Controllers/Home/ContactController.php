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
class ContactController extends Controller
{
    public function index(Request $request)
    {
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();

        return view(
            'Home.contact',
            [
                'carCount'  => $carCount,
                'shopCount' => $shopCount,
                'cityCount' => $cityCount,
            ]
        );
    }
}
