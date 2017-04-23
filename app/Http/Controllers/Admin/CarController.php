<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Brand;
use App\Http\Logic\Car\Info;
use App\Http\Logic\Car\Type;
use Illuminate\Http\Request;
use Illuminate\support\Collection;

class CarController extends Controller
{
    public function cars(Request $request)
    {
        $carInfo = (new Info())->getCarForAdmin($request);

        $brands = (new Brand())->getList($request)->keyBy('id');
        $type = (new Type())->getList($request)->keyBy('id');

        return view('Admin.car', ['cars' => $carInfo, 'brands' => $brands, 'type' => $type]);
    }

    public function show($id)
    {
        return (new Info())->show($id);
    }
}