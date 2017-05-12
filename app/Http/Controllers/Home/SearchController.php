<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Car\Brand;
use App\Models\Car\Car;
use App\Models\Car\Rent;
use App\Models\Car\Type;
use App\Models\City\City;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

/**
 * 首页控制情
 *
 *
 */
class SearchController extends Controller
{
    public function index(Request $request)
    {
        $carCount = Car::where('valid', 1)->count();
        $shopCount = Shop::count();
        $cityCount = City::count();
        $types = Type::all();
        $brands = Brand::all();
        return view('Home.search',[
            'carCount'  => $carCount,
            'shopCount' => $shopCount,
            'cityCount' => $cityCount,
            'types'     => $types,
            'brands'    => $brands,
        ]);
    }
}
