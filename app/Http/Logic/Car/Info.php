<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Car as CarModel;
use App\Models\Car\Car;
use Illuminate\Http\Request;

class Info
{
    /**
     * 获取车辆信息（后台使用）
     *
     * @param Request $request
     * @return mixed
     */
    public function getCarForAdmin(Request $request)
    {
        return Car::paginate(20);
    }

    public function show($id)
    {
        return Car::where('id', $id)->first();
    }
}