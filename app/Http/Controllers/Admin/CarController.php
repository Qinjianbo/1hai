<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Brand;
use App\Http\Logic\Car\Info;
use App\Http\Logic\Car\Property;
use App\Http\Logic\Car\Type;
use Illuminate\Http\Request;
use Illuminate\support\Collection;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function cars(Request $request)
    {
        if ($request->get('all')) {
            $cars = (new Info())->getList($request);
            echo $cars;
            exit;
        }
        $carInfo = (new Info())->getCarForAdmin($request);

        $brands = (new Brand())->getList($request)->keyBy('id');
        $types = (new Type())->getList($request)->keyBy('id');

        return view('Admin.car', ['cars' => $carInfo, 'brands' => $brands, 'type' => $types]);
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
